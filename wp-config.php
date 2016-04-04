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
define('DB_NAME', 'doseofbalance');

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
define('AUTH_KEY',         '!9t:eGJijImK(y<>Ya}-Q4Z`?R~kabw(x0m05GY@aM&l9{_mL?[GaLs/Nu6OrwI[');
define('SECURE_AUTH_KEY',  '8MFkk--Nv6?Nw6{Mi8prMES:u`E4TCrZ2s.xWse|G8]m+lIn}#./LbU@=d,E)k%:');
define('LOGGED_IN_KEY',    '#t-3pslNWhP[Hwc*C1+jXjW>ceM)US4,}vJp}a5=4r/*&%>cGCiLOH_J@s$;n+ra');
define('NONCE_KEY',        'gfAw=^/Qui}UX1o51(Kixs]C)2k9Vb!uY^|{XZ)7j}A|56C{(mlAJi<6?SHSK?B4');
define('AUTH_SALT',        '-y39vdMrag1+)f$n:Ot*2?-+WpNVhuy<@b4TadJ=)9p^VYu,P.|=e{Gx2[V?1xqj');
define('SECURE_AUTH_SALT', 'b$MgBl`_-<Q=86bE&#[?K$Dt1SppzM-+Td ]eC!B).of|.;}6@d(1l>}m)wa)Y(&');
define('LOGGED_IN_SALT',   '?I87JV%6;R:4!J,nAd av2gr,fYwA+i[Y{x: wQKOw[ZG6|)M[u<qNMURbA|Dz[+');
define('NONCE_SALT',       'ZKMrH lP0.,hmi=zljOZGCz-AmZoRAK+{0MJ$~]VP`]Z`F$p$2R)*yb[q`$>ybek');

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
