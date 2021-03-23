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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'YTz^gB:QO`#%b(=zGn%hCID$+8hX$*smc/LynDd,PR|jX;ToIDn}cqO,y)W*8R$-' );
define( 'SECURE_AUTH_KEY',  '21or@IN21rWv?6*e!n5F6MH#ozZ|IW v(o<H@XdAxl4,uv1pm`j@]yi.y87A<ne^' );
define( 'LOGGED_IN_KEY',    '+_1(+L;XSStEUz^bA9K;$MD)**Rj%czv}R,Ix.X3EfN.brj{do<s-.l1-]pT&8cv' );
define( 'NONCE_KEY',        'p~d@6pf4T$M&]C#bQ|]kLeCd>yRGl&Y@`My.GmL-JaHwyY}]v@:Q#YqzPBtb2Yhv' );
define( 'AUTH_SALT',        '!|C]Sb6}UPX .^JD@*EC;id^JC^=Am$EZU*yMj7O:}%w1Kg||HQG6F#^]$Ys[KH2' );
define( 'SECURE_AUTH_SALT', '6o^Fb_h0_.bE%X]mm|$Pm$f]A;uQbdA3R(M#[<V5wPXdkh&VH[Ar*cJ/pNSEMov0' );
define( 'LOGGED_IN_SALT',   'p@<N&I@lEqp6#@MrqmBN4!)+h6r(e*qPbFMv%xmvuD[0>1CWCoc5Fh%EHD8QW&(<' );
define( 'NONCE_SALT',       '>@nt3*[iqu(o5x<qDjs*OFY#3sBxWs?3nuD!;cfbh5q/taY@w* I=AT]fl=e=lMq' );

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
