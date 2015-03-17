<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'josh');

/** MySQL database password */
define('DB_PASSWORD', '10seven86');

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
define('AUTH_KEY',         ';|XN):t8oHQ.T~|;0=S<Z5=vU(zF.Ef}@1goXn#(_Z($d/UZED}g&x Kl9%D$56j');
define('SECURE_AUTH_KEY',  'd+f QF|t#q1clY(Hr&?s,~`8!&q4WQVP=Nr0g!~Pb^COy(aO+uCZt_gojs+t55?q');
define('LOGGED_IN_KEY',    '@hfoO-M>`GoQnUUiTw:X=-g|Uij$%5-f8FS26NP+]fRoG>aK}9w)#Kab+;ewMdF.');
define('NONCE_KEY',        'BGeLfO!HDL`z%I+G#&0SONW>{5w+!kTGMd8-WvxG^ra:QU+3/RY0g[S+U:k&a{L9');
define('AUTH_SALT',        '^Jz#l}.)#2<I]kQ[Uvv<wj z:fk-?L,XQq{JM<>Do=3CY+Vu?s+TONMYas?6a929');
define('SECURE_AUTH_SALT', 'Sj!d/@a#Q<5:R|f3!6~P-{r}5FhlY7,tw@Q+r:!/ODe|oWfvDk^?A*BI~LFO ybJ');
define('LOGGED_IN_SALT',   '<zQqqYclU9px8XAgN)h=$FaCE?Zg[VFo5+yz*-Oh1qisz7!P}o)7Y^rTbI(s(Y5E');
define('NONCE_SALT',       'Zgs@aM6A*,57#K(p|BjeIcG@@[U~B-nqlhKtg%0GnPaOv+Gd/XgW*5}=f)mw!,5/');

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
