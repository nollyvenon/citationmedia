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
define( 'DB_NAME', 'citationmedia' );

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
define( 'AUTH_KEY',         'a~d{[nkuh=HmWHW906EU^mRG/og~TA7T)oT==Cn<48!Z;@_r(q6E|5$W tN+8(H7' );
define( 'SECURE_AUTH_KEY',  'oS1EuBd?<jEfN[LK>Ghe![Bl@vKPuXaIJWSe>=n@m1~FsVSw9;-%-XoX-f`/g)Q9' );
define( 'LOGGED_IN_KEY',    'E$/WUxj@)XC6T<r/p%!$%H#o(mHd<_fJ)s#f,cNHEnE/iHUkCT?0/tiH`(/, Wt(' );
define( 'NONCE_KEY',        '-#X]/d#/#b^=S9dP,fV!]xoIa|JE@&Hx93K=_}5ivSw?_6T,lf>,A,n00CoGKV[%' );
define( 'AUTH_SALT',        ' f,~k5!O<JNF1+A*lz^Kv><58Z0Y>-Y_D&v-w{W?=j{N v[jy+lF3w |Y@z,5{4O' );
define( 'SECURE_AUTH_SALT', 'l2;oEV.;)DjoHH@jz9YGAT~+0d>|0gb,#Jm-qoMS`!s2mp|JuP,g`^tfXX8Ke(* ' );
define( 'LOGGED_IN_SALT',   'd9_Lam%kGe*-]>LfMMeT>>nkFkR5bNO?R@:A|uPos$O/?BBDg!s^Tw}{`/BIA5!|' );
define( 'NONCE_SALT',       'O>[&f~{P@G<31!UaLIgaIe~%Qj6gOQlR0agMUFu7ei?JE&:>`e RttB?2pL{e}CM' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'cm_';

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
