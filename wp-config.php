<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'portfolio' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'j3lTlCT9./R!o<1SHdxyoVJ#66OMJHR9OK]%k#3H?**a&~b[{NA2G:5#2]=8>vBh' );
define( 'SECURE_AUTH_KEY',  'J-;$q?pqAh`wKWob&qi-3#gaI6A1*^*]oj?Fo$v)V<+_?4N5-;TzYROeb%wxcRFO' );
define( 'LOGGED_IN_KEY',    '8;D)dXt!~{h,>]?o1$(U9*d1&eM=4yBTZj.CH.c$<f_GuUcCQr7/FJ/CR:wd7Uwp' );
define( 'NONCE_KEY',        'S.rBFx>JNsk_12nZrC}S1<./j_iTl_%<#~f~$47Gg.HP2aLmUh0fp>L]jms^rP8;' );
define( 'AUTH_SALT',        'K&0$7QSy7L/xnx#~L{z=%[^kqAM/?kZrRcK6>:0C+KrEh]a5^<L$e nph^HoUHHs' );
define( 'SECURE_AUTH_SALT', 'vQ_i@j9lgDPTNE!R>Y1y$ka`l(z8BL^a66Rjf)P6mN3dL|l/G62bimf[`Z11;,)?' );
define( 'LOGGED_IN_SALT',   'q1W]lyXtO-CLTc;2d.U%`nO6[U-UOl,60<3hYjMlFu~U;b->H{Fq  ffUOwCxJ`I' );
define( 'NONCE_SALT',       'Sw)6  #2gX^K,qBSrcUD`rz(IE_|Yz0MoG0*HLj^U]aQ=9zS2(!Po`i8soh_,,1%' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
