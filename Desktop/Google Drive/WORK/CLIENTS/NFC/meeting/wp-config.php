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
define('DB_NAME', 'nfc_geometrysf_com');

/** MySQL database username */
define('DB_USER', 'nfcgeometrysfcom');

/** MySQL database password */
define('DB_PASSWORD', 'yNpWhSQ!');

/** MySQL hostname */
define('DB_HOST', 'mysql.nfc.geometrysf.com');

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
define('AUTH_KEY',         '&spq8dX"GAhHKNVo@rZn2yMlcX/_#gF:yGffAiKXH!vr59tJqj+T?`a~S%S$Ij(;');
define('SECURE_AUTH_KEY',  '(Qz_U8slFO9|~VtV7m+kcza&S`Lxu5HW&^GVyykUN2zdQD@uTfNh2O*GcwcKxV$m');
define('LOGGED_IN_KEY',    'N9:ze8w"SpoZad/h~24%`_!/0~UC)7ckOh|IXgEuyX5%aJ2Zgfb4zjpSh8X%4fCv');
define('NONCE_KEY',        'qF9q4&%DYbhTx9`pWs7^rIS3k|@SdpW&_:|Y%Do#rV&iCBJv^()HL7thn|#/"I`0');
define('AUTH_SALT',        'Xe?D#Vx7N(jmwCHpl6GD%nUA1osgZ1&0BSt("QY$(jhc`u2ny@7xEUh#QpFw/ZMb');
define('SECURE_AUTH_SALT', ':/dkHj~kmBY3znjw~U%jL~SnkKj~zOZ++Rcc4me#mKF+M$~PMVcLr&81rid%8/yk');
define('LOGGED_IN_SALT',   '6y&1`pewp&!o_ueXGvb92|2+LuGo_a$;hgBPcyKKy02!%|ZSA2dSpU^&xKx68$a5');
define('NONCE_SALT',       'w%BB;2`&okA9XV@dr#ZVl1Chvq2a%*2WQ_:G%/2"hw"9hUUWm62YavbWgH8?zsOq');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_pidtvb_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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

