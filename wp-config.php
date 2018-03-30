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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '=UfnY2Sa:[OTvzm`$zpZ /X.Sx/]5*sD1pqy1MIx5Boz+6{=*XOe)UVZ4l dF9Y7');
define('SECURE_AUTH_KEY',  '-jQ8X+Sb)`9NsMtL1~y[huKRSo]oD$7l$a[SKG>IYlVc!XO32TKf@#79b4/qTjU[');
define('LOGGED_IN_KEY',    ']B7?vK,X}-aR/:|k5s[x_+M5J;Q`*bd@iKrR~ lCp&=2UkJ4aBTGd77|WME{?,0H');
define('NONCE_KEY',        'R<;M-ErN:ez6%,DO42i(c%1^L[;+hP4NgLl-F5x(3Vkvj?/r]RFM|_0KbYbm#s0i');
define('AUTH_SALT',        'nL<$OS1WmpDYnst8i4whHKqvtov$uIIvwihx2Cd:4zh^vQ9x!Ei/IYE+&<omada{');
define('SECURE_AUTH_SALT', 'u-C0N8gQS3?bjyD!.1B]b7&cXxjwuGYt}uGjs}OH4HL;!V/_J8]c4b NoV)!(`jL');
define('LOGGED_IN_SALT',   'r0!(;N$Uf)8n)RAe8+P8IHkh2Jp>)@E0&C}AdA[ &nL]O+o4!wU$Y<bg.1.yvE*g');
define('NONCE_SALT',       '8=^lhiA[>*SQ<=`kG]Y0qQ,.-ABW0!%9N9P2}S;kkNIA?8Gj+`..cu9`)>SrwY5A');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);
define('FS_METHOD', 'direct');
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');


