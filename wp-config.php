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
define( 'DB_NAME', 'thedaily' );

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
define( 'AUTH_KEY',         '+,10^bL-:p:HE ?%~R622ul~BMkKuQ6|j1c+?bwAqYJ+sCRZ63eI.j mn:{Mm|lr' );
define( 'SECURE_AUTH_KEY',  '#|?Q9#[?KDPr^JuX(H*i2SQ<Li/Qewch!2%2Hrh3>I1H5u%6!dJuzd%+AGz.<3^T' );
define( 'LOGGED_IN_KEY',    'ca$N3Y&A*rqS/|Q^&5EPN-AAffH{![h{C<QnIhU bi-*Sl4rFnEjP[a:/V?s)(>e' );
define( 'NONCE_KEY',        'W?[#]-%./|1`57vSY*w^g^:CTBxjNz*`G 4YOiWrf{-bPx[OpxI{rN^&Xn5?95xj' );
define( 'AUTH_SALT',        '+f3~%OV-iq!kgcpsJbip9mZYiquDD%1/U2,Y9rCP]<}T0Ea,,q;Kib$kkUrY;h4r' );
define( 'SECURE_AUTH_SALT', 'y2CCUz_Rt?Hk0}w+i>}8erjI+q_Uf^V[nq(#1D!N2F*mZJ=<nj5wW-aQm9{$@*2_' );
define( 'LOGGED_IN_SALT',   'Uc|44:I!b:?3ko(PToI=CRcWwd6jcO_&;#aFEkWD$(,yS&-Pg5m2gSqlwLougvs$' );
define( 'NONCE_SALT',       '%Cl59a0D|$#?>!>x:*DXz JTT[a[0A7H0!4{4fo4-MZ6$LkpnvwH+>(qvHOg90(^' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'TD';

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
