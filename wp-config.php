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
define('DB_NAME', 'wp-safesteps');

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
define('AUTH_KEY',         'j.M2bT8._XWzBw);q=[l10%Q*3LlphD(4-B<=Oz,eF$-?Jy$-%[|2l0CbYHAXI0B');
define('SECURE_AUTH_KEY',  'T67sF?fj3^}Ha:q2v!>l^MW Vi.lVL;$WrAo1m^++L``-)UE4}>uH6;&`Y},1$^s');
define('LOGGED_IN_KEY',    'DSzRa3enk@@7qGzL0^*>0U[S~HPji:yNVw1E-++Q?7n:a5=89]g`d?|8yX6(D_[,');
define('NONCE_KEY',        'z-qO-V_+IBJSocZ8{vopa>RQl`(.-z<iiP=@mVnuG8[H=:?RNJWl%[hz.hX01(8e');
define('AUTH_SALT',        '$[hxH7tLGUU3uVZ3O`xdQw+vN-0I-)6k|j9N+0b@oz*)lp2Owel+`/2+kQYH6z3F');
define('SECURE_AUTH_SALT', 'ssJ*m5Oq+|` vav:YahH[GEO18KE{3K5hd1-|y]{=4?m.K^4a@[IR; uqZ#mb|rB');
define('LOGGED_IN_SALT',   '4B1 snN6zA=oKM@>k+@0xezkRZl8.<N{59}+/{`o?.-]mk%-`}jdid--B/9%g5w@');
define('NONCE_SALT',       'xez@~W>EHNjm:=elf#`(_Y/;O+7wL0{F|SZYoy[,d=9MV0M)iN4o7m$YQ:s{@|-U');

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
