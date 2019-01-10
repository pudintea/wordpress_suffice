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
define('DB_NAME', 'wp-studio');

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
define('AUTH_KEY',         'K=AeK$Q3;o+]f{,?$&c6/#b<11r!n.w^[4b>tc:Ojy9KlS`nB-8UDfsllA}&9fLP');
define('SECURE_AUTH_KEY',  'Fg3AjPB,G+9Lwxt-Bmgh{,2k~({*wp?}V`hX7iD}xxnZ,=bFI7Io/4H/5=+F{0Vm');
define('LOGGED_IN_KEY',    'ys70 c9?]/=4*CU*r_;-GAa:m(xXCD{<BCB;xL<b@j|Qqs4l%6o6M{9L3z;:Q?=e');
define('NONCE_KEY',        '?ZSbIfSS> jS71Uw]h}u]/r+8XF3[P?U)N8pkljX7{I2/nz77KcUZX2nfvrq!N!?');
define('AUTH_SALT',        'oQyIQ%Uxa/7vX>M^{_8UF4c7?`zL[V{W])m&w@%xhtP49(yr^NF)~3p[{?0J( AS');
define('SECURE_AUTH_SALT', 'd&~~&ag1#TJS.HhdT3R:IKL$J!WfrV#]aP)/2!tGR`m0R3#/}JIGYKcFh&Tbm)J2');
define('LOGGED_IN_SALT',   ')iF<E4J1[i8A`$E4n2E]&&U?kuUA3OFC`FLk.D}*mB(n8oa>3j&S=O*A`isFGl|.');
define('NONCE_SALT',       'vpt,HKKcmq=;^0r49u2c|YMQItQK/EvUT#r1Yw!+0gdwS%x|}z7C0@O}H6ha}:Kj');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'studio_';

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
