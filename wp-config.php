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
define( 'DB_NAME', 'web_shop' );

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
define( 'AUTH_KEY',         'VmTwMqA:]Yp{+B.yU-L3<a.c^,;Lv6sbVs&ZloJRT_^3%;QhfVR3c8c;q&w(t5Sm' );
define( 'SECURE_AUTH_KEY',  '.)wuT>m[<:r>$#aeDys[*.M2:C:)K+i-QYny8k#2FX;HNuMZe#;fz-Q`6)l*Jc</' );
define( 'LOGGED_IN_KEY',    '~js~}sfh%l@^XtWZT&%t2@;|_f5TXOrxL].N}?&53K^!T(fB>0sD5AJRXv-lFse!' );
define( 'NONCE_KEY',        '=/,7a`635tTPq(dfG<ARAaW<#>HQN7mbTlO8iEDh:L1@o[M8*.kQm.9j^Gmp!y$0' );
define( 'AUTH_SALT',        'E$]^HQ3QJ08IWu+b((G|X:Wx*VCwh^]9_(wP6UZ1G=g{>SSp-(_O`kX55j=m>>$a' );
define( 'SECURE_AUTH_SALT', ':w~Ju`Kocn(KNk:2N8p(=K_h=6h*)]bl,uB]1@6j4=rrPby/dH6rCR|D|&dT+;XM' );
define( 'LOGGED_IN_SALT',   'h-55Yh{5I+<YRx?)Kpd8MX%G*(+iEj5]s;^Cp7.J8Bqn1^TM]3Cf^cg6m38ytiE~' );
define( 'NONCE_SALT',       '<(o7J@fHS__nJ|Wq822g9}5,]uM;}arJAQtV6.-*)R/SNp:O!sjN!K?$h?lm~QF]' );

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
