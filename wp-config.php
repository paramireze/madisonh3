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
define('WP_CACHE', true); //Added by WP-Cache Manager
define( 'WPCACHEHOME', '/home/paramireze/madisonh3.com/wp-content/plugins/wp-super-cache/' ); //Added by WP-Cache Manager
define('DB_NAME', 'blog_madisonh3_com');

/** MySQL database username */
define('DB_USER', 'blogmadisonh3com');

/** MySQL database password */
define('DB_PASSWORD', 'ntrSRWk!');

/** MySQL hostname */
define('DB_HOST', 'mysql.madisonh3.com');

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
define('AUTH_KEY',         '$ZZOo%(!iUk)HR45FaGU:D1e*yii8xc$!HE($c5EH`Qq@OeEx8R@(R?b:It9m?2;');
define('SECURE_AUTH_KEY',  '9B?Qh"qC*`n"hGqK:WhlM:a5)_F9QrsFblX;WfAh24yISbPv#4BQJyslIB8:WSF!');
define('LOGGED_IN_KEY',    'WhQKRu0)d_CZqxC8|M%TJa4F/(yFXyF!&j_6pXSZKVQ;nVwJ4uN2t2*E?CVYcgzl');
define('NONCE_KEY',        '#Ly&4OmP&3i:j6u6z6/;Xf$m#g9w6)Q_C1pr(|Pz+8cyj|t5X;Tth3L`taFo2eX)');
define('AUTH_SALT',        'tZcemfna+2KCYnZXMa?|C3WXyte8~5d"HiW+I;4E(Mqw)A!BKzBXbNCjP;dBcQsN');
define('SECURE_AUTH_SALT', '7zCNEbE:as~!ZoUHaHfwuR~(|&K`qp:Df:YuyC4QTXR%8d+RSpbMwu~r%lay:8@;');
define('LOGGED_IN_SALT',   'i#Yt28!MllGRToEjfm))mh:$Xf&$!Y"Co8Hm&8T1fPWyuRYFEd2e6!5*_zWCAI+!');
define('NONCE_SALT',       'jQXPbig`Pf`9u~*D%#@i:;tdz&PU5(kk8CV^(^61hMmL2PxSDu7V8HsNwtNwM78;');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_augfjd_';

/**
 * Limits total Post Revisions saved per Post/Page.
 * Change or comment this line out if you would like to increase or remove the limit.
 */
define('WP_POST_REVISIONS',  10);

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

