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
define( 'DB_NAME', 'paladins' );

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
define( 'AUTH_KEY',         'YF(xVhC|eD1a<a }! ~Qz~=t%iWxv}]tXpAjg7F_P=^k3<R~Yt+PQ#&^{D~{ZS]{' );
define( 'SECURE_AUTH_KEY',  'T[>s)n3R+i&[))9(KBVk#> M+iOChx1$up[tpa k[|a+)NJphRlK|_kPtxm5=z;.' );
define( 'LOGGED_IN_KEY',    'i|[ ?+tPgpiD28V-U!^:]~k R[0,i&n;yS#osLsh%M1l5q+ry({_I|=)YDI<nqKK' );
define( 'NONCE_KEY',        '+HlpK6;A6@_,/Z0_5Yj}[;?VuOXK]Ci/.L)T$(?;nH;FTl8J&$dJY:3AL#Rqg=Ir' );
define( 'AUTH_SALT',        'D7o(71v%6kWHZ7/NrFE-v xeA1/nW:hbWP/rb]95=>?vr_lcsR(nH!mTcPKe4IR ' );
define( 'SECURE_AUTH_SALT', 'yi=<HE:DP*H2[oHsz?RpP?OhqS%}@9hY5^(DSMhrqS%ib/#3l!ra3^xdwyP%Kl^7' );
define( 'LOGGED_IN_SALT',   '!-<[*/.kfKx~=g?D*1_&9o]e~Zt[>`0fC t:UXLNQDG9Bt<}V&g)+A+h_Ifh]Ul(' );
define( 'NONCE_SALT',       'YI|GL{Yt{`3.I.#)ivrvU?;{=e<5e7AUh~B(`al3p5BBCAILW0w(HLT .WyQye:n' );

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
