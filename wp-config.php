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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'arnouteveraert');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '=+a+hU+X>^1qY`)[NkP,89B,*Rt0Z0k@)/,}z0e{1*Z{uS7?^=5W7|14k#-UL$wm');
define('SECURE_AUTH_KEY',  'J36|wsLIo,A4|.!Rnr9sDL^QNR ^BSBxxT(lgxR{`W /Nma=_<I&L^o`h-ID(+ZN');
define('LOGGED_IN_KEY',    '}WBvJ^SCV|X~tS]3<|5=J/v[xd 65b,C_&gnUD89DZ+3Kx !4p&79De+tXRsu(N5');
define('NONCE_KEY',        'iB>hh<maloi3@TDrYWD6|uo{&Mk[BHF(>YT9]zGe^2aXyGL>Ku(i:(wGp-IQ-s-|');
define('AUTH_SALT',        '`P*+!rS9w~)RE[!P`d?S~yHC3^ZuiGUS$M~y+h~u:~>nv-j|}s?e^Wp_>Je~?v-|');
define('SECURE_AUTH_SALT', 'OQ{RSZ!_p*i-RQjPM2qnoOXY|}F5a#h1mA<4GtHhT@sj;81B4[7GRzya{&3s$e:>');
define('LOGGED_IN_SALT',   'xd?1D,b;lVjP[znu/uymYXoRRT1@65fMA_A2Q+GWY|J[7>AeuL>9SbvL7PkCZh-D');
define('NONCE_SALT',       'c26y_R3T wBXP(UG?,zW|tR42rx/+&|UqUj-+KoT5_MG)gUS4FQ~q^,*3K>~_?>x');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', 'nl_NL');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
