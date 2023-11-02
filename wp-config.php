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
define( 'DB_NAME', 'test1' );

/** Database username */
define( 'DB_USER', 'wordpress_user' );

/** Database password */
define( 'DB_PASSWORD', 'Pass@123' );

/** Database hostname */
define( 'DB_HOST', '10.0.0.4' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'U=J!j+}m!{64ZHGhH4,b@TBs|35f9ESH>*lB. y)-p>lb1H3(+up<F%?V2s30<%l' );
define( 'SECURE_AUTH_KEY',  'QmRGigz;U]{X7U-^IlfBnT*OV%O%A/Y&l gAwQ.9P}w)$d+8_b<@Y*lJ6V)Xp)Y*' );
define( 'LOGGED_IN_KEY',    'gK%a7L&`5sTx=:i;0qGDW^K$%bnJkC!!l!=SSyuufB48XpE6+tX@L?iorqQ7/rfy' );
define( 'NONCE_KEY',        'E8{v|J/zTw[2k_Ou-4dgp|T<jS:832tH6,!t/1|r(M}nkkl?kL|T/Df*AyTTpB9g' );
define( 'AUTH_SALT',        '?DH 53@yGU|><y1d;`cg&wJt^=99m6SSsf!L6|HB7TBXkoi1JMpC;S5!DC`cOV,N' );
define( 'SECURE_AUTH_SALT', '~k65Xe,}22,dq]@@xh%Jj,[-|!p/q8Z>HJSJDK*Hw!HL7/3m$[Y;%cm$5gS7Q&[?' );
define( 'LOGGED_IN_SALT',   'Co~=Wq.D!7CJ(af-E-cuNe]4q+E:o{^v41C1p(0&>eSkk 6+kI75LHjt1EEkM *g' );
define( 'NONCE_SALT',       'l-(#zVfQRs-&2@VvTNY+MCVPhPdu-#tXDRIYHqKFpII`WWVY%~vB^s<zM04o ggk' );

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
