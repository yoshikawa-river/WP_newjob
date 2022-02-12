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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
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
define('AUTH_KEY',         'thaFUge6biLzZxrosNdi+cBhiGFPLS+HgjvVJS0RzrA3h+NXCy7t7JnC116It5QxoVPxcNNVUtP25jfqclX6KQ==');
define('SECURE_AUTH_KEY',  'WYjUiqkmASg5XpJ/XatZBrm1/Ql3mNJZZ2qLvFMjO31HaABaUEVMuR/ix2phEYGEke/WESzhF2AWwqKc4x0x2w==');
define('LOGGED_IN_KEY',    'scQ43tvEwd/pMHCBW70+w+csgd1VwxGjBMQIlVWu60vgs5qKfGPGptyNQLU7G/EPA/pXdvJAz3Upah87K/4vJA==');
define('NONCE_KEY',        'eA1uwX7AHoaMNMJLA9lqtOBArtvlN9fAhh6HB0Mm6DRoKCcRlwrvH3/I/5i/Vuw5r6Muim9q9PECZF5gJcMNjA==');
define('AUTH_SALT',        'KHCWPv5g1Rk62nudA1vbo9QCj84nfKwy6TiJ+HMomnDInP8QRHyjDaZXAOm/KQ2b52h1vEmph1GxbSf9GBoKYw==');
define('SECURE_AUTH_SALT', 'sK3H95Wen/xro4fgJZtvdAHq+PY9leWf1121IaDJ0IMYWL10tajNT1KQHWUZcHmlnJoH4uJuxp4ZPXNgqg0nFw==');
define('LOGGED_IN_SALT',   'Yxfug0MiLh+xyaLjPfodZMbc3osVsdESCuAw0+v2Lo7j0ZyuRE9/3jo/Z1RtR680QXie6UUw4y78FGRZ3GgWcw==');
define('NONCE_SALT',       'En1oIjpJcq5KMqpWdw8Ye1nVpxWVY62nhBm8tpT29v890qagkdc+RgovL5kUa4gF+MsCOZMPoaZqIeYDhyZPxQ==');

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
