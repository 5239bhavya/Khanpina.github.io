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
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'myproject' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         'q1^QWq8+7ie;yFL&[N I}yMCc.sW:l>zy>}nsV:pes>HPBIcpb%&AaTC+Td9)sfE' );
define( 'SECURE_AUTH_KEY',  'Klm,tbzJ<rZT4+s>$[OK*lUrk]Fjt7U6/0 :fJ|u+8Gxz)2so|D{1s!Ac@M28s*H' );
define( 'LOGGED_IN_KEY',    '8w3nTS/e*D=2su!dK2LifN*gPn@ FWQ@s#IJe)9Q4BPHW#r6OpQr}O4jL3U uT<e' );
define( 'NONCE_KEY',        'JM=z&J-3wf/twp).a:YU?I)X:{PbLaPz]g3ymV^@mUvv[GdMrhIcAMf0$e@?E #!' );
define( 'AUTH_SALT',        'pYV[69Cuv/Vfm2q(G4]}{j8}o+J,}jUx(lbvfZ)RT3_314yql ZY%UsX:y:`|yP4' );
define( 'SECURE_AUTH_SALT', 'vw3^zL,PuKfH 6+&j7!bg1xDd=On$Jzxb@ReHa;xMQ}DYz<d%SF~}+YyJJ)s(zM5' );
define( 'LOGGED_IN_SALT',   '%4EmGGLX=O*^]Iau0|fkAn7O>X_}9DIK0#,y(+:4I<ik9U3R_il:lPV-Hne,`LWw' );
define( 'NONCE_SALT',       'y>TJY/1IVR/fK02qWRvw4vxxM4g2yXt m!N`7}j^LqbRiPxjg96V*C[l}<0S%SF>' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
