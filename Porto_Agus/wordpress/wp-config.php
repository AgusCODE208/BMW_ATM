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
define( 'DB_NAME', 'db_portofolio' );

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
define( 'AUTH_KEY',         'VKI|eVN=ohheeiF(+qWu_#LZqFxac$|[j,b+#v.<KDeWN4^6-@]B|% N-].S4s~b' );
define( 'SECURE_AUTH_KEY',  '1_>?^<HuyER/oJz5 _9Z7ImG-[X,fbL|(l1_^q=lN*IuF L=y6QTa@h^j,2i3,[X' );
define( 'LOGGED_IN_KEY',    'Y__x3Eu)/$pu{xVV}JGT:*OGbV/_t-C@:0*?oa),b}10)/gOB$T+{;AMEmZI>CQE' );
define( 'NONCE_KEY',        '>4c<yiYQH)7ldn+bXmPASVA%T0`fsAj;+1DQKLi]!=B-.1s>8.Z.kqm6PUBGbmOC' );
define( 'AUTH_SALT',        'jxJ6 IjXf+ec=pG[e}|%Jl(@TX:5$WIfn5,wD]!:UW4|hAeb~_HZlf?U0KgIh*f~' );
define( 'SECURE_AUTH_SALT', 'uk;%]r|ZJR_wQ3F|.59)wiVc_>,Y|u1{*j2([gv]s^0,/9Kd2D|&fd,EK 4#Di$=' );
define( 'LOGGED_IN_SALT',   '6H=Ckv(v{$[%9eo:(R8S-MK`L>AdvNM+4ZP:7KM`2sPd>UzGfTc*<;{nR`j>{,;m' );
define( 'NONCE_SALT',       '}Ko_wqV)C)+{.oGq`ZV@C~!t|~n9 }B*fd^<Q4;?l8dL^W.8$BLEqoW*FSN{6k4:' );

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
