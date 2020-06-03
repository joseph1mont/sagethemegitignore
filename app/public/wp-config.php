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
define('AUTH_KEY',         'vRDNbCOugpbkJ1BHeM/a0Oe4ItiqrApNgm8/Xa2Wx+ggRL44HRG/u6KC1yxORfcxVMcFKnFXQpe1rKtdiOKJ5Q==');
define('SECURE_AUTH_KEY',  'N0jkmMpgZmCgGsFAaT4+ufXNinU0zNqSM4o0jsCJXalLapyvXVFfc5ZBqPkmCBwUUW0wXjd7gSTrsiiwdv2Ogg==');
define('LOGGED_IN_KEY',    'Sx9o0lacl1ltiyzt9Mj/OQ2h1SJOmYq8KQEzS4k2IO68aPyWqCIr29gqPeSSuQk87pNs9ajRMCozWTIV0k6xwA==');
define('NONCE_KEY',        'G58zKyhFUsfrgzZHYYJ7tUigTPX3kQzpErDuAHgMrWJt6Xyi62nKu9VXaukoYsM/Wva0PTA/5wSWbYd0a+acXg==');
define('AUTH_SALT',        'lRCCJpam190vkr1JFjT/xlvx298G4tf9rr1PWKdMVgYQx9MxiBa9vq6t6jhL6oOlAlbXEFeBguZfMGcKlVssLg==');
define('SECURE_AUTH_SALT', 'solbIUZK0dqVctyqYrg/mIIDRmmCz+4TkeNM6uFCgZPvVteA7jJxNEhp4ClyTF29Ubd7Lk30GV1J7AmGDe1YzQ==');
define('LOGGED_IN_SALT',   'L3XTpogiWpRciPirsQfz1686skmRXDhQigSgXcL+Jg4tVltO17MpIMwdWq76QJympI9iix4l3bhegJnWk2HOLw==');
define('NONCE_SALT',       'xSiBIXiQEK+7mux8fK+PXXkGWSk/+P+DvEQ5g1/bgN+e1eM0x4RPXRme41m8fKsPwerZwhkP5JkttPImirOvSQ==');

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
