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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '7`R>`y.22&~qd4JqI-J tc[6 Mwu88Um)!gD8.28r4Yn-{BozFlF?N)!t{DREVXu' );
define( 'SECURE_AUTH_KEY',  'LE`F(!uS2&3g7<MQ7)1aoO%;Lr0+v+@</u]w3bZ/I h.))Ktp)Gy5m[UkZWWai^M' );
define( 'LOGGED_IN_KEY',    'y4W=_+JLQT@f9SUY.6a*iEm/Lg2P Ab{}rI?#Oje?5XN;!0%)~MYv$>7`W_`c:+B' );
define( 'NONCE_KEY',        '+K*7k 1Ma ~{dC&~8/2w5Xszj40CGp{[8g)Vq0-@i>do3=@rJ+SkXxB#SOFE[pi/' );
define( 'AUTH_SALT',        '3cuy{7>CfPrk^8vO.JEs4=N.G*^!#IO_UA2oOcD|Ltc)hF{R?pTi>j!SnhH{-d>R' );
define( 'SECURE_AUTH_SALT', '}5Y4)(wrU[CNYo^>&|xd&g;X$}G6,,zPdLeDkUP_zW%V|zcgKixPy^[IF)y|eV&*' );
define( 'LOGGED_IN_SALT',   ':D*Ii$#/!k-RbeYPs.ed-!zUWsd^]K%AX6<y9|ZR:?(#wIJBpZ{;>v~X9j(,r`#/' );
define( 'NONCE_SALT',       '0n7fghjw*<=|&XrwAMYB9^./zT98|(g0n</m~=mkCeWF1Xgw1owk%tJ3S<+7lq#*' );

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
