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
define( 'AUTH_KEY',          'h9R*4J_vwO3YY}rl8vKd{C;+%%tr2RH~>MX-[H.S]7i)]Z~Y`CrjS|B_+A@Lp7dV' );
define( 'SECURE_AUTH_KEY',   '0c&OEV4mqoj^V;gL=9 o!~<,{_~|SManmk@`$Pkh^}l_k`S*_H:[(&`3?96?.JCH' );
define( 'LOGGED_IN_KEY',     'uCj{GsF>[W[F`BFS[&A s$o1F22gL?8b(4r5!,/s(vMj[4:.b!C[ iA8|rHrfcNL' );
define( 'NONCE_KEY',         'zl.Gtn_~*s_hw4:~M&X:,nYwU&|8[jTt2}ZtRs&. gOpvXj*;-MWfhVif>YUAk6Y' );
define( 'AUTH_SALT',         'D+K,R;`2:Hkv)%S+Z)U.q@q.U;C-XEmnsJ-a>yg;h3,,{y3ykqv6cwfsWrH,w/Oh' );
define( 'SECURE_AUTH_SALT',  '~:)@%r@}LZyQYZ)21V&8BE$n,g%P?{}[bql)i]2t]~}&}dg5ls`f3Y&+#*IpsL5q' );
define( 'LOGGED_IN_SALT',    'i.L6m9^n}isY}{!NM^A#rNp`<-REh:SK96i6OdELWykywdd 0vqx0{5d O]wU:;$' );
define( 'NONCE_SALT',        '[>21AANaaEzhu_W8=w@~IMI{wL+!?#j3K4k#5H}sc(v wQd8XW`OK6r0%**rf7kj' );
define( 'WP_CACHE_KEY_SALT', 'o}S^h}K{AjP`oNs2:r8X)%Hyc9z`X|IQCa}FT,EU_dlLJuBvAlT)2+o5B<;<< OD' );


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
