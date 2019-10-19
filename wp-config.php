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
define( 'DB_NAME', 'work' );

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
define( 'AUTH_KEY',         'F3Ei6_t9XH7b5Z{HshuHz1S1:DtcjliBt%gG>>>eMi;8VN#j9sa22wR94SU-Rt{S' );
define( 'SECURE_AUTH_KEY',  '1+=kc=@ws5_4BZe8E/{7?Rfn)?G&<+V+unFs!S36DLKW}=t1n3=z2.iI*aT-3g`0' );
define( 'LOGGED_IN_KEY',    '.2jO}Iv].kax3xfgzV(I0xn_BXzg~xat$M{mzh>K/h fH|Gg#&fqc[gbo}G(C1)i' );
define( 'NONCE_KEY',        '5*IS3Fed|s)_|}X`NM/K,<t]_Yy1E<-h67y]cz8s<)|P{Z~#C&arX]J;DtvtF4MI' );
define( 'AUTH_SALT',        '(y?20?]$5;8B[R@.um9@%B.LBQ(Qv ()g!^9}q<I7@,AnyJuqtTIHY9Ym&79ehgL' );
define( 'SECURE_AUTH_SALT', '|~@},Vk-EE9,pB! K>>5+x=PVittFQj)h)ApP$D|=1j(I@M$v3@%E;C]Pa3gDbTx' );
define( 'LOGGED_IN_SALT',   'v0vLOnDdC8Jy`_E:MKRn]dEl*P1Qz>(B}p`!u5>I={Y>@RZ/=iF~<;xfWy&P@Sa.' );
define( 'NONCE_SALT',       'w0!}t!M]Ujb`XxOO[+!Oixk fvkk1xmyUWL~>a5[|2m#[!eW5X&8l%!D9,}}cTrx' );

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

define( 'WP_MEMORY_LIMIT', '256M' );

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
