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
define( 'DB_NAME', 'tutorcitydemo1' );

// tutorcitydemo
// tutorcity_demoname

/** Database username */
define( 'DB_USER', 'tutorcity_demo1' );

/** Database password */
define( 'DB_PASSWORD', '6UhZAW~kr+9Q' );

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
define( 'AUTH_KEY',         'Y]Hk? K6S0#t0(nI(o|4,OID`iK6*_5=H_O/+ y2IZ=otE[eK]6z7]hj9pw|fa/{' );
define( 'SECURE_AUTH_KEY',  'pwkK-i1N{(,kbQ7awQT%S. T5miARD_ul;=E<~<0.xbUwJSbb}z,Mv{hOhTF(4nV' );
define( 'LOGGED_IN_KEY',    '@T]XC)hC!S4t+&hg+odtG!LIUu:IqNa,:D(`2m,+F15c(9y5-g5fXuDq5(b,yY&p' );
define( 'NONCE_KEY',        's)=}jUu8Iw0cA>U>a:YX@]c5Y5wU9ISYnSCb:;MhmHs3h_%]-`<cKFw2SsZUZ}sd' );
define( 'AUTH_SALT',        'D4I@{>6~y/_~KoGk<?&Kw4x!LNR,d_fV.|p@844KC(fKvDM)Q%Woy>gm^g^wI ^1' );
define( 'SECURE_AUTH_SALT', 'RG[=} ,LIJL6#[)A6~Rt-MX7-rwP1l?V JSbB*CrKf~`=xG& GgL8D1J+w$;9)oN' );
define( 'LOGGED_IN_SALT',   '+UX#}UCi~6aX{{I|.7Sac%4ib}3OLPhdhdzASAL$AkQ]0>kn7LUG-M<8!AtbZM]o' );
define( 'NONCE_SALT',       '={GNeqAyKZgLa:8WbYy, N]rGIF8[eO||hI{*XN?]|,<O!A1H<8sD{>C@<o:py$3' );

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

define( 'FS_METHOD', 'direct' );

@ini_set( 'upload_max_size' , '20M' );
@ini_set( 'post_max_size', '13M');
@ini_set( 'memory_limit', '15M' );
