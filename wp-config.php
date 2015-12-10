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
define('DB_NAME', 'gaastra');

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
define('AUTH_KEY',         'kau>^UM/H6Byf`]_7pA@fBQ2qbXd##){mV[gg^9h6;KOt:^6vx$]xZ1!|pAwZI4/');
define('SECURE_AUTH_KEY',  'V9Uo+7r;4l0Y-et)EW;`mj1(R )ga.+M+X~SQ=N@6WUm^h>>F%-_.q!>E$wh5loN');
define('LOGGED_IN_KEY',    '6y/{.=Xyk3FV.-&q$BR pxjg#B[d$YAS6b&.P}q9zq|jQJy-58^2|TuGL~$SN^%q');
define('NONCE_KEY',        'N,0|j^mAon654N:|s*JzWcA-.|##G8O{U|cEz!+SFQ[xTH}5&IW!=R%YCs5*1Z>U');
define('AUTH_SALT',        '~$O3+NYmTkhJ#1b~GJCd9eF2jCub$oKh]ZB_Q~@fadWB~%-A9znSF1khh,GD M!q');
define('SECURE_AUTH_SALT', '|Y1rXK_C@l.6+N(x4+U8mYJTfoJV?kpLEIBd[1`AZ7|+U6oIYGJ,<FpXNK>sH;_~');
define('LOGGED_IN_SALT',   '2] }m%>7p6IkyEN0yE}RnSMb<%pgTO|.+7U#~n[=vGy(xABE5;:!_C00:k4} ?;A');
define('NONCE_SALT',       '[oy2%ER|WhGLyU?T$q/%Wcio[xCEY?>75DQ6]AFlPK*@3l.5(<u^Er_{BbUPQ7X4');

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
mama