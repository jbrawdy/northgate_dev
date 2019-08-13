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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'OiJ}L=<V(A<P3]Z>wQF:W{1KyO5n3_-[JWNJ/@ds+k7K8E{[sd||]+i*ISp!66u(' );
define( 'SECURE_AUTH_KEY',   '+c7i$LzCExWPRV&6kIkRge[H>{}#G-AztmitMdKu]|gS@42F1u92AX.Xw`D-70dj' );
define( 'LOGGED_IN_KEY',     'q$JG^{=mRyRH}3c]zzR[#1Ybel6$b~MTc4I9j#}aF4j@1u$8?o>3]9H{t.=Y.9Z(' );
define( 'NONCE_KEY',         'k<(A^GoK*!dcm}W[=:>LFr( nai9*-|L|u|1x r(]HY;.BCjEsm&7>*1@YeI6dqY' );
define( 'AUTH_SALT',         '^P=:aSnSGK%$=NX1h|R)X^ZOMh:dD2 {d^`K8usl279m9iy(}`mBjS+r/>P$[kP[' );
define( 'SECURE_AUTH_SALT',  'uiw}$z v%S3e6^T6aVl[vnYp,]f 1sMX[LLx {=bZEKVH{*-K*+ U+7[JQV!ohi.' );
define( 'LOGGED_IN_SALT',    ')hfR`xYm~2E.r0[A/`6}*]+fg&*l/nFTB1,e+PCYR,fHe ORHHUbzs1Hr ]EgfqQ' );
define( 'NONCE_SALT',        'eGXk/>Ev?Gb$qqpbrZ$}ikIfAmo=4Gbh-j]--8s|I3|(i`FF}1y%Q~nU`!;PqRO`' );
define( 'WP_CACHE_KEY_SALT', 'l1PGEi.xqg=u#Q,$~Jt4n!+z=+EGv^5^l;cj~W{X/pT>j^W,heO3(C;sfZveihB/' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define( 'JETPACK_DEV_DEBUG', True );
define( 'WP_DEBUG', True );
define( 'FORCE_SSL_ADMIN', False );
define( 'SAVEQUERIES', False );

// Additional PHP code in the wp-config.php
// These lines are inserted by VCCW.
// You can place additional PHP code here!


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
