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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
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
define( 'AUTH_KEY',         'Y w$q`(TIBT5>/fE+RN8WrAL*&|NuEk:Md3iIp5+*evsnuyBL%PZY6@$g;3)(iVC' );
define( 'SECURE_AUTH_KEY',  '7>;Gd~z%{!BRnEO.R.BK]~4lsXHK9N?d#&H$o>@moJC4TJ6@[0?<_|phr;r[o?X&' );
define( 'LOGGED_IN_KEY',    'w?D@i18b{@cc-aWL;f8.Q,*w&!`y6zb{MYl8qU(uc`<-tln<16Ok<RE<hw:TU0>C' );
define( 'NONCE_KEY',        '2=9NaD=2mZ9Ne*J]lFH1U?t)=@ |,MU7riJ[92TJ=!`m{{w0$Xp_MB!CJma`F%IQ' );
define( 'AUTH_SALT',        'g eItM?{v#@-lngQZpK5zROxuWC)3W3f*6AI>Bv=7W%0Ag97M7iVj-I6P?rJ}g}v' );
define( 'SECURE_AUTH_SALT', 'hOZ_g!-hMK_==m1.95HDX_!nCE#<dIGz!g!3?IYd.u*0}daN/?<&NF-5yh<Q{NDx' );
define( 'LOGGED_IN_SALT',   '@~-ltw9?@EVay 15M+MnFYm`0|TMPA>Kiq*(..@i@L9r@^ZvfbT2w%]Gh^e26ABr' );
define( 'NONCE_SALT',       '90,Cpxq#K$.t8W.AU,pY5O`HS.]jBBc*E~4w(!}NxP_tP8HMWM[O*o  4Pu)Nza1' );

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
