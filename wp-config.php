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
define('DB_NAME', 'ducphatnew');

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

define('WP_HOME', 'http://localhost/qcdpnew/');
define('WP_SITEURL', 'http://localhost/qcdpnew/');
/* * #@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '@;T+&*P>B/n!A&.p$(rafY=0T}Va3}xYC*x9XGdQEJPm& hc$>~QV{B~cEkZ3%dW');
define('SECURE_AUTH_KEY', ',CXtzsEO,y/Pu{[:pM8!O v}1(.&B>}*P,tSl*7%1tw>&Q4_-0{{@y&q7v@x.EQx');
define('LOGGED_IN_KEY', '4-_RuLwA{D+H7$}lqkJRA/pW^#2Jaag|IzEen=ze,;bJ%1anp72L)rWJ7+i8bfJG');
define('NONCE_KEY', '(2<*V9!0zY7NVn1nW?<?]DYE>QCcyy4DGt66Z}~Rb9Y1H*vA{z S)2*SAH`XRMH+');
define('AUTH_SALT', 'aE@|q&2$cAA`6[$pKgL+A S jY;sHXa+9xZ),b~J)F>F]Wljq|fP-M~J`{qq)Ny@');
define('SECURE_AUTH_SALT', 'k>R8rQ/OLK890A4QGAg^8Ym;tCxl]N#?-70X6?q4OzpH<r37(paaZHr$J0^H_Xl#');
define('LOGGED_IN_SALT', 'HCisJ$Gw QbwO9-{3Vh1PZnOoScc! FjB~Jc5ooj|;WcBPwhk_#*ncgx|1AI,C(G');
define('NONCE_SALT', '48=E/oG2*IkBUWw4QR*!RcoPZbqT;LA/I$;d7f4Q``uc2-]/0dOp)obKYcfKRrPq');

/* * #@- */

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

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
if (!defined('ABSPATH'))
    define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
