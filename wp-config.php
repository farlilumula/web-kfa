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
define( 'DB_NAME', 'web-kfa' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '+zm`/oo{&}1]O3}YoH!Mr<i0&C1b*z?zV3wUo|:JOgS9U;(X@:]oo0uR)iTIx;OK' );
define( 'SECURE_AUTH_KEY',  'x?-JB*X;|de 7Fjogb<3t9!f@$!QVEBT58J3D7/%d&{tLzzg[9Hm1G7[,yGDHXb1' );
define( 'LOGGED_IN_KEY',    'HQhUGP;hC4zlK5LMm`[+}_n.{WhJ2uqh-2EB,Zte1Rd+hV`Irhq12;o?m(z!/6jm' );
define( 'NONCE_KEY',        ' C3[V*[4t!Mp4Fb-A-4cZ.Ti=hWl5LQwD6Y?j!CI>h44=DY:9vL}3cx=KlE?tsqZ' );
define( 'AUTH_SALT',        'u~Yb~N# tSgM,<(##],Q|IW</u-BSRWF+&?Q_8hRnKl!HDNRaDt2%bGh77v39)J;' );
define( 'SECURE_AUTH_SALT', 'T0hChN2;CbiaC)h<a%- z6q5Pp>_&}q2gv9cYvDDbd]}HwBK$^6vMZrU#9b*qCYE' );
define( 'LOGGED_IN_SALT',   ']JM2Mds8?MUXEG)2?]yb3zYH7<.BEaR.:qy>.oX0ID[CvLr?d+$/0n+9[3GEz^w2' );
define( 'NONCE_SALT',       'wo[~Wcvjf!|uwD2PyZUPbfV&K}f1`B?:busOF0CNebB]?KFVff0Q+!@fcaua;-jT' );

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
require_once ABSPATH . 'wp-settings.php';
