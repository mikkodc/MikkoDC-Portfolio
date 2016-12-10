<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'mikkodc_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'bma&1vW!@cRBy<1=}:_cTkOSL+e2ZsD`#0#9@3{XU])9){qM-UngX(Ad%#0*/cx4');
define('SECURE_AUTH_KEY',  'AKb,Z`9#kysho(]`/%ao7H:YQe$ZQM.MsI9i.q{FP>w0Ne|{* m?!f4+M-HX>ex2');
define('LOGGED_IN_KEY',    'Qrs+[Xg1imzSXq8$Z|DDm^VW6^.uJlablkv]VNaQ5pGc7j4yIDB197,DF3J*VQbo');
define('NONCE_KEY',        'IBEQ:PF-A~IRoYEt~q:HS@>wYTfRc-CUg|,?e&#vA4UZ>eIGcuJdhB*]N,zbRpMi');
define('AUTH_SALT',        ')>k5z$7bV#*k!sdpw;/mTQ/OPK6RA?!S`&[ZioGd8r62;F4a)g7[E^/9}4*7^T5!');
define('SECURE_AUTH_SALT', 'o#rJv)2w(YIhoCGk6|cYh2uIE`|?xrWR6.>U`p~[T]-ghj@`|u<0s F,##;;}L,t');
define('LOGGED_IN_SALT',   'l?-1[zAeb$()F6AWuD8K`AKk~[2~K%^$.t.9gJ{.ts#tRF#_?4L-STOfmko?O0<g');
define('NONCE_SALT',       'g|7SBSaB6TG=w4 pa@![YH:`HR#+w[,FcqC@UD|l+f*h;E;HjUX#L,t9o(!Fe!h+');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
