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
define('AUTH_KEY',         'iOdXHoxX0sGCd8O7MYiYdCBJwal4gtsDyFLTPCn+DGOq8SWIZDKO9wXBQWklM0Rcy8Ui5DevPFmxCuVaTtsdUQ==');
define('SECURE_AUTH_KEY',  'SfE4oAomaMKrYy9PNo6C19OW24t4wdHYpAZ6B/TcqtcYzXM2M0iwnQVumz37941zR689PQ4NrPPvRrOO6ECEfA==');
define('LOGGED_IN_KEY',    'xiYOakYYITuOQqPy+GhIAYC+/ubU27z0IgANyQ402VI4A+PXqs8ikMqm+rmTOpSGWze92o1LSUyMpbrrW6NwWg==');
define('NONCE_KEY',        'oN2ybF/PEH4QzLrVOaLEaTlnVv23068sGmy52P35k7f2GjvyvGKnZ28kEgciZDbay1BCtEc67BE+iCXucaOECQ==');
define('AUTH_SALT',        'ZMuzve262cbVAo8139MMYIutv5DW5Zf2bn6Qox8R21rxR4yH6PpvdQ6kBw/5ZxnlSWiTHpsBLD2VRfQNp63JkA==');
define('SECURE_AUTH_SALT', 'yCM02NhTHYqjDsrMjFJmfAWpXFPGLDD2LFBeHfIuEk9Cc8viBmaxXPlKVg+kHU7kHU2N1lNBEffxUWEKMR1N3g==');
define('LOGGED_IN_SALT',   'fj9NMLnP1CUpRtFcsFAt0Er5Ocghc9Nq1VUOLd/ojk3LNHgZVd8dnhRI5lXn/Uiikh5T8Kez2320glCiYn+d0w==');
define('NONCE_SALT',       'g18OeqcWXOfUkdA5EYv6SBX+xTtXms4JIJ6H3PnNIWPm8J/mHPFAui8VaIy9ZtgPz6a9N8YclqO4Vj6yLw6R5Q==');

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
