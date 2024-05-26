<?php
// Begin AIOWPSEC Firewall
if (file_exists('/home/hbpfhum7hxiq/public_html/elcaminoquecreas.com/aios-bootstrap.php')) {
	include_once('/home/hbpfhum7hxiq/public_html/elcaminoquecreas.com/aios-bootstrap.php');
}
// End AIOWPSEC Firewall
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache



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
define( 'DB_NAME', 'i9534578_wp1' );

/** Database username */
define( 'DB_USER', 'i9534578_wp1' );

/** Database password */
define( 'DB_PASSWORD', 'R.Q4eI5e32Zecu0O2BB79' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'rVdL26B2opF0zo6JuVeyCH10qxnQhgsZ3VKQF6c6iU3kbww4CEfAzvzSaDFL6Gkl');
define('SECURE_AUTH_KEY',  '70umYd1EJr06WIMzgaxlqdA3PGeKCNCi47abtmuIv3MAtbJVnsKG4XfTZKb2uBMt');
define('LOGGED_IN_KEY',    '03HY0TvlkGjIC3kaqLrqPIJIpalmW3CtbEFYsJu6o31Maj2KEKb6L8tNj8PXGYkV');
define('NONCE_KEY',        'Y2CH9Ybkwylko7Z95XMTv9tLPnbWfcPlwTa8atJG1yWggTgtcFgfkAi2EfzSM1zx');
define('AUTH_SALT',        'BRTBIbQrluJIUlYamExRrBGUJwEn0igq2a1FnJ3Y8DXvnzQrKng7KqpIvNzyorvz');
define('SECURE_AUTH_SALT', '1qTzp2pUQIuafLiuywoXg1hdxY0ATWyIRki6G6srNqeJOoeqTUV9MlQ983iwdpay');
define('LOGGED_IN_SALT',   'EDAjptYQJFbfP3DCMts3FYECzvq0UxvCooqlugCgn5Kie6C4rKx9P2x8idLTlBl8');
define('NONCE_SALT',       'JCTti3uwtkcRhHKSeWoNz2Xl1fA7QY84ZAMgZL0czNatYzSTRBonVICsYQHjO3rT');

/**
 * Other customizations.
 */
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'fugfi_';

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