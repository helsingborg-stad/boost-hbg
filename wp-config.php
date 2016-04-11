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
define('DB_NAME', 'boosthbg_se');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         '24/M>qT`R$do<4b3#Pb7Yt@L{ @Q3J.$Q!{K^.^,dF/t#@sRwB 9NIO6qPz=DIXG');
define('SECURE_AUTH_KEY',  'n)Z8Y<+|R$NhCeJVH{3W*m_U.$4h|WL-3aLlp]O~z1<scIk?Yy/1TWRc]v*Ld}f-');
define('LOGGED_IN_KEY',    '7`otQ-HDc/1reHS#ID5-a+wkV@#WEE)@`-j)u5K.wP2PppXCud;uEC |&AVYN@T@');
define('NONCE_KEY',        'd81M3z#dwo2I]6{l+a7k6>V2k-U.FB>dFwXiYe7_>wAyqU?+#A]W`<8^|L1?US@F');
define('AUTH_SALT',        'TX[$2!KS9({8(s_[T444D}E`S)n&>!O%l--Letua_{2rqHU^sZQ0YlpzWPNw1M~g');
define('SECURE_AUTH_SALT', 'V`-B>7c|xf(_DF77&?P{{(rIFqX908qr^Bf,QXH}t^ODp%Ov5w@E66WD8pSI!y/P');
define('LOGGED_IN_SALT',   'J)aXO&Duz]y!W.0p[V)LEGgO{B#mx%#8DI8n2U&z^f$%++FN!]!w-0w05ZuHv$Sv');
define('NONCE_SALT',       'cV~8scglW%>%?>N-n(U!$[j}Bw-PoR-5ftx_@o!>||7hyn3]#Lt5&u]@$.)ofuy6');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'boost_';

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

/**
 * Tell WordPress to load from local wp-content, and not vendor wp.
 * @var bool
 */
define('WP_CONTENT_DIR', dirname(__FILE__) . '/wp-content');

/**
 * Tell WordPress to load assets from wp-content and not vendor wp.
 * @var bool
 */
define('WP_CONTENT_URL', 'http://' . $_SERVER['HTTP_HOST'] . '/wp-content');

/**
 * Tell WordPress not to update anything.
 * @var bool
 */
 define ('AUTOMATIC_UPDATER_DISABLED', true );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
