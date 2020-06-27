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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'tech' );

/** MySQL database username */
define( 'DB_USER', 'prabin' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'vUiEu,?Iu*[p(l;N<3=yd1SMs:miFyC1E?FT>Cj{G8D%!C=HY-De;a[r=g7yqj5E' );
define( 'SECURE_AUTH_KEY',  '*L<-;w7%|s30w>K408YUzq86WflJm(t?,;3JlP@YSa:BH+k.MwNt%w~cdrel]g6+' );
define( 'LOGGED_IN_KEY',    'x]v}u!0_obzMhPnmy<)]vganv1S74 HiC+Ly&4rR_+FGDGVW:GZ#gDl}J}X+c4=_' );
define( 'NONCE_KEY',        ';{YhnY_c?w>b;Wyb*V_ 1j7&1ETHeCvM.W8FkTED`h)OlcUs6ATJ1D(XK&UCdW[v' );
define( 'AUTH_SALT',        'i z]sr8jtrU.Bqmc.8O)<=G2wz~QIXrM&0H?S?8f=0jY]*Buka66[cOo8S Of=+0' );
define( 'SECURE_AUTH_SALT', '>|zc[Ib;0O-|lHz #PoOW&eH.AKwrF%R^:C{GYFf]G}E#(uwfluhUMz-bD2}w:i1' );
define( 'LOGGED_IN_SALT',   'Dg_Aw~l.M8L*U/<[m<Ei3I,(?4%d*H;54|1XBf7[A1L3$O3Kg5z-?cNE48eZ4X6@' );
define( 'NONCE_SALT',       '&~ky]gA,-dxT*aa}]j@D#MG&frY7tlQ@>[M,oz)Og]<t[Syp?{bhriB;E!u,Yyd4' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
