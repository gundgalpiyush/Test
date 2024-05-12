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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Test' );

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
define( 'AUTH_KEY',         'nUHKAM*Vo0RT3z*Z}RvY>Y=!l2^7O>nu:{W-vz_(#[4%n@uhg-F;@W^Pds_n{!kU' );
define( 'SECURE_AUTH_KEY',  '1oCzvGkHYVEFoL(2_o-MF<5wJY+W/>CuVU^sX)L6kw>e/-Td3ZV S!7CUj+I?00{' );
define( 'LOGGED_IN_KEY',    '0SzSFNS%U8C-d3_4P?_;y8:x6OdD|GMd-ly n(BV40RiOcD/vD-0UMBHc+{uLY$t' );
define( 'NONCE_KEY',        '2}N(t-c`q0gwV-ba %Z3tP|je)PF[6m>TYs2 Rp[mA3j)l@LpW9p=O%W{9|`ecz]' );
define( 'AUTH_SALT',        '(J#e:d)j7q4$y#.Q%Dp8hk<>=hoVue~NO!F=Sdmf!W-+4yf.0/@^2riij?r(i%{|' );
define( 'SECURE_AUTH_SALT', 'o1o@gmKBQiX%(g8r8)|gZ!FZv$tZG|L2H?H%PzM(lOPElzmt*uOPIGf>1Stl{=0X' );
define( 'LOGGED_IN_SALT',   'F^3);j.t @Uf;`EnP`zc02,PNdYz@Q8ja5,yWUp7aA~GRjKHTVU!-2`<;V~u*5=p' );
define( 'NONCE_SALT',       'gMk~n54N-: WG6]Lg?W7up+)ai QPp/?;n0;`}cCk)R#]1>|=vl^&dF!+%]BdTL4' );

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
