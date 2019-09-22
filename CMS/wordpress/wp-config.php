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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'cms_wordpress' );

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
define( 'AUTH_KEY',         '.=3WS}naVZD{5pt80V8=n2>]vRTUXB?k=3;4:y|iG#C2Zl<uJJ=-2?7k f@f;2Mz' );
define( 'SECURE_AUTH_KEY',  '08Ou<Q-{% !/Yc&3G(f`@{<h[A}w%h6/G;*]{6N~ooAgO{L(|;H=I*{0 ]Rax&$w' );
define( 'LOGGED_IN_KEY',    ';7+O;2s/=>Vb[l%&#zo([pNQc]/F9.Ow!GazD0*5bZtC#[Gq8*Er8$w2U=@A: <x' );
define( 'NONCE_KEY',        'g3fv,zC- ~ZZ_n+Dg1s<WIc9`XMPeT|6vb9gFn6dM`7U7{uE;j7d?bssCE09:C${' );
define( 'AUTH_SALT',        '.N)A0nfzNyIRBHhc=-n-sN*q:%M@oB=C43Cw@ev^vZz`g%r==TPF%a{Y|H8?df^B' );
define( 'SECURE_AUTH_SALT', '[Gt7Mn=4{MK&DxzwGF T`>ypf&Y^5L7|mH,XW%8X7 I-X1zB2USo0@0J.`EmE^T|' );
define( 'LOGGED_IN_SALT',   ':*JOP0o*`Dyl[7$OD`cIQJwezf52xn2S1 N+;V^rx$h7E*{yiVt`x)`cbrELTPuN' );
define( 'NONCE_SALT',       'mUNRuC;;$g1QhUW<dm;*9G!,B=w#~p9VIm1mR* 67N3?5&tbwPm`2z()6%xUVoW#' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
