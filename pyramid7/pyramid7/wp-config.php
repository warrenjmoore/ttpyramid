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
define( 'DB_PASSWORD', 'mu9wvJ1kGywp530F' );

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
define( 'AUTH_KEY',         'z!B[*@+iNKZ$Ues4UnN/UX=a(#sh0(UHX5-)Rt0~:`M:uXXHjqV^tr(l8P~W~!*V' );
define( 'SECURE_AUTH_KEY',  'S7MM&UA.l[mxW,%gx==iM26S@)&_/AjDhgv,xeyPy]t:r3f/]A;])jZqz@jxAD^.' );
define( 'LOGGED_IN_KEY',    'WuJ)z+_k]l*^Ec,p{aGkWADoyv!caB?E/=v>u:G<ar8WEnnf{N=Ipc($?!EV~vxS' );
define( 'NONCE_KEY',        'g9KHFk7GTRA?:qV.H[(8C6z|y.86K$Le7WCl^j$<{kx[T]o=6TJPZIO[t+LDYG`N' );
define( 'AUTH_SALT',        '!jS4xDzRp@i!v1HR>?OxAA&DNI2#Vj(p}Ss(tHv~H=~UJNBx}gJ;;Lx9#lcMtlOi' );
define( 'SECURE_AUTH_SALT', '5v4}i7a|9LpyLZb~l0d*&:AT.&pQsCCI@GJE<w#$7>w LS[7Ow ieYw#K|i2%SS*' );
define( 'LOGGED_IN_SALT',   'vjZVz]=Ou8GdRx$e/W9)(+?h[ZKJh@x#Qy$6BnJS@^sD5o cG?gV75 5r;[Zd#[B' );
define( 'NONCE_SALT',       'Jgcl%h$s5vEC|L9qWyY&XiUz[=FIP?%7ly3Vf_*@XIr|i+b~+8q#ImK6DLCBm<GQ' );

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
