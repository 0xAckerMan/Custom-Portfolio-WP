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
define( 'DB_NAME', 'portfolio' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         '( t`<nPn3JY]H&1m{?3NjtSsKHMAFkPLZKXD<F:<R)b~Kl,fqbm.kj+OYJfyCt>.' );
define( 'SECURE_AUTH_KEY',  'Ik{N+Mqd0I.t[z3jV)r7T,/sVgNBXl_r{:Ih@O$NBEjOslt=k@V<!N3}rlHd#ZwQ' );
define( 'LOGGED_IN_KEY',    '+xBn=$-8^;g2#?Z;~om]Ll<)bR-[J6D?e`0r:N[i9(D(h]pn2/)}8F-Fl]^|^*+e' );
define( 'NONCE_KEY',        'WQ0w@.8nJ8>xH|@a@|CZU)|yG`~mUms5tU4u,cgIE`|H%sK+[$M~M]CX+MV`n^& ' );
define( 'AUTH_SALT',        'WF&}.Y(!PlU=a/>+CMS1e@HbH@{?P^Mzt(+{9+JuBm7%.]:ZOM6N~2$O8g<>J$Z@' );
define( 'SECURE_AUTH_SALT', 'oST*W+`vYS_vhI56@A`L8nJ)U<rzRAV&W%KiNjPprt^wW$aqFi4,%x3tj_FDV>o;' );
define( 'LOGGED_IN_SALT',   'upTFgv)t7Uhq9#,L[%IIN@K%fPMCcQU:5?S(yI[K*>Ds[-t*+)3t1kS.Q<VJ^{W0' );
define( 'NONCE_SALT',       'oy+pl{&cz3ai7.QO9UX-C??[t[`#LEGt-29IGjp;V80Y 4%1/[#E4v?lcVu!(yia' );

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
