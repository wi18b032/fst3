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
define( 'DB_NAME', 'w19-bvz3-fst-43' );

/** MySQL database username */
define( 'DB_USER', 'w19-bvz3-fst-43' );

/** MySQL database password */
define( 'DB_PASSWORD', 'DbPass4v443' );

/** MySQL hostname */
define( 'DB_HOST', 'wi-projectdb.technikum-wien.at' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'U}x|@a .-||9[OeSNX2B)$wDs<s=KUI!O$DqL/ ^xi&u|SOlhcywut{Jv#o2jps*' );
define( 'SECURE_AUTH_KEY',  '2=|[fV}id(VF>Hw%ZrwQ>wv6@=GOjGdy8U$fVuX45dbE0nQX6t#clx3[BNq}$8)6' );
define( 'LOGGED_IN_KEY',    '9<v]Kq?erE]KcEUy?xRUb%>mFC4lV>;$nX^=8?8&j:^R8d,4O+(8q.BhD}1V;r%:' );
define( 'NONCE_KEY',        '>4dF18-#X2,dfvIVD3I>2VIw=B[G$MF5S=wV*BYAxr(Y/XMLT+>3Uv5@65_/t{PS' );
define( 'AUTH_SALT',        '3~pMiMM4-C:#uM_Np!5@x~gk(bLhM?/M{2yS2G9?UUr(_{,kFz%pQ/],1_Jesbqc' );
define( 'SECURE_AUTH_SALT', 'bk%^<+W]UcGp%bQE9i{}Vs=ecj$? QH&U5Qb*fL/:__h@>yD<37-_`(n!bcp5fw!' );
define( 'LOGGED_IN_SALT',   'dXz00vyz1-L`pN1MF;ag,_%55.D0$Rp7G;Q+hGFhACmzK*da[(%bd3VU;_eW;{wc' );
define( 'NONCE_SALT',       'C/N;[k.DL>|VZ=)tlx[U[9VU`^_Q^P$USykxu>8O9bZ4xf8&Fy&@.=,7lr>U3Jc]' );

/**#@-*/

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
