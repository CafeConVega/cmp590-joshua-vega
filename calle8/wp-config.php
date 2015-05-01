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
define('DB_NAME', 'calle8wp');

/** MySQL database username */
define('DB_USER', 'root');

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
define('AUTH_KEY',         'Fx/C*^.OZZl#G?Mwu1<M60A;&#lQ*F|Iln+ ]E40P^BQ5rF,OF[$:s;5onRQ#xVX');
define('SECURE_AUTH_KEY',  '2<2#3lLVf}h<0 ^?DUJKZiHb/ZK|![gr#;JG+_?Uo81nV=Jr&jT4^+]NLe>l*jD6');
define('LOGGED_IN_KEY',    'AQ1NTj<zy3dT4th%P2L=d4_D6vH=!2thL!Ch{skKc%SNh3oIQ @eOf1{-PbM.7Yj');
define('NONCE_KEY',        'P(m^/cp{2#w_Re(bXMX)(Z/-C,>^^:>f^z;_LV9&14m?4cy.FdWKle)u51nu}[_M');
define('AUTH_SALT',        'N{>ZO{Jt|mHa+VgpV&VFZbx/S;H C|Tk{(5mnH@<>q2tOi%<S `+xmG3UiWbCe`f');
define('SECURE_AUTH_SALT', 'c*.hUw_4fRZu=TvKP!ia`^L~%M30GSo,KU[3=<e2G|7<{:GD]4~w?KE(UJ^0|?K)');
define('LOGGED_IN_SALT',   '}-?.3%hr_L*2!J&.%-pAJCaWWBG]apfZy}/G$OGLXZ1}{9R@F2L mg>6c4#50-97');
define('NONCE_SALT',       'T^F*ajk9RB3m&)`!O3N^At~$wlnGL7NhrSiM5^RRE7In/Mk<c5YU-NaR8I*i9+?/');

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
