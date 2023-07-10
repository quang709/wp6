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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress6' );

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
define( 'AUTH_KEY',         'XaNVEazeWn]b&:VgnOE,G*e(Ca4J((gz7%^ja h<<JZ[Zv0-}|BP!km:R!y*ma0l' );
define( 'SECURE_AUTH_KEY',  '68U_sDZ&B?E(vxN}XK_3^??(Tj@m!DM*t|ssL2p-dmQMq5D8L+0}5EL[ g4R09(0' );
define( 'LOGGED_IN_KEY',    'sK4uQ9/dXM~Bskk:|!7jl8U|xm*?GEX;lSv6)A27sztG;`OkE~C|L{K[|~Sb6;|^' );
define( 'NONCE_KEY',        'fzMp2+l$xEKhaM!GP&tK Ahiz*TO]+5Yc~2i@Bt(Z:s}2e#zB[p+MOAY$4Dy`B+#' );
define( 'AUTH_SALT',        'rb2~kZl#oT 5Nqs&v@A>{ef?74s{GX<,{f=Gwz#<mjM:l^A(l#a<dc<2EJ!~#.&+' );
define( 'SECURE_AUTH_SALT', 'N/Bx9&?_Qv 7i2SQzL8~M]>KmyDN~D*~!}%^]ljJJU*BtS048Ehj4QC95er.f5Om' );
define( 'LOGGED_IN_SALT',   'L]YW-0<ZypLK5Mw&2^i||A1hhLXq!|rZ75.T^G)ei1 6b#KK^`7O!t:E(1sr-wt8' );
define( 'NONCE_SALT',       '4:]e.pr+9Wha[XZ+YWk6e[$5d)J_9eW?C:eg&8$Xd(yI;Z|H|+}Y)4#?6<_&l()h' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
