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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ken1' );

/** Database username */
define( 'DB_USER', 'kenneth' );

/** Database password */
define( 'DB_PASSWORD', 'password8484' );

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
define( 'AUTH_KEY',         '?FS]_D4{)=f)WbIJ*80NhQ3AxG*8x]Zk;m%/4fRR ?u5suT#C*d},#Jy:HKK)z?*' );
define( 'SECURE_AUTH_KEY',  'O|C?2?Z9!1#vdOI`m5`e8hT;~< ;B5x4Kl!SODd=rMAe~3*#}9/jd}vYYxw4.C:|' );
define( 'LOGGED_IN_KEY',    'j5pS[?kIJ/dkY?>_N21:^p7=!XbAyDgSzrpM_a~Bro&btG!#1n)l-3VuxOmDr[1[' );
define( 'NONCE_KEY',        'fb%B$53-`?Awtb~Ye3,;lfDf,D haX^.j6(UV59aI`z;$oD]Mf=ZtP`[6V TT?1/' );
define( 'AUTH_SALT',        '2Ue7t:]Ze]K [0.s>&D9^8m1m#F?!tt&a<;OH=hsL(]`zkO!)^rXo{kMu}{k_`an' );
define( 'SECURE_AUTH_SALT', 'An/m?uNW_>pSl%bKdie#+bG~o-#G08_?ir#1U^ac^]I@d/dQ;y,a-Kt-[cr-d+oj' );
define( 'LOGGED_IN_SALT',   '~B,]{pE;HdOVxk-jXQr!vOf#:w7`L[!3Fvo-XuX?H_a1hEl#y(ggHYU|/$YA{Nk.' );
define( 'NONCE_SALT',       'iAIb+WwtcfT:3m5W~,/In=hSpg+LY;NJ:^xRgMVm)@3RMdG.sIP~:uhL@>g1E|_F' );

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
