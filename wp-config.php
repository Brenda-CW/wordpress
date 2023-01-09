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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'qm-c,5Vh|_):%5T<~Ho&zm2-N1=oyCLqA7&sb0b{&Ty$[KM#[-QPp)f^7Epgc0;u' );
define( 'SECURE_AUTH_KEY',  'p0`zC.M!Te/P9D)&?aM*;666AdF+ZFBNW~./6d19T)(,%y/vkj@2Rh~PrpCXPd4A' );
define( 'LOGGED_IN_KEY',    '[ud]]7z3Idhrht&& |YYE*SO{me9r<Ws#{S^Jsjn{*i(i|qUn(D4?TlY>?4/pZM8' );
define( 'NONCE_KEY',        '#~~&8p`Y>Bwd(R1W0~b3OFjWEv:#sq`8f^IcMQWyO~$E?tGwPB06$uDM>Ig%wzdD' );
define( 'AUTH_SALT',        'W@X`!oz~3_ 6++;0J[nn[sDuBu3]F#6bQRU#KJ|:=9sEu6_{G<Q&tRXQHBYu:^/6' );
define( 'SECURE_AUTH_SALT', '9Yk8#QguYZZ@x1:S|}1s*R+Q.tc5MXZYF@c]/W^?nEo}@E~{k-5>^8-q];;i1Kn_' );
define( 'LOGGED_IN_SALT',   ';&rdr]|:[nj[gUhuGO@@XAV =Y]&biw=Gj-xdwjljFa$;}^7v$Chj;YCwn/QU~q0' );
define( 'NONCE_SALT',       'HygmWTf_z`8tv^q?/B:{CPl-PJJ)2XA.*BOGWPz=MK5IO971ZK7zPI.?8=H1&<0F' );

/**#@-*/

/**
 * WordPress database table prefix.
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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
