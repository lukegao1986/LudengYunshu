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

define("FS_METHOD","direct");
define("FS_CHMOD_DIR", 0777);
define("FS_CHMOD_FILE", 0777);

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'LudengYushun_db' );

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
define( 'AUTH_KEY',         ' 2^63]v|b4h:/KadRFW2prQJ%}C).Y5xnxh]-U2Rw`e`)Z|AJXm$OCOf3DD}d$xp' );
define( 'SECURE_AUTH_KEY',  'RZ/J_YL-iwx?z EW9x)W3D|y2a:_P{99>1Lj%`<.|WNog@lV *UBvTQoSN8u] #C' );
define( 'LOGGED_IN_KEY',    'T/)~XzdU|v3E9M_!tvXk[?3Ojbhavm7N),vW42:#lVqUAY!r*Rnw!o05,(9(=[mk' );
define( 'NONCE_KEY',        'A C1xEuK-E=Q-Bk6;&XT5ih^ZQfn^:Avhc+4hMn+2Jrg$;?6rkUO+>Waa8#4Enc4' );
define( 'AUTH_SALT',        'Q,dq %a)H)q.!z(e@Kdl19|*xFC5?hdySgBiF1h#r0A#TT YHihoH}9RSuQC2#9s' );
define( 'SECURE_AUTH_SALT', 'B]..IjSW;0R!rm|#c5Z^!0AIPa:-f=oOdJ=Ui`qNQU})~0-VNX#oj_{Ci(cmR{SL' );
define( 'LOGGED_IN_SALT',   'x>JE:%;x:H uZ,`wm5uqIA*H^fL^/5J:!,AE87Bwa/}pa`T/,+u&#%ry[{/WxbOa' );
define( 'NONCE_SALT',       'H:d7>be{w*)`Z7:f6AiH&q4N|D>|RUy^Q 9vg@]+mjgRP~9zO`eYJUj@M9SRYlzf' );

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
