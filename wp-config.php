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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'vidyatravel' );

/** MySQL database username */
define( 'DB_USER', 'phpmyadmin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Hello@123' );

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
define( 'AUTH_KEY',         '_Y$S6%K;<wrO|j5tX4)hMGH8ccm0.g@10PN4)~W%ZctyJ9`}2z^z0~P@t].E{1/9' );
define( 'SECURE_AUTH_KEY',  'Nv.ErB8G-<xx7Q#T_ Br3xN)iH M_@6m~(qi>WGhqEFYSkP::C$uk8eJoUQ7jTZB' );
define( 'LOGGED_IN_KEY',    'h-Fps*mV9FAfFnLl@6Ep@l>]B(@ %48Ll_!q9nd~2QIe2T.(kK`}AQqT>^6Yb}Nz' );
define( 'NONCE_KEY',        'pD7<yaWTZ*{#z)![bsH[9?}c_nV*p?`Oe^(;H$z/Ql3?;h4j!iiohy2Q!TQ~aH9w' );
define( 'AUTH_SALT',        '(V$<klb]$HXn/.9ti`ojnC#6w2(><B>xcbZ>wP2M)u*SN>#%R`=Bc{TD([B/lO>[' );
define( 'SECURE_AUTH_SALT', 'hB3)jxE} o(qtOD%ruQ>^/: 3!sskHsB73JgtO262(63r&4 A_Qiavsi%:gB8Vzc' );
define( 'LOGGED_IN_SALT',   'm~)GfYdR,oi XH[H. [x1A >)f2Q%/x:1IZH=xZ~1hoX(h[!(Lbjy-9>MQ+k 6N$' );
define( 'NONCE_SALT',       'Dq)KDi.:rXB(x+WB$$0SbsDTaBb[]=2,s0Kc)!+5zmu+0v36voy}WGt7]2)!Z/?z' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
