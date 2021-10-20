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
define( 'DB_NAME', 'ministere' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'U[!C,%8pZ0>=]x#z&{En`ZMMd~EdM6HSnlA(g dIC;P`855Ra&Bs^DEszi9(//MS' );
define( 'SECURE_AUTH_KEY',  '?2)VLt$ s9F3CglFIN_Qf1anV2arT!)_1CZ7Lhy(XqJa:nA#?CjhY)r,N1yHGHil' );
define( 'LOGGED_IN_KEY',    '~ -tM9zj?[HJ(/*<6iMlxsEj!+%tiHU4O(E6(`<ZiK3UmjsEHc@Ga.:?XUVX,G&-' );
define( 'NONCE_KEY',        '<76ZV9I:-$AhJ.OI4B&8JRVzdad5HYfT}e=E>7-n?xE{]HjZk/bA>|X=ku4]l5vr' );
define( 'AUTH_SALT',        'T8CMf^21F;;cKgS#x08!]Gynl&3#FSQMRx#f(SNz^<h+.TvQ8#b4Yz1W5i$@RSvM' );
define( 'SECURE_AUTH_SALT', 'e>.Y)@&<Rk+8odZ;a(=$V%h V$~L}c8NGOAXYX?DAFtu)>+p)j(j$M.0n%Z<*+pI' );
define( 'LOGGED_IN_SALT',   'E8AtAgBQ/RYG;uj:#@w2F$)b_gggi^j7bjA3f2`zd+{bau}o~+H%hQLUR`dh@%99' );
define( 'NONCE_SALT',       'CBWw*0<!cr53^%X6T%oKr.*@6-oCRN3)AkFU,;p(?:y~E3~#6i*jRE[%<!ezi*_7' );

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
