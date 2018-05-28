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
define('DB_NAME', 'local_working');

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
define('AUTH_KEY',         '82/lWrKVD%u~.uh9)nel,ze?.,HXVdWLk;m,a$lG8N=;K_ r2XMpF{j|0T.#>N25');
define('SECURE_AUTH_KEY',  '&#nVy>Gv-DVh4/acq5G+qA*R&CYbR*yncD+sf@elJr9?17h~wJ,f,sK=d^#qn8&b');
define('LOGGED_IN_KEY',    '.Fim3sM~*tk0_#Jhti^RZKmG_0L]^zaGc]8?i@C!wV;RENTu^x*9IrqOrh3j`)T^');
define('NONCE_KEY',        'T7=oT<g}A{S|OB$<:&<xm5?u9TL|;<q=D<fDHI7J092}I:>IcB<IC=gsfmD`SW~w');
define('AUTH_SALT',        'Ki?S*V/KcWKt*9l8kEzX*ka=ZGj{}0bJ4)XNZZM-MaEFC7Mw1]1miiKCa)fuU1uz');
define('SECURE_AUTH_SALT', '9,LcU $S=WVs B[rjUA+}1>[:,Z/#lV?rlTwRnJ;-jW@8(g}ISy/wp[DvH8_j:!8');
define('LOGGED_IN_SALT',   'TXVr-|+wQXlH6)jS6:vVG,Z0{JCOZDghWYJ#G7%w5+t06`4*QiO@VjDKznbdbzrH');
define('NONCE_SALT',       'O:9]MEkFXhYxJey@BuaqJHN}f2FrZjftrkBn6:n4o-`HHEK7a+Jz57Vq*OkHMz{ ');

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
