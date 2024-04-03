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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'designerblogdb' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '4&v]r^a>.:HF>Yud5GAml^Y1u`:3&[d.bqH6!d-=~hCV^+hG1K8b<duDo!)e2/Rk' );
define( 'SECURE_AUTH_KEY',  'JjmLjg|IzKj4~aCIu;b4_1fw9lIOKKTfa*7gZs4:uDoO{iU}U[[<E6{t7`a#v<Sx' );
define( 'LOGGED_IN_KEY',    'v!pPr <Ej2HAP>NN{k@k9V@.$@|hbG%@L0.lmnF^=MOK RIa:d0$gfW%`|:BN^[[' );
define( 'NONCE_KEY',        '+Ns@V^`M;.MIt}>mZ{;eB%]jU=*CMp&#~N,-so2NCn_wbGpesc!f<9b8=h!y?U1>' );
define( 'AUTH_SALT',        'RL+u,_4$([k72t+n}g3T^/~ Q]=Q;D_vE<V2?R0CU0BiL2d<uTs3A[%fXId(;RnL' );
define( 'SECURE_AUTH_SALT', '.-/=Bc)BHS~hO/+8 c5gC7:zGQ[5`ez/(FW}Y0Ss:gfu7&^tTE2hweGHM_KOG}ko' );
define( 'LOGGED_IN_SALT',   '?Hg:H#};:YpMNP=`g ^{|dK*Gj(i,tMtR~ZqFsz!>oRFs}6*R#B!U-b(M;Um&jHd' );
define( 'NONCE_SALT',       '{@YK1wMTIVqG7Fu;>7y*{B}siCjc<|+XMul]a-R{b^UbN^Y}Av0ViP8Ae7@*2L^v' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_134';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
