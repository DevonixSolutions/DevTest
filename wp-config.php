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
define( 'DB_NAME', 'devtest_db' );

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
define( 'AUTH_KEY',         'S83}3hlW3 yaQ.Tt/zq?k8e(E7r;UxzQ5{DYQKB%Qpv)kKOhi+&fZ/Ayu=bO]Mg^' );
define( 'SECURE_AUTH_KEY',  '~EmZw0uCED:/@Erwv8N[|k(US@E^v(:92s!?l[u_~as%*n#xdy|YUf_QeiC@MVK5' );
define( 'LOGGED_IN_KEY',    '`-+S[&hLcV8K#c-iN=yz<:2vm@Vg{g^>$WHR5EY?9KF8Rg7sN:7xnt|}Eo0 +U3K' );
define( 'NONCE_KEY',        'F~-[N_5HR}5`5&PfUn}_xW(/h@bGht@3:~bti^e7L^-UPvaqs668}9+AXff_x1=F' );
define( 'AUTH_SALT',        '8[;WUUp3pO50v76uS+N@]XBA~wIYe]_d6WDJ.*~5ad#+zZcWNeA=4]u;}%HjIR} ' );
define( 'SECURE_AUTH_SALT', 'z*+a60X-80W)Y9r:@ctIaaXaDq$s5ep%K#vr,umJrDO|cEe&McYV)K2`^ac(:!h6' );
define( 'LOGGED_IN_SALT',   'pi@:WQcys@-?~,a]D:LAO>4Cdo9kbe0b*pv9PFrt25g0$!t?ed_b%PJy]Z{Mb:BK' );
define( 'NONCE_SALT',       'GQ;.]l^SPmGCgK0e&5M@Hh a@G%a<PpX{ggVG*LkM<u?CJ.~UEex:!>Zox*qbI0 ' );

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
