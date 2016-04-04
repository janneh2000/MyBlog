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
define('DB_NAME', 'dbwordpress');

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
define('AUTH_KEY',         '=?=9K&:z$CO}amt^JNU{ld-OuQmB?]_Dth~BjdMIR2Xx.+%orEANklm:^NVIlT+&');
define('SECURE_AUTH_KEY',  '|]L}3%9|q=Hb6lzTZO6mgvX{)i^q%&,+fmIjUGbe1x*XVgLFGd hqG2AwUAK -{#');
define('LOGGED_IN_KEY',    '2-I+!Voy<Rd8?)7Y2/ #)+76MG$EH|?r>wt~<#{G}05hhJaX-&z2-RT4mxrpZ&vz');
define('NONCE_KEY',        'tZRX38;g >7GO/(W!JdM~9K^F4De].mYqxx|UTtK|[`i`mz-k!;VU6N@H>Os`#b@');
define('AUTH_SALT',        '!!,$%q#44>dP6CO-xENR0_>LixD+.qO5G.M+e;UE{ZzX%S,`_W[g]qgb0u$dXb&~');
define('SECURE_AUTH_SALT', 'hqT7T_*In)@$O+K>Iqsr)L+rR;-ywy=XTlU[$GR@g+*y S6iA{5iGv8XQzW&}/p;');
define('LOGGED_IN_SALT',   '`{W%d%GI2<$-6GY1D+jUMXAQb7)6>BnlDex*Ikkh5I&[W_cg-}yapO8j,&ps@7(!');
define('NONCE_SALT',       '+pee#a^tBt(YG:{| i)WDv)N3=V.$<md7D_WW[b7(]9w{o{9xg;7(,X#8JaI$7-u');

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
