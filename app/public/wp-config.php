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
define('AUTH_KEY',         'buWwp3Yb/7vTMShn1ZIRSqIxeLMqRbtYVQ6mmQV/d+GrLm79vqc/IpgoHJwgYLAlZ7jQKF2f7awKfF0ZSY8gqw==');
define('SECURE_AUTH_KEY',  '5QQVrdkhDWjaehIbwKyUHKZPztAW0RwOpaxWoyhwt30uTRywGxLMYCAtqxrYVY/Xc6mvvYnxe8Uj1/IlVL0eWw==');
define('LOGGED_IN_KEY',    'dkNSjXjxaJ6fFTsQ581EK3/hS+6lYkSamAA8g3ZJ3ErXLX2fhHN5SCsGuMtryqd7rX02oA42cYvXxuU55eyjbw==');
define('NONCE_KEY',        'HDqf7TmBZtMXaeSEcinYXj+zw+wjKffEVeaNLAPZF7e3ms10TfRp6kZuu7o1BvRCKpDtDQpHW3I/n1AULel6uA==');
define('AUTH_SALT',        'ldobG/sh8RnA7qWtvRfdqmEfayQJlvX2CFHB7ZRvkQeUzwA39/w+QK4II8BevwDTifJvMzNoomzs4av+899W9w==');
define('SECURE_AUTH_SALT', 'aP8EI5viKJjP9dtAWn1skSgQ7HEVBZphVzQ7LWVnyKJxGUl2c/jLp6k/rBzvdAiFu7MZoi3KCmEmV4Y+V/IlOw==');
define('LOGGED_IN_SALT',   'ZeSjjMErfEJH/y15J8tAe+wISwmLErnP0VwmiT+EkJDuYbV2011N4+nYW2Nuz+r8fdGo5m0s2NAQbTqHCp2a2g==');
define('NONCE_SALT',       'Kdb+6kJplXPRBqPRcQp/ZgmnXdpvs3iNDqNFAUosuA6JmqxMLRAfYU+5+OW9NMnEWy8Hd01yFxVYt6Olynxhmw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if ( isset( $_SERVER['HTTP_X_FORWARDED_PROTO'] ) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https' ) {
	$_SERVER['HTTPS'] = 'on';
}

/* Inserted by Local by Flywheel. Fixes $is_nginx global for rewrites. */
if ( ! empty( $_SERVER['SERVER_SOFTWARE'] ) && strpos( $_SERVER['SERVER_SOFTWARE'], 'Flywheel/' ) !== false ) {
	$_SERVER['SERVER_SOFTWARE'] = 'nginx/1.10.1';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
