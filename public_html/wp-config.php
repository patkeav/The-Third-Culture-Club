<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'tertiary_wordpress');

/** MySQL database username */
define('DB_USER', 'tertiary_patrick');

/** MySQL database password */
define('DB_PASSWORD', 'VOW8b}xn723~');

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
define('AUTH_KEY',         'DihE#)?l$p|<.|a%b(b* Z{*b8Qj){^3x{KSve:oRs2p0dA&QW}p9NqBf1. R~fB');
define('SECURE_AUTH_KEY',  'IEVJllraI#1_B-tp7c3273.6vP6m 83F~fq,4~,{x!Lq R3qM4.r@]~[5k5uG+wC');
define('LOGGED_IN_KEY',    '++F0d cvhI$WkxH F| Aj,J&r2?|/aeyU<@//gt) ^|EhEd?m@YQ]DmAU TB;6|e');
define('NONCE_KEY',        'YYXt35,s1RNHlGgW4&+Z[gjcj/$ScX-Ktpx>+q1hFB$s^k)]6RF*DAE8}+DR#/`z');
define('AUTH_SALT',        'Z7FB^)J`$[&G:<#j.HTKS|^pm`D?g.f7-` ibG|/|mq%W4aM0=WUe-2no|VOH<v/');
define('SECURE_AUTH_SALT', 'wDw6+M*<0=_%MdJ!&n}1:aswD|=^D#;Tr2%*pLX{V+c}!/E2pOgF~Jg-Rh]+LCu{');
define('LOGGED_IN_SALT',   'P% Q(O>A-{j6jg/Vp##dQ>T#`U&]@fih.+?n~/_kqN,la+h@&*_O#rR7UtG-5GS*');
define('NONCE_SALT',       'AnVwXn^8j.Hl$HdB6x2d[a-.~&*0ZKnw%7!U5+)*g}C-C1DqP>s<`ww0Zb[M>pV<');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
