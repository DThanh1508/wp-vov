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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'MJ-Z#=__|0AbmJ#n_6h1c+OI<<m<Q#rrTF*[!o2^kA`Zy(`S<bD4`4,],i!ZWxOf' );
define( 'SECURE_AUTH_KEY',  'Z>6^VHF4<A(*OwT;>Ss)BOMF=.L_@Z<w<s/w)({;0.&kAPlQ4Q_tH3}c(B]XA=g-' );
define( 'LOGGED_IN_KEY',    '5I;?1^<ngGx[ 8asPW5jO<zG/,g4!Inl4#ym4a]e.CAgJY=fhbTpH.[{pX;4u?H2' );
define( 'NONCE_KEY',        'VM>(adRSsonW7U{O0Hu+x  m%X8M(o>3lt<{ZH9f2k2h8{rz_^uGGKv$5NWR6O1g' );
define( 'AUTH_SALT',        'd&_Nh~Q#jsysatR~>g}Q_ntt7yvU-z2Cz4?yVFbTSA}*2Mxul]CUJhR2(gf|fYDi' );
define( 'SECURE_AUTH_SALT', 'Dgah^7C{K]e/; O)CBhzIj[1BX$j$s)^p0e]Y(3][|1uLoT5CTu@f5W,Ga%2jl9c' );
define( 'LOGGED_IN_SALT',   '<V|OU+G?9jyay@Xr[]4&KQ5Q=uyE&<&_-V^|fB+R}u9TB&0/|H~C_lD{BbM_l,gy' );
define( 'NONCE_SALT',       '13NpR5CIb|,8.vMz<vv~b5U:Woe@OxG.9$3n+y%LF.;qnq(;:l!l2c<bYTBoPr^(' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
