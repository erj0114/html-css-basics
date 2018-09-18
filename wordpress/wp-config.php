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
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'newpassword');

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
define('AUTH_KEY',         'AJIs,OJKKZ|aWTb@o:8U)a^|=m)yTNKD/V%:Wb}6xIzu!z8R.}6t19~EsD!v%TSL');
define('SECURE_AUTH_KEY',  '^R+@wcazN<e@o8P^4CQZ/Cf5#i<@!Z$Ki1-V>U!;aSoBtn;ZH6B;BUVtaK~)$x4T');
define('LOGGED_IN_KEY',    '~tSE@>atHsR#~iWza3kQYdgRnt=J-W52V]P)>E*~x0hx>=.iLN76$PS?@h-rKvc{');
define('NONCE_KEY',        'cz20u-8IJoFuph+NNIq0GPIUawpoHG>)Js{BLLlt3q1)P(N6q]7>DPE@&PrJwc6D');
define('AUTH_SALT',        'o2>aNQ`}JhcB)+`skA@PfOke[ZB[yEKL$ 94S&K?a 4.xvd?x)HyFg_r@C@vUF_+');
define('SECURE_AUTH_SALT', '1d1d-.W|;1@wDb|5Rlj,d7^Lh$}k~g7-/wha|7nE,an9Z*>9;WaHXmvHmc71i%Si');
define('LOGGED_IN_SALT',   '1SdaMt3SnW`wTlIDOE2,Q?]>mnO@>&K.k[L`hPL%7BDop#NsY{~|oH2i#&|Y7(Wo');
define('NONCE_SALT',       'x6xnu.zh}s]L/|koLG-zK T~9?DC [,$TGQ 4ZvB!fB/^I/c(-jK>6TiKM#D^Dxr');

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
