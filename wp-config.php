<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'dmproject' );

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
define( 'AUTH_KEY',         'HYORXw#4u a!v8kPRE3(1H9{Zhas4UMGwfy-9G*MQHT2}KzZShv;?)[B*K~Gn_V)' );
define( 'SECURE_AUTH_KEY',  'IJ:l?t+kkb~e$YDUV+&LmhD)bG87iTL}pa/#A9l^x`P%hn=Y4>t>nSxOT{nB2E3y' );
define( 'LOGGED_IN_KEY',    '=3<DGA?F_v#hzP`mDkC2,v*8PD,Mh[<g{Bd7`uxsc}B+@.V,3qWQWZ&0c(@,rzPb' );
define( 'NONCE_KEY',        'y7hlRYo3I3uKwY d@Id%JZ{Ne{}M,/pAPnz~C-i`JssMQhp|y+.0wzSHS5T+?X;Z' );
define( 'AUTH_SALT',        ',zOh96%HW$wdK+&Ne.qc3.?~Rzd2A<q*/ODS9!Q2}Vw 1jd9`<A*PRnx/9LvoN E' );
define( 'SECURE_AUTH_SALT', 'VBMLL/b@y1yG=^o!fjWS.i6<)00t@kj_ERs/+4/,H@puO^=6)(u)ZJRaTpJ,mv=+' );
define( 'LOGGED_IN_SALT',   '+9 f3o9]^4f?&]OK6Bx:ZC2^<v`>~+KSX%Qh[2ZtIMSeBsq{;n9r_#}K2z?T?X1}' );
define( 'NONCE_SALT',       '^leoNmNe&E>`&S;7O6ST8<2PtOM}kw:A6M*W=^2{TKy1h|xBi.yslh5E/&D{}z2W' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
