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
define( 'DB_NAME', 'monWordpressSite' );

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
define( 'AUTH_KEY',         'vNo+e7a|e) drUF)`WwtSny*(8|8jd+;7bO4F)DO*^uc?VE0Q8N.Wx*Zh`9B07y`' );
define( 'SECURE_AUTH_KEY',  'k1N_LJJ^hah}+]r:7~>]VGaxDTG VFq~E2||0VihtAbF{.0{js]e.>mtu}ZNdv>O' );
define( 'LOGGED_IN_KEY',    '_Mf6,FrAlHJ#4z|ST jmH[l$O<Z@G/V4[4xbo)S^5S_~Mld)J?cz-Uj-f#( #9cB' );
define( 'NONCE_KEY',        '[K;+KL7P*3FOdx/JO#}n*=NZK9xm6qb2<@FT8!uNGJOgL]rzJoyTrtdsFSKlDE|]' );
define( 'AUTH_SALT',        'DX_}$Wiq7L)rY15kL(V4>>>DqCjc)Ykq+$,_q&SD1R5a,XPUwCt}pkGNLVQj6c|O' );
define( 'SECURE_AUTH_SALT', 'Q~qw$P3HX?,TP2h)NFlG)+QPj$;9Q7dhoMtSVFf2P;nTt_yQ6d8K#Bqp`.0TFjd{' );
define( 'LOGGED_IN_SALT',   'X<[?0o~j/z<#}|M0S3K6%9I]<[6ox0$@?AiP/RCIcd2Gs&|TK=$v:^0t8$5cd`at' );
define( 'NONCE_SALT',       'A=O[e6x ,75-GuN`~4bx&slC<Vg IA@NV:W+<dSpRL8~;lXXBXqRZ1&84~-HOJ($' );

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
