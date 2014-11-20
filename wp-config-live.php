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
define('DB_NAME', 'cl44-import');

/** MySQL database username */
define('DB_USER', 'cl44-import');

/** MySQL database password */
define('DB_PASSWORD', 'bwyFm83oT');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/** Install plugins locally */
define('FS_METHOD', 'direct');



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '~G)eOl?P3{@5V?2^T.oxa{tI+ud}O-7&@>rFpyZz:hyp)-e!Fe$.1Q`b@G>uw+.|');
define('SECURE_AUTH_KEY',  '0l|052Kj8mf,hD$XSpyeATDH@HJ7~9o}lcOjlv7[rZ_>.$=BcNzYOsmaIEd #g{z');
define('LOGGED_IN_KEY',    '_)xc>mokV|L`dzCf-l=#]1A`=NUo?(#;zuD>qc.m] j{R+75X~)A?y^1W8LSAQj/');
define('NONCE_KEY',        'd[PBDHI/o@+7N`3+<ccJ_v?k]>9+ikNJGsk^$*c_SRAl<#zbpsyh1phA9}vNg-#@');
define('AUTH_SALT',        'pILGmG}/5mvw]D0yn~CmK1E2h=S4)&-T.tl84P>_rOx0TeSto-9+AAo>S#Q:tI/2');
define('SECURE_AUTH_SALT', '+t1myIW61Hh8i5X:##j*jUQ:=]RcL)[_^=u!UhKX$|xy`D_c7D87@Rcga2HOgBre');
define('LOGGED_IN_SALT',   '0OCQIH.[T;AtT~H/.?WMTI^2DJP6g)G}#!|/~PYfW).42Eq!Bu *eaY&H&}N%q0>');
define('NONCE_SALT',       'Eg`j/8u<|=iLt3RB,Pc <yScs8#6{fRu&nETW;,?g}5heniWd3/vv>EFo*@V5|{)');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
