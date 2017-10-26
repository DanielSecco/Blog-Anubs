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
define('DB_NAME', 'wordpressblog');

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
define('AUTH_KEY',         'A YYH|HM<&k@2#v:;MSNgVgg{d_E,:Nf{0FiV&9V0qvu~Z;jM&#O)cCJX8}p&I-B');
define('SECURE_AUTH_KEY',  'h^1mepRk$MYM8zk2wq=F1zyiL<ZUj,ps{*7b6h 0FLVKd080H5ekz1;?FyT+93];');
define('LOGGED_IN_KEY',    '?LozIIg24*l,^VrXb4- waz$AcvGN!i=.tl,aBJLsAO-:QLs({@}){Na<7$&%L(l');
define('NONCE_KEY',        '_j>z[1lT:~rLr}**aI%^R#.J|X%uHsZ>B-,a|s%9c!znFtmrL~d!l)kZg>:IZ441');
define('AUTH_SALT',        'oj,5Ca1~av.C7@.sBSo/.?8f >ON+kerH*gP^zed T.^]NB/P]x~7S9$1NhFw4PO');
define('SECURE_AUTH_SALT', '(|{S_;L-Wq@|*E-BQMv%}7@F{~`n#?y^Uy+duLrs>v`ZHe7K6EPEMptL%^Q+GE? ');
define('LOGGED_IN_SALT',   'zf4vYA9Yl1t[_DZS 9vo(j7RWdufn#/U`tgBy WjyLrubH<W0O <UNOrYE 8V.DG');
define('NONCE_SALT',       '?#*QDfp{;xJfyO=>n:YB(/<?9=Goag%O/z;g1@TxRV~ZJ:5vSio/Lt^C#N#o-fP:');

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
