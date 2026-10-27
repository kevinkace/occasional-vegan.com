const mysql = require('mysql2');
const dotenv = require('dotenv');
const { readFile } = require('node:fs/promises');
const path = require('node:path');
const { createInterface } = require('node:readline/promises');

const projectDirectory = __dirname;
const batchSize = 250;

async function readEnvironment(filePath, label) {
  let contents;
  try {
    contents = await readFile(filePath, 'utf8');
  } catch (error) {
    if (error.code === 'ENOENT') {
      throw new Error(`Missing ${label}. Copy its example file and add the required settings.`);
    }
    throw error;
  }
  return dotenv.parse(contents);
}

function requiredSetting(environment, name, fileName) {
  const value = environment[name];
  if (!value) {
    throw new Error(`Missing or empty ${name} in ${fileName}.`);
  }
  return value;
}

function connect(options) {
  const connection = mysql.createConnection(options);
  return new Promise((resolve, reject) => {
    connection.connect((error) => {
      if (error) {
        connection.destroy();
        reject(error);
      } else {
        resolve(connection);
      }
    });
  });
}

function query(connection, sql, values = []) {
  return connection.promise().query(sql, values).then(([rows]) => rows);
}

async function confirmSync(tableCount, remotePrefix, localPrefix) {
  console.log(`Found ${tableCount} live tables with the ${remotePrefix} prefix.`);
  console.log(`They will be synced using the local ${localPrefix} prefix.`);
  console.log('Matching tables in the local database will be replaced.');
  console.log('The live database is read-only for this operation.');

  const readline = createInterface({ input: process.stdin, output: process.stdout });
  try {
    return (await readline.question('Type SYNC to continue: ')).trim() === 'SYNC';
  } finally {
    readline.close();
  }
}

async function copyTable(
  remoteConnection,
  localConnection,
  sourceTable,
  targetTable,
  remotePrefix,
  localPrefix,
) {
  const definitions = await query(remoteConnection, 'SHOW CREATE TABLE ??', [sourceTable]);
  const sourceIdentifier = `CREATE TABLE \`${sourceTable}\``;
  const targetIdentifier = `CREATE TABLE \`${targetTable}\``;
  const createStatement = definitions[0]['Create Table'].replace(
    sourceIdentifier,
    targetIdentifier,
  );

  await query(localConnection, 'DROP TABLE IF EXISTS ??', [targetTable]);
  await query(localConnection, createStatement);

  const rowStream = remoteConnection.query('SELECT * FROM ??', [sourceTable])
    .stream({ highWaterMark: batchSize });
  let batch = [];
  let copiedRows = 0;

  const insertBatch = async () => {
    if (batch.length === 0) {
      return;
    }
    if (sourceTable === `${remotePrefix}usermeta`) {
      batch = batch.map((row) => ({
        ...row,
        meta_key: typeof row.meta_key === 'string' && row.meta_key.startsWith(remotePrefix)
          ? `${localPrefix}${row.meta_key.slice(remotePrefix.length)}`
          : row.meta_key,
      }));
    } else if (sourceTable === `${remotePrefix}options`) {
      batch = batch.map((row) => ({
        ...row,
        option_name: typeof row.option_name === 'string' && row.option_name.startsWith(remotePrefix)
          ? `${localPrefix}${row.option_name.slice(remotePrefix.length)}`
          : row.option_name,
      }));
    }
    const columns = Object.keys(batch[0]);
    await query(
      localConnection,
      `INSERT INTO ?? (${columns.map(() => '??').join(', ')}) VALUES ?`,
      [targetTable, ...columns, batch.map((row) => columns.map((column) => row[column]))],
    );
    copiedRows += batch.length;
    batch = [];
  };

  for await (const row of rowStream) {
    batch.push(row);
    if (batch.length >= batchSize) {
      await insertBatch();
    }
  }
  await insertBatch();

  console.log(`Synced ${sourceTable} -> ${targetTable} (${copiedRows} rows).`);
}

async function main() {
  const localEnvironment = await readEnvironment(
    path.join(projectDirectory, '.env'),
    '.env',
  );
  const liveEnvironment = await readEnvironment(
    path.join(projectDirectory, '.env.live'),
    '.env.live',
  );

  const remoteOptions = {
    host: requiredSetting(liveEnvironment, 'LIVE_DB_HOST', '.env.live'),
    port: Number(requiredSetting(liveEnvironment, 'LIVE_DB_PORT', '.env.live')),
    user: requiredSetting(liveEnvironment, 'LIVE_DB_USER', '.env.live'),
    password: requiredSetting(liveEnvironment, 'LIVE_DB_PASSWORD', '.env.live'),
    database: requiredSetting(liveEnvironment, 'LIVE_DB_NAME', '.env.live'),
    supportBigNumbers: true,
    bigNumberStrings: true,
  };
  const remotePrefix = requiredSetting(liveEnvironment, 'LIVE_DB_TABLE_PREFIX', '.env.live');
  const localPrefix = localEnvironment.WP_TABLE_PREFIX || 'wp_w4xbay_';
  const localOptions = {
    host: '127.0.0.1',
    port: Number(localEnvironment.MYSQL_PORT || 3307),
    user: requiredSetting(localEnvironment, 'MYSQL_USER', '.env'),
    password: requiredSetting(localEnvironment, 'MYSQL_PASSWORD', '.env'),
    database: requiredSetting(localEnvironment, 'MYSQL_DATABASE', '.env'),
    supportBigNumbers: true,
    bigNumberStrings: true,
  };

  for (const [setting, prefix] of [
    ['LIVE_DB_TABLE_PREFIX', remotePrefix],
    ['WP_TABLE_PREFIX', localPrefix],
  ]) {
    if (!/^[A-Za-z0-9_]+$/.test(prefix)) {
      throw new Error(`${setting} must contain only letters, numbers, and underscores.`);
    }
  }

  if (!Number.isInteger(remoteOptions.port) || remoteOptions.port < 1 || remoteOptions.port > 65535) {
    throw new Error('LIVE_DB_PORT in .env.live must be a valid TCP port.');
  }
  if (!Number.isInteger(localOptions.port) || localOptions.port < 1 || localOptions.port > 65535) {
    throw new Error('MYSQL_PORT in .env must be a valid TCP port.');
  }

  let remoteConnection;
  let localConnection;
  try {
    remoteConnection = await connect(remoteOptions);
    await query(remoteConnection, 'START TRANSACTION WITH CONSISTENT SNAPSHOT');
    const tables = (await query(remoteConnection, 'SHOW FULL TABLES'))
      .map((row) => Object.values(row))
      .filter((row) => row[1] === 'BASE TABLE' && row[0].startsWith(remotePrefix))
      .map((row) => row[0]);

    if (tables.length === 0) {
      throw new Error(`No tables with the expected ${remotePrefix} prefix found; nothing was imported.`);
    }
    if (!(await confirmSync(tables.length, remotePrefix, localPrefix))) {
      console.log('Sync cancelled.');
      return;
    }

    localConnection = await connect(localOptions);
    const [{ sqlMode }] = await query(
      localConnection,
      'SELECT @@SESSION.sql_mode AS sqlMode',
    );
    const compatibleSqlMode = sqlMode
      .split(',')
      .filter((mode) => ![
        'STRICT_TRANS_TABLES',
        'STRICT_ALL_TABLES',
        'NO_ZERO_DATE',
        'NO_ZERO_IN_DATE',
      ].includes(mode))
      .join(',');
    await query(localConnection, 'SET SESSION sql_mode = ?', [compatibleSqlMode]);

    for (const table of tables) {
      const targetTable = `${localPrefix}${table.slice(remotePrefix.length)}`;
      await copyTable(
        remoteConnection,
        localConnection,
        table,
        targetTable,
        remotePrefix,
        localPrefix,
      );
    }

    console.log('Live database tables imported into the local database.');
  } finally {
    try {
      if (localConnection) {
        await localConnection.promise().end();
      }
    } finally {
      if (remoteConnection) {
        await remoteConnection.promise().end();
      }
    }
  }
}

main().catch((error) => {
  console.error(`Database sync failed: ${error.message}`);
  process.exitCode = 1;
});
