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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '@]G>@UFesd;Zb0%/&m_ N=@>4-^uz9ei:#>mF ~S(x($Q(5d6/MCROF9,Eu-v=I)' );
define( 'SECURE_AUTH_KEY',   'x=L$iRl<HK1Zf$Ay/:F^ LdG&]i~Fj]1q_7G?nBPD3g$628uLvEz|ygTYCTYt5)`' );
define( 'LOGGED_IN_KEY',     'U6_Z^Ux&W&fTJz}<B(U(p:)]tY-^ 7GwL*m_;o^:`& M<5Cj=J?@X:d#GhAMgy~C' );
define( 'NONCE_KEY',         'E=|0|MC0k?+:4wQ U.{Qp:6g-s(vAW5{l9)l6#%T+L,Vxxlw|Wm_JL%rho*W3s[v' );
define( 'AUTH_SALT',         'P=*<?a5K_#o&_`?}aPqzu^10U7e:v`qZtvTf^8Z(8y)qfd^QuEQ!!{hYfpyYq]YX' );
define( 'SECURE_AUTH_SALT',  '~v1/f91Jn3X n%(Qkn#LDPjhzC$!u|y}wi1`aDv7@ANF}GsurPUoMi*Q}4eA-.b+' );
define( 'LOGGED_IN_SALT',    'lWZ{j$W7K_U~@ncTC.K1Ied=F_0;S;}]ABfYZNn@LvVb:%[=eARb  >Q6L3=2B!X' );
define( 'NONCE_SALT',        'Kp}c8$H=f<njFzHklx8BIvyXhu?/Eim$>VN llVAr?_p>D{QEFgGG;c8Bq1Rh4<5' );
define( 'WP_CACHE_KEY_SALT', '^ln=#m30]%sij2=^/f4}]C:PwOhp={?j,VYCQBk2B#$o|3-N#Y ~XJtd@ZSZ!DWG' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

define('DISALLOW_FILE_EDIT', true);
