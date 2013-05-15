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
define('DB_NAME', 'nasl');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         ';,3|{1K+J`Yg$KIh2!c5-Jf5hhEk?I7>c;@,/36~I2/+r7l>,&$#_0-T,9|de{c ');
define('SECURE_AUTH_KEY',  'YR6w{&aCg<%e%`)hyPJb9}1mzGJcI4X1BTHU@vQc|nJ]0I=?a %u|*V(m9U-Ji_P');
define('LOGGED_IN_KEY',    '|i5ZFV&6zoQu{j:VSp^epJ~~wHV2]2tJ-KN0L]E&XC1s&n~ja<R@[b-kRDLU?$.;');
define('NONCE_KEY',        'WvWZq,[hCQd-T*r<|;CN:W(0JIz0oXTV^:Q:J!_/7ta_Ht=eRnot+kiFW9eK:MMN');
define('AUTH_SALT',        'c/)rN0UE/] TcIGKL}o)R~-?(Xv^59Xfq~TW-4$Y{Q5=*v.X,Z,:N^?ueS);AkNG');
define('SECURE_AUTH_SALT', 'v-WtfPQgC>/t-i{(_w<+T N,HbiK.|!efv6r}+)@#/O:[n>o<`[+{v!e:cfKYyB;');
define('LOGGED_IN_SALT',   'Z9*5|ihu-Ol A@Yh_0ew$vu5-~Q(X^Zj*OhA4lrR 4eVzVbsPB9A4^qmiyy5Gv1M');
define('NONCE_SALT',       'C7BJDFq*--Ph]!-k%o |GJA!3,%S@43jQkM1<uGlg{v*3fo>%]:d|M{:9l!4J}z4');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
