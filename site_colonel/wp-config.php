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
define( 'DB_NAME', 'site_colonel' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'v#||<<g8+qlp]a2^Z[..I)|:RShI0BZL+.@Xp{tb0B~^^-x-6W/h$u%3jBVu(=%%' );
define( 'SECURE_AUTH_KEY',  ';[%v~0JB[wj:Li9LF|kaD,XF<je7^!1wF,#>>-~2^Qj<fS,&hTUz5]l-RS!+shaU' );
define( 'LOGGED_IN_KEY',    '[lGP{]LOn2<nGPzRDhFL`r]ot5)J-[=1Tm&D|YeJCA33Qte8g#muT9+V:i}RtuRX' );
define( 'NONCE_KEY',        'ayrt::,TfcJKS>OSlK<;@~9UA..3yE%3B>V[|jmc%ahUOipxUd*kxiEZhqTNm9Is' );
define( 'AUTH_SALT',        '>y.3)D@@4N=*sZ09@K^c5#% cxx[>#/reX73RDzdWd~;|*5^!a|/3#m8{r%^.C:r' );
define( 'SECURE_AUTH_SALT', 'MR<2C,[1IM+*k !>!y_It}ebPy**XlMdOD+(cf1g!7:;4Co@i{G?,*`9]9,`mR-x' );
define( 'LOGGED_IN_SALT',   '^s?6_:*V(>U$R8x>;;<{wAnzt33eh>=Z|} p^kdWdU*]Bjs6}/Xl_obQ^QjLVc@&' );
define( 'NONCE_SALT',       'y$}6f%rl)=8J=MJll$MDd iI9NU(#w-/P92*);ehJPt@ZGmAnd U2O:}.2,z0-aj' );

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
