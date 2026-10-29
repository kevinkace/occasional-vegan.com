# Occasional Vegan

https://www.occasional-vegan.com

WordPress install, including WP source, themes, and local Docker.

The repository still contains WordPress core files for the existing DreamHost deployment.  
Local development runs the current upstream WordPress image instead of those checked-in core files:

- WordPress 7.1.3
- PHP 8.5 with Apache
- MySQL 8.4

## Start locally

Requires Docker Desktop with Compose and Node.js 22/npm. In PowerShell:

- Copy `.env.example` to `.env` and `.env.live.example` to `.env.live`, and update creds in Live.
- In Dreamhost: add your IP to the database's allowed remote connections.
- Run `nvm use`
- Run `npm install`.
- Run `npm run dev` to start WordPress and the local database.
- Run `npm run wp:create-admin` to create a local admin or reset PW for existing.
- Open <http://localhost:8080>.


## Sync live data to local

### DB
`npm run db:sync`

### Uploads
`npm run uploads:sync`

Configure the `LIVE_SFTP_*` values in `.env.live` first. The script verifies
the server host key using `LIVE_SFTP_HOST_KEY` (the SHA256 fingerprint shown by
`ssh-keygen -lf`). Retrieve a candidate fingerprint with
`ssh-keyscan -p 22 your-sftp-host | ssh-keygen -E sha256 -lf -` and verify it
with DreamHost before saving it. The script then downloads production uploads
over SFTP on port 22.
Existing same-name local files are overwritten; local-only files are kept.


## Notes

- To stop the stack and preserve its database, run `npm run stop`.
- Uses "Food Blog FSE" theme, and requires parent theme "Fresh Blog Lite".


## Backups

Uploads and MySql in Google Drive.
