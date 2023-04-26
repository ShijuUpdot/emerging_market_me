<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'i7011800_wp1' );

/** Database username */
define( 'DB_USER', 'i7011800_wp1' );

/** Database password */
define( 'DB_PASSWORD', 'G.CQg08lH1hoxEOLLlI00' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'wNKWRGyqKcTR8tyoJ6euosy0jkEfLVSU9NrIhzA14UaDaAcD4mCAdQhScBkXvVdG');
define('SECURE_AUTH_KEY',  'TLy7nul4sOxExz4WPn7qoQZ6GpKxp4rqy7RSdNzZUjkxe5mMhD010hUB2zzVwQxJ');
define('LOGGED_IN_KEY',    'afgcM5NtjjQtHwUmJtB1qisAUm4DzX3Tkysw8TJjqxDLohynbb9LeLkWRlnluwlA');
define('NONCE_KEY',        'QR6qAhhRJ0XIiw1MpT348hvLIr6HjoCElQGcXH20KhqxI3NZgm8HKVLPDhYbW8yD');
define('AUTH_SALT',        'XBIA6fSBMrg44OoEoqG0bacb1N6GqSXC4OvB4jqOqrIeEpEo3S5xSpplfzKiol5V');
define('SECURE_AUTH_SALT', 'VIxLvENMlVlmEaWpXMB7UOq44x1vU6BRzuDUDG5gEtIxQh3RrfyFlvp3gRehDuEN');
define('LOGGED_IN_SALT',   '8b4TDOXRocM7v95RXF6CdlRTCpUVBiXeQsJtmRL6TUTtvIv5eS8lVdepLGDFohSK');
define('NONCE_SALT',       '6MpaC5dHP0ThTvH8BosxloTwQfMmA8rjmnIA6wioB4OKgLnsnUBXg6CUdi6hhmZM');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');
define('FS_CHMOD_DIR',0755);
define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');


/**#@-*/

/**
 * WordPress database table prefix.
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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
