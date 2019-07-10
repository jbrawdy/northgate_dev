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
define( 'AUTH_KEY',          'Q7|q4%N4bT|evzto>I<n,Aq?ov!}LSnVuf1*c*{XB(QC:-RHYOnlLbP-K-fRK0}j' );
define( 'SECURE_AUTH_KEY',   'I)Z._H)!fUP/Y%|d-NMzv9I0,*c^B.I}tAk4=0x>Ix$62)4PW[3RYS8Z2<;AW({`' );
define( 'LOGGED_IN_KEY',     '*^%Mcm9n97;7~Hm1jHwg E|mWdWK}W9WvA_&[o7Ca 6}4CGqMd`gCiu{<-v2>tf/' );
define( 'NONCE_KEY',         'h/+L-CZ_W!.+F$Ay^k5Tx%-e6<$v53db54d:HNC16B3biO|X^QiYtfc?7iEE7)F-' );
define( 'AUTH_SALT',         '!lp5ekf=0.s4F:J;QwMd6e]4EMzEh|~nOQ }w&3mcAVue@>JS!^IbCJ I9sz/m2~' );
define( 'SECURE_AUTH_SALT',  'nk%_%r2geRhKjK2#7a6?eWO6(nNN4t/7Q-e3WwZ?_s@g_D*=50D+$b@>5<-*p@Y7' );
define( 'LOGGED_IN_SALT',    '`{5=@+w`)gK0iRl?|,c-I,VUp@C6h2uh0%Z)4;3DML6=w[[$R_4l/:`TZx{m*5+=' );
define( 'NONCE_SALT',        'GI4gjhLCo6y.4o51R5E(`KkOY3nR7qjmNm&fXNDb `-+[jEGc$nu1.07Xe_k/B*J' );
define( 'WP_CACHE_KEY_SALT', 'hj~45)!~KZYwe3N}`V_y~.^N~sW&@TPWZY:JHT79h}dKAq@JWs}p,P{BAqJc`q7c' );

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
