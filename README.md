# Occasional Vegan WordPress

The repository still contains WordPress core files for the existing DreamHost
deployment. Local development runs the current upstream WordPress image instead
of those checked-in core files:

- WordPress 7.1.3
- PHP 8.5 with Apache
- MySQL 8.4

## Start locally

Requires Docker Desktop with Compose and Node.js 22/npm. In PowerShell:

- Copy `.env.example` to `.env` and `.env.live.example` to `.env.live`.
- Set read-only `.env.live` credentials and `LIVE_DB_TABLE_PREFIX` to the
  exact source prefix, including its trailing underscore when present.
- Set `WP_TABLE_PREFIX` in `.env` to the prefix used by this local site
  (defaults to `wp_w4xbay_`). Include the trailing underscore.
- In Dreamhost: add your IP to the database's allowed remote connections.
- Run `nvm use`
- Run `npm install`.
- Run `npm run dev` to start WordPress and the local database.
- Sync live DB to local `npm run db:sync`.
- Run `npm run wp:create-admin` to create a local administrator or reset the
  password for an existing username.
- Open <http://localhost:8080>.

To stop the stack and preserve its database, run `npm run stop`.

WordPress files are under `wordpress/`; update the production document root
before deploying this layout to DreamHost.

Uses "Food Blog FSE" theme, and requires parent theme "Fresh Blog Lite".
