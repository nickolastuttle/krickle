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
define( 'DB_NAME', 'ariel' );

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
define( 'AUTH_KEY',         'Q_6@.SG,WTZg./1a&!TE<$_]c@iXvot:{a-Vdf<e4J7]Wz>+oxaJ#QA?O6Z}{J _' );
define( 'SECURE_AUTH_KEY',  '!(kzaVLtyUI|X1/n2,LEXkd|hT:_wRXKH,YkxLs?CW^0/d^Ls[J6ZXc_$Rnsv&XF' );
define( 'LOGGED_IN_KEY',    'f+mpI3jQ8%/;)7H2-*GBr_nZqA;o=QXkzP0cCKvWOlmbYcN4Cce0Nk&By]^;Fb_6' );
define( 'NONCE_KEY',        'n|zautJrU@[gW.Ij<]yL9O=fH1%w_^Qt<v7oRKsu.L7Gj,fCyquqeb=oXzq-mn30' );
define( 'AUTH_SALT',        ' V8`fqn]>;[{0i<9};KVf1zaL]z7_GAoSG8E7X$?q],ajYi7w00/C=[c:2w$TF+p' );
define( 'SECURE_AUTH_SALT', 'mN.g!1nn.L>Mmv^rg: Fuxjrv;cdjyF5u|h5-Uhl<*SG@D|wohQrVS3MB+})a?[%' );
define( 'LOGGED_IN_SALT',   '8?wG<pC:UY4Jm) bYsd6(u6 } uT=1mv~}GG3/)qlYYjVI(|:%R l[Y=.lRcui0M' );
define( 'NONCE_SALT',       '}KZ:gM0B9gl*30|2N!<Szh <<$~%r?{uiu^,SpMZpC@MNf@d2urfOY*,D5b7/+gS' );

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
