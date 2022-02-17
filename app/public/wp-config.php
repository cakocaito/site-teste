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
define('AUTH_KEY',         'EjBTQyqSEmaBwFpUuu+b6dnv9MP3sVZ53E5Eyk0B1uHOvTPOZIYeB5gPSUn6Vho/HLdElZrjaXJZmjrKo42yTw==');
define('SECURE_AUTH_KEY',  '1/o9vYSavnvOifCmFZsvGlpuQ8G2brEL6DWnjjsASSaGZHpeYLHuqZkAAldCoIcVyl1ggPq0LEZy08Cd1Vsa6w==');
define('LOGGED_IN_KEY',    'eNXEaJQBWCeaEkou1RiX/ZBaEH/9/ndLsG0q+bKdaZnG3R+NgV/tYeBdp+UFYQauspWlaT6TW1/1Mh+hxo1B8g==');
define('NONCE_KEY',        'slMTJ13W8D5Pvm7jyPsorIy2wWU6VteWQ95vIA+CuqTRK2xb+xQyknayuotTvPcB/qyheiiMtxHOCOaoVtxnhA==');
define('AUTH_SALT',        'rHGV3cSE7XZqbtUEeJpg3RqfTcryPMucQxUiG1US0Ybm235HkbOLCfrEZVhXL9GIa4lfMgqg1tTgroKw0nWIeg==');
define('SECURE_AUTH_SALT', 'j2PPHol95/pTVeXC53Ribp+ttgVAzxF1AK0N2wVgwktLWNsgnF0mT4m+8uzNtDDm/Jd7+gGODmXMbZtXYYBr1Q==');
define('LOGGED_IN_SALT',   'SqvUgvesCkkeAN/EYvqsd06qCI2kYL+JcrVXs8Ah374pBP0kfO512HqTL4DmIAQORdfGzzZi6gMxAxFy40BcWA==');
define('NONCE_SALT',       'K7U4BqJjdcvrySlbP2kYkhwhKFIfIO9dDVtOf0TbCHHeNUldFruVFO6pftXfZwu1KEXajlKTz49l01uG0kBvJA==');

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
