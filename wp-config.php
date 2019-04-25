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
define( 'DB_NAME', 'slm2019' );

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
define( 'AUTH_KEY',         '1Id]mF-}IN9MR/QGY~xa_x(b8WLFTI+.2:096~8>9-odAns:Fy*5j]gp,kBv#SzB' );
define( 'SECURE_AUTH_KEY',  '_EWV$@71!aQ`ww2imJuV< aN[Ui?E%MV;%19,/t>e|1yDuO>Ml/<n;i#omBCn+H*' );
define( 'LOGGED_IN_KEY',    '(}rGURzr[aD:Jcu@GuT/&_AEVfc^EaX<c-j[A4ObOP`YQSZ*J]wb,hCv,a%J 48<' );
define( 'NONCE_KEY',        'G[l1N_C1I~1T|QR.otZg]]m=|jrOd%2+t$8T6P(hx)7%i#1?hLOdX8B&NOq3LZmI' );
define( 'AUTH_SALT',        '7~6?3wWjY#kwx?RnG`yUoX~P4?>!sYYGew#tDO`CdE^N*~R-0$*[02N[97UKq]c8' );
define( 'SECURE_AUTH_SALT', '(ZSkF}<0WWtTduR@0ve(V7-b)Y` 7b5W.1+T6I?wNIc,#;o1~#xJJ4 c6C9mA>jp' );
define( 'LOGGED_IN_SALT',   'TM~qoBjA%OP{EaE@^}7r=xI_^Qc}6]Wp|)0916E/ .gVwOyYaoviVV,-h}C4%9aG' );
define( 'NONCE_SALT',       'pA7)b48(imuZ)nNZSR@9M7%IRi_uMn#Y<o.ok=mw}ew7--s1f*9:SBaR@c:o{_ Y' );

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
