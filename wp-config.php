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
define( 'DB_NAME', 'jgaravel' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '_K-vp10[(0BeS dDgEy]fseS[NDU*ZoPel4amEQ8s6~`ouo8[oA_J*ITK8uJB+*-' );
define( 'SECURE_AUTH_KEY',  '__F[%@@o1B}h(r=<VDiGD0aBpO3Zw#EXwLu$;Wan3p:Dk`F9p)HuJW4.a_{2nAmB' );
define( 'LOGGED_IN_KEY',    'V:=j91juw#e.g~s: u>z!S$zft3f/5qX>evkVmXa9im.:]1(c)?X7BLY+|!_|t}e' );
define( 'NONCE_KEY',        ' n=Y~:#+|<<zqeU[^@7`Fog 7^8PaJo t;E&Fm_wTWIuP*ApHdUL;LbW;Cnke@Hu' );
define( 'AUTH_SALT',        '_EU[_*iVm>`*Dgvb_Z~-*c#$3n?#(DAw0}Ezz66d,fQ]/nKpi_Oj&00i-D)4>oAT' );
define( 'SECURE_AUTH_SALT', 'nCF(??2!TlO&aQZisWUiU`9>zlZ&p|;1Y/5^jXg(~O}?98SA[~Ou?KBP2<^APF%`' );
define( 'LOGGED_IN_SALT',   '.>tV3r]=KtmIgm./!Dy$IP<m<I<co[d=2U}PwMK#t]@eR!]_>qgW$JrgkUGQ;Lv~' );
define( 'NONCE_SALT',       'jbf(]g?$D >)QS[s(i4)*otSvm-y9yA;?(Vxj=aW;$1ovT.}-s/6I7K7-:S2zqrN' );

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
