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
define( 'DB_NAME', 'new site' );

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
define( 'AUTH_KEY',         'uDK%D9Wf:&#45oXn.[So%TQiraju(R1A|haAa46IP>xcfcY J2btO3LitC0Pa$/&' );
define( 'SECURE_AUTH_KEY',  'Gxql:[UaL?7u[ cxlu<nkZ9^ts`f;U@q=Fvvo(p^aWz bLe]t6oNHsvs!FqnTl!U' );
define( 'LOGGED_IN_KEY',    '<t</C1_TuE{WJkt$p8RwXcp } &5Az@}-Tuj2=IWD0M?1o3i0G.5.6MO/vq[qScK' );
define( 'NONCE_KEY',        'j{9]blw0TdSqHb7$8SVWvCrM!P*loe<@K6[)t(%r#j3K)P0zfBDhFf?!XfaL$NAJ' );
define( 'AUTH_SALT',        'k7:VKa&US~;pWy%0/R<oeIwXoG0pz)Wn4hnT[aaTLXE3iC<z*8yXn5Tk(fux!oxo' );
define( 'SECURE_AUTH_SALT', 'G[o0D;:[5;zKazbrxtfxFBQNK@]V>TUM~*nlWhQ,RoGa71Oh(@#efGCg;/S[C#ZV' );
define( 'LOGGED_IN_SALT',   '5s-K^|_(8[]Fj3P-XJg(G];<afsmT.W^~2_0,l}oHOa2V{{gBE+.:sld9M/9X!4I' );
define( 'NONCE_SALT',       '@9V?<*3N^Yol8,O:NBN/+]@M8ZAg)x/v1y@:*5+3myme Cr>*cy3@>U{y(&xstx3' );

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
