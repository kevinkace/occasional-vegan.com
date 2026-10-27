<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

if ( file_exists( __DIR__ . '/secrets.php' ) ) {
    require_once __DIR__ . '/secrets.php';
} else {
    die( 'No secrets file found. Please add secrets.php.' );
}

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
// define('AUTH_KEY',         'T2~@6nC;_Tg66NNW0HK1$"NG@XP6SWi43;2/F#SeICFU^vB!bCnoCs(PC;a#?(wj');
// define('SECURE_AUTH_KEY',  'c$ZL6(7DFyH0T!u(5jve0%iLnFY`Xua$e4R|^49O_(u*M_7a/(b#goGx:%RzuoX~');
// define('LOGGED_IN_KEY',    'Z~(E_5pF1Ub1;XJ9u?&$:PJv?l4/jFd`%:RPWS$3`0`X@g9q:8IV%c^1U#h`QAJ!');
// define('NONCE_KEY',        'o?mR:;ppNn|df3:lkT1mrf5fy64A7B$e5CjBSR)E8STm(%ELl^JKP6r$g+B8;";Z');
// define('AUTH_SALT',        'A)N4#ERfsBBh*eX8!F%S9w^9$;PoUhmFbF_mj/UoE:8T@$f"T:~^ob~OfKewDDW?');
// define('SECURE_AUTH_SALT', '/OgDiPIu7bnkEwM)e%%Vz%pohl$G9&5kbeYB/("`)_cPY"XXYk9NpXxQ~e$3a+qg');
// define('LOGGED_IN_SALT',   'M14+/jLJ5CcUvnEnyr@u?S4GQiZCtLKOBpfF|TuI)LftuFmKt_p&8/u6;#rX7x9/');
// define('NONCE_SALT',       'OmrlR;HSnJreHY9CElz$+g*4)eohDUie3W(SE|0_6r@WEwe0K$ND+cwHE9HWNzob');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_w4xbay_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
// define('WP_POST_REVISIONS',  10);
define('WP_POST_REVISIONS', false );

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', true);

/**
 * Removing this could cause issues with your experience in the DreamHost panel
 */

if (preg_match("/^(.*)\.dream\.website$/", $_SERVER['HTTP_HOST'])) {
        $proto = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https" : "http";
        define('WP_SITEURL', $proto . '://' . $_SERVER['HTTP_HOST']);
        define('WP_HOME',    $proto . '://' . $_SERVER['HTTP_HOST']);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
