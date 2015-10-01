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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'CduJ8037');

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
define('AUTH_KEY',         'F.x9MT?5h~ #ZH#g3r<}M8K++65]?0U[~kB>,Yg(9>sVZf;WeuQaxA9llEWzhMIc');
define('SECURE_AUTH_KEY',  'g6[FKB(jERat{mUU?0tCp:yml`WX[LjYaKXTcE81|taIj+QMRkwmC& |b)k#@Q3T');
define('LOGGED_IN_KEY',    'tyX~|k^SXKHVi-%[$pF>eHUuvJ%T IM) nI.1RqlSjAdNG~.]5|wbCwd/{9p0u~_');
define('NONCE_KEY',        's69r#6H<~ !/%ap2A^O*W2&z{y19/A+^k{3.QU6&fD-;i+)-cA%.WbZe#{cy$7$a');
define('AUTH_SALT',        'ym%+,aZ2<b8s+(CNTZM))U0lX?2Q7#FfguD*I@(jv&81l1u2wJZ@NyQQm4-gr1);');
define('SECURE_AUTH_SALT', '8|Q7n[O?AvX60dD|%ErFxAO&9ii@lkZ3Kc7Ko5WLAjIl-{3g}}Hc-Hty}J#>k(77');
define('LOGGED_IN_SALT',   '9ZM%I@z$qJ3-:hw s:)a3T%@|mG+c-=M`krd/%jKEXW>FU>>8[m8AHJ@En*)-DqL');
define('NONCE_SALT',       'p9G}XfY]<J*mDfnbcl?Pt;@7o:X%Ln%nYQ(-?Nys(z(O4Ut!:Y|}:9LuP/X%cvU7');

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
