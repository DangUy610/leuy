<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'leuy' );

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
define( 'AUTH_KEY',         ')u eTSg*sUTC!plpvo*esXIi-,F/VUxfY6{vg&51G!`RnA@;{9uPD._E6w+6xcjg' );
define( 'SECURE_AUTH_KEY',  'CtP22#ev<Q4l,!AUaHy72.o&gmsB^q)P&M;9hxX3lA6#xMw?84aGY|wemo(kQ&(Z' );
define( 'LOGGED_IN_KEY',    'flxSH4p,z#>;h.NLSQdQEWn,)q3@.DEc5,POEzDXVqjuTm6CQ9h.Y4+[B8/&cXWX' );
define( 'NONCE_KEY',        'wNezAM=D~(&|;DBjEM|ill~&Q~l~[1u.Rm %zO6P.8fNsYyoo/Hj[[d3P)3*6a<X' );
define( 'AUTH_SALT',        '^VekM.SUy/n2Z]TVhMir4[jUj^sW1LEVaUrA*e`DU-=?8~Y#059F,);=&-{nZH90' );
define( 'SECURE_AUTH_SALT', '0YJ]Be$|0z^g3ec2PZu9N$Yt/Se@-8H3-D+npmL?W~;4Wn?GW_3C?J+2xeb0EEm_' );
define( 'LOGGED_IN_SALT',   '9qycm?.J(]rDFaSZ*cZEc;QL*8*3khJ#)u$^0`z>H51Xg+T7)})G0{NVt|p6.A7L' );
define( 'NONCE_SALT',       'OcCO9yz968{w|wx*bH>JTk;{{u9~LbCV&7Dt{2,WsG`DE.ICRAd@altz7$QP4w4{' );

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
