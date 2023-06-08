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
define( 'DB_NAME', 'delesign' );

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
define( 'AUTH_KEY',         '3O[;OBUU&2(gPn|`ZYM.q$gIZ}GZP7`2.5`/5xN1#Z)0g$Vfz`3/0)d$S&/pDM;%' );
define( 'SECURE_AUTH_KEY',  'MO7MAw`/-Uk63uV|NU*~cQP@Qh;**R6!hcmcgC)a-XKc`,c1MFI^*+i@WGZLB{AX' );
define( 'LOGGED_IN_KEY',    '^KonoFQG(O5OD}]hc?-3 R2+oXkQZ{`0~ch_(NVabv!+cj/_PIs1hpZQTr0jF)L(' );
define( 'NONCE_KEY',        'Y`rYbMg?{,^jSltAm( G;&!JmM.NhW[d/>FZ6X0At^;Gc~93Ua5<s_LxD=bRLBJD' );
define( 'AUTH_SALT',        'Ybzn;1ybCbqUr7|@gQZ9`{(7Ij]x?DQ1k$:~nio}`exs8XrF=.:NjC~K-4J>6A$}' );
define( 'SECURE_AUTH_SALT', 'JJ{-QC%a914V<L3,x>I 8?]yu#V^uU<M-_)6jCJOs_ 9X4AJU*iE~6VRG81:mT7+' );
define( 'LOGGED_IN_SALT',   'KB(;4&W3Cx?6Dkc3R4O1q&{w=1<X@eW`MTL/(!kS}3q2$iSjEU)I[UTPv>6^03]p' );
define( 'NONCE_SALT',       'xzN|`l[9k#AZ[.r4cV^o>[7n`/??LI=iVLmR4<s?+tO&[)tfOqw2(JTsHs3oE@9?' );

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
