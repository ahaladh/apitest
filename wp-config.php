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
define( 'DB_NAME', 'wordpres' );

/** MySQL database username */
define( 'DB_USER', 'ahaladh' );

/** MySQL database password */
define( 'DB_PASSWORD', 'ahaladh@123' );

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
define( 'AUTH_KEY',         'OFzBkh=jao4IQs8;q;X){KS.~=`0%f:A],-%P-*}P],b^$WQNLYQi=!7Q<)Y;y,Q' );
define( 'SECURE_AUTH_KEY',  '&*nVa?HT1Yh4tt69N>m-x+$|btl8S0_cG_v@F#3:`wslYE7Y[hxHemicpr3~Fkau' );
define( 'LOGGED_IN_KEY',    '2cz7U<cc~6ak+.(?)Ix8=2[;ey_%Mv71Kz<l5-&RH$#XjRwbG7!Y+2 55MYC8KG3' );
define( 'NONCE_KEY',        '7(Z&bp6}2e%aZl^AQjDYqmIv9rMo@@17.Se}~ra2XA$`o)^j$ Phs{;H^^&oQMf}' );
define( 'AUTH_SALT',        'ljpXjQFsOP(lb$vcG=[<N|5OOo2oxT^/&7=:ar,^u(y@7v;!t~+y7{f#N0Q|=T%4' );
define( 'SECURE_AUTH_SALT', 'IZ+Q+%UmD<:icPJ5EKU^%?E|4bKlVtYPGYqMoAKQ:1:H><pNYQK>h}M`(rd<W7UH' );
define( 'LOGGED_IN_SALT',   '_mrkcb_#TG{31aDu,LUWIDv]lMc|D5V4h{fc7grvigHnT[6Kp2>UP#ecB2,nKD8F' );
define( 'NONCE_SALT',       '61(lbKrb6?t|k&=r4AJCYf$i-0U*&5hR>{/cmE_$;YMjz]|21NMEzh/[Ubd?Vr9t' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'all_';

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
