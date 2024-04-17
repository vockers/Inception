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

define( 'DB_NAME', getenv('DB_DATABASE') );
define( 'DB_USER', getenv('DB_USER') );
define( 'DB_PASSWORD', getenv('DB_PASSWORD') );
define( 'DB_HOST', getenv('DB_HOST') );
define( 'WP_HOME', getenv('WP_FULL_URL') );
define( 'WP_SITEURL', getenv('WP_FULL_URL') );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
* Authentication Unique Keys and Salts.
*
* Change these to different unique phrases!
* You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
*
* You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
*
* @since 2.6.0
*/
define('AUTH_KEY',         '7YgP50e~09V1|H1_6~XH,>C}Lhn:A2uUD-#|J|rc[?EN{.=cJ|BeypN_y_T6Y)|k');
define('SECURE_AUTH_KEY',  'ew?,9~;5sNA?L!hrXPE>+[oH4LTA(d^0z9*  [-1[s$PgXzY`gQ=6C?mz~dJ U?_');
define('LOGGED_IN_KEY',    '?_%^LD3|ggl@-Q9#~P-g1zPRv4Y`!.IiV*1dl,ZO&%o>Kx&Q0J3]~UaR6UnG0-P,');
define('NONCE_KEY',        'q!YRpy%[ZqeI}>xv@fsdhmq&@CoD:}D+I|k)/L|O<n3-bQ:{Nt}G+R+t8_44#QJ6');
define('AUTH_SALT',        'Qmh+[t[D7]7Pec{2q)EI=}`CKVQtZ,~}zm3E=SVQ:G:Fj#9XbfT>[R}hvZD5qKVB');
define('SECURE_AUTH_SALT', 'P0:/IM&X{1c(5<*D}+R%+`tZ2vz.ds_ikIBQ|i3@/|oj.<^;77_/i+7jd+V<EQYB');
define('LOGGED_IN_SALT',   '8#?0P8L=[APqAmucIV8!j5o`yfz]5lX.:$BJTy]VRI{bf+nj-~}%,eWk5|_wxp>%');
define('NONCE_SALT',       'B8tVpe%WYF:1$:+hW<q`A)L+/qv4**7|/M@hC?*<Oz0^h|}TnpK>+X:~cEb7nGp:');

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
   define( 'ABSPATH', __DIR__ . '/var/www/html/wordpress' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';