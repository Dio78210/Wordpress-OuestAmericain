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
define( 'DB_NAME', 'ouestAmericain' );

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
define( 'AUTH_KEY',         'Z;cL&UwIm?PvVB:{q?@HiQeQaAbCu75WU1B6]t&vz.|dbZaFE5~_$8GaalzL38m<' );
define( 'SECURE_AUTH_KEY',  'I1(B9O16T*FC<o%4PQVnHOL4>#fWl3>+A|on|_;A&|/`7Fe5##iON^q*_TZP/1Hw' );
define( 'LOGGED_IN_KEY',    'M0ut,|WP5.c5J%T`_mB4!Nl*Mkg$,@$?-hW$q~=MBe*;u6<5_MZ<|wR2O~+Mmb]%' );
define( 'NONCE_KEY',        'ya0`A9OQ5&h7WgREG@,@vN.o<UGIY=JL>]..lLw,-gjCJDmip^vEd|h~}:Li4S%P' );
define( 'AUTH_SALT',        '7.8Ao@)==|6c&_J<=0lDJqMZ`^JrC/j~g`]QyQyA:B~m:&mfaw#s6.Tn)`AxLYI*' );
define( 'SECURE_AUTH_SALT', 'nB;DjOm+nWr!&:}ad[vrUx``HlZdFciANqu%aWBx)-nTLKt_9%8Tj2Sd_ }**eS)' );
define( 'LOGGED_IN_SALT',   'gvnxhFC24A=*GYmsI$96ylhe4&A06>RLU!d|gdMA#vuG6Ie3yF9;yBk}x;-NC{Vv' );
define( 'NONCE_SALT',       'z66fxs[2nR]YzBH, 9p~2yz6g`{Z;>>hvX@11;iixeFc / te1a f!bU<kU7xWm&' );

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
