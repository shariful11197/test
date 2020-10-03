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
define( 'DB_NAME', 'test-' );

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
define( 'AUTH_KEY',         '#GlVJ|Hu/b%H@Y=.$`M57fv8SmUZ.se:PSBPTP;fC:Z6eEK0c_x]tuLnqP-Z-ItG' );
define( 'SECURE_AUTH_KEY',  'Yo2||qr/nBA;&_V2J5dPs}$-Y)xlvPM0og+M=+af>ohgDo&IF$ HDggHH~Av6S<F' );
define( 'LOGGED_IN_KEY',    'UsQi:hw7kS#q@sv8!W64[;QF4:%ADoEQ5G>&y4HN`}e={XANxNP/i7ycY#V#+qF<' );
define( 'NONCE_KEY',        'N3q)NYX@`u}{ArB9j:SOP>x!0bx3M77e_4$Q7Q8{hW[#nbs^ZvMd{$fs`_2c4V^p' );
define( 'AUTH_SALT',        'C+n14Y$Pqd?X<7<1[n>DGj&&7|!&!}UW2^ yHK`SBeO$VuYq_@ioTnyfh=vJ+Iib' );
define( 'SECURE_AUTH_SALT', 'L4n2<vX`Jc&6jW8N_pOnf)JsUZ;l>|fx%mUAo(T48.vXORF1c4:&dwX.z<_$Ep$R' );
define( 'LOGGED_IN_SALT',   'Q+>ER<O!,V>!zh^2:$0OP<O`gv^HVyDM]Njc=A=1*U+nheXysy[~9.1&nE*n`;%{' );
define( 'NONCE_SALT',       'ZqR#DT$mFE{}sM>~_?%FS)C=6AQw+m{^)dE&@CTB,7*wt3_q1Pkv9:(. d)ps6r*' );

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
