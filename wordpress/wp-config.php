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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'uhlc_test' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'RpD<|YtTT>4D%R9RV5|i~=.5lC!~_qO;e2kL7nev1)~5(^cuE/yY,r~=+H 9e>ih' );
define( 'SECURE_AUTH_KEY',  'Vkeu+2.ObddLL[4,&W3ObGk.:ZDYR&+DUj9OG:`J&GCZt@T0>lpgQbHQtHS_z&>f' );
define( 'LOGGED_IN_KEY',    'e9+F`-k#5G^lLPn3~Y}$&dNVoDzk{b>aTq_8&a!4HU/Y-u-{D8uYL]|7bE)-cbY|' );
define( 'NONCE_KEY',        'n.rXT-/t*>7@qM0aa}b,(_/`A./^PJ0%4Fu~/@,B=8Pg>=[rrTZIjN*FDpE,~NU6' );
define( 'AUTH_SALT',        '!RHgeh,V1T56C/uN(F/LUH I;o ;tQ].>]!pG)#j4.svM:>AQQ8x+m][zCK(* TO' );
define( 'SECURE_AUTH_SALT', 'C5WKWX0 i~8Qmb2z)jvnAs5!OQ>;q0JG._{l>g:@ZF_[K0-!$SR^g.X, PJx:P32' );
define( 'LOGGED_IN_SALT',   'n~9OX4W QBzK,~HU8Z K|B3<7BI2GJfVQzN=)J-},f@6m=t^&Q^87^nm.l3z?.[f' );
define( 'NONCE_SALT',       '};Hn=ox]4IG(t,olI}V4ROA;Ek1J{;rL!Gv]>-#f&.*IaZcutyE,*c/EyeEbm _(' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
