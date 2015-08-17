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
define('DB_NAME', 'wphooks');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '1l0vep@1n');

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
define('AUTH_KEY',         '%wJSJq:uy^%+&Hs57`MG=p&:jlC0x.{$ yMs jXsuf+~<WsXCM#d5#vsQY@A-* B');
define('SECURE_AUTH_KEY',  'aG57N7Rj|HmQuZ0Yi*8r}A0f)_(gvyiMw)KH]q0I|]l4LcR]i#:Z)dpXd7ns.z.Z');
define('LOGGED_IN_KEY',    'S]OILl|o?/MN/%zNV 06:2kQwwn*9O 6k]N!nB88((rW>8Sca5Sh.K-F%Xn|C,4g');
define('NONCE_KEY',        'g~Wt./8>+gskn#5v0o79vcWYNULE[c)}t[$RsnJS3O aWpb4*J%;GN=2UmTP64ZV');
define('AUTH_SALT',        'z} ;@S|?gl5w5`RAJHt#~^{-)z9D%BC_B-^V=CPz}@/-RG-$*8TeAU_GAzDm+sz9');
define('SECURE_AUTH_SALT', '^G^8PzU0EsRWJ<waAI4${4ewIjhbaFIROK+*H0/3vtuLqc_5RLnn3L%8RR?by)HK');
define('LOGGED_IN_SALT',   ',pFUR.U^ey%6plaV/a:1?Rlv<jH?Cq=vhIvWB5&xp|RAW>hhV$ -fwh3^&pd]bil');
define('NONCE_SALT',       'H!?`%V#2(`K8TF{kkO[x8rRV}62J=33*{/40lLpl2MiH}W;fs+gCgZ,l+nQ$o2eJ');

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
