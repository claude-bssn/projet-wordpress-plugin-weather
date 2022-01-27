<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/Users/klod/Documents/cms_wordpress/wordpress/wp-content/plugins/wp-super-cache/' );
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'WG~vD<@]A3E[1R8~LE#LY~GvQ oRd4jLM7,b7?CS`x2VnpY`eI<$Mg@n|(yKNf?-' );
define( 'SECURE_AUTH_KEY',  '60R&6+^IoNe1i2V6A{(. N@jw(,B[NJ$?9WEU,wrd99?$G]T!SeYa`O/Su4flGYO' );
define( 'LOGGED_IN_KEY',    '(J@AcKMy$kVeITCO/t)g Qq9g Ry=36^N]g^xJK[wx-5s|wcW`: q?HyFKpoU][b' );
define( 'NONCE_KEY',        '^Lu~n3hN-|rkABjT|F/SXMt9K}vE7~)9e*rTDR:H8RItu[/$f4O=+.67j)+iE Rd' );
define( 'AUTH_SALT',        '93g21TK/|67!g! CP(0x2rxqTzHrLLDnkh#JY(Rr_G-`@2_Qy?bds1D-T+5q%].d' );
define( 'SECURE_AUTH_SALT', 'v4;D4|8s?|v-zu+AL~2Vn=3?b~6m/0y1>rSRo<:@M87ab^-P4uHn_:Kq!Ac3$q 2' );
define( 'LOGGED_IN_SALT',   'C+|`x/BkF?<z?pguJCN9Vmv@1X1sVL(Kh|&>%Q^V5jJ@Kl~>rPR4)YEe*>l$-,[f' );
define( 'NONCE_SALT',       '9L{j;M%B9bvV39aFXWlB:)Gh=g^)Br.~Kegu/@tkrHM*q+%gXd5IF9d+GeJ*?F?G' );

/**#@-*/

/**
 * WordPress database table prefix.
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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
