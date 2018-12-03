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
define('DB_NAME', 'practise');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'Mi)Y%eC0}ByXWp&fbzV<Wa>$+5{au7eF+10W Hx>=syWI<WdF*>D3YYCaCqY#%;f');
define('SECURE_AUTH_KEY',  'Hug]Z@oXPT4E DqL!xYBxTJ4pKa$IK1z[g)uWz4W]!/s*^+8r70 .*WqO1k^NoBQ');
define('LOGGED_IN_KEY',    '<;M;{-HUI(1$|%tKfdbi0cC(8;:hPn evJ|Ida>{@2B&i2>=;yFH6;xnvNhzN,T2');
define('NONCE_KEY',        'y}m91uKOHnaRW_f.)s^_Q+}#fal% .3NsX.dOF=%;nLcT2bXKiSW&;N+1=^Wm>Yl');
define('AUTH_SALT',        'cz<^peaN|KI=#DC:A[.):SIPm||w-6-hL|C[.[NW~cBl-VB>!z*PFwC#7l0vEKrw');
define('SECURE_AUTH_SALT', '!:`bksKU~@Dmr-,{]~vP%.G;]z})I0f$E@|>I6$+EXgh-xeJ7I2d8}|>#7/pF~Uu');
define('LOGGED_IN_SALT',   'g=NEgp.[<c]NhfN|Vo!c5k}lvuhCzYP^}Pe-rcg1k$-YH9R F>$ Y1N%=i)t0t+y');
define('NONCE_SALT',       'a^TWp/$&li$[,aXzv&TO$v^Gfyg]Xj}].v_3C>vEdeP<&k;XQMJ?(3J9|6S|WiIa');

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
// Enable WP_DEBUG mode
define('WP_DEBUG', true);

// Enable Debug logging to the /wp-content/debug.log file
define('WP_DEBUG_LOG', true);

// Enable display of errors and warnings
define('WP_DEBUG_DISPLAY', true);
@ini_set('display_errors',0);


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
