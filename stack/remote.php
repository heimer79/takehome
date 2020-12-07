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
define( 'DB_NAME', 'heroku_cedd5ed95fedcac' );

/** MySQL database username */
define( 'DB_USER', 'b7ada89174c228' );

/** MySQL database password */
define( 'DB_PASSWORD', '5fd00a2d' );

/** MySQL hostname */
define( 'DB_HOST', 'us-cdbr-east-02.cleardb.com' );

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
define('AUTH_KEY',         '8+akeeYyFa4LcaWDa0PTHFPOmpTe8wwIpose1FXeXZJAg3FG5hHTWGsUQED+U8HEcuWq4DP+aRPvS5bTRY5Tyg==');
define('SECURE_AUTH_KEY',  'pQ1pVZ6p7ZQ6gP+lYXgx67bmQgclNwy0O3EXki2AZGxryjrN0KOa2S71yJtTZeNu6ZJa/ng1xXQ0ZrhZDLakhw==');
define('LOGGED_IN_KEY',    '/RN3PDL5iFXguU/VseCmVREC6aJ6ocigYRU+Mlh/VkH1K1ZJ1gkMD4TwlGneBc4bcM7xiUh6GoxhHeesHAXK/A==');
define('NONCE_KEY',        'gSKavnIhNif53V/OmZaNrEU4sFQU6dghJJ9jiwPqlU3aM28QpMjWZJzlBLeE1Kh86O/rzmD4tyqKZs9n0Q6rqw==');
define('AUTH_SALT',        'lv310fgBPSvTrOpRzhoNu54C5Hi+YJkbS+jyqBMQyNXdg7AAnWZrFlgovKSyzvnJDzc0fDL3N0DzKEXi63T4Cg==');
define('SECURE_AUTH_SALT', 'QOXHBZt8srPFKFyPcNo+8OT7iw52XdFDO5mGh+MnbRN2LjqP4A8TN4IzB07ehr3YXx0nHOHYW2fhZ0YLKn6prQ==');
define('LOGGED_IN_SALT',   'VNWFqB29jbLNlnX4Mz6cV5ARe5Q5nrv+dNg50A3eIwwjZOWoRC5N3I5ypAd6zTfu2ci05EmaiVgcwCjUzLhlVA==');
define('NONCE_SALT',       'V2r9X4aMTy2h1l3LpxKj4nfbSBWjU/v29Cqly9lzMBfRdzF8gN/tEoQ1HLAt67HbtyYWrN2oaDWP2lGZvfy9Cw==');

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
