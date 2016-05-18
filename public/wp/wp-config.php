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
define('DB_NAME', 'test_wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'php');

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
define('AUTH_KEY',         'D$](|x<ZX/rHiJq|j6vy`wp_%M{zvwrC>>I[+Ty<XU*BIt[uUb@QYj8mK@,O~gr1');
define('SECURE_AUTH_KEY',  'Gj!h$1a7}p+s2;#1j&0+G^SpY:t~_+5{Aq_Xk-G}d6s+,T+y,>e: s}AzYCqQE^+');
define('LOGGED_IN_KEY',    'N@QWgz8tqrS VNgIn&*x^0;&;li.]IM^Me2:+]*<az!3?|YNgveAd#/J)|+0[Fi-');
define('NONCE_KEY',        '&$n==&YM$`*<IeL}[rN9<kvYuWP?H318:6M^,lq:+E;hFX*3ckKP>WuO*.k?>;(+');
define('AUTH_SALT',        'Fo(<!0|%6zp+&&FLwrZ|sv^zc:Q>}+x7AoJ+8G*[u.Mqq3b%`7%@~=R+N)G3[Fmk');
define('SECURE_AUTH_SALT', 'dsdExW2IG]t= U[Rl1vMjo?uvGO|1Wj*Uil@zF,e;CRuiZ-280K=?Yu-sB&lL~L~');
define('LOGGED_IN_SALT',   'fc3H@9.5^lBp&|>ZCnI{PO<UXe`,v,:s`lZ#uRj$d=dVI$|X-)^KT:0N0G?bFn:s');
define('NONCE_SALT',       'UyHk]kD!.k9y%^y4gSOBBz&5tUyN7<:$L[WG~&MO>p!b$q2h=,xSzC[VcB8H$FyO');

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
