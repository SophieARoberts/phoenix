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
define('DB_NAME', 'phoenix');

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
define('AUTH_KEY',         'p7YU;5?d;d#I857o}cABbnojsdDm}X-RA_^AqI|Iz2)x#64>c.R/ekRA3WR%-SiA');
define('SECURE_AUTH_KEY',  'o7[rp$CLA&JLc- tBxY4YIG[=}sn6 n=Y<3:lfPAFE$Q*6!bbe%CdD)b;~BfasG8');
define('LOGGED_IN_KEY',    'S[D.A5o_Vbl([<Vzc(98KPdB$Yen`xKB@L=Ckd;j:epo~{}+:k<wQv-(.S+5WHM!');
define('NONCE_KEY',        'v{<)|8GHc_-,wpkb}.)kv1b+TPAR*?f=axIM1q%/_sIYy5J]CW`@]ey*bh8tdBJV');
define('AUTH_SALT',        '%~gA3CVrh;9$1*q@8{{89,iNQ.kDsoVXTqa52XT-]x|u{0+`fUJ;.iv-t1ZH%~W#');
define('SECURE_AUTH_SALT', 'v:f_`P(+F`|; giB&3mh`2Xp^_fGlXR-:_G{-,vXAy`Ln6?S,;#%/.U^a?dzJ#wr');
define('LOGGED_IN_SALT',   'I2s@q5dwvVT5R+dYn3UgV*4W|nLB)<I/R_zb#Xzs|eY9qxx0U3tKxjG8<S]OFZ}x');
define('NONCE_SALT',       'mmeOo[D`(pr<r~z>Lxmw[B;(?|{(oertX}iOs7:$Z%wP@aOPXZJ1BHUL|bwml$#}');

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
