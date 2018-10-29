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
define('AUTH_KEY',         'P=0bH=n/.d0-5G^F}Pv|K|O5^@D*jSkj]5]0d0gm);.N dt`-4a&z~c,bQ~V>2cl');
define('SECURE_AUTH_KEY',  'pAp5,uUk*iE[b-%I>$h(*f{{q$/{_Zk@LAX2y_3h)0`)GVQ1XoP?qvD|cRJ#r8gM');
define('LOGGED_IN_KEY',    'fOGtmlLgALtJZ3jp_7|sQ,Z|Mx8Qo`c`!V305BqDbp5$DL3[F3|Lv$>qV(KTfF+R');
define('NONCE_KEY',        'NWb+&oJNw ]EY{tLIF 1ckSkQzcl+dG*/?k..8aNc8%hWCgsX(U*){uvYx`>7L#n');
define('AUTH_SALT',        's:xkC[Jo-&YREWJ8yao*$Y+Zwr-Wr^6jhm=`-SXwAO](.Up2?t9QVOpNb3FH[ 7|');
define('SECURE_AUTH_SALT', 'y=+UcUdsa/BN+.5UEErWVYJ}0 4LeL%1.#|m=k)X`m;KOOlY*RMzubw?*Q)ogaOu');
define('LOGGED_IN_SALT',   '1(zB&dc<;O(_p(udWQtYNOuqFFTh*:./xH}mXkbHz^UZA.21_6zq*)K=}hJNy`>L');
define('NONCE_SALT',       'FGRXc^W^TzK Yf2So`9rOk{r}cX0 8^msvi;]h{46/4gi1)}yTytRYVB{=/v,!b+');

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
define('FS_METHOD','direct');
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
