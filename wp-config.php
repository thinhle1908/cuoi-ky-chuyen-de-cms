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
define( 'DB_NAME', 'nhom_cms' );

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
define( 'AUTH_KEY',         'myV~a^7&)hrnO@nR!XE%)]:^CN8#H p,R2SbG!+PDj1P0BnNF63]2q8V;GcP.HYY' );
define( 'SECURE_AUTH_KEY',  'qn&OUlFAVTQEehzn>|C)#GrSl916t0vL+S8A<B.GW?+l>yv2n]J.t?hUwh G9R?}' );
define( 'LOGGED_IN_KEY',    'qw|J[7Z^D(#XfgOQ|7u@F1*%!^|$CeOu ()`J:JkM|2;GE_ ,f|UlIbjhgY|qI-s' );
define( 'NONCE_KEY',        'u38<#9%)OF6WU1z8-}w?_8.V(oBUqJ;P1YHBfW@oD$-dx[#kYju`e[r.(+AfhP[0' );
define( 'AUTH_SALT',        '_Vc+FMSX+;7!zy=EBRcGQq!?_.4`?Zc~hi1 vNYi0=fykhb_n%]Ge|il?_K[6&|_' );
define( 'SECURE_AUTH_SALT', ')Wo0?e _;*}C=n{Jr_^XM/>;3l}YRKe0 WEdRoro`xmsj4xT:VH2w=mmYy.A&2I]' );
define( 'LOGGED_IN_SALT',   'y[JFEJ>u=`q !>ql+BXUgE{Ou/?dfW$=1)W_~` @OlrKs>?EM}EV3BI4a*K(tVc_' );
define( 'NONCE_SALT',       ')ag$pX#u8KDkyv^x}6@44Soej%djn)XloVgCQ_ee*dvzl?CYFHVar.S<:}Z+Jx:C' );

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
