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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'prueba_filcot' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'EvU+FxsJtq|k~U7)Ced[~G_ X<9(UW(f@->SX~{lh{$,.[iBclNn:LDMu%jVU6KP' );
define( 'SECURE_AUTH_KEY',  '_^yTInKB4L;hazJnPW+PMR9DIf.DP<Vl!N/rdzYAO/[*6VXHO,]lmT9sy0g/Ms}S' );
define( 'LOGGED_IN_KEY',    '?<AG(<Jn)<Kw1!hBV-Cnc2a.[M.*G($jSHI%{a2cqnKl$3Ii<lus3X:OTIRjcaM-' );
define( 'NONCE_KEY',        'Fi7%E`*xSW*ME]SY:Bc*?I(hSN~nn@,KitY~sczwau#5zSTw@+CKu:r ;8a28_{z' );
define( 'AUTH_SALT',        'B;[|qk1v_,6geRq%3pL4g]RP9vo%wE]>odyaYZO^7~(qtTIw4NAo.^h,=+9|S&Wy' );
define( 'SECURE_AUTH_SALT', '#t`[o2*/7w~T`f:C3[5r58eQ*rVspwy.+WI`5_ZWrh8FbHY769JAPdjH;r7P^s7h' );
define( 'LOGGED_IN_SALT',   '@AAR2*pCUhUlwhLSD.L0n@nAve+l89a5tzbkOKXfO{$Ee]u*[3zY3B9bUX]#L}Gj' );
define( 'NONCE_SALT',       'Y>l*u qo@bF!msQq{ !5}>74[pCX`5YCjzI+zl&zE6})k&NxE@TeP.Q6io=/_)}=' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
