const mysql = require('mysql2');
const dotenv = require('dotenv');
const bcrypt = require('bcryptjs');
const { createHmac } = require('node:crypto');
const { readFile } = require('node:fs/promises');
const path = require('node:path');
const { createInterface } = require('node:readline/promises');
const { StringDecoder } = require('node:string_decoder');

const projectDirectory = __dirname;

async function readLocalEnvironment() {
  let contents;
  try {
    contents = await readFile(path.join(projectDirectory, '.env'), 'utf8');
  } catch (error) {
    if (error.code === 'ENOENT') {
      throw new Error('Missing .env. Copy .env.example and start the local database first.');
    }
    throw error;
  }

  return dotenv.parse(contents);
}

function requiredSetting(environment, name) {
  if (!environment[name]) {
    throw new Error(`Missing or empty ${name} in .env.`);
  }
  return environment[name];
}

function query(connection, sql, values = []) {
  return connection.promise().query(sql, values).then(([rows]) => rows);
}

async function prompt(question) {
  const readline = createInterface({ input: process.stdin, output: process.stdout });
  try {
    return (await readline.question(question)).trim();
  } finally {
    readline.close();
    process.stdin.pause();
  }
}

async function promptForPassword() {
  if (!process.stdin.isTTY || typeof process.stdin.setRawMode !== 'function') {
    throw new Error('A terminal is required to securely enter the local WordPress password.');
  }

  process.stdout.write('Password (input hidden): ');
  process.stdin.setRawMode(true);
  process.stdin.resume();
  let password = '';
  const decoder = new StringDecoder('utf8');

  try {
    while (true) {
      const chunk = await new Promise((resolve) => {
        process.stdin.once('data', resolve);
      });
      for (const character of decoder.write(chunk)) {
        if (character === '\u0003') {
          throw new Error('Password entry cancelled.');
        }
        if (character === '\r' || character === '\n') {
          process.stdout.write('\n');
          return password;
        }
        if (character === '\u0008' || character === '\u007f') {
          password = password.slice(0, -1);
        } else if (character >= ' ') {
          password += character;
        }
      }
    }
  } finally {
    process.stdin.setRawMode(false);
    process.stdin.pause();
  }
}

async function createLocalAdmin(connection, prefix) {
  const tableNames = [`${prefix}users`, `${prefix}usermeta`];
  const [{ tableCount }] = await query(
    connection,
    'SELECT COUNT(*) AS tableCount FROM information_schema.tables WHERE table_schema = DATABASE() AND table_name IN (?, ?)',
    tableNames,
  );
  if (Number(tableCount) !== tableNames.length) {
    throw new Error('Local WordPress user tables were not found. Sync the database before creating an admin.');
  }

  console.log('Create or reset a local WordPress administrator account.');
  const username = await prompt('Username: ');
  if (!/^[A-Za-z0-9_.-]{1,60}$/.test(username)) {
    throw new Error('Username must be 1-60 characters using letters, numbers, dots, underscores, or hyphens.');
  }

  const usersTable = `${prefix}users`;
  const usermetaTable = `${prefix}usermeta`;
  const existingUser = await query(
    connection,
    'SELECT ID FROM ?? WHERE user_login = ? LIMIT 1',
    [usersTable, username],
  );

  let email;
  if (existingUser.length === 0) {
    email = await prompt('Email: ');
    if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
      throw new Error('Enter a valid email address.');
    }
    const existingEmail = await query(
      connection,
      'SELECT ID FROM ?? WHERE user_email = ? LIMIT 1',
      [usersTable, email],
    );
    if (existingEmail.length > 0) {
      throw new Error('That email already belongs to another account.');
    }
  }

  const password = await promptForPassword();
  const passwordToHash = createHmac('sha384', 'wp-sha384')
    .update(password.trim())
    .digest('base64');
  const passwordHash = `$wp${await bcrypt.hash(passwordToHash, 10)}`;

  await query(connection, 'START TRANSACTION');
  try {
    if (existingUser.length > 0) {
      await query(
        connection,
        'UPDATE ?? SET user_pass = ? WHERE ID = ?',
        [usersTable, passwordHash, existingUser[0].ID],
      );
      await query(connection, 'COMMIT');
      console.log(`Reset password for local WordPress user "${username}".`);
      return;
    }

    const result = await query(
      connection,
      'INSERT INTO ?? (user_login, user_pass, user_nicename, user_email, user_registered, user_status, display_name) VALUES (?, ?, ?, ?, NOW(), 0, ?)',
      [usersTable, username, passwordHash, username, email, username],
    );
    await query(
      connection,
      'INSERT INTO ?? (user_id, meta_key, meta_value) VALUES ?',
      [
        usermetaTable,
        [
          [result.insertId, `${prefix}capabilities`, 'a:1:{s:13:"administrator";b:1;}'],
          [result.insertId, `${prefix}user_level`, '10'],
        ],
      ],
    );
    await query(connection, 'COMMIT');
  } catch (error) {
    await query(connection, 'ROLLBACK');
    throw error;
  }

  console.log(`Created local WordPress administrator "${username}".`);
}

async function main() {
  const environment = await readLocalEnvironment();
  const prefix = environment.WP_TABLE_PREFIX || 'wp_w4xbay_';
  if (!/^[A-Za-z0-9_]+$/.test(prefix)) {
    throw new Error('WP_TABLE_PREFIX must contain only letters, numbers, and underscores.');
  }

  const port = Number(environment.MYSQL_PORT || 3307);
  if (!Number.isInteger(port) || port < 1 || port > 65535) {
    throw new Error('MYSQL_PORT in .env must be a valid TCP port.');
  }

  const connection = mysql.createConnection({
    host: '127.0.0.1',
    port,
    user: requiredSetting(environment, 'MYSQL_USER'),
    password: requiredSetting(environment, 'MYSQL_PASSWORD'),
    database: requiredSetting(environment, 'MYSQL_DATABASE'),
  });

  let connected = false;
  try {
    await new Promise((resolve, reject) => {
      connection.connect((error) => {
        if (error) {
          connection.destroy();
          reject(error);
        } else {
          connected = true;
          resolve();
        }
      });
    });
    await createLocalAdmin(connection, prefix);
  } finally {
    if (connected) {
      await connection.promise().end();
    }
  }
}

main().catch((error) => {
  console.error(`Local admin creation failed: ${error.message}`);
  process.exitCode = 1;
});
