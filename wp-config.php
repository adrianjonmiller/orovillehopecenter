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
define( 'DB_NAME', 'ruwh7syrt2po8cy' );

/** MySQL database username */
define( 'DB_USER', 'viry8ky5to1whug' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Zc8dH3p72%g}>7?i)+6T' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         'l:5^<7.VuRt&]=xC~)n{@=:+39aDrzmy;J:-R)h,,#)7^AK~-2*]OR?^hLxea|/-');
define('SECURE_AUTH_KEY',  ',ur%cW<ve4d0jR)ri-<fpi5xwqOp:u*|b>xHcLJ[Z+5J&h6m?f@<noZ>&Pci2ufi');
define('LOGGED_IN_KEY',    'hrReEz<j%Yv!Xc91P.j >6Ebd!1K% q5n$@_-%3ht+)q=n8A39%e@}&Xf3h{IP|U');
define('NONCE_KEY',        'L05TO/]]c[bO,sDOqv59kc_FwDoey;)2LRR>xV*-wGLvdsQ?X9rc6y 1fp688hn}');
define('AUTH_SALT',        'z6cZWQN/IEeO}4]>@xw43K<t,BNLl9x1m W?I1rLb{mY|Qt!upB/S&)L%3Y_>8Z]');
define('SECURE_AUTH_SALT', 'o82PpzakE1~*PrH-`cDix(}&j}fM0aCEb;GxB(_YaZipV,TSK(#/^N?fF)`&B?YU');
define('LOGGED_IN_SALT',   'T_UynotRAQTce/[ReRq_pjovO]|DXYsdI^:He[$w&sAZ~]OY=RWpyDT`och|,Tqw');
define('NONCE_SALT',       'HEHVg_CfqN)tN7BuKW.{7s!,<`sE@t>;OpJELSV&@3[kXQ~ntDVl[HF{;$SIuJ>{');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'june_11_2013_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
