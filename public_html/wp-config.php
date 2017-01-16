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
define('DB_NAME', 'a6353697_lhelw');

/** MySQL database username */
define('DB_USER', 'a6353697_lhelt');

/** MySQL database password */
define('DB_PASSWORD', 'something16');

/** MySQL hostname */
define('DB_HOST', 'mysql13.000webhost.com');

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
define('AUTH_KEY',         '#%D5|lM4@>`a#^=dULjO#Yq[l{|XE>D{!,,kV|vncAOniFc$P)Hy54*O7`x*~J%)');
define('SECURE_AUTH_KEY',  '|/BQAzb5z:76ln%B#5W9r-w4SaL-YV`|U~U VT--Kf-`_PdcauK?Ac>xh ms~;)?');
define('LOGGED_IN_KEY',    '`^)p_P,yg-*wLt7H7|f}M~Y Or%:[DtF|53(`z3.7J+LJVC0xX 7BP(XZp2SJ4|X');
define('NONCE_KEY',        'RMU.>A#N8c*=n*R.%c--l=14gLCamrMT?iC-itwbXD$ Jfh$q]|]/T0HtmHX|t2N');
define('AUTH_SALT',        ',| CI5d@W_(x=g S xzQQkViTx6k`W72i0-z:QkSKP|0d,DK,l^hs5<fLGYuD+$H');
define('SECURE_AUTH_SALT', '3Y1%-;}+DYGh/PLGLbvcn++.`2*TL8@2T.ltbT@tA5W1=60?$WZ P|{2Y3w{[%W)');
define('LOGGED_IN_SALT',   'C>f%w?VofNsyudZh,-W2G+scUzD@t$L<.}4Uc+srFF9}|eLie>Z} ~![-[H^9|KF');
define('NONCE_SALT',       '$[e^~TV + In1(yNK6`rI|zVxU)a`x:s+FI,ypGW`1T2{*?r;]&ou3I<P:>`P)Uk');

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
