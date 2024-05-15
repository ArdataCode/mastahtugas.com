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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'websit19_wp433' );

/** Database username */
define( 'DB_USER', 'websit19_wp433' );

/** Database password */
define( 'DB_PASSWORD', 'SF)51v1(pD' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'h77tqcjytstphcsscybuqzxlgtzhptopni1solvhiv8pwugkga2fx9aqcwabzwbg' );
define( 'SECURE_AUTH_KEY',  'l3k1wa5bsxpqv5n8i0zbj54hjev2s7fuo6mxydogzp2etz5j1naubxbhu0seb9rc' );
define( 'LOGGED_IN_KEY',    'bgb08jwv6en426szbqad9jjfwhfwpljhhdx4zk0dhidohdnpbhyutueugsnjs2uw' );
define( 'NONCE_KEY',        '4l0c93mrjwgohpe3fpxczd7cnoz9mncex4jxzfgbpjz9mltw1jmerdtvexotlxih' );
define( 'AUTH_SALT',        'aectd1wu4fbnapjfivxq4ellz7jisgql7qtbxy0cc0chqszsiknbe5jpqe992cch' );
define( 'SECURE_AUTH_SALT', '8ta3pc7ghv2vcctnplve824xf1cplmygxex0fdde8pbxu3l0wofi3wrtk28kjott' );
define( 'LOGGED_IN_SALT',   'ldg12b3fnmekiyhkr6fbacajke8rwdbiv22qvrkoyidudpwmob7gvjma2auc6d3j' );
define( 'NONCE_SALT',       'pwys7wktdxh0t3xrdhlepjxggwgrpcpsjx2cg2343mjehhyr33i7fw2n3yflrjkb' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wprt_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
