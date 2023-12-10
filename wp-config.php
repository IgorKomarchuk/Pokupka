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
define( 'DB_NAME', 'pokypka2_pokupkagames' );

/** Database username */
define( 'DB_USER', 'pokypka2_pokupkagames' );

/** Database password */
define( 'DB_PASSWORD', '^8C7yuT*3a' );

/** Database hostname */
define( 'DB_HOST', 'pokypka2.mysql.tools' );

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
define( 'AUTH_KEY',         '(0c8~fbO:DJ=f6e@i#rRAZ{q>a6IK}D|m97Dh[cnAk`cJ)uJjF-xv&Uo#,f)CF6r' );
define( 'SECURE_AUTH_KEY',  '&^xA=K@/DOlaKJ`4)l/Uhkv?#Q7n)I3uqpJN6~9 N_.ZsLk^M|f<]R_,es,2n&RK' );
define( 'LOGGED_IN_KEY',    '53eQex4zR9ESb0jqQ:DPbn<(:z[]X9Na6R.Bw>S<t]%DD{_s^C$.K?7e.7?u}Aw6' );
define( 'NONCE_KEY',        '?Ln.vfl~Y4]X{JO(f{eo#tAPKu#:f3@+|vjNIdD& SoRu<dKAo-?YdA!{led7Lt*' );
define( 'AUTH_SALT',        '*`}L9AK2z oFu|BA[N)kgm i[]E#}WVWG+3>R].ljFbau5O}W-4Wco #{F,{*]#d' );
define( 'SECURE_AUTH_SALT', 'So$;jLV7@HO+wi4yC|^@ Gg!~G#^~e v9P[oBd[7_bF[BXd:_A<R=Ut &ijZ#-H?' );
define( 'LOGGED_IN_SALT',   'ywM0m}qpg#)WEm,?ckDp>!ZV@YE.PvC}4VyJG,d~[P*9ElAZ}vF3~9m8:9_<R:nT' );
define( 'NONCE_SALT',       'Lj>xR$WL~=j?O:I)v@|&/GUi/-( e(vk R_$%Vnr6WzNi[ fy-J3MU,:|&KuO8Gs' );

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
