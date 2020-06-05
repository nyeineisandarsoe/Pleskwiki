<?php
define('CONCATENATE_SCRIPTS', false);
define('DISALLOW_FILE_EDIT', true);
define('WP_AUTO_UPDATE_CORE', 'minor');// This setting is required to make sure that WordPress updates can be properly managed in WordPress Toolkit. Remove this line if this WordPress website is not managed by WordPress Toolkit anymore.
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
define('DB_NAME', 'wordpress_c');

/** MySQL database username */
define('DB_USER', 'wordpress_b');

/** MySQL database password */
define('DB_PASSWORD', 'v42Gq$eY6Z');

/** MySQL hostname */
define('DB_HOST', 'localhost:3306');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'rmXIRADUMrG(MwWh8iUhTvKg9RHCZT3)YSF2TD@&X4H9JYuSjJqejh(VJIeK(Xuv');
define('SECURE_AUTH_KEY',  'X(%yr%YQkWu9qipqf@1pZ0q5L&6SicON(sG)6YDzWdQ!eP0uV9Bm)%%^@1WDpB3N');
define('LOGGED_IN_KEY',    'tHy8!V1edEyn!8!&ld%D^1JPi@luJMPdacROlxxJ^5AC5LKX^)i)tB!28m8xR2j@');
define('NONCE_KEY',        'iVFFB3&ItW#oy)HoeF#UY(9!b(PWGvdAQAo*q1rAtx4q^FDU)H0N%cn8%@h(t!Gp');
define('AUTH_SALT',        '%Oyq(HozRvN4%imv*4UH@ehKWyKb6p#Gn(Kbf8yf4SdmiDKd02czfcFbOEz0ffrF');
define('SECURE_AUTH_SALT', '29T5QwwXUjXUS11PcnSv9C)e)Z&9VMNw#OpAIf@xHoPCrzN!I4n40h4Wh&cS4Fq(');
define('LOGGED_IN_SALT',   'KxmXVuD3kRd3Rkw7xKhwuONDEuipCx8%FwgXxlyzIQw8QCF*&m%4%TWjFbL8kTF5');
define('NONCE_SALT',       '4dDCLx&SKAThvV9tEWj20FHudF@JGl7R@lkqMX@*5pNmKWEAbT8joCyp0h1pVklL');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'vou1CJ2b8_';

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define( 'WP_ALLOW_MULTISITE', true );

define ('FS_METHOD', 'direct');
