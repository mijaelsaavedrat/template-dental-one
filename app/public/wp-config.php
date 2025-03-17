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
define( 'AUTH_KEY',          'Z@Kul{#(=lWb+fCC*)yU@q_nv:z0l=}+`|enW/kFpq)fzfwYUf`h~!>THB~E[WgN' );
define( 'SECURE_AUTH_KEY',   'M.@o2kM3MSiX.#.A$eFU[p`P!sBz:Yw z kz8J24BHh>7CKKJs52bffH%N,AU9FL' );
define( 'LOGGED_IN_KEY',     'P%gou,t%aZ.;:6?PtecoR}N/MYFchwNUPysR,2YkVSXgzq8iP:lamL$KNB-Y;yO0' );
define( 'NONCE_KEY',         ']HJPe<AKCwJ8^]:i}}iJ6:V9Lf/uZ}`^#G/*?4;je.D8 p3!aloS0qAf+NR1$FbF' );
define( 'AUTH_SALT',         'TKs7mkzj#9y0cb{ 7Dj!2#Z]AG*ZSYpaHTf!Fp]P8AguQf^,Y$lm(VqLMqm@KVX}' );
define( 'SECURE_AUTH_SALT',  '?p k1&iBUdqooI^lRsNjf1@M-UCUriJ* -#GQnJFAj#Sc2qE3K7qo%FS^9R@iP-1' );
define( 'LOGGED_IN_SALT',    'oOK?^7Z/AH5b8Lc*;9K{_]ax~#j-WD&E2%R;V=X<[n+o2y j6WGGH:>_B9&?N}9>' );
define( 'NONCE_SALT',        '<j#8H0xQo@bJh,ME(Yn&RYFq;7$H+Y>uk~In-9runo]JMsRl:{Qi]-^yjNXh2v7p' );
define( 'WP_CACHE_KEY_SALT', 'Uo@hxxke!;5QA(hteV/;5ZTw).Pw>o8Cpmsd.3Ig-}utPI{Xh4mN|z! UCSn2&C<' );


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
