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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wptheme' );

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
define( 'AUTH_KEY',         ':4XCm&ho8`T70#- D!`VoyND:6yB8_E{er]CTeZ]U6Twh%-} ^X@V0-u<XO-m+OC' );
define( 'SECURE_AUTH_KEY',  '208M*D^ 37QZx)7|?b8Z<d$2fjV6jsDt#-RMt^sH*=-axP>s7k]@jJ`p> GBU(tv' );
define( 'LOGGED_IN_KEY',    '_cV3l),v@*`*ohQt|jF{gOAsiFGGqRdhm6t5Wom]}3z{.IL:ZLj{!}@1fs-s1E69' );
define( 'NONCE_KEY',        'BC7A1`>AxR(!%}jaT228g$+ a4zb/s=EKyBNdrj7#2/i3c^)$B8s,,_P1:Pgz;|e' );
define( 'AUTH_SALT',        'Uv@xObMs8S1(32Zw,{SC46o?l!gVwcz`P&t]U:45Xp#JzhjFtfveKKXHAgtR7[#A' );
define( 'SECURE_AUTH_SALT', 'ljxmg)V(|t5i9B51?Lm)Z5B(P26,hrxG,OMqm7`!36ra@+=e^JsweS!S`Ti7{47Q' );
define( 'LOGGED_IN_SALT',   'BlpqG%$p(Bx!.ByndK1mzL}y8:Eo ?!xB3(?iZ+qa0>eHW-o *4:$4j-VD}7_dRK' );
define( 'NONCE_SALT',       '~6{Q6;C&0az!J0WP8K;?I_j;:EYiS!+).QkZK$BwXrH1+evC~C}|Dkh{d3EF.A=c' );

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
