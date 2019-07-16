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
define( 'AUTH_KEY',          '7+B^xyboQt|V;u=r?8IbW7oxrf2_k5;I[<Co&!|w]JUJ<HxI~.v%fi6)AP.b-j`<' );
define( 'SECURE_AUTH_KEY',   'g0Zmx^PdQ%u/z_UQzF7YSps577Vt<=VVI1Vo.AAjPSL^NQ9Sn+0_ZE7Htl,Oo WV' );
define( 'LOGGED_IN_KEY',     '1g8Zx;8k9IL7bAnWzTx|je.uZ3W, mjF-&=/$N/yQu~44FXAW5_0_%7+Md+x{$D7' );
define( 'NONCE_KEY',         '7K,bV;ddpNm8r!,mL}s@n18;_7RVfK`PUv&S=:AzwM8|v]<v$#/|9!W&;KtegXvl' );
define( 'AUTH_SALT',         'P2,wpznPA.bA8zA;#jgf#b q&dHs}128<B`^N[Y3fB=M/ F<:{_7qkZi=s5Dh3]3' );
define( 'SECURE_AUTH_SALT',  'eeV~s6^NO,E{dyn+{E)9P0BS6zS%D6$$vkjVMN8.{`= RxRVeuRB&UMLv|L{_b*j' );
define( 'LOGGED_IN_SALT',    'dq@mcG=A)?[`O`qbTeHUoMMarj)tD&Vw`h!<WnvkC}|4p-ykErKwa+!s?_)Bc*Xi' );
define( 'NONCE_SALT',        '2_{N64 9iA7^8JAB]3CviN2(#Zwn?msgdb<Oq6LQD{?WWs`/}iD3cJ,B(h]t!4$:' );
define( 'WP_CACHE_KEY_SALT', '6KMNvN0SC!MQ>ESDU ,q-;~)ieK)6ID,7-FS>mZ3#r1)V@%t5pT:#=j/!PcS=YT?' );

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
