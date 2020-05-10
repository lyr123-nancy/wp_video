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
define( 'DB_NAME', 'wp_video_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'liya1289' );

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
define( 'AUTH_KEY',         'kSa?6RwGbbpqBusY;4W)@;^su58Lx}7aZ@X3U%Ih:Znr9eWwTQ6q*RU}pcxkLe><' );
define( 'SECURE_AUTH_KEY',  'Ib8o.<XWdlsvx}f[|6*6?-aFP`U:Ia6L5*SG[^a;{H{%Q|c3{+fLhWcnWJ76&1}v' );
define( 'LOGGED_IN_KEY',    '4R.tk2jdaUXL8._cqD}PgpDQDE -%q%#klI>]Fz$w<Fz~gA~C!W?xcK6z[W;|Mp2' );
define( 'NONCE_KEY',        'a4t=&%/%U`_fM+[cnm@4I|FnY87KSet<{.]IoP!0i8I[$!6#%_$) 0G;CQ8ReGoy' );
define( 'AUTH_SALT',        '/ +euBKCv!G5AS|v+ES~UU5fEc,)z3:mj}k(iMQ[7PpJZVEW57T*mqM--*:0T^qr' );
define( 'SECURE_AUTH_SALT', '>}9;UU!C41ej6Vp=e,O?)nYWp(Fmz8pn(ee0:n4GjeMNtR@R!X+}q6^qW:QM5t#9' );
define( 'LOGGED_IN_SALT',   'V=Z`? &}Jn=U+_L}~ez%Ec,lz|Jz;L?Js2QQ.o,q[U:Q9$*I8*kB7C[lZ1}Eld^g' );
define( 'NONCE_SALT',       'bRlm`X)9A$9q,6>Ey/<a Sd@;,Ahob1tB|v6^1;aFv*o)RI*alQFP~}b?A&y`C3^' );

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
