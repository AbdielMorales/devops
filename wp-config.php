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
define( 'DB_NAME', 'devops_db' );

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
define( 'AUTH_KEY',         ':9Na=8_[;Hi^nd4_`_TcM(>6&!kBYE|l^M)ysNa;-!UAyu43zl,xxSl;d^ZiSZdA' );
define( 'SECURE_AUTH_KEY',  'F>-,5ON%Ukj/S6d?0~4aD[sn+|(gOFgz|J%EC7QCJBMVD4{$7Ss)-5$y,E5)P<wc' );
define( 'LOGGED_IN_KEY',    'Sg]n;.,k<2%)uQJkBe^Wu!0kLo%Lzyf45MG)`Y5tl67(L!w^X~h4f{L|UhNO9kv`' );
define( 'NONCE_KEY',        'ae[p*T|AOjALr-@$aZ=N1M7^0Xg7pl=5u7oB0I4,`1*t0cmi<4u1okAw5 P9<%&v' );
define( 'AUTH_SALT',        'kWPQFwq@Xxa%Qh3NS[%!>>iT0^%)({~@(6gqZ>MAb54]UM>8 gf|k>:y f(MI0.X' );
define( 'SECURE_AUTH_SALT', '/f8TuDf$$rydu$zt2,-_9M5d0:c]$`3}5G<4Ykf;R**Pa=ac:(]oqGYF7DVklUK2' );
define( 'LOGGED_IN_SALT',   '+FCc<6(#24vp~.AxCq%9k.l,&XF|oGr+^~X+<rRyReM~P =]v#p4H]-6Zom~rVL$' );
define( 'NONCE_SALT',       ' 5qjeXAqIZ#;-TfS [M!lyJV:ECqxX_G=*7T^EU*#Cu+Qnvwh T&}Y+?oR<I|Zr>' );

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
