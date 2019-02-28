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
define('DB_NAME', 'androlegDBmebkn');

/** MySQL database username */
define('DB_USER', 'androlegDBmebkn');

/** MySQL database password */
define('DB_PASSWORD', 'k3nFN3Ween');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'd:_9[5V9WhSt~h_9]5Scn,z0z|B0BYFczYv}-0C}Vg<I2EbEfm.A,QQnFc$n,;');
define('SECURE_AUTH_KEY',  'Rk~h~9[5S$>F3QbfMn,nz4,BY0RoNk,]HTDeITqeq<q{I<EfIUqf$<x]K1O5HiSe+');
define('LOGGED_IN_KEY',    'dZ~8[GR5SGSo|CN8VvZk!w:K!8Z8VwZw_s:3cMj^n,B^7Y0NkUv^k|v}Je+6+2T6I');
define('NONCE_KEY',        '4JdZl|w:8Efrb$3J>FfJUvf$>r}@>Fby,u{MBcMjvYz,v}M0BcNYv*6#2T6IfTe+');
define('AUTH_SALT',        'xH4VFRoVs@o>F@4RGdoZwk!83UrQn<r>3,B>3QFczQn>z0Bi.A*6WALiTt*i.u*6*');
define('SECURE_AUTH_SALT', 'fu>F>J3Ffmx;*9L;PmLi.mx;6{6XITu1RdVw!l#C:8VDOlZw_l#x_9Jg@cz4r>F4F');
define('LOGGED_IN_SALT',   '$l~p#Ge-ep#x2D#D;Pmg@8[4R8VhVs@h~8[GR9WhSsYv^v}J^JgFc@g@>z4F[JVFg');
define('NONCE_SALT',       'W;2PaEb$i.AyQAMDZlWs:x_L]HhLite+i*6+2SNv!s>F:KVGdKh~d@4-5S1OoBb');

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
