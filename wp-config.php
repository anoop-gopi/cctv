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
define( 'DB_NAME', 'cctv' );

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
define( 'AUTH_KEY',         '/f/uudBru;l]VceS88tUt;S_~>S>ke6{}j%1CE]*ng}I1Ce3Z-^*PIH1Ms)nFmk?' );
define( 'SECURE_AUTH_KEY',  'H`?;=]nb-{1)bRp!)2fe{}onE;-mCRHehCn{7S8s=Y@(%Y;>Vc9zS+oCJ(Sh!p2h' );
define( 'LOGGED_IN_KEY',    '#0_sgoYdhXv>vUo+`p!.oSoFwqtB2whMKuO56!y!0R 3=}pdfrpVh7irf6c}|q F' );
define( 'NONCE_KEY',        '+?xixh:.hft<v]!x.kn7+|M]|qFpx>]DmF)>FIBgbsWmc_,PHwW<0TrCAWaYRCyq' );
define( 'AUTH_SALT',        '=8{U@/3xR$X9@4h=7giP.GW}QOjIs+c$nA{.z.T8l7I1)foPSWa<Pt-&L/R2(|#h' );
define( 'SECURE_AUTH_SALT', 'XcU1J1c-M#(ird0u0# 1LHH=`S*3.o-wdurMaH=Bv~Uz?`xLpe/xjz6N9*9WkQBu' );
define( 'LOGGED_IN_SALT',   'kNv3nS[.tf@<4$G~Hc)ruW&3X|W]%Vo<vS!pPTg@lWq$qd[jFV=d;+?n 9K=4s22' );
define( 'NONCE_SALT',       'm<>q~:Z%`(7?3&LB4f?/I6KWyjN;9KMg/Ns#$!H3A+OLWA.6crH^`/N.lLT~V[d8' );

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
