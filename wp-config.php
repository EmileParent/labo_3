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
define( 'DB_NAME', 'bd-4w4' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '?8zxo5[83&e7/Z(_.&,#:yKde}bwPd& o[=-Ak?8C{LgPa`)rNM6>p>?y?-GVK1#' );
define( 'SECURE_AUTH_KEY',  'cE_8MCiSZMA7?VIf~|_+5C ]d(2{}x)*@Dvl$/PG(F^9qlwoG6kf:QoV<&dOCD&P' );
define( 'LOGGED_IN_KEY',    '6<P:b?2&Z^`-$pjvEC(>c`x:sJMPL/z=SYWvBhe-Dbd`/U^WY_F&KK01wkel@%xw' );
define( 'NONCE_KEY',        '%nK;/`&iS^T=;;J?$;[,B4WMBPY5g{/PaZ+P4dQ4j}`YOBu,ndNxp)LF.m@p9gv ' );
define( 'AUTH_SALT',        ')*$9ZUceu@GlcdF `0~y}=UpuR+f3oE5RyODN3c@|#?l,: xrk$ayruGXxD}H7Do' );
define( 'SECURE_AUTH_SALT', '~9>/Bp+aZ]@F-;b8:*=7Kd+hIQ)6G86B&e`r0wZCI]&&QR&zarW|OF-ee|w[;7Vx' );
define( 'LOGGED_IN_SALT',   '>Q1|^Jt&x)Xnm[0:eq9605(b^w-BH>Y^pQr8 6##0t[^f5sa4YsA`G/[h&RB5=UG' );
define( 'NONCE_SALT',       'wlwPh)h~UzdK53#9375D(ZV+2~xf;A&(5{)%8jSh!T,b~qQyb%:qhSRLE<l,)~8+' );

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
