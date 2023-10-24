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
define( 'DB_NAME', 'rend2973_ppg' );

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
define( 'AUTH_KEY',         '%|dkdMW@|yzz#@twC1F1$P2xc#.xdz{DDSS}Q3M++u(?ZFjoy$H`pb1%~eZf^&c5' );
define( 'SECURE_AUTH_KEY',  'IG+L ce$@E_NO6oQw>k*:fsTuE+:m-5on_k6;BJ%eF?.TS@I$Yc/Qsco?<:2k+F,' );
define( 'LOGGED_IN_KEY',    'khSxQf7JG@$H.D;`T,x/j3y.zqL_iBZoEPl?$uV@&hm8mdNf,!51zg6aEMO`oI),' );
define( 'NONCE_KEY',        'bHno3kK#FNB!~Gr.FiCBbotn|[#k[#%Y>zAp1UP?``~atGKl|YE[{[|wL,s9p~]]' );
define( 'AUTH_SALT',        'Zv8)Ky$Cwaw}jkKKqrdk< E0?KD{^r8Ht>[em=AyXyq*Jt?cbQ_?lI|qKagIigHN' );
define( 'SECURE_AUTH_SALT', '}r;@S7{jL@~#c|HJ!II%I:::aRx,ISNo`pNHM]^r1ufZG@=$I;gA8Ij)wtRfntTs' );
define( 'LOGGED_IN_SALT',   '}fq9>#KGsD*C7`1muqbE.QF=SIhkk44o%_mo1IaOWF]h^gc^9`b.%23mF%iBzs7@' );
define( 'NONCE_SALT',       '|+<LkA0p-)/}sQUO8}D,4k&j.GZ_?_.o.*[nvuKz(a-fk72Vr#,xH~TRd6ou_gDZ' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ppg_';

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
