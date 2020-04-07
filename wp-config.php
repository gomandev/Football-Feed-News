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
define( 'DB_NAME', 'wp_project' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '19372855mas' );

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
define( 'AUTH_KEY',         'gxSPb2<(U(@p{7/5>a)AVuF%hy$Kkpd?naj&,+HCo*;|1:@l^EFJ6,BKU?}Yk>?O' );
define( 'SECURE_AUTH_KEY',  '=w_#o)L:}uDZhBzoi_It[6!hGQ9_!G5ZA/I9fV2jh5 uT/i5{R`-a$V bF{GY6sG' );
define( 'LOGGED_IN_KEY',    '6$gDXIwDP5!{,Rf{58/N,cNW@6WwHTH=>Y=#+R;H#7BP;e>,Q}bbNQhv@>TiBKMf' );
define( 'NONCE_KEY',        '*WvuGJ2uc6S:l=O<cl+#Dr/APD ?%U^>K{geT*#[uB/ToL[F&1W,^Ukz%^wXQ54P' );
define( 'AUTH_SALT',        'q]IrJjeZp+h#&.3$zd(.X9Ae@91MvB8;9pM7dnu>B=X?oQ&,tI6xs(:=~=rPq[(c' );
define( 'SECURE_AUTH_SALT', 'T*CbAC~3vF;OU>|402u3~f!NA:;%DY|uT(#pqFW?7(&NSvEqe~I]{F.b<H;Crtng' );
define( 'LOGGED_IN_SALT',   'Z@xEN=M3p^fb?BrwYe2Y }AV!;iyCK/lA;OJ=PG+(*QC)Mf<Ic%<Q7J=fNMP0qF3' );
define( 'NONCE_SALT',       '4U_n.Z lx=!}ixEbj*C+1b;jE5ex/SIp3d6j2>*7A_FQ,yzSMr`zBgw0bc>6YHKF' );
define('JWT_AUTH_SECRET_KEY', 'mysecret');
define('JWT_AUTH_CORS_ENABLE', true);

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
