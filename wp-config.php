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
define('DB_NAME', 'myportfolio_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'wo H[Y[cg%sL8cex`S-.{Jnr1^88Ig^I=fHdQer+KK4r:RM 3IzhG>?%vL~U|ex7');
define('SECURE_AUTH_KEY',  '_^D@5|y#rBJWOT<K{bl]BcJeHQa[;9<;}^PTlt3^h9Y]p1 0xvsmK?w+UJ(LsFv-');
define('LOGGED_IN_KEY',    ')BG!+/lOV!FCJ  d{tFa}_;t24%((OUvN2-!*,s1s9z).Kt,5y,WjL_d@j#.H9KW');
define('NONCE_KEY',        '$VM2Uc,RDAEDFDd*)T`liPPy]mfjfkj`Q|r8Ug4y./%>uQ)hO]D^tFrBes;kJ3E+');
define('AUTH_SALT',        'S(K2wPhoL7;E3s&3$tx[?3H%~U|@$yYj9WiCk,8kk%~@mXDNI5%*e3 HIQ&_3=Sd');
define('SECURE_AUTH_SALT', 'qx:1|XcEq WDyk)4FF9x6g&cXzWZk82E0k&v VqK3}agD)]jDfPdA.^T9^A8wC$U');
define('LOGGED_IN_SALT',   'v+=lJ TI 7Ru$d<EA1m^mRL(zu[MZ12*9ki=34GZ+`TDU;Tj0)s*HUXTp_0G31Bx');
define('NONCE_SALT',       'SYi-Y#]t>{@):NP`v1U#y_r,d4 fHA;2m^^JYDl&2r-TReV8iE>b %^=dScrtl5x');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
