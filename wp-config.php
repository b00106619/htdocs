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
define( 'DB_NAME', 'wp_data_cdm_6' );

/** MySQL database username */
define( 'DB_USER', 'liapinas' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Dulkin83' );

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
define( 'AUTH_KEY',         '@o]Va??ECLii^f,+(Po7HLQhjF=j~iocqic;S1r1{>^ng*|d:y[<U7]YD{-6TSV8' );
define( 'SECURE_AUTH_KEY',  '2h@cQX0@8V(VizJ(BORR.5kqz%>O<Y#xKNl:c[?BG,%B7mrx8nGzK(=#l&zhioP5' );
define( 'LOGGED_IN_KEY',    'L[W}xLih@;@v@ilf2tv9CXUN}U&Bu.9h,<yWO^S?YrnqsJ{p!U@;ho57ozE%1XKO' );
define( 'NONCE_KEY',        'NW4{L4nXIJn{1,Rt<d-=!K$yO8u=7k}OJoYq4u%Xu5aHQSZ^2tWr|4WqLqwB[,%4' );
define( 'AUTH_SALT',        'p:cp?raEcOk/OWvR:gj c1I#2jfq&99.~UUAh%m$5+TLe)joJz:TfbbU$$Kbp7Cj' );
define( 'SECURE_AUTH_SALT', '@dB!1H9-`6+K9L]gpF:kAV?$!jzsO@bdeT-8PxuKsB:$Wk1q9ztw}pAO8g[WK|Sn' );
define( 'LOGGED_IN_SALT',   '//tVfBQaX1/NadcZ)fVPdF+z:qIc !V[;1{yNPfsdFlH.<M[PXe21C#d#q1AU&J/' );
define( 'NONCE_SALT',       'D&E=x+a.,va.V-S0[i plz`0dM(*w-<Z#&cHHV/GNey.zVI.;-)ju`w>x$t}6|T*' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'lab_';

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
