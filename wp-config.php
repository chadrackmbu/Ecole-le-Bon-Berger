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
define( 'DB_NAME', 'exercice' );

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
define( 'AUTH_KEY',         'FS%S#D73fRGnpXX4}RrSQSn3,4a<sT +BMx@dR&rzn4x14{GD,MCkN/G1@O9aOdU' );
define( 'SECURE_AUTH_KEY',  'IvYXl6s;r=CU+S3UFVl}4w}}LFG>t0;qdc}cI#J6C*fb2O<di4iPl?1Df>Ba[&-;' );
define( 'LOGGED_IN_KEY',    ';e,Ks/nOuCkm*~(5)F1bqTJ_h@^XHYbAx<z5(?IN wU[ZW2/LL@s&UE%3q;h8S#!' );
define( 'NONCE_KEY',        '2gZ*C}GVX{} p:Tz{@WE&uZl]1[;g}DPPIXBebqe,iEkZMJY6. br<e^H}h=oy;E' );
define( 'AUTH_SALT',        '!`<o#ec6/6h;MPtPf7KdN]yq%,?0t<o^9C11;Ub?UY,UM.!=L&2Q5a{65`D.vLO-' );
define( 'SECURE_AUTH_SALT', 'x:3-K?E$aOBHGEp}u_B!<@+ uSAz7lRd$%4=tAzh?^CZ-4T;IPvfEd$|FMTnB+[^' );
define( 'LOGGED_IN_SALT',   '(%sI.u0Q _~rGvT[`!LBhwVCdx`P6lYalFv)vQdhhr qEkg:nAE7,UwC/Anz-K{e' );
define( 'NONCE_SALT',       ' t1ABo4/72Lhv5tr)F0 ]4#I[9XS2>cFB;4Oqjy`Wwv6>}D28](F>dU:JkKh*YLm' );

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
