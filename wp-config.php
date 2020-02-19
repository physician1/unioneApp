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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'j7BzZTonCSDXabl35VPaics+GO3Va/PiwPfoHwFcfo367cLlXLEi3idMJDVkPwQMU1jc8YtIaEdZbfXR7KMMTA==');
define('SECURE_AUTH_KEY',  '1gp9J0zAxhHPnnSR9PFDKMkBMrN/sIQnVq687FSEp4RF8m0B9wNvf1XrAt3muT8z4AREz/U8xH4YPR68PMm8Gw==');
define('LOGGED_IN_KEY',    'R0SZy1BfDnjG75cNutLe03HeJYr4UhyXOw4CZ6cklQ2lPLUlW3XR6IKvbkboEMfet3PpW8eRBpoq76hzuzKCmw==');
define('NONCE_KEY',        'lH4ka/sl48nkTtXb2pyl1fvw99y+Aq4D1lXR1q4vLCi1DojgAbvIpE3YqsTaEEt5mp4AGNOLoc8kfuKCf4+piQ==');
define('AUTH_SALT',        'OsgT2JyCY8jgbXuv0Jc8dstY2lMqyoCujikkPwMoKFNRKwo//MkMZVmLso3x8JhoVMSD1F6AzTDR8I8grkaC8w==');
define('SECURE_AUTH_SALT', 'mmI7QzhO9Fa5JexZUFL/jEsDLn9LfBvNNqcTnMT/CYqr55EmLXEiLlNwzlpJYBaR7EXX5uedQyv+nFP1YNoZJQ==');
define('LOGGED_IN_SALT',   'mUKH6oOYyjo9BJSiG9u76GyiiOvV/zdfUkYudAEWgCds+b6CETrHIEoLJaLnXTufRG7alhT8hz84Yl8kxhLywg==');
define('NONCE_SALT',       '0uG/XYuhKTtDDTtjOEgB4mzoA2J5ZHOiGMUXCpHBossoQgt1U3h/lmeYgS0SrETwhkCNc5oohcnzkDWeJB0BPQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
