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
define( 'DB_NAME', 'test' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '94#M,B3=qs8`JD66A=|5-iRb3zp$Dlb v2E;i`fxxa)QQE</w6D4:[C$6:NLzT F' );
define( 'SECURE_AUTH_KEY',  'R~JtBQb&jL+^,<IZG4%zp|88,hb12];^q8)tYzpECtTz4YLQzlqe1GEt0 #VlsxQ' );
define( 'LOGGED_IN_KEY',    'E5i;xAOHg[PZ-i06J5+HFR7KCXr|hY#J{b[pO6L,.tot1&L-`komX!4EiIh.8/*M' );
define( 'NONCE_KEY',        '`zno>llUOo[49W;/+B/|}7jdhf7 By/p7TsSbZ&6[sa.[t, rqCc4/:xd;wL`GS@' );
define( 'AUTH_SALT',        '|nPYo`,+/k/PxPcAHl1!:k7PdP0QoZ9QJ<PS8X|=dVl?Pt7u?|)S;pFI1y]3;jA8' );
define( 'SECURE_AUTH_SALT', 'S3bAY-W49$}_WtD^OrJ|a6k0%[^WWC=OQ+^bYv:LX!Y+?)}*rZ}`4-+!]uMEFMd+' );
define( 'LOGGED_IN_SALT',   'z#HOc%n~+oX~[RVE$Pu} V3%%MrQ>uw}AiI};o[{f|Ue4Nn[(L1F.#ze,:.?BTaz' );
define( 'NONCE_SALT',       'P0p(]NdB}+_axQ hEanj)CwF%8-]_=5nYtDPEhLls|RLiwnnZ{u(=J[6D( #60M(' );

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
