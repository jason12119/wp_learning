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
define('DB_NAME', 'wp_db');

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
define('AUTH_KEY',         'D,<v-x2c]8bP_#~+/sn.4t{+hxBK#CP}_qr0WKT. Xs5o%&`so~{=$oKtd5Q$wsf');
define('SECURE_AUTH_KEY',  'Lb+>K 3`A:}01{V15WP/FiE8f.`EL1|WrExht=Ro)zMC$.ux8Ka+R)/fmM%:&Z5K');
define('LOGGED_IN_KEY',    'avOR9YVGg&qJe*JE1@70y|s+}.qOp&=Ck8cQ;WhM_BP2~wFy<zaLU>*PucbwqN9]');
define('NONCE_KEY',        'nfAao-pw#jU:@9!F`#u_j1o=VzvaQ#[=3UGHg}v,H:1p6Z7I1~=&vV>xZWTgy^EL');
define('AUTH_SALT',        '!v{;-sL7GZrMLiAnS.,wU<kO[c3Yw!HQt#k&x9:0oN9]*y>i@F.9dj[U{RCvl2DU');
define('SECURE_AUTH_SALT', 'OQl@*?q89?0WJCH-wfh_]5z[V93o=dGp>{p:MY?TbL=:$zyaILRVs#)w~(4-LK^&');
define('LOGGED_IN_SALT',   'VEnVH0?e>pbO(pAONf6g7m,(VDlOaHw|#AB*!_&`Ydd-0cpl_eX8k$yxt)Y|4rWP');
define('NONCE_SALT',       'oAsq`p294~y+)H-(n?cj&~a/z,@aHN]k(]}i]UxGUnY,[?kE3po#ZGmd7MdW>>r ');

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
