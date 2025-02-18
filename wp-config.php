<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'website' );

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
define( 'AUTH_KEY',         'bt-(x24o3t>z?/p8^K#]K/2(z_mXS`N`=@/hE$gtrf_w/6*G8/#gDL+RY]l^>2&`' );
define( 'SECURE_AUTH_KEY',  'x,o%X;Vy$zu%|OK1w^9EHrUHohe Kv2>8op#?!t-]k@MC.2KB~2;&iKpsBVg~19e' );
define( 'LOGGED_IN_KEY',    'aWl6*Cn&:cIJi;7:Z=jKu:qRx^=*Va@G;z,v|cI*J6{d4ToU`:,TPoKBootG,:sb' );
define( 'NONCE_KEY',        'B[Ng$#w{=rje3gU;a`wui7?>A@K&9.FH7me/lf#eB.e|,Y^ADdF]SN)%<zX<tHEM' );
define( 'AUTH_SALT',        '?L#,yfNgm-|x=dA.k%N,$&_&$3J8S*o>9/u18d`);`08Uu9Ol0n[7c{I6/D)mOsy' );
define( 'SECURE_AUTH_SALT', 'I>L[D83Yol%oJ;U=v*PYroca<_;l=Ovzjp7+LR{+n@,3;g?hONFJ D_a:0~zYI7$' );
define( 'LOGGED_IN_SALT',   '&(E5tPi%pfT4Ty#kzaY?7{Qr?++]w<G$7[aH#7<17#sQjRD]PnL^dd+J2R+)N/,o' );
define( 'NONCE_SALT',       'plfFk43?7yla,MKf^/=0V0~4byqc{8WE13lSe@Y_acj6M9HsjgFf+,AwK-/49/:Z' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
