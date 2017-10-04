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
define('DB_NAME', 'tunfc');

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
define('AUTH_KEY',         'hnH,:qY}qkls`}oSwxz$UD]:c}Qdr9ph8(+:X^V~QHN4?EcO%_Yg6=6V}yf513Tr');
define('SECURE_AUTH_KEY',  '_Yl`!K9eO%.l}@M/W)}*Az/=QiDJmKY3]K+pPa8~3^/0lc56jJbIK,{`C<b:$`?6');
define('LOGGED_IN_KEY',    '=|fbI|hou+Mclv,k+{/to`F[+MisO5LkhRrOf~z/:*BNH?@W*cU!(;QGiyM6y4o_');
define('NONCE_KEY',        '@;gqU:r*}^$&pCJ!z4kUtVEMp9ZWT!a$<U_<Xv=f$eNtn%(oieq}!?U;RXicgyh>');
define('AUTH_SALT',        'J1-o956 T8#i^z_zu*]8C<nUc<Y|!pli*aT[A#x)BLj$!q#4Z,a,,?(zx]X9*$d#');
define('SECURE_AUTH_SALT', 'uQcrC:WH8$Rk-VOi(l:8bmyK,S^nP3~fPdEp6apk}tj0:W:q2qH(Q+OM,Q[.CUSu');
define('LOGGED_IN_SALT',   'p^D?g4=<d),v^V|huy=6bxc<s*h[giMaO.][tK~J&|aQec)6ls_L6;o,E/Ffn^;T');
define('NONCE_SALT',       '^5lwnB>PZ=Ow]~@ !L@|)-/,Xjli,>Fl|i 7FML:/lZh*K?LJ!q7s{6ic)>v/2#w');

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
