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
define('DB_NAME', 'wazoo_db');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'Je+5*sus');

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
define('AUTH_KEY',         'Es5AC<8P`|Y+ 3gmC6Yhp+j]H_;]l.]x,:%=U% zI?lc>*B5Y Om1O&,*.EW*xlE');
define('SECURE_AUTH_KEY',  'Q&2t[mz **wA6>]#Za ~=@{sEK}{%u`ypa0{C7)4N Wo86l*)`%xrUG@b#9&Zjxa');
define('LOGGED_IN_KEY',    'ix^A<G7WYReKeTfQ=a,bW/4DL]v?jlVOsC&Q}KYEcmx:U1mBNrr?T~1XnRn %wSK');
define('NONCE_KEY',        '9,)u|NsD u8,/<g|SVPp9~j9RqC&N`=_Uk4!d)tl!y;vcl4!%a@+Ck<y.A)#c!^R');
define('AUTH_SALT',        '.]~X.?I:p7,KN;Kts[@-:Erb_9T#NX(kt *NWaFk4.nZ8(73HnXWCi`+C&:s1#&_');
define('SECURE_AUTH_SALT', '<Y#oa]yy)e?DL|VLsTorUy>|2NP+x}paDLm>Gv:g0bXem?QJ#dGQX(~CL!CMtzU)');
define('LOGGED_IN_SALT',   '6xVp-GKROj{tvqRR`b7%Z?I?z7p5o6G=GF2hi1J47-VW~ZWv|2*a<:j_Qi835$M[');
define('NONCE_SALT',       '*^CXaRRksnA2AY}FV=Xv{OQx}k}c,15h?Sp/]4]pQ3fK%R#3SY`~$CR[z7{P9DY)');

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
