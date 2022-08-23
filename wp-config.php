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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ashrafulaarif_db' );

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
define( 'AUTH_KEY',         '94uaOAjfkFRv(!5Z#g}@J.I3:eiFQ2f+qePXq-4HYqU4m0dL<bPyj(FsLc8gX=%e' );
define( 'SECURE_AUTH_KEY',  'U(>1* 2rp},@N@9[FtS`L|lahZ+CO}&tJD1S&B^!HgxQbD`>?nVv_Yk%;x6G:S].' );
define( 'LOGGED_IN_KEY',    'XpKlTM(={P+cB _-hb35|#?s@M=3<%XxZE]c6Fzg7WIxhjU3-=k.DyJ6k=d_tr7S' );
define( 'NONCE_KEY',        '&sX6 6p zo;(u$saepI@p]tX+o$&82K`r5|_>v9l.o!ZP]2$Y.ei1O&-8ZVesbB4' );
define( 'AUTH_SALT',        'iuZEEcU_I}d}zI=zO?#b^e0CMvsJ)mXz#eUd@ZCGD8=i%kF(I~1MJ#G,Lylh*v8-' );
define( 'SECURE_AUTH_SALT', 'O:D>Lpi{/=>_ 6rjv2d<Q0mEmNDUYM+Z9D_6n 0yy#_@H)k%-UR{tL4]UwW<7RdM' );
define( 'LOGGED_IN_SALT',   'c486^#qacS{>hFdHWn(Ix]d)0Ur]OP9Ki^5)+ v}RjAP[/J0X5Z;E<rk3VQ=y)##' );
define( 'NONCE_SALT',       'l+:%gg4CEKWl -^0UG<Zl0M`gHzWb{JRTX)M.RY8W[!D,bmh*WgmESI+>XD;*`] ' );

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
