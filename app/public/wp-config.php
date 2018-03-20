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

// ** MySQL settings ** //
if(file_exists(dirname(__FILE__) . '/local.php')){
	//LOCAL DATABASE SETTINGS
	/** The name of the database for WordPress */
	define( 'DB_NAME', 'local' );

	/** MySQL database username */
	define( 'DB_USER', 'root' );

	/** MySQL database password */
	define( 'DB_PASSWORD', 'root' );

	/** MySQL hostname */
	define( 'DB_HOST', 'localhost' );

} else {
	// LIVE DATABASE SETTINGS
	/** The name of the database for WordPress */
	define( 'DB_NAME', 'jenni120_universitydata' );

	/** MySQL database username */
	define( 'DB_USER', 'jenni120_wp123' );

	/** MySQL database password */
	define( 'DB_PASSWORD', 'catsarecool!' );

	/** MySQL hostname */
	define( 'DB_HOST', 'localhost' );

}


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
define('AUTH_KEY',         '85mpxtRq8ARnXrC4enXAOp73NlWgNbZhnCrVyoUOaJfGhW1Iz27I6Py9DfjcahKLSleS4tBaUCRzTrBGEB17WA==');
define('SECURE_AUTH_KEY',  '/gZnPApb5p24LokLS1xgJdR1Vq77wqmJqHD1sIYBTOaHme0Xecc8WHoIxnYBKA67MBSP41rqRZxtpkupemgTRQ==');
define('LOGGED_IN_KEY',    'JUn65XM83HsH9jU/RTCo/ojC+hfkPPH3/F04DAWl7Tz3Xe3S5LRlaNvYDdwjJNmEMLGjCTbqkeZmAIFzV08aAg==');
define('NONCE_KEY',        'kvotg3F8zinOWlh0xONCSVasutAgpQzzgI9noLPekpGxbVHAG14j1oOGrej5urgJoqzUKBBPnxy2QTwskVVb2A==');
define('AUTH_SALT',        'x/w8y/iH7BcAzSzVfl4t8y+DKaSUGantvfWx0dzG0BhPYwIo8MBmsnSRfGCYDAcMknBNgHzCPmDEC2AcshNBkw==');
define('SECURE_AUTH_SALT', 'r9UTCpBXzZZnNanlpougp3HH6sXCjf6/5jB/yEoEOLab0WT86+VWF9sCgi5YUQpYBTw9ADNEbAu0iithJACNkA==');
define('LOGGED_IN_SALT',   'IijBjhlME8dnjuNATqkhjp5LxwYW3gyKw/sih2YYP1F5+lzYVv6ywSW7S4tcyFal8GBQIWpczMBsgKndGX3NHw==');
define('NONCE_SALT',       'HMvxFZaJXjxX0AWmGd+x0+ABNhBzQ9pb44a+8ryIMxqXOonOI1YYAZVSPBuJXWI3vq7u6Fv71VA4lQrnfXBtEg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
	$_SERVER['HTTPS'] = 'on';
}

/* Inserted by Local by Flywheel. Fixes $is_nginx global for rewrites. */
if (strpos($_SERVER['SERVER_SOFTWARE'], 'Flywheel/') !== false) {
	$_SERVER['SERVER_SOFTWARE'] = 'nginx/1.10.1';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
