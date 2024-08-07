<?php
define( 'WP_CACHE', true );
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'temkiuco_wp994' );

/** Database username */
define( 'DB_USER', 'temkiuco_wp994' );

/** Database password */
define( 'DB_PASSWORD', '-45S(p0VQc' );

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
define( 'AUTH_KEY',         'z8fog8azzmv3d0amudzwbpseaytzewox8xaa0dfz9ic4jg7n0wnigv4n8gkrcndl' );
define( 'SECURE_AUTH_KEY',  'ozoojsputkfex6n2qmdymjiw58fizeb22qdtanyfykulfrginynvz8yfmqklspuw' );
define( 'LOGGED_IN_KEY',    'parmtgei6rsalmtngh9exlhn4rcmszq5l2tsqkm5bnu7y3hskbk6cdz7e0qxwfjf' );
define( 'NONCE_KEY',        '3jptsl81wtanid7veo8wwhitq1axycl1p17oqt9tt7cpjswe76hnilbdkl6sdkfe' );
define( 'AUTH_SALT',        'lo67laboe5l0gfza14rprd7jutouznpg5fl7trfeleondoff1l0kpxnprb6mejmm' );
define( 'SECURE_AUTH_SALT', 'qzzykggrfp42cj8jobmlmufuhppdhmovhxczu9aofcxqrrkecejt0xvt5u3gtrxf' );
define( 'LOGGED_IN_SALT',   'eom99lkdi1h9mwejhsmsmhaowkr5w22x8xpw4fo3ismyigk4zglc45jhs6yvl3ag' );
define( 'NONCE_SALT',       'mabiwu94cpsrf1m7cuj9uloqvgxmyxnb7gwefyxuhxcbtjzi6luqqxa9k51e5tr1' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp7e_';

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
