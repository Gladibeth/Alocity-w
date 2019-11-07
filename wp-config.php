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
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '+0=Kxr^e<5Y5t7UA|ura?/9S{fR%Fh# P>ym>no;O/, Q:G*OX;00]FPlYVvU2-^' );
define( 'SECURE_AUTH_KEY',  'ALM_iXz?0|(*Y`(u}8b8L`hZDeenY!>Y-OO#sC2TOkqI,EG6;2v>|<P?gprQxRsa' );
define( 'LOGGED_IN_KEY',    'c@.w*ejb&]X}TA~I*!.DNB+h<)p/!*{:HyLNjC?R6 qjqCfV3)-g$IZ-nX6PqEg_' );
define( 'NONCE_KEY',        'Y{kD5(uh^mWvu  bF]`()~{_L#x^Mt9.-fVd@=,oH7)-NBvU-P ,<fhTt9>!9ja~' );
define( 'AUTH_SALT',        ';AK~N_?s<1rrwetu2hj.t$D?/%RH!OK.FkUH#3C.P+C|@&PPk+M.q/,UqQWY |&G' );
define( 'SECURE_AUTH_SALT', '|][AMtRh+*oDrSfza+x_ ^AStIr00w</`h44P57[6R+[xh!e$7|M:.G~|bOu.Th@' );
define( 'LOGGED_IN_SALT',   'Cn aQ~RzxRf[tHFM *$pnoky9P&p3=!Qp323-mT/vA%r;FB:H.d(*7pCmK%`s[y+' );
define( 'NONCE_SALT',       'DbniJ~D+S<|FN[zt59$R_r^*emDW Qzp*Bbc_04;=DdcP}SF`edk$;kg`5l^e~:6' );

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
