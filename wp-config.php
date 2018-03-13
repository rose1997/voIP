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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'sduser@sdtest');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         '2A1KAmqU]dOA/_l|>C|0Qok(KNP0Dy=KOHF_nGGVOf3ez~y:m|,4B|3gd|f)XjPZ');
define('SECURE_AUTH_KEY',  'hXT1>#}ys9:cvQs7YA8v.Q|IkFC QT#91_#L},>|}+r*1b$ISM|Vc}J~9G?f>T5z');
define('LOGGED_IN_KEY',    'c/Ny1ykY%qq;Ja#:8?x%#s|u5SOO!?X]W+Cc`^1AD-&A>lOC%BJ^G;-a0czNz]`d');
define('NONCE_KEY',        '&|1fnlUc@#^io:!0Jk.+GEBWw:,am+xb9.SH:m0GA%aQ(KB4vw5w&SPV`pgqXPxN');
define('AUTH_SALT',        '-+u+U}`D~Q55uFOM<hEeX.dbc67qKy*TA)/A]BEqN7U__9%K+GJq>m)<90[K;F$M');
define('SECURE_AUTH_SALT', 'kP-CgZ$m59Egk!CsCk2]j]Y#-6:ZWTXquG75&ZB,`]<D4+ERm=s3<9MsQ,w~_Ifr');
define('LOGGED_IN_SALT',   'w+sIsWgsq<.so-po(KSly>Q*9B*A(;||(T4p,smSR$B]4w8[Tt&]0eB<nwqXBUF!');
define('NONCE_SALT',       'tq+[%Cr>fh/U]CcAs*0w6!F;|,Q@{_jL4X+1/R,-I)uOR9ngdoZUY%YF&soU#STC');


define('FS_METHOD', 'direct');
/*define('AUTH_KEY',         'put your unique phrase here');
define('SECURE_AUTH_KEY',  'put your unique phrase here');
define('LOGGED_IN_KEY',    'put your unique phrase here');
define('NONCE_KEY',        'put your unique phrase here');
define('AUTH_SALT',        'put your unique phrase here');
define('SECURE_AUTH_SALT', 'put your unique phrase here');
define('LOGGED_IN_SALT',   'put your unique phrase here');
define('NONCE_SALT',       'put your unique phrase here');
*/
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
