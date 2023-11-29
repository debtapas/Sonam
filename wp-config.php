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
define( 'DB_NAME', 'sonam' );

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
define( 'AUTH_KEY',         'H_/aG^*v36W(8boHRJprf6zuj-?#(kI)CL9G)Q8qyw%>3lKk6,*v}Qr*X5SzlQO<' );
define( 'SECURE_AUTH_KEY',  '<(/<JRo66$RyvzmqH,:FiS=G[/Cq~9pB-S:h#vvE#HJTC6qIP;[h<XQh=Lu{iHET' );
define( 'LOGGED_IN_KEY',    'pcM7~D(SvY+MeXcg[1H#~=MJNxi n{n7^lc}8[wmv7-?+o5UET-?&K2nhvIIRl@3' );
define( 'NONCE_KEY',        'ILQWnt$>nw>cL{?*tDqNx=x*L@v1s4[oc!s xls+D(6SJ|00v,EBtujSjk{+U-zB' );
define( 'AUTH_SALT',        'gjWPVTLdS}B#<k&>R6$}NI6.{cp#}Y^j[q7#XG-Y6|eCV/0-v8Kf=*1vG-BT9wVB' );
define( 'SECURE_AUTH_SALT', '@k[Jh<c/N.#Ym0Xo0W@/x@Hh{UL?v-*oENz:rb$lZdz- Id4/,zzN4i Ogcfen%7' );
define( 'LOGGED_IN_SALT',   'NzsJ[fZKM##3|9j1L,o8?0G|g@.xZ}~[xO|F=wYe}:.;gGkRe7%Ho|M,[`~-I%RX' );
define( 'NONCE_SALT',       ']0[XOlo*U9ixJ]WkBdKwBry]I?l2#5V0$_ ,Ksn6sUB1Y1a5]uTj6hrK?e&=F8.q' );

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
