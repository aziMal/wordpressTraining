<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'mywp_db');

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
define('AUTH_KEY',         'Ie^#E$Q~s>2FD-jM-c_/e|SkOfnxL=H(xU@#z+_b<e=E@Pqq@|h#YlkP^h5DJ:jT');
define('SECURE_AUTH_KEY',  'QcU1s~9E+`o!KbgE42Y|Up_+Bl`!xsPIBfW$t<q&sfW4CqbzTl?$)|RP~CC-+OH)');
define('LOGGED_IN_KEY',    '!_L6sPyr:9C^z*j>3A4cWY ,bcCk,]IyAOby8 RiS%uFZr=oefC@jtKtie/G4?C)');
define('NONCE_KEY',        'C?4=[?PX%/O`uhs`z|!9plA?qqVCM$7tU-68,|;)0i[_Qx-@&wAs_)AN6N5:]zma');
define('AUTH_SALT',        '[]a6`j,**>d&:>/N=ejgoNvZ&WpJQ+g =u|!>S%faEuzMUlzLiU:RNW:q.m=]HJ)');
define('SECURE_AUTH_SALT', '*IB)jA *)`Cv6^%8`lTF*N(pjY8t,WV}r<KquyevgX50v.  {xg,q^}/1?h(#PG/');
define('LOGGED_IN_SALT',   'u[b`R2Ybr1u[Rf)n0:)5`$n<oNU9kfBq>xr.P)1)c01ggV.lW6cF=Nf@w|h(f]~d');
define('NONCE_SALT',       'f6PafIyVN7x153]Yxpjz3cvlmM=pX/$p:S4zv?aTPi&,}[j7Gssm+?Q<&kR}mcpA');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_tbl';

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
