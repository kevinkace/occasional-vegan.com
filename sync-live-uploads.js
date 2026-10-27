const SftpClient = require('ssh2-sftp-client');
const dotenv = require('dotenv');
const { mkdir, readFile } = require('node:fs/promises');
const path = require('node:path');
const { createInterface } = require('node:readline/promises');

const projectDirectory = __dirname;
const localUploadsDirectory = path.join(
  projectDirectory,
  'wordpress',
  'wp-content',
  'uploads',
);

async function readLiveEnvironment() {
  let contents;
  try {
    contents = await readFile(path.join(projectDirectory, '.env.live'), 'utf8');
  } catch (error) {
    if (error.code === 'ENOENT') {
      throw new Error('Missing .env.live. Copy .env.live.example and add the SFTP settings.');
    }
    throw error;
  }
  return dotenv.parse(contents);
}

function requiredSetting(environment, name) {
  const value = environment[name];
  if (!value) {
    throw new Error(`Missing or empty ${name} in .env.live.`);
  }
  return value;
}

async function confirmDownload(remoteUploadsPath) {
  console.log(`Remote uploads directory: ${remoteUploadsPath}`);
  console.log(`Local destination: ${localUploadsDirectory}`);
  console.log('Existing local files with matching names will be overwritten; local-only files will be kept.');

  const readline = createInterface({ input: process.stdin, output: process.stdout });
  try {
    return (await readline.question('Type DOWNLOAD to continue: ')).trim() === 'DOWNLOAD';
  } finally {
    readline.close();
  }
}

function expectedHostKeyHash(fingerprint) {
  const encodedFingerprint = fingerprint.replace(/^SHA256:/i, '').replace(/=+$/, '');
  const hash = Buffer.from(encodedFingerprint, 'base64');
  if (
    hash.length !== 32
    || hash.toString('base64').replace(/=+$/, '') !== encodedFingerprint
  ) {
    throw new Error('LIVE_SFTP_HOST_KEY in .env.live must be a valid SHA256 host-key fingerprint.');
  }
  return hash.toString('hex');
}

async function main() {
  const environment = await readLiveEnvironment();
  const port = Number(environment.LIVE_SFTP_PORT || 22);
  if (!Number.isInteger(port) || port < 1 || port > 65535) {
    throw new Error('LIVE_SFTP_PORT in .env.live must be a valid TCP port.');
  }

  const host = requiredSetting(environment, 'LIVE_SFTP_HOST');
  const user = requiredSetting(environment, 'LIVE_SFTP_USER');
  const password = requiredSetting(environment, 'LIVE_SFTP_PASSWORD');
  const hostKeyHash = expectedHostKeyHash(requiredSetting(environment, 'LIVE_SFTP_HOST_KEY'));
  const remoteUploadsPath = requiredSetting(environment, 'LIVE_SFTP_UPLOADS_PATH');

  if (!(await confirmDownload(remoteUploadsPath))) {
    console.log('Uploads download cancelled.');
    return;
  }

  const client = new SftpClient();
  try {
    await client.connect({
      host,
      port,
      username: user,
      password,
      hostHash: 'sha256',
      hostVerifier: (hostKey) => hostKey === hostKeyHash,
    });
    await mkdir(localUploadsDirectory, { recursive: true });
    await client.downloadDir(remoteUploadsPath, localUploadsDirectory);
    console.log('Live uploads downloaded to the local WordPress uploads directory.');
  } finally {
    await client.end();
  }
}

main().catch((error) => {
  console.error(`Uploads download failed: ${error.message}`);
  process.exitCode = 1;
});
