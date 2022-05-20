<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

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
define( 'DB_NAME', 'harariw' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '6kUe/@r;!K#4kmHL!qgIUh/HpJC*-,>maJ[*/s_d#LZ=H:}Q<pexw(2[4B_y<<IT' );
define( 'SECURE_AUTH_KEY',  'dUdqG)rdj8Q7{x`3S Hi#+QPvhe6uy9Q3{#&s4Q/!!h45gpeLfNC_Nih9.l=HxNI' );
define( 'LOGGED_IN_KEY',    'E~POpEZGoZ7+=]pSzJo07.K@g3z;9gm!%$u8mhIr#B`>7>M4W^6#lMzfg`Og3&8&' );
define( 'NONCE_KEY',        'K-g-%)<xZE2<V$>A,un19NAC[|/KG?rrPL!5zwOPV9R>4;OA>zk:JKiOav@qUW~+' );
define( 'AUTH_SALT',        'EUvzl={ithYXWT&Mx_~ueA+)~nef+|^2v B*^o|Zrps>#E#m=pI~-l{kO0Vp:F1H' );
define( 'SECURE_AUTH_SALT', '0c34b9PnhCxaPZ?X3z-Uo}G6k3a~]jie2[MA-Z?RSM8sz5^(-5o6ogsRb3,%H[:r' );
define( 'LOGGED_IN_SALT',   ')u7fbtx0:=;G-]A *k-b{cGeaRi=IWbvQ@(u!zVSlI.u{d!v!{!l?;(C2Ee2z!3X' );
define( 'NONCE_SALT',       ' FErKFs~SFai2K5o`~H6gdnaqpa|J$VPqV^@RF+*iwUeQp!+AU-8~=<Ftq)/tyjP' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
