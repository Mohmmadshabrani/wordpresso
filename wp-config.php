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
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:4306' );

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
define( 'AUTH_KEY',         'LW~21Z^Uz+O}fWBhfeQm;q[(|}3~dgh3IYAp6W.<.YJ}}6!qQ(l#BUJ-z3._!ru<' );
define( 'SECURE_AUTH_KEY',  'IkCD,t;qbB9RZ4@VEHiRl]&n:G!Lh52HPw_K;8F91A|7)~B@$,W;&w50vZXp[ePa' );
define( 'LOGGED_IN_KEY',    'V2-10M3yBg?D}1q<E,ZajD4yorhMq[+UM(2Pi12Y}_ttYuG324j%GuWUemJ^leLB' );
define( 'NONCE_KEY',        '.Z#:g[y!Z6B0IGt)3d7EC9Df~pzR5NCQ}98H- acX;G^1h@UcjwjBm;XDDN/!ou}' );
define( 'AUTH_SALT',        '6x/r7d|C8qX~XJ13W2oIDd#=R_|4!RCw7_Jih&:KmWVW>9nj&yz,wgi8%&-<?3f$' );
define( 'SECURE_AUTH_SALT', 'C=[dCytm9Qp=.{bAWS3J<!+!l@E7JV}R3Eiv#ANt/wTL4a)k1Sm]?5#d+h5+e@Jd' );
define( 'LOGGED_IN_SALT',   'B}[)G^71*d02!Fn|lx]3<EWhz$9`#tf~o8 :fdH/_`ZwHtMQg`QXe>zJ?H9cND7k' );
define( 'NONCE_SALT',       '%4}{5S+/t5Z`SLTj]p${L$o9XKKlYCqb|&Tn~8(30LgIr/eh3OV5bL&+G#qu=d!X' );

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
