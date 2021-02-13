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
define( 'DB_NAME', 'rameshrajaap_db' );

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
define( 'AUTH_KEY',         'vY$oJ@7$8Pi? Q0+uV9<@W<cVlqAA@3Uq3((YZQwU?xRcf/OU]gjoR>EcA7=q|u,' );
define( 'SECURE_AUTH_KEY',  '],+&,W,B%7P@-pILf=Y2Z}kDIcUzz`6.dd_+~>[{b>Cg,@6TOWNX3A;@,Wl{_92V' );
define( 'LOGGED_IN_KEY',    '?X<I76{#B|d,o0;v>)^.K;4i,_eEG9|F%j<l@T&47qxa!whL}M*G.?&$NB5.!6w,' );
define( 'NONCE_KEY',        '7v5.%qvt`Za7&4#`<+F>cjdP{&nN4~@?mtBY;a|LK-[FC,44vBo .14jWD;jf_!X' );
define( 'AUTH_SALT',        'BU8d_+r[n3y*7{ GXO][xvA!$[(L(?C=3%XB_An/KX5Wig@c^r7[PARF}e*90n67' );
define( 'SECURE_AUTH_SALT', 'HXSS{ZW#D0T2oc^E8(uWm&h=e>JFJLVq[e>E^4jYr?Y,&UJ4Aw^`oPon1T7Ve%v6' );
define( 'LOGGED_IN_SALT',   'T/^ uCz3Rmx:r&(Aqo^L(Qe6J/c_C{5Up_eG},4|-c:z$nb(qz]^]kSN-hKua+hL' );
define( 'NONCE_SALT',       '=orN7Dt!lnkXOvhay{--Zwu^Z$efj~%)I%xus{Ub!5$e^X1qTt(9bHamHj^WG`re' );

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
