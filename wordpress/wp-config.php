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
define( 'DB_NAME', 'wp_minterjia_com' );

/** Database username */
define( 'DB_USER', 'wp_minterjia_com' );

/** Database password */
define( 'DB_PASSWORD', 'zl0522...' );

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
define( 'AUTH_KEY',         'NFy__Mh00emh?;XMzZ{jJN>$eY1hcW|Dp}NJUw:*)W*s[TIHO*:r-B9Ka}G^=b*h' );
define( 'SECURE_AUTH_KEY',  'lKSn^hRG=|HXv2d%sfg@|E((3Z`+V51DQBq%B?/~Sx9BE?qZ)W,8nB}QM^AeEN:$' );
define( 'LOGGED_IN_KEY',    'z[|oGEy6TVeA^3.)JT@z9=9@T.R@:)0b]{e<n*]IQ_|DXQ+>QmlO>aZwt|TUQpSb' );
define( 'NONCE_KEY',        ',j+T5|F%-ED6rJ_Yvh#yGS]Mw N?h0@IvHA}j6,@LA.Nd%xm!d7IS|IHXtR+Y(xb' );
define( 'AUTH_SALT',        '>A(mV@FrpIgAQog$kP/0,gt+#L)kNXT3nn`7?fcTR Grh7TSZIt),]AX0}^W~@D5' );
define( 'SECURE_AUTH_SALT', '1H?TQ/4}}&(Qxx[9^M>#>JX&(+at*WLk{89ZCMz3,AK5e)~rYPq*qQCm,!Lfu)q:' );
define( 'LOGGED_IN_SALT',   'YVh;GiQG$n<=v3S]f{aHdn)H)X+}F.-d,7p@)(xvSG!@.hyW}<v|ST,P_c$jns+>' );
define( 'NONCE_SALT',       'TnFuuNdEb,gH;DW3SNU-Jz5vc}YB?Ro)GzJ`L;_mZ}w(!0HZrV,j2}zCEvgjRBi:' );

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
