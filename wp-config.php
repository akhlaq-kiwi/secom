<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'souleco');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'Ukd;1TQygIf#`BC#=[2BSjq3UXzLWKgMYPkl]RC8srgfY%m;M*[M8S9GGFMr0hie');
define('SECURE_AUTH_KEY',  '5+V U{+MNa^Q?SRye)M#8KW p )j]a-C#n5alX8V5`6%hpB2bGAD?xurky?,Rhn8');
define('LOGGED_IN_KEY',    '1w{~uX-oH-HkG?`A<:2?/},d~.mN/Rp{jMok{Yo$9LCFDRu{LMt6STk:Sd.?]qwg');
define('NONCE_KEY',        'gkFQ7B](VCD70c*s]y!3ycP)y,2N_|8tC/+)G-+Yd.<H]TprKchHIy2#Mf`1,`)!');
define('AUTH_SALT',        '>:9J(ej6ZZ F9FF=R.t/8Y<K4;$CpRsXqunw,<~+}0yF{x9iVQJZq1{tAsr%vd .');
define('SECURE_AUTH_SALT', 'OM%6(s% 3l9[4q~6pY-@Ju.>FTgvW/HwCyrL@Ah3Sk@7@t!ZsVybpdAM[x/NG0e{');
define('LOGGED_IN_SALT',   ')]} %Pl$@*%^Q#2|*W,,6.+RWLzBkw5UqrcCByOH%Y.gA4l[4DC}F -xE4eq}@)}');
define('NONCE_SALT',       'C(d5}2OAdKe%y|&q*r1<tD+O{M,Hnk9@; [M]vWNd!VwR5ZE:{Gox$d3FPy~b9}}');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
