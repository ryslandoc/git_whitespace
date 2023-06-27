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
define( 'DB_NAME', 'git_whitespace' );

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
define( 'AUTH_KEY',         'gszf4^ZwVZIM7[/q|pRqgJQnhJYgf`l!4`faC:W#)q ;+ZCNRC[G[H$ a.LfWu9!' );
define( 'SECURE_AUTH_KEY',  '0&&WAP:1d1UaLv4-rT8/vBvm$7C/VB&I!jqtU8ET$ (l Ra0:a]ac3&{vjgdTpE>' );
define( 'LOGGED_IN_KEY',    'hOQCI`:{!oIs@Zw<r:aZ/,frM0GDJFPzaqQ~$Wu|hA|DYIQw?NO%UMEmYl<xHo~t' );
define( 'NONCE_KEY',        'V?U~0MkOgwuU323zM1>QV?dNGHfJ`bqZgW{tH@+65>a$+=}e1}>gtBHNP_S=}TG2' );
define( 'AUTH_SALT',        '}]zJ(Zc6-.]kY<d~YJo~~]kK>NVPG^dXr?%S/);#C!pqoojIM1sd2]d>x4eOe R6' );
define( 'SECURE_AUTH_SALT', '~mOIY,ijx)SEiN0bMPA,eY%e2eN?i*_j- j}xV4RX#P9<-tY@ 29ueN?r5$`pQ+,' );
define( 'LOGGED_IN_SALT',   'Ut]R@U[;71}Zv=pj@yJmnHmA%M>.E/rA~B*wla?I|[n6H?@{MvvUeAo2qe3>!0N^' );
define( 'NONCE_SALT',       '{ccRG2S>>44Va^]L,-:;`[Z5EI!]z.gH9nr_tHJs(P%`hC|Y@wU`4zi<4NNeSn8k' );

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
