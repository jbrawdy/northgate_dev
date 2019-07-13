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
define( 'AUTH_KEY',          'lRDM-lY,ipgo|o#XOO#:$piTj))Iz WY8wv!d<ro>f=+(<K6_dMt+y<EUZ(n$O1%' );
define( 'SECURE_AUTH_KEY',   'ZLaw-hf6?dG5g[TzJ=VIEgwlJJDjSy|vHQL-4G0mw3m) @VD8FBW?)1x|*L4a<dg' );
define( 'LOGGED_IN_KEY',     '58K!uzVQ874F>08g*N cw-L1CxJ0X;a`:F~YDsW9M8^x+Qb,,v*wN;n>@OqLLtWw' );
define( 'NONCE_KEY',         '~D/e4M5~(Fp+a_P``20@H;_Ul)36@5>cP1Tar%nK[ Z<| :2c{OvC]U+/~pY`npU' );
define( 'AUTH_SALT',         'I;7}{:tr-MCanL4#!tngqyZ~G%sa^b= _cFB(u(/J@4!Y~BD=cHr!_Xj!51dE}G&' );
define( 'SECURE_AUTH_SALT',  ',%Ii4oA+p!Cu&+;UMQhM}MjmJScV*(KL~6XiE_!]a929EdocTUNf6545r(fBXH{k' );
define( 'LOGGED_IN_SALT',    'xou|5rp-ue2BJ)[4YF~KFoFXu=Oq{e,?;b?hPd1Tl?UU:?dpdS`tMyOq,1X@CbCr' );
define( 'NONCE_SALT',        '?Hzv[,?X*2JI/d:UQ=8o(!/E]%p2}ba0!ba^9n1KJ/p]Y7[H;jHB?9cp3U%+G?|A' );
define( 'WP_CACHE_KEY_SALT', '{,wIaj8.;<Ko$cK^a!o[e@eapQ&1tGbNpd9X+gZ!uI<~VbAw% ,h+C%M,EHGrjY=' );

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
