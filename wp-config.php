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
define('DB_NAME', 'ppg_sigc');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         '8K+}rX|o?e|nr>ra1FGV,b$?Yb4 :<K,8<J@06bHSWXVG[X#yt1N#F8p3 V+dumQ');
define('SECURE_AUTH_KEY',  'ov4u3qehxWf3:=RnA+|(j1Iajn}f@fsODHga$Wh]wE#*z*6?U._=fyrA/eb@Zog=');
define('LOGGED_IN_KEY',    'D?3%3J@$8{y!Y7cdVw__:1unuM],f.~Y3[ZD7wa+?MGe3W;K^tGCOi$0;$%v;g[]');
define('NONCE_KEY',        '_P2WB?m@G,,K`@(s+zAJkqIx*%W9g.1H.,mrbl)gRM&Z{eS]o$h}<st1MJ:M)_v>');
define('AUTH_SALT',        'RlJ.7]zN5grk{K},m@3tuU0YJnBcMA`y0-hm_B+OF;k:(8NN`ZJynF%y&5m/kG-<');
define('SECURE_AUTH_SALT', 'agQ)#rM-.aGXQ#tx#yh}O/9D7P^)LbtI)0xg6A-^zi-YMtT<0;s!j]@|)>_~n`|n');
define('LOGGED_IN_SALT',   't8OW{8;PZt#H;(5~?0<}pW;dA2&Wgm4&<9B^$Ier:$kuY2/HlC}-Cy_gSEW;~b:t');
define('NONCE_SALT',       'k:84kPGl||Sm{Rt&(~fm24pcX>C0<Bn~%F$=.~1]qanh>dTC+IDoNnku.Pw^=/D+');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'msigc_';

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
