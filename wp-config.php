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
define( 'DB_NAME', 'data' );

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
define( 'AUTH_KEY',         'fN8UM,!j^ :EJ=0$F%opmDjBtSj(rVtY)`=rktyCYc58z,T.RX?iXV`*TLO2bO8:' );
define( 'SECURE_AUTH_KEY',  '#Gpj.(vGt&%zjUA2/& 1bh`2u].1w}whlb&PSH^7B#A}m|>:r;VqrCrwqRY*,c11' );
define( 'LOGGED_IN_KEY',    'BmwvR5ustkFPa?eN16FiZirh,b5w>/g3.BZ%Yki?8EX>8Sj*kwcx-.r&u,xk7S|.' );
define( 'NONCE_KEY',        '1jdLy_+#x&M6Z$b$e9cj,M.%I5BXDO`?cd:igXD<wvgH/$fLZp@<cx]p$Kl+=u^6' );
define( 'AUTH_SALT',        '>-b<rfJvt,wMLptfpr0%u&OTiv ZCw_uStIPGF~]SS`D,x~<gUn>;Fzj@f,|n)~M' );
define( 'SECURE_AUTH_SALT', 'zQ@Z{s{U$r2h4l.6TA-!0Xym#}[|(+k9tzPgw^D*kb :m5NZVGki]+Ib;&#NI!Jb' );
define( 'LOGGED_IN_SALT',   'Hcwn_<CeInlUJg ^dN:F@U}n0!iHMD]pq>EkRk99Q+/xgZIGu!K(d{2zOi[%y2NH' );
define( 'NONCE_SALT',       'sAb&Y:Fblea#*Uu5Kgr9S0ozIPs<SjU}w{([%vGr*59SAF/)Gvg-DAYr-/!~h!:7' );

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
