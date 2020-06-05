<?php
define('WP_AUTO_UPDATE_CORE', true);// This setting is required to make sure that WordPress updates can be properly managed in WordPress Toolkit. Remove this line if this WordPress website is not managed by WordPress Toolkit anymore.
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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_j3bw8' );

/** MySQL database username */
define( 'DB_USER', 'wp_kf9oh' );

/** MySQL database password */
define( 'DB_PASSWORD', 'FxNB_102oi' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', '/![wM]9k~TmWh2gG4ZLxb:7tA]2;_1zU2c[M-OI2B4|4(UT8eYJ/z20~Ml47j7/v');
define('SECURE_AUTH_KEY', ')8L6vZ#J588i~&-mF1Jo1O8P;&yo)#a7VvsU/vS_NEY2V77G/YM!/p4DhG![(1)4');
define('LOGGED_IN_KEY', '45d[BZ3#C*g[aZ:bE/5T(td(zgiWX~p9G|568eKj3@]Q2%37H/qGs~)i6N!!r*M/');
define('NONCE_KEY', 'Z~@N3#&:MENsG4KCo;Za8;Ju+u0[@VSs*0:Xy_7TB/cY2DKt5u+a0C0os9~%55EE');
define('AUTH_SALT', 'FyJ9A5q7klsxWvQw0;N_*qq6Dt4Dk4991W!I(!kUHa6q[Yn0286]@bFf3QfcUb0b');
define('SECURE_AUTH_SALT', '%aEwj2+cp)8vU)8b@VEm03fY0R4r4S66)lO8j_5G[S9T9EPR(58F901Bp|E5LmXo');
define('LOGGED_IN_SALT', '9B([Btw/24wf#7m(#l9_[H@v;|:hdlm+A_ei-z&l/_;Uz1PBTY5Oh#2*P#1~9YrR');
define('NONCE_SALT', '4G+2YA092:MX05*4vAp-2:ag45Qv8|G~4C__4(F!a8W536Lua(6~11PXT#o!Vjb3');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'G9G2z_';


define('WP_ALLOW_MULTISITE', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
