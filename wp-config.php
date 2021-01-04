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
define( 'DB_NAME', 'shopcondom' );

/** MySQL database username */
define( 'DB_USER', 'dominhvang' );

/** MySQL database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         'H^`eES;U|Y=HK5P@&pk.(eX)Yj I&lbKaP5n@{ueOVnr*6HhRA}AkQoHA:?CFu(p' );
define( 'SECURE_AUTH_KEY',  'B/F~Dk3uJTxUJ~u#20_b*XyL3QuwRUUlQG~19g?. }i>*FYtU3bM;^/]F dXrws5' );
define( 'LOGGED_IN_KEY',    'xJg@jAK~0du@p3u[[*a5*IePeC<T(fBQ !>>]B:FUX/{-.O3^8L4wu9H~%gn-=e+' );
define( 'NONCE_KEY',        'E$#NaWF:M>o1Ivb%c(|LKhowl2ffv-?{1J)h&MS,!}9=!{RU3i 6oP<=S{JN)/53' );
define( 'AUTH_SALT',        'U/Z%BUNoQVI@Orr.}[OOQMtH|kKa*@6~|y63pH)IgQ j;zOzUUrV7lt2aLp8hfJp' );
define( 'SECURE_AUTH_SALT', '.|hzu/2jlPI?6vn9QdK( s-srDGdT4+HTCFEpZm5_:+fySn8Vpb30O6K7h0gtzQs' );
define( 'LOGGED_IN_SALT',   'NL#:(JfKkJbvFfL[W`RB6t~F5$cy)Y06fw!%{{@z71d,PkBlZz<fh, A+DkUhNFe' );
define( 'NONCE_SALT',       'NV:Q%,n5=WnAi8XGYzT2(03)ug+^9Z;**/G;/3$|,;yQk:T*Yvw=1Hy#/kH.0j.o' );

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
