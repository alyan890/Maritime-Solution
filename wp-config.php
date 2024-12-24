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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'qHDh[B5/`@gjQdw#bX9!oQ+`7-=?)(n$-NBb]8Vu33)0Mgm0i%,@/&fzK`G~;z98' );
define( 'SECURE_AUTH_KEY',  '(|t&GKYc@|Ti/8uXI-<&}W[*VKizqSu#rCCZ@Ua7Sw:0Ma&W:-J/+FWkhLI{`qZ5' );
define( 'LOGGED_IN_KEY',    'rUp~QlPbDa,7I;vrBBP7v=kJ`6%/b2L!~ATBj@nQ@ y0TV;u~fezDsVqHztT@5]O' );
define( 'NONCE_KEY',        'L#_57t~f^pc=TyI^[1dTZc:2bv_ $vAddwO8yzR_fRA].^W>DkZCBcYcY26NE_[(' );
define( 'AUTH_SALT',        '=akpE;,)Tn+3rlHbKIVdVap,U(lMf1RlU4mNrg=~I<U3Pa7U|!/srkQ$qUfk]*NN' );
define( 'SECURE_AUTH_SALT', ')kjC`U~a;m6uau.}JEg!21gYEqz5K~>|`*8a)*skr4I&@W9f KqJXq?p5+qreRv(' );
define( 'LOGGED_IN_SALT',   '!$5Wt|hBaTMS|?p G`/t1G-Wi4577G>%_Q)?~C;)T31:u(GJ%d1D7o2)oP;N[lxf' );
define( 'NONCE_SALT',       'r@)=&2:cnND}S*Fw+0YTSui;5UbC3&uu8=IIg{wX/y0)IUOcNcLeT|4./L=unYU2' );

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
