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
define( 'DB_NAME', 'wordpress_restapi' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'webkul' );

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
define( 'AUTH_KEY',         'xYQ/EeF`sI$dk*0MMm+4O^|b`&::>9ehKx5-ujQQYif2})K#G(N1z@HF_?k=v2:%' );
define( 'SECURE_AUTH_KEY',  'iY7jIaX3qY{Gg|lSv&JR^HPj16?MkRA(;aV,zb2uB>#`}7oRkfmXPhfWZ,U=wEu6' );
define( 'LOGGED_IN_KEY',    'f2PZ,&f%^([$l[.x`Y5W]3r}W8}5aopHa%B9L;;_/>~FA+oU>=GSo@y7a)ud9djo' );
define( 'NONCE_KEY',        'k5pAe8L)J!N*.oxF5P9|yy:hAw#>9EmVWC!{!fEO?eu}s1@;v -bq|,?f<N_yJ9I' );
define( 'AUTH_SALT',        'jdU=kYPpj0vxCrJs}2@t|c ksVyw|#I?dKU]g_ig`c#s3+?0DP;3 }:s;9]n`i6g' );
define( 'SECURE_AUTH_SALT', ' Smjjk|Bgu19.|kw+e@|bl]llb0[`  ;[GO?Ae^Ne0#K[*j1}W|]ZIp @U&q|f1`' );
define( 'LOGGED_IN_SALT',   ':.jCStVw57x1T&r[VyPkf#r0!N7kKP:~%F9U/u`$zwA*2M&@wUMYmmlX]i1+AxN7' );
define( 'NONCE_SALT',       'srWSOay&BU[>65-@q;r9klkP.I-&R_Z-Rlw >j44J<3?8?6<]L>E[U5x#%gWxfU:' );

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

define('JWT_AUTH_SECRET_KEY', 'Op[c7m:$QkJ.+gmB#`Dg^g,Day}o~t4N`aA~z-=FTR,nDZ82UOS]160sR0Hk%hJ');


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
