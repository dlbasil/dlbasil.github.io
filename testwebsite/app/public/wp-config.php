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
define('AUTH_KEY',         'dmaJL4SpIEgoZHegAuW2FrjnMbb8E/BtOzgD7I87pvr8PY5UCOvsWwetvipF4KHf1oDS7TRBhQAdUm0IpQRlpg==');
define('SECURE_AUTH_KEY',  '+aZuCMs7QLl9KQIBlS+qsEuQVO7a9QPSZWeSG1c8WXK4c9XQXAv4QssbOoU4C37vX1ThHFrnMOkx39zerm2Umg==');
define('LOGGED_IN_KEY',    '8foNNFEfe2EhZaLRkY8kfO7/NF4kZwlycsmyQD3lQRitmJtYpYmXVWDKYrZsComxZ5WW/qlbVFfOZUih9FV39w==');
define('NONCE_KEY',        'T4bFDwUcI7S4tf2gvG/1UoBLixhx8iXUuRzc3I+yCwEM9iOM4/9PULRmPPCWgw+a9kZ1arh2KuBm8aPNuuKZ0A==');
define('AUTH_SALT',        '4+pO4AXAeqki7Dm3knqXCgTnSMrmWuGZv6ZRCkoY/0f/zLGj+4pFMfsjW0hRVuJdeid89v/EcedKgkubs4HAEg==');
define('SECURE_AUTH_SALT', 'UwAuU3Qf66ePp6kj++63vOB8TZY6Cvbu0P9Q/2y3lG6BoVkNcg/Fssj/dTZJ8IYO8FDZ1e1hmKAQgVqC2k/47Q==');
define('LOGGED_IN_SALT',   'zANDBEjrL4xXwNlf/OG4zN9XqznxHiJjAhhUfgTyKMudNmAfs6ivOZd4HMyMqIz2QPGTCheDwttwvj8dYfQnvg==');
define('NONCE_SALT',       'VhGYW6+oz+MATRAsw57WTSTzUkLu8oh7L5NshpqdgHQ/isilQnIyLjqcOyo3Hy2ayBCNLl8XkJEAvKWfhv5j3w==');

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
