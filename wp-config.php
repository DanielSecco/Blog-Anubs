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
define('DB_NAME', 'wordpress-blog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'e%j;j0KNxgTSN?8hGi4I]CxSIU/PMW,*awp,n=KG<=jT1/=lq9?8ezINmL=4eDk|');
define('SECURE_AUTH_KEY',  ')#oWP*yfKhhOWd=BeRQ{&M/8V3n:iT[a-|g1tSQUv}PzrLUNli5?;@qwUKckwjoD');
define('LOGGED_IN_KEY',    '>t,>M$fD1ga`Lv-~O?0JheF$a#i6DpN-USBV&bobxBfR4VN0`}yhxIluR?:jy6g<');
define('NONCE_KEY',        'ww;sQ${mI2:!C,OM[OupN.8[mQuL7qYF$%;{2NYIRIaMYPOw+5J{q`tC(p~AjE_1');
define('AUTH_SALT',        ' YI|%oc6;wMFgvP%8tCWu1~pvq&Ltlum!=OHiuv gaj9t~0b/$Pzq5f2Q7fnorJ~');
define('SECURE_AUTH_SALT', 'L.cN!8&JiB=>K:Y-QiPA/},&S~o@[/HHq2Ze*RBy7yH?uU+=m>MIn5L4#b:QX)IZ');
define('LOGGED_IN_SALT',   'E(l]sHLZ>o}NO}u;3Fh-%<!yb0:-UM9Q^)jX$pv,QzA3iv8`M:ZnA.sm 3k,i48f');
define('NONCE_SALT',       'Y`2~~9l=f9=?2AF)|^G-W.j5$edYC^N}b+@AC2P^;WhJUvg($al{_[-H7_iKuT-a');

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
