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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'wordpress@123' );

/** Database hostname */
define( 'DB_HOST', 'mysql_db' );

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
define( 'AUTH_KEY',         '&-W_.GHo+|]}`XdaM[GUW9dVQs$RJz7L!}L5#!gWPah:1FeM2!Mn:*T*gR47!a.F' );
define( 'SECURE_AUTH_KEY',  'UDN*7O5}x}Q9!$po=/%#J6zo~.9SsfRjD[*pd[|aKtfNM0=cSfeFPy`kK`7Tz&)1' );
define( 'LOGGED_IN_KEY',    'f[In?,,_HIDAXe[yLd9AAxFQ92`MAZGGQaU8=o(-J,^%F$YuO6] 1,fdRqv,d;GK' );
define( 'NONCE_KEY',        'RSqt<+F{%6$n]6|?WdiZn&65%3W@+qg)1- Aq[}?>l/ ad7E-`rI^|Ie!x7j L(<' );
define( 'AUTH_SALT',        'ys;[ES+MTVx?:}1{nR$s5Y  v7qA.Z{51pTMarj&d_VQS/GQQcwK>=-}/xNdeAer' );
define( 'SECURE_AUTH_SALT', 'Hs };=MpL#)7rkKL^d9(N`QNWrKNWX0YV6uG.bqUe5xc5rxGWJy.e$gi#f@*4mPF' );
define( 'LOGGED_IN_SALT',   'S6oWm*gy*((nhxRa60z7IUO^;C!.wPlp?Tk/ ;XN$a< nfgmWvwrN]0>3(O-xV%3' );
define( 'NONCE_SALT',       'Las|:[6b&X&(_/WO#.q7gG`ki}A)cm%&~T:;cSJ~MXXE]`kcx]JHBh#](Vo CmWC' );

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
