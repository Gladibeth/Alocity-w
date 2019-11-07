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
define( 'DB_NAME', 'alocity' );

/** MySQL database username */
define( 'DB_USER', 'admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         'wfim[>mdY.3Ut,dt4G(KiV6$$Gp7+>0NyM:q>X9&:VpP vttHxJpb4Xdd}_QH1.c' );
define( 'SECURE_AUTH_KEY',  'i(^MgktY;#oop .nw_T,vSl~)6Ol:EVo&v[:`J<19UhJnn#6Waa5iduy{0Ua>hFq' );
define( 'LOGGED_IN_KEY',    '$zHlPU7.8Dc9PG(@ZU0{nX2ro*xY{+P[5EG`1I(5Jc^.e(kU^Ld.k?u;~_ZoAK*K' );
define( 'NONCE_KEY',        ']x*ZD@{C(y.G_26y<Aja07~n5#`Xk,C(1>,Q&0.vXx jAwny~`DYdn{wh+]c7;3-' );
define( 'AUTH_SALT',        'Ck]uV@lZWV-z9Z+sxtXMnoRZvrj3*Swec>Dd.o3THval0#,:w0>FwsF[@CQKB.0T' );
define( 'SECURE_AUTH_SALT', 'w>K~`Bek*q+S7l>,`$Kqw(EiE4CNwr<PU-LcVO8KkP>P:H;SE_=}RdjTuIX9@5#R' );
define( 'LOGGED_IN_SALT',   '}j|h91C~!95AtWz}:AEy69eebeAf./qK<ji?tmDc{x%*D(Z7s}6 M#k4CSPVk$T]' );
define( 'NONCE_SALT',       '4zcv0k]=&F#dR]/Pfi5<P07lIz}n0(#LBq.BzqON!$]{~Vh<, X7=@KQM|`YPn+Y' );

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
