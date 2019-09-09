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
define('AUTH_KEY',         'OgU4eS9nOj3NSiQvADHLh+v709jBbw3X4cnfdT79VpveNsNaYPJ6OgrUgllEZitXbSnFGSk2wTsJR0kpRlTZ9g==');
define('SECURE_AUTH_KEY',  '5pt3wODZy9GUGRc6lAoAvGmrlF3oS6V3oKj4lD3ykSO7EUkJm8ztp+yQo+FrGY39rQ05vvWXETP142LW9vJweQ==');
define('LOGGED_IN_KEY',    'm2G0lTXBzkM9+VwJkO9s7ClYB4O+V1YRzjaFFu9RZclf/WXQrcXlQcM1FWZulbvSphHwB+UTFiCjAelZdr3reA==');
define('NONCE_KEY',        '1vLH9GWvpqD2gmYVJfnym45JJkIAGJkolJuZBXuMnb8SMKrF1kwgnezWiVvEbBhEsiyork9hbXBLC2CqdzKOTw==');
define('AUTH_SALT',        'SzJTLXsw9IB52rwXmfm7UjjV6CMS0E07c0s7Pd5mkeId1tR/gQxYYA/qEaHaCzSsaASqTlBkSGmEM1gYPhNnVA==');
define('SECURE_AUTH_SALT', '/I3E/aRF1R2nVTwcdClEVPGrGx/ldNSI5rdeJcpR+w+hEs3UVcBZPdRXX/c9sUhE1MueG7PsW7LXa8COu6AGDA==');
define('LOGGED_IN_SALT',   'ip8WYZfPhzCkhZ1t5nxUKOTrNlC8oRpLytYf5v3LxMWWOIuu/tEJpBRTZtcvyVybmQ9rVWcPHzhwqg5Fvp6Prg==');
define('NONCE_SALT',       'ekB3kV5txfq/F1L7quPhM5hTomw9pDADTnxFwWTZwAd5JASgdCWRNJuLBtopyGWkptDTG4gkCVS8Efh74EmYdw==');

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
