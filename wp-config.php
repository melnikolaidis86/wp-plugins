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
define('AUTH_KEY',         'rpS+XLiGoLrmf7sRIzYF/TdRFzu1mzY5bNf7lh0CHuzfM8X8Zl03OaNdHCLivisUZ+thz98zMQoK02VRzA0aZA==');
define('SECURE_AUTH_KEY',  'nMTCYYvRqYZerDLx5RlYslhv19DW6W82f5H+gN/pmSrCxzwkJlW4GcqNHuNQhzlpwSI5DXYWhnb2nGv9mO77oQ==');
define('LOGGED_IN_KEY',    'CRHJGKunp4/5FIVG21Hkwe2EOqWVL6jYZDzQE1XYuge0qtKvYWDKMRwlfH8JdqxIU9lAO39ooI7MRWQ/tV6g7Q==');
define('NONCE_KEY',        'WAd1vUWY6vcsOh3HbeGvG4nNxw/FKwM87/kCm9Q1fxts02zhIX4sqjQ7Rpc38BVWD/+U6x0zDpyovNQJJhuIRQ==');
define('AUTH_SALT',        'tW+5Gl8MbLlM28KQuWmmJsp5tM/KfuJRGqHr6/YMmJlJLjnRM/D4VZz3/McAlaEVXqEEHl6fdZqtH/ADH6l1OQ==');
define('SECURE_AUTH_SALT', 'Owb4nStXqs9O0qzbWHc9UZPEyWSZpV5doKpUx92yJcbUd+HpSGi1iEVJPBFW4+NE6bO+dUSZuDJEcrjLO0G0RQ==');
define('LOGGED_IN_SALT',   'LiIa/ikCXuSpeXBhDD4dyi4HL1pVl7P2WO6/vYvSMk44b7VBPiasZ2E2tpGeb/wY1VmWDl5XN22w3NpSWmwPPQ==');
define('NONCE_SALT',       'djyJSyeUroejACaJ9okK70CCNtYcqzH3p2c2CDZ+m6D0YvWM3D9h4zTMIOELgHERVNVEk/NGkherOarkZIkKbA==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
