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
define( 'DB_NAME', 'portfolio_db' );

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
define( 'AUTH_KEY',         'aIC^T*.Z=xtnSenxT=0@5cVW%[aIAW2hs5@UU,X;<q&C?=hZ]8[(V2e0&d9bs[#=' );
define( 'SECURE_AUTH_KEY',  '45UL$jth{@y%(BQz2ZURIQ]gjZxr4~HUu!flA`oLaJS5:XdqG<.wCvTI2NuDdkRE' );
define( 'LOGGED_IN_KEY',    'OT#y377hp[kA+V[;>VBpDIFLb=ZK]bwY45fqe*q9uXZZO` 0n(XfGa:>NVrV.W?)' );
define( 'NONCE_KEY',        'm6EbZYo,^lOb.$mH(|w{xBZC$3G_^aj?[#Cx~*634=GU+Q2Yy]Dx[*-V%R^g73c-' );
define( 'AUTH_SALT',        'IN^x#x/]+4XRI>JJ_r4^.<3x0;75hH?_Xymg({-@K`I6E+6W>yR0I{jO7?I%V1*-' );
define( 'SECURE_AUTH_SALT', '52;b=qwf<DX:3`eeK=D4Zz8-MaWQ/@FjN`H<6$kuS@jKOvB7e1O:UQ}.$*EwB+;,' );
define( 'LOGGED_IN_SALT',   ']dzS0Qc{3`&lY$bA<D;TI`%7yo>GZ<9Uph;Ud{WljOp9aZ1LH`o%ch3hG?BqbNe@' );
define( 'NONCE_SALT',       'W+YM$oE4O!-}E)ZV|Zggs=jSl.XAPm!^/|zR45N)} dQ4rAp9xE:G+Cw+d+`Kak:' );

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

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
