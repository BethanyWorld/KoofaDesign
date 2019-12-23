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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'carnoma_content' );

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
define( 'AUTH_KEY',         'y{?5zYYg_/zx[Fne!~.Z?o=c4N;Jv&bO-.&kqVtz`/gJ/^mZOGK?Ct1zRAG[gXE]' );
define( 'SECURE_AUTH_KEY',  'lsq>*=VpR!=F o@zE#l{bw<pxzkVIR+MT2L/WO*+].)A/X!don6b96z1Em,yE_V>' );
define( 'LOGGED_IN_KEY',    '5MTuCI,S(O}0k@zi:YJbU!L0UK#}BP>_P%;_W3B}q5!WSkDQ4HWAx63`su@g])bv' );
define( 'NONCE_KEY',        'iq!t]}e~X0,#Eu!pzJ~sr<0XD1PRQ@[}J9RMkr4AI2w8xrJ6J;nA?arqbW*Ik5,;' );
define( 'AUTH_SALT',        'j$&NX6S|aD*a/|dEx~nuG)8q79S=>D-l8tdPMkuQZv`4fqn..Je`D|~=?56MOO4C' );
define( 'SECURE_AUTH_SALT', 'eYw+VqPAOtx_X>mexR>S*L8}t{PNR8 3& x?NimfHB3]XL@*(< |cy<%R;Q6`%}5' );
define( 'LOGGED_IN_SALT',   'wDI@TtuSzU<od=d.d#W$=K`R@3EhTH7N;ab<(:80)A+R]&UMp~JV,p<+l2fN{sr:' );
define( 'NONCE_SALT',       'I[4&e=(G{d/4>`@@L5&},b@yM{e#g[#|,DxpPB>K5V8`mo4:|G{oKW>wVGKl2GS/' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
