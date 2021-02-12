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
define( 'DB_NAME', 'wordpresstraining2' );

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
define( 'AUTH_KEY',         'kS65fP!4/^tV={^X&Vm.FOESnx9~Q5>C?7,^KrEI3Ev|)DF#fL7FzZpk>$1n~4wk' );
define( 'SECURE_AUTH_KEY',  '+ns&>vjDGRfAq3<mcAH9xWfExHIIj]d9$$0$_)K%~rZ]UZP:[VJirrK!E#xqt|Mh' );
define( 'LOGGED_IN_KEY',    '@$y6}U|%HQ<VSIfvm#%&U!}L>K:~- I_lP*ax}vo<qz^;c7=A%Kh} QX kmCD 3`' );
define( 'NONCE_KEY',        '=A)2([/S1Zi&c6Nyz=Aln/^[n1F4%k}kkJc*U!tB[-3D|rSA?&;Ko)]PvB[gJn);' );
define( 'AUTH_SALT',        'A+2.rhs9uMBW(U#1A2VmN{0r??&!qHR:M(<5hVA$CN3z=~wmC4or^QOk*(94gjoB' );
define( 'SECURE_AUTH_SALT', 'z$`V,XK.1;Wc+6r&~]OlO,T@ QsgnIrkcuU^T/i4`Wyo+(I{4n;#Py%JXQ1C]! m' );
define( 'LOGGED_IN_SALT',   'Z,5?UPxb9sM<(*EBK|{9;&KHfeNc,;SFu_7qvW2f`|*OfTlMF3S)a-fdjH}Le.2t' );
define( 'NONCE_SALT',       '60;K:Uf!G0}.`;Ji/1]LkMs:>0`bQuwKiL]pS:$MO_bbpVwnYWi^YXZAdl=Qc*Z9' );

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
define( 'UPLOADS', 'wp-content/uploads' );
define('FS_METHOD','direct');
require_once ABSPATH . 'wp-settings.php';
