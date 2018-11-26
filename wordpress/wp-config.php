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
define('DB_NAME', 'wp_orange');

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
define('AUTH_KEY',         'bdfT/s?{}-WjJW]|v(fJ_w }nP/Io`k.5Oo^)*I!9jlMV?yU,v@2f]9+Lz: R.b$');
define('SECURE_AUTH_KEY',  'pa-]OQ8m(AWvS{b<1pMeu$esHR&lumGC)0_gM&%1e/3j-?5eYF+]XQ)+| 9!pGZX');
define('LOGGED_IN_KEY',    '[4Iv?;)4O#iC$AE5p wS+xA=W5I]}3SOs8o7k5i^xjfzuxAZ<M!}%,z/hLW.bu~~');
define('NONCE_KEY',        '<z]dh37|M(?TVK860?P;DK^1=W>%Z=<U<8/?N,$YNo<NO:]kCh^Yg-xwX>Gt(67y');
define('AUTH_SALT',        'OQi.OKO ty0fX3&3RbdU7Z{otHH9#X~A.Z37/#Yz(n=1BFBMNYuo)_!tOt0,5oh3');
define('SECURE_AUTH_SALT', '2{(Q-PqY24bkU Q,>t^F*w5vQ6%ZW(%XWQIq4*CcG|^_^,i$$#UO!vxL9|FpK7n`');
define('LOGGED_IN_SALT',   '`DA!EF)MGXBg;7!3FD[/7xoc!pw`W/=RBa0M0r5RCTlG]^N:8jqvnkKhmvep$SLy');
define('NONCE_SALT',       '`V=W%w_^`Y^HGE{Pn0?D,e^MX9{Uo;#Dp~]yY9;+Agjw~448P$#9DuGPZ6/7Ri(n');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
