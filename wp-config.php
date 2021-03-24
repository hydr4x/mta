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
define( 'DB_NAME', 'wp-mta' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'Zqd0a|u-o&( 5H~ug0x?;&Q*^Q)g|V%NkJXn z>Y$6Fh_?vbG5kP)TJ`npDn*Um<' );
define( 'SECURE_AUTH_KEY',  ',C@8]c>9p*);)k7>rjZ(q wT,6=)m,?4b$;MT1Pw3,a=-m%-Uork=EV}dTC7k~_y' );
define( 'LOGGED_IN_KEY',    'K}SY5Ch:[C%*Y]qL2kbWhUw|1h>Q#SD0`#5;Jq|*#[z9Nld(>KlSU5gJkm_CJXYl' );
define( 'NONCE_KEY',        '&gV#=6Ob%7Oyk](F/pSnhVHV}g#4J}Gk! iihvt/%`0y]Q+;kY Z#lJO|_JEH>m.' );
define( 'AUTH_SALT',        'J$#$`r?u].I@8X:z~4|L`G(Uo]O uU[yKLIAxF31hux34WvzF{`z$$4mx2{q%c~_' );
define( 'SECURE_AUTH_SALT', 'f+RnxT:Y2.p/mDW~{vL4`C*^%~Hozv|,s)C[0S~?e-!K.F ~qN?JhCUsy;U^`N`C' );
define( 'LOGGED_IN_SALT',   ';ug.Z,y4Dv/]A.)}z/&|kc$629^/PKvcfv/U4J2)!+u)^XM|X5(E325[<=A*3:>f' );
define( 'NONCE_SALT',       'GLQN]qGKGsKdBIhhuZf-TDmW^Gj`hBG6jOj1}(^B<u@ Ji*`dA] 7(4Lc4$qP*Lt' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpmta_';

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
