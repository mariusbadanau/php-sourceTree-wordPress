<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'test_wordpres');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'php');

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
define('AUTH_KEY',         '4$E?|>Ohw#&d5^ep@+Kw+ viKYr|u2H*$XZJ@4)t^0OQEkN8+$L-C9/sQz45Pr+q');
define('SECURE_AUTH_KEY',  '+pmD<YQse+b0cL>p~;`u!=lCG:!yX^Qd_MSeTS.R+#H=LWj-=8LGW/7$tOrtv|-P');
define('LOGGED_IN_KEY',    'fpb1ST-g5FUz-<dG`o)7,|9o!(Ar+Iv_xQEg^cVUo4-4b2@QvY}8d9]2PyV>W;pK');
define('NONCE_KEY',        'HBx<9uRSuSv2M71t]O5r g]7aFYT9yzGB-t)ns>~1R<LjPRrE_P`diX>e[1m5>V^');
define('AUTH_SALT',        'ne0Y|mhlTLULHy!JC>3iD}?07uWR4?fS~oHL^>AyPM/8/laTfxPtmE`_77n6%vZT');
define('SECURE_AUTH_SALT', '1beY@gNjss<1C>N`oL4A@`>MCPN{OhIE,Ohyddq/Uvi,LHj(qD3EvK!Uh^b.FZt@');
define('LOGGED_IN_SALT',   'pOIMSc$eD|02a88BgO!+kd|jSF;]KUP*QS6)!{`)--lZLCB 1Fm7GIV c-|,/dz5');
define('NONCE_SALT',       'zG8`](>Z-]q96M@tOeb%LVVjuw{3xlwK0C:al#/d{xW<zdAWa%Ct[)w9[|Jc@E0)');

define('WP_CONTENT_DIR', __DIR__ . '/wp-content');
define('WP_CONTENT_URL', 'http://' . $_SERVER['SERVER_NAME'] . '/wp-content');
define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] . '/wp');
define('WP_HOME', 'http://' . $_SERVER['SERVER_NAME']);

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
