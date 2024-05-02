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
define( 'DB_NAME', 'flowers_boutique' );

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
define( 'AUTH_KEY',         '<tkHll&j)qp<A#dd,*+uQY7d{+%Tb)ahqH:ZQHPc_([76K?/y(%g>qUC,8;x$fFZ' );
define( 'SECURE_AUTH_KEY',  '4+;eE)9GQ&;k@A%E]oeD!nzb5V)b8?yv KF LQ.dA3E$cE2R1FDW J%w<Vz#CCR4' );
define( 'LOGGED_IN_KEY',    'OUz>idosbekya*@{u>DZe7p~,Ut{d:kzl#n_g`y%#H.-k<9~qTHTAS_bTgN{$gZc' );
define( 'NONCE_KEY',        'JrXHh[_kwSq70urbBF<V:#+V~|cXQ~4sjn8?mHP3Z8z<ED54hwph^uO`USjhD/u-' );
define( 'AUTH_SALT',        'F;S{nSS!)6m<eIFyDJ*BvUOG3iPH))bTY?A@PtAdKZJG+mJzg-n[}sC`Rw!E?:&l' );
define( 'SECURE_AUTH_SALT', '%Gt+rUa9uNX_jd*tH&E1]/Q&(3hx:@[tZB,m[.};KTE^0><tv);O6r^YUDmJQ)t!' );
define( 'LOGGED_IN_SALT',   '#?E^?FsrWQ>DOJ.ts~rB1~G`@g+)v]J>7I68eqHg))Obf3{kNRn$w0:2>U 0Q~wv' );
define( 'NONCE_SALT',       'yto$ |SkAdo0gB#7dhO3P2G<&xdqjmB73Hv9) fLnf2LMe8/4h0D:KF6;G$DMRW_' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpfb_';

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
