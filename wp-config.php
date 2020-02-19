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
define( 'DB_NAME', 'unioneapp' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'S)V7xK7jy=t~>,|/A)ohO1peS567eVbCIB:<O1WOOFrYH%Kc*.LbR7:Atj2EaXi?' );
define( 'SECURE_AUTH_KEY',  '<c|?S#a7Cp~ul1Cz+f4yX^,=LT?kt&1BqQN~5#w[YDiS]e%WC22I/X3H7^Iw t(f' );
define( 'LOGGED_IN_KEY',    'Lq&#PJ{$|-cv` I`L3MY(yd,hSPCot575P8KP|k;Sf|&EJz=&4^Vs|{xPMv,G,C;' );
define( 'NONCE_KEY',        ',:5~OorWxRsKt#MLp00Zy(-Rv^w|b9uRdN8zzK[}75N+6fIbIniR]e47s@*r0jXT' );
define( 'AUTH_SALT',        'y%*i^:*,1ljF,l?8L{t5F.$ ydj&/fo!e+?:{uk*{[o(YprAnFG.s{X_|K6!DY-9' );
define( 'SECURE_AUTH_SALT', 'W;K2v~{ H+qlth9hs|&,[ElZcL:v!8z;yeta0*gHfq3 N>|J1$l4!mxRt0qGae69' );
define( 'LOGGED_IN_SALT',   'n?@y&Ot5Hl3zKc(LV+F5M}qDcyZdxC|GFDjH/_4x_kU{D~=2Ad}MbhY{knUOX)^A' );
define( 'NONCE_SALT',       'a}nKb?2c Fn>Pv.+:GH_5*pU]R$Wek|Cqm-ys] 3NUK#8aCR3]UqWoXvI^!q.]9Y' );

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
