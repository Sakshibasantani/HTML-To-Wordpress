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
define( 'DB_NAME', 'themep1' );

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
define( 'AUTH_KEY',         '~E^:r_:ChENRQro~&G?_g7[(`0kBi6L[OG>Cw})x$p2USo;6X#7T1tSOvi]R+O~^' );
define( 'SECURE_AUTH_KEY',  '(AgSIS#o+@<L;O3d>(Y=N>G;U%wBNP(jPGEN^.cRCvh+?_|D5vS@o?BG8iSb>q,A' );
define( 'LOGGED_IN_KEY',    '6CUMX?f3L)l)Jryw!iw!@,<cDy}f+c_VTj-Q_xq/*@{8S*q)%$J-4^GCR9Gm.a1f' );
define( 'NONCE_KEY',        '(^pVR(v54KH?R-&xIRPStn2~dp9^^:{Yd{Orx&gwiGVvl}S(`]M]E,X<HqJ!9=pJ' );
define( 'AUTH_SALT',        'Wu;&4dM#m^Jzexk]}NhCz*gN]}0[Rh8u]>`>8uP&kSe{?Bebsq!c.n9Lkmji{a++' );
define( 'SECURE_AUTH_SALT', 'V)EN:Y$M@r=A.n>@~ZT`UgL2.1-5/NZ,}._BW>d=u3{UW!s)Oc@H`K2}E]>P2xvx' );
define( 'LOGGED_IN_SALT',   'mXvFfo--AD*5gKtIn9%pbgbT]lNL4f~`#UVlY}r`8V]/)I2%:x|-!B&pZJB>?%dJ' );
define( 'NONCE_SALT',       'vp|-KeTn*BpjTIs0;8]3dp+8sn|kV*p+vC!a*/L`-lOP)9cy,MY9dtd@|bVX6A0J' );

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
