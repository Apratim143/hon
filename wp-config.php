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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u117901923_TK6cX' );

/** Database username */
define( 'DB_USER', 'u117901923_Gy72U' );

/** Database password */
define( 'DB_PASSWORD', 'k6BKfwZUmR' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          '|LX-jcHADsH<0e)>,Q4XX~JQ$p?DcF|!5#}2$*%-h~F8e^8@E/RG{IYHWwEM<c?Z' );
define( 'SECURE_AUTH_KEY',   ')y~:2B*uAd|{.>-fmRdC?UlZ9ocaZL%3JorF<jdV87{ok$VKQJswgG:ngk^;=K.m' );
define( 'LOGGED_IN_KEY',     '5.(Dr/mATLaljT/YxV52r8>XCLiE$,Ew/Xqt8-;m-nBL1)g;Q9z-0{FK.t2Ppn9C' );
define( 'NONCE_KEY',         'e7{KGWV X3.g+8xH@Moa5*Z>QIs`$0DOJhO.jj8AWC0E[y1i3|g2qh7$yZS2PSzM' );
define( 'AUTH_SALT',         'pu4T?jlFVPi<%&gv?%qH8,yDcJz#V:PUDSR3SqTt%.l#@mBPZ??/ouu#4UIpA&b^' );
define( 'SECURE_AUTH_SALT',  'A~g?~D]/tvx^ICf-&>&:8cir+EQyt[d{WAZugcdl/W{`8n#(5>A:L0$71:E5t~T)' );
define( 'LOGGED_IN_SALT',    'HH&iq/m&oWgx4b3N$5<,sOWsKD<zyh%FlMj_h%_n|{:SUOxo]t9$Z#ZilTJ[)&2J' );
define( 'NONCE_SALT',        'NjyB$9Anjw[7(6HlrCUx1xAc~~QIKA+<}[3lIk4cYNogTvRG9d4&2+G*X3|2$*$,' );
define( 'WP_CACHE_KEY_SALT', '[iwu#w^~QMjf%Zi6FLVw+SMR:D@%B65qS&2(hB;M!v5J*W?WlUhd[ThP>+J!g%Jx' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', '3464d0b31bfc26b48c851ae20409e518' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
