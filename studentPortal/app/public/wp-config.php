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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'bz;35VuY: 8(Mz]?_B<`8X0Q89Xtt^e;f4f-=amS)BXC@RS=[({tkJrTqY,6b>=C' );
define( 'SECURE_AUTH_KEY',   'nYUT3: .atpw;FT)ufcq$hHN 8G#{%vvCgg,)JAv_j*@TS*x=JB2%x}PYXQj4Y$T' );
define( 'LOGGED_IN_KEY',     '9}_n{pVQ+W.OudE`R4YA$6gj/2SQ?PGjy<Erq1FxGc$p3| t=~`wuPAm.N!XDhfD' );
define( 'NONCE_KEY',         'DTnrq|i/TmEM$t&EjUN=&T?<Kw+5rLKy&q/KjN{{JOR,g.]}U(b^GbuH]@5wllZr' );
define( 'AUTH_SALT',         'A=!<Kh:0^o%_Q{|);@C<+nlre09#]:<//[Ws6nsb]v&q@ABGVG*`cU(ALgn=E^M:' );
define( 'SECURE_AUTH_SALT',  'ZtFj=Y4y`d`0BHM6jB$>va^vu,-S~^s5d&48jg6u;D+7/Ic%#[%*;)1wC$aGlbN^' );
define( 'LOGGED_IN_SALT',    '_K2n{x* Pw`]1A$qH)1mqZ(J~OI{Yk`VHni<kO|}ByA2(q5lGM`9*-0z;IUWOABi' );
define( 'NONCE_SALT',        '%LjG djbV)k]$xSJ%f|l~ej=481u(vV%sO2:4EOf?dWQ8Cr%PbKH3)}%zcww|uCU' );
define( 'WP_CACHE_KEY_SALT', 'v=0PdB5@C_U}wSo/oeNox7<)hlL)=R[%wgtX^2%o).Us`!6vY.wGFra)-f/:tJ(V' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
