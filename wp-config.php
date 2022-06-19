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
define( 'DB_NAME', 'rental' );

/** Database username */
define( 'DB_USER', 'Any' );

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
define( 'AUTH_KEY',         'nib7mX&Xt?O!?=>zyNX=D(xwCQ#lT}):/gL5<R.TPo|5&4c8)HwoCk}B<Gx<$-W8' );
define( 'SECURE_AUTH_KEY',  'F~z4v,SN%/FfR>Ph!W~/cN-M>#{cT<8fB<1fhRKcJq[&dZt%e$C/z}BNldGmdWO3' );
define( 'LOGGED_IN_KEY',    '(q8iu-}<&Ip|gKFKy:aI0<[L&&8=j&QRoBiOe(;HE?W5O>FNY/YTVmp4qSUt)z|<' );
define( 'NONCE_KEY',        '`LOlm@3pGuS*aB>_V^j6la;3,gi.IbPA%~nm5Vow0Bo,XmhXY=>iWU(kX1K7pGZ6' );
define( 'AUTH_SALT',        '+aLaMg|?DwxZ3V=9[uiF*6MF>XHdbLED}HuS3MAR?F>+?}&cDY|@`JWg_AcR#Rb1' );
define( 'SECURE_AUTH_SALT', 'Y5.hev%?5a7rNHZbny}$AE]Bt.07qAmR}mUB:a$MWD[nIPi&l#kYX/rBpw[H[8|^' );
define( 'LOGGED_IN_SALT',   'a_4@>~hjkR9LdI*F9dxJC/^$%6:,dJ2<59l buesd&ZV+J_5;U^H~h*gSM6`hj)j' );
define( 'NONCE_SALT',       'C*cp=ZmIOP^+pY3zJ&W]:^xm+f,~(03C+=SBX;{P-:i5V<z!XiT!_Oku0@NEhj~D' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
