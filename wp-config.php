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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'wordpress' );

/** Database hostname */
define( 'DB_HOST', 'database' );

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
define( 'AUTH_KEY',         'seN^B;8a>~Z{=X+&CrNrKQ+QjfO3w9/F9C8zFTo??<SI,G~:3m|^?:haoh/cTxJf' );
define( 'SECURE_AUTH_KEY',  'evRRo))z?e>Nv;7P85&[J;bFI;pFUg?1^=Y+isGUcv5QBf^-oVnF9S5(pO,rQb|n' );
define( 'LOGGED_IN_KEY',    ':r2OSU{pJ(]aK[$d:lg%Xqenp8[s>ZqMpZfN?LM{l8>g+7E3t/7hSymsl!=6xPfn' );
define( 'NONCE_KEY',        'e2jvl<H`mE:U-QZGiwYASJ,pI:s8& +ig<d4Diu^LYrWw80#ZwF|f=K#w619mYBW' );
define( 'AUTH_SALT',        '8Ysz4MB)rM+P2KGdEY&|VU *g,u:jqY_(%z`rFv5L,}%/A8MpdAYGx@$K1U9.+aI' );
define( 'SECURE_AUTH_SALT', 'U!ic7#&>g[XlL8}&CQxSc{?[!3F0*Nyj@x5Y#+G.k3iTzSZADPpBhRWyM XY,!~.' );
define( 'LOGGED_IN_SALT',   'iDf)a+5R2Z,%60jJS9k;26YxQBb4B>~.wd=&RhGbr%vlBNO0P uD:??[PSg@HF=+' );
define( 'NONCE_SALT',       '+Kc22hNslucui?s+)50Hq:gT|@spAI8`6yI)nVR~JX3-a$/6|2RMc8iCiUcv6M&Y' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_5b006zr5x7_';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
