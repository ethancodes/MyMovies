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
define('DB_NAME', 'mymovies');

/** MySQL database username */
define('DB_USER', 'wp');

/** MySQL database password */
define('DB_PASSWORD', 'm0nD4Y!');

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
define('AUTH_KEY',         'WE,%u9y/*owBz_dnTqPM4^Vwu [2S@[CQU.$5;_jwI*2hKPc~Q:0C36X+Jb7ee1!');
define('SECURE_AUTH_KEY',  'YkXHP,9h*|c+gi]FvF3C^ ,!85E(,{*2fOmpuSBK:{SP4.k-RPq;]V[=G%5TrMZl');
define('LOGGED_IN_KEY',    'QMzg#A$-a&*Y1?h7qsg&zjTa;E~GAJ1jS`ug~A8qFw}3E%f(sv8vvLQV!_l3!$uT');
define('NONCE_KEY',        'K,0!gXa[QQ%[z$z|o1}4.GmM-&wfGQB!MrjeN^r /B`VOg$HY83!_^g_Cef17S`m');
define('AUTH_SALT',        'k3QkQd-Y[Bffgnky0ES{_Q%Sk8<[LJ}DVYY+2!E*qj8dl:qCALMkEsSW*0sSP~u/');
define('SECURE_AUTH_SALT', '2Z[r_6,BGMR)MqX# t<O<lnP+K=UZ1~-c4b.G%v#`-H2bomjI=YEL# U<i!Z }D ');
define('LOGGED_IN_SALT',   'ZBezLF,Q=c{h?M5Cd/=8_GC=MQq&d&)_Sk%5rGrw7r#t*(iYywLW$sig2^C1/}|F');
define('NONCE_SALT',       '.qn7c7qhlzY#I[,FIv.IE:ztPs};4!IdQR `C,bNBk|CdxoF%=k7N9+yaZ:?X7YR');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'mymovies_';

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

