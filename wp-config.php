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
define('AUTH_KEY',         'UljcEL9xopETE9se7|DQ 9:z=Rr%Bfw__QTpRz]5v2v K]41!/i36h7+#m?70!T=');
define('SECURE_AUTH_KEY',  'HNe]~6W}XkdVEo?A:$UFl6CF5A;ZmmW]oi!/emjj/< 6^o+U=6Pg;z2=Lxna:ksZ');
define('LOGGED_IN_KEY',    '#o{Vqt-L#Wh~C3rsWvRk~1,ngS~GC5uu[Ov]l>M,h_?T[3Bt6Dsz]8HI6`ebdI/e');
define('NONCE_KEY',        '56$a6SY5=csG6&/cg/U 5BUQ7A(L&,|A/VkMO@MMgLu[b$MX=+>0sw7Lx6PBu+P[');
define('AUTH_SALT',        '$UMtsTRrOg1ij #1DeO`EV5BJ%TdSx}C64bL RqFP![Ghq5d:LZ/p072E4+p.(I.');
define('SECURE_AUTH_SALT', '4KW!%Am#.@Xrmv^Y<A)[U`!JW:%,-sFu?&3/C{:iL{?qjxg@WJ*p(uQfNXJt1{}~');
define('LOGGED_IN_SALT',   'z+[5|G/^!lc};;Y7y-=Qh<C_k}IMuSa^3eh8q*#.6kJb!g~d4a]]B]w*PH<^M%L6');
define('NONCE_SALT',       ';=<{a)@i~v!v,2LnzFAa(rApAq!=zK,z?3xPT+x#u*;dtD4S&8+~gn|UQSKR[<6K');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
