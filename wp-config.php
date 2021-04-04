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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'psdwpto' );

/** MySQL database username */
define( 'DB_USER', 'psdwpto' );

/** MySQL database password */
define( 'DB_PASSWORD', '344qaz741F' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Wq:[ O|B!/2T83?Y~A`hmEdX=E` e%$Xz$lQAVN[k^|6JL:~>0yzbvdM,z=xz+-[' );
define( 'SECURE_AUTH_KEY',  '#_Fm-W5}*X0x|b#=U?/MadPm;s/(?|IoM#|f3>;0EED2M99N%-da+ry!ze0iVB@6' );
define( 'LOGGED_IN_KEY',    'gbyq(p8qm#ynI- `.mQOfuh gY7];./c[-moM$!usr%JB;($[>#10cQ)HxgagHP8' );
define( 'NONCE_KEY',        '(ajQSe}wvECX_PzM$qhYMtMDzJXY>NASM7bN2Um_!t(dc!Zz*82sADyKilS 0=lF' );
define( 'AUTH_SALT',        'M`b1MZ*<HHA2dR?.Y&vi{mk2WCh2F0h8H^A<X&M>RcK`in{#<ZJ7uJR!r:`w#(v3' );
define( 'SECURE_AUTH_SALT', 'DD8]f@w^MhN>oIodC,od$(AS:-*6kgqcG03<M+Nz7FBOT]BeIW/?*CV1~^J_q5o#' );
define( 'LOGGED_IN_SALT',   '=]jO:.ACLta~;(z1r&arwGWz}%iISzS7I}8PC[>5DNW;Nxy(7U1@k1.j2Khg#)s4' );
define( 'NONCE_SALT',       'G?bmPQVhgf|8TB`@G{KA{h(qt/Jip$beT9b[*WSzAR)GwLWwV2b $W^xzF>g=bE=' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
