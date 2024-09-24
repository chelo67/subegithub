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
define( 'DB_NAME', 'subegithub' );

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
define( 'AUTH_KEY',         '-wvni+ 0z:7iZb%`PGhbgXC_uI S;]0CL68+6}wTX;M)(.=6{qX?3`4$5e7c0o!J' );
define( 'SECURE_AUTH_KEY',  '24p!9sQP<%M`m6Xi:n6l Ywh,=`a2t7*Y awi(zz;c <K& [#HJ2&DM<4/wdsOoq' );
define( 'LOGGED_IN_KEY',    ')9L&dN;=!N:]J12 CsFF3+p_T+1obT:i@jD_|k3ji1-Gth{+X}m%A:=7=EhcY/4E' );
define( 'NONCE_KEY',        'fPO} ?W5Po1xRZ2hb}ss}jT[l1UUCo3_0[<L^XG?]QIHsa^Z-Pbe,Y/Y>VJ]zCT!' );
define( 'AUTH_SALT',        '8i{0kU?[HZ(&(Y.0@/a_ta;,gMeh=F(=ePT9UGXzw#^/7<-Ocezm:V?17IE@R6Bh' );
define( 'SECURE_AUTH_SALT', 'r@]Uq,9$y/qnC=%hb?h#iWlb|1R3Q$Oqx!n$/d/i#;KjDTh^}78NxLQ;XVLH#YzL' );
define( 'LOGGED_IN_SALT',   '[jU,GD!QA%02Fo}hixT.rgF,2qHfu8EpI!u-*Hw#VpLE,=<b?C!}FU `wO#5+J$D' );
define( 'NONCE_SALT',       '{?7(4Ni~0Ez>s1jAYyx`y.N`hQ/of-ktYcmu1iY+$o/J`ne`?:#:KS<Na*2yTa1s' );

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
