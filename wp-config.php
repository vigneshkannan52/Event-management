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
define( 'DB_NAME', 'event management_db' );

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
define( 'AUTH_KEY',         'z0eKi>kP 4B3VpOf@iieI+_c_h0C=Ud9}U`eT6d%2JtFkEkE#QZ^6K19htv)fcx(' );
define( 'SECURE_AUTH_KEY',  'M5#&HJJEmLAh|P]R9?Kcnls$U28CO@[|sDVxte-%u d:0pb4L0=FtAS`oHO+c=k+' );
define( 'LOGGED_IN_KEY',    '+c8henVM]ms}GheE}^3zQ*DV)XP%SEF2>E&o($)4JB$>HuVHgHFx+qt><XO~79AM' );
define( 'NONCE_KEY',        '|>gs &-5?S;!8l40P+K}t{a>ybznsL=eUIFq?`vkp5K*(8>Xzm30WPL2=<cHD@+F' );
define( 'AUTH_SALT',        'A5h&c9UN .}Uh0PuEK.z|g,AuP-#[V>s..Zc]a9iOF4lLqT[iR(7/8olk=f)Z9U,' );
define( 'SECURE_AUTH_SALT', '^7b[Y*_``,IjrXk@wMPqn{w>-G!G]0I=&El@y6d5pSvj$qjPsK43]!R4]7RpucT)' );
define( 'LOGGED_IN_SALT',   'pm<K)]IGAqvN{pW--AnY|^NV0AB*<Cw9eB}[790z&p|HldpOk@8LQ3xpU;hd[h|P' );
define( 'NONCE_SALT',       '{D2vi_BngvOX%}bXDiN?6l1Z/UkaTmCglR:ilcrNPfo,pdw3Y#Y&,)MW>)(tC8[>' );

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
