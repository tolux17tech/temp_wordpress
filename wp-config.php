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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpressdb' );

/** Database username */
define( 'DB_USER', 'stackadmin' );

/** Database password */
define( 'DB_PASSWORD', '123456' );

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
define( 'AUTH_KEY',         'put your unique phrase here' );
define( 'SECURE_AUTH_KEY',  'put your unique phrase here' );
define( 'LOGGED_IN_KEY',    'put your unique phrase here' );
define( 'NONCE_KEY',        'put your unique phrase here' );
define( 'AUTH_SALT',        'put your unique phrase here' );
define( 'SECURE_AUTH_SALT', 'put your unique phrase here' );
define( 'LOGGED_IN_SALT',   'put your unique phrase here' );
define( 'NONCE_SALT',       'put your unique phrase here' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
define('AUTH_KEY',         'Riz|Cfh5v$++-v~TO,/>{X>+_upV+Pw}%mW,1fR%CUqhj%{w*g)bDaJ:?Em:{BG^');
define('SECURE_AUTH_KEY',  '*O+g=c9Fd/e2W6H .KZtw`MvyZEy.pYlBkeWHv^rkla}wdRxhY]s+a~cE_>5pFKZ');
define('LOGGED_IN_KEY',    '-~mxLIf=)66-w:FV*L7Qmn+]Ek.mZ+DWqia>K#I%7x_s(Ti&gGSSCw019bdQc.5,');
define('NONCE_KEY',        '>|SEkPr`)ABJ:Gmg|`JSrX^AXhv=KLj QczkYQ7Ri+e/0x]Ro!LL)Pbe,18%d2{W');
define('AUTH_SALT',        '6s0IS6C6C}*q^KT39~TTf&/PD+&w_$HP9$o#-,y7v#@QVFVCy)o^r_;iW5hM{`k[');
define('SECURE_AUTH_SALT', 'Itcq$#=l=_jvwt)ax)lA_8rM+DBP5[8xPQUf-=szt78yqd~>|hzflb|sWW!5#E2[');
define('LOGGED_IN_SALT',   'NdDli5E6d.E./lgn9B:{s.jM&x-^3nC<FuZX@}Xko;FhA4NA$5{kL(mLkb9~@AA4');
define('NONCE_SALT',       '+f.{SohVgtE@zmP2K:];DPig.}nb!>O+GlQx&trX-st+fR-`Uq6YS|VcJ{v7e~g;');
