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

/** The name of the database for WordPress */
define('DB_NAME', '{{ wp_db_name }}');
/** MySQL database username */
define('DB_USER', '{{ wp_db_user }}');
/** MySQL database password */
define('DB_PASSWORD', '{{ wp_db_password }}');
/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define( 'AUTH_KEY',         'e^2uTk$^nhkbi x#>i]-n56{~@>ZY7g.1DOuIDCK(nfjt#=,2*q+[4JS-<gHv`z4' );
define( 'SECURE_AUTH_KEY',  'Pj5/%rOEZJ=$aB.*,9G-rrhDC`]u|J{dD.8q9v+*N0p,cS~5V(u2p2p&;W<GF3iQ' );
define( 'LOGGED_IN_KEY',    '3Ni^;qUaHO*tO v_.H.8~Lzn9Y:IF{?stBP#:j1EP4T$)4NBVF1n~IHz1`4kPsG,' );
define( 'NONCE_KEY',        'Vdg5p#p:6+oj[|!,4l9zpLlGPD/Z$rMV]OGkbM!_9Z<Yd[`m4cnm]rr>I@v_.y<.' );
define( 'AUTH_SALT',        '8z9*v3E{bMHC)pFv6 Rv`/E`Q&;3mmJhJJ.DERDGpM=0fDwLN>l1ZPG:=L|Cw6GL' );
define( 'SECURE_AUTH_SALT', 'c?tV&;>pZ3pmXazHm>zWF %ZU_S}Kk/n,c$F<vhFw2c{(eE5*xniM+p76&MBu,!N' );
define( 'LOGGED_IN_SALT',   'BzgKA0^zXLgNlkhpH zE;)<4A}T*KFP!TS9YYzjj!s}K[LX_5^3uwjE8,XxdzGh,' );
define( 'NONCE_SALT',       '`H7/F@54?YQ:]#>,o &9%FHJ~-?LwYHU%k~x~l8_(p9VHm|VKPIJyi)xuhblC{BU' );
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
