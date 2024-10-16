<?php
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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'web-sample' );

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
define( 'AUTH_KEY',         '!9UUI{.0Ruu@[(~sZBb@3cTZ`a9/IGh3Y/*e(}*RiE JUu$4+#;wE}1@tuQRf.0n' );
define( 'SECURE_AUTH_KEY',  'ExwO~|Dq HilA/BJ#J&#l;F@4CE+X8RN4-iL!^N6Dk`)*xu74ai:g}J^e5H =_|^' );
define( 'LOGGED_IN_KEY',    'Y]6 Hb6HJtKo2zGzu.3!_4O7/77i1LA#oI|i.-Ioz`PCu:8P_;R{tehTz0Z{[dC@' );
define( 'NONCE_KEY',        '/.JS+[*<ng7/OuoEhe~[bX;~C0W&xeT`V,-Xl5{6s/ZMwWSx=)<j;}KzGIBzJ[J;' );
define( 'AUTH_SALT',        '0{&MH92zL0Q[7`V(!MjzACRa0)`XQ+}fqp.J) r7__*#l[}eoKe#6`Biqb+60(7U' );
define( 'SECURE_AUTH_SALT', 'Q({}?%tBR=`@jq_s<}CgVumHiUy=bQ5tFU^H&3Nby8Rg4R[NEi9WBR1h$Lb9/BKb' );
define( 'LOGGED_IN_SALT',   'De$m)JQiC[Hg>A4%J=F]#vJDL+fbuL{esrwhWRu$Ah:j87u!qG*wuo2ceTo0yAn7' );
define( 'NONCE_SALT',       'kyhBc<&d;Ib{3)ip&f(ZB{gz4iI1/LxQ(on1g)*[_{`dUR|1dZs]I4|lTCWJX^B ' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
