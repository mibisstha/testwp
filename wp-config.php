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
define( 'DB_NAME', 'test_db' );

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
define( 'AUTH_KEY',         '4Ut9Iy_~RTI?<A/% SaP^2hF$(f=YUM*EI}3rH,BC}iV,IX>5j4)y+@>$^PE+Q%7' );
define( 'SECURE_AUTH_KEY',  'GyQ~_0P!#~7az.FxOyVQw%7-<kKI@R2rxWEEygGRkBO7f@)Z&)dI58zul-Qhy1zH' );
define( 'LOGGED_IN_KEY',    '}Q(1B5[9JK-~2jd]>bDZTE1V8k.&;l&pc7N[E%7YxGr~tvU}CE5I jc:)H`I;mK8' );
define( 'NONCE_KEY',        'g7{;DC~jeI:DJ#B dc_<xIdu6VzA=lje3gh4N=}dr<IH)vVu;?Y%T>];9.6E^Wfy' );
define( 'AUTH_SALT',        '4$ML`-WJ=aWV*O^gR]|}uD*OXs9:/&{3j$ :/{nWuj9O6sDr~-IG@5~K+bn2S!Y|' );
define( 'SECURE_AUTH_SALT', '6u06xDK$-xnOF{>h]dJ#CpU;:bALV#XjJU|fUp9 !IHW[l,C%lO-HsD1z[y{rRtj' );
define( 'LOGGED_IN_SALT',   ' 4>kRmy*07bnJpp-p-2}WP$K^WC7pbIKPk+HQ9EVY{2.vh$zyGQV5x)rAf k/Bs?' );
define( 'NONCE_SALT',       'AM7FPeLG@8{xcbeYnhL9H:?tI/hI|7nHM)zDE))Q5g^_3jc89$`(GfEgp|!j[&#<' );

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
