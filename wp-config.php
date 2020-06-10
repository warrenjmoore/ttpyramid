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
define( 'DB_NAME', 'pyramid7' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'K9YZ3YLKduh4T2Tp' );

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
define( 'AUTH_KEY',         'bMqDT4l~Fw^SuCj]ehnl_m8qAAe40)2FEaQStFND=Z0~2OKEU||]ei5uYm[a_nI?' );
define( 'SECURE_AUTH_KEY',  'g|lx=t>5 y?}`>uvW:g3bifIQ;Qj4b6yF5wzz%licUO,^%^~hmTQ%a/f:A* >k t' );
define( 'LOGGED_IN_KEY',    'Qh<Hfo_>wacck}!zNuG[FFK 1u0mS%FB8xWE8#;UhgV>JG COC8CaL~jIilm%*iw' );
define( 'NONCE_KEY',        'mj+W:j<q*<KjaX5l0xU:-)y5=-lBv}O;CSOZq[fx<@No#R#$&Ux*v[ PwTc7V:Kw' );
define( 'AUTH_SALT',        'qD*tR]ZlyX.C3kOv?/?s4OvxBN}Oihp8EX0V=i1U*Z8=8Xz+c;8`%$vYv>4BgV;e' );
define( 'SECURE_AUTH_SALT', 'L_uQ 7;OG/Wp FQY~8=G7?3l9F}2?B9C!> R.;*Lk3* sSW#X k2D}m4-eY|7@^7' );
define( 'LOGGED_IN_SALT',   'X7)-R`xZ:h`8J2<E`[0Iw9qoTPaVjI?!)<u.}NkysM(vYQHq{C|37Dv}jBId!JP?' );
define( 'NONCE_SALT',       '$r<[G]v(J-xQf`@:a?&4xKbMe@B_Hgey0L|eq 0_aslab7_aV$G&YxVb~j O<Vsq' );

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
