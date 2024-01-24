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
define( 'DB_NAME', 'drk' );

/** Database username */
define( 'DB_USER', 'lgudert3' );

/** Database password */
define( 'DB_PASSWORD', 'L.Gudert574' );

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
define( 'AUTH_KEY',         'qq)#.P.:|wfchg.4h$m^]x,+7l)&ztzAV`D=+n4qeF:nC/s}36euCV4G)>;|@Bas' );
define( 'SECURE_AUTH_KEY',  '(%tk|E/X@u[mb+Tic^>4#`2q6HP)PvK!p(rbdJ0Un3%JGGq-LtRY?B,,MjZ(5Wko' );
define( 'LOGGED_IN_KEY',    'Ir*,uwX^&r*M,,-KJS/S<dU-Vf{anz.r@$xiBc)XXra!DC7[f%Q^_1<|0d0b*551' );
define( 'NONCE_KEY',        '[]myv1CXPGB&j%)D :y8@g9@:U9k{fj6Ba[wL( {aR1e;PVImP,r;oNEmzl4rT`Z' );
define( 'AUTH_SALT',        'y!U,[J;Bs8@U?jS2NM16l|{}Yd_Oi4H|(lht!<8BfJ-1zW!e(Z,;%AhUMy2<Q:%=' );
define( 'SECURE_AUTH_SALT', '9lZsiRABJ? 5zCJQ9o>CA}J1JC3Xhb=EHXsQe/3,_^fT)CFo,knslD?RY]8:{;},' );
define( 'LOGGED_IN_SALT',   '3]}r^N6=Fc%<Ok:bhv_v[h2kT[-2:G=][F^}M8hV`{D1S=6&*DGZlS69%vD|VbmI' );
define( 'NONCE_SALT',       's$**LcgZmcW~1z2 V#1g6G<hfTCLYRJU*Oa)w^iH;:On{+Er2UDmkv80lmW}YWie' );

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
