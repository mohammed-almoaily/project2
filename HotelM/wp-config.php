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
define( 'DB_NAME', 'hotelm_db' );

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
define( 'AUTH_KEY',         '_hMmX=UEkM!MYZp,|5|`TF l(|g>4sfbEA=HP9``_rae-5~i<=Y;^t)`VCO]UT(Q' );
define( 'SECURE_AUTH_KEY',  '.PO3$(F)#f/}Z8TRz{V~kArqqN-]:seFD_7 RIOHj(zrnfKW$1dz]l=B31=|=5+]' );
define( 'LOGGED_IN_KEY',    'BLq=[BZSu6cJBB-7W$ZFDxI_/nHA{$9O40Re] yQvd58htDr: d9q}TYJuo@CMLQ' );
define( 'NONCE_KEY',        'pZ5}(ym)6cwBp%oJZ%ot?4RAv76FiONV`TzO;{1c1}SdvOKGLU(^5hvOow?OJ@m]' );
define( 'AUTH_SALT',        ';Db2.S<QQ;w7FrnVewepU(~.6JJ.^S|mUX$ZPx]2MDdnYArIN=ow-zCw4+?&ue.x' );
define( 'SECURE_AUTH_SALT', 'n+H|M0sI9_g@1$Lfd67K9|<[[eG%s.plge?;NiX>8p-FbG(*o$PBemvsAQNl+KSQ' );
define( 'LOGGED_IN_SALT',   '`hR{Z$Uh~Z:yrVLz&t3}_>VPoc}:>JR:m4H9z!HTBM?H@:7C1^w`=pNA?a46}khe' );
define( 'NONCE_SALT',       'lzts,Z3iYnL(Tv$w>x+o20:gSl0 SqYHF9$&Re@5!R]P~SyV~pn&RRZ/D{T(O6*_' );

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
