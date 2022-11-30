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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'prabhjotkaur_db' );

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
define( 'AUTH_KEY',         'h1bl~l}Q5w!6do.PKM,UV!+C*OcA:nB,<!8yW2IXTSczWP*.e<R?;56|#KE*O7Sx' );
define( 'SECURE_AUTH_KEY',  'yp^N,IXS3>n}] khBwh!c]_HT$hp4X/`BL>7j+!2n#&%%0R):P6o)&/l+-|)$<;o' );
define( 'LOGGED_IN_KEY',    '2w+Mhw3%e5Lk:Ml1vaFvZz>/}}{[ ~#M#VB,tYu7:H<74[-N@>ChLAuf|FxZP/?J' );
define( 'NONCE_KEY',        '8MlCQ=4R01up2YFkaSx]6-WU+XGM^/+j+luV]S|fL)%@xdFBZZLp9Wjk<~XfG]5x' );
define( 'AUTH_SALT',        'WL~#0fT^KQG*oOJ9FA|>$),ptr~@l#e>]CB=f_SA6Acd$X&[D&e]2e<9DY>AIu83' );
define( 'SECURE_AUTH_SALT', 'AE~sdc:~M!#*I)N.f[f[gmA39ldDy<+#!r5g_m?Sb3KR#UG,,zDy:[gS(Z@9.4/B' );
define( 'LOGGED_IN_SALT',   'ND4DFmn4JKqm5qI7-G;Ra_RhNjRtH,Mdduul~);FYXYnbQ*%qfN[/|+T&K#QB8.k' );
define( 'NONCE_SALT',       '?nC_zf(D$u45(GJqO^f.j[Kf}Ry#Q5$U<O7i{aR_z%9Il+f,~ -Q-3Z6C /2 53a' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
