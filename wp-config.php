<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'cubetech' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         'Z`R?uB#Tw|7WIB@Gk9,4n .wXvgM3k@+Y}!aEWMbtsg R~V`z{>V9O$YDHhOF!|V' );
define( 'SECURE_AUTH_KEY',  '<v5iAfcfb[-gL@u)AR<e<p?tk&xmC&10][li50c^DZjSo|U`k;dcX6uthdkd?5tC' );
define( 'LOGGED_IN_KEY',    'C?Ct6[^a)w#-yi/T|K{-{4OL5AK=qb#wB& mL<_c/vkmIC>7;cpqdi VGyA1*w%n' );
define( 'NONCE_KEY',        'e9K#^}b,C85Lv8Bj+rwN[#&}?$9C?{ReGXe7QOrh,@{!{,g8[vm5HT:Ls=jv<h$2' );
define( 'AUTH_SALT',        'Y{*z!y(ku=6R<]X3qs)P.d G+|).9KP:p^K`WWf/O .zm&0kJX}p?&ycm[?N|XBk' );
define( 'SECURE_AUTH_SALT', '1NPw;F]g=h*}_6,[,,LFbB@q^gefh45*y]c</zp2vvofh)e27j&X~+K+M,H$_w:>' );
define( 'LOGGED_IN_SALT',   'b*tXUGIs0U83x9=lX c-8;G@?SnU8BI+sX0O)ixz Iq2<Z63Bkj>felJ=Z,)<lny' );
define( 'NONCE_SALT',       'y;jLE}/-ghGx77,@#A)JlqU0]QcNz4h$%!gK`;XLJG+!2WPLHw.>Wc?UY11y6/8|' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
