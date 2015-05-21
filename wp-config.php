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
define('DB_NAME', 'accelerate');

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
define('AUTH_KEY',         '*p1aiY)k|WTf8`;ZiVf9(-RWS}avg4HupgsHObmLVji]rTV2%+Dx2fz;>8+.m9U3');
define('SECURE_AUTH_KEY',  '8#b2|CjLRwgg#l[qEc8XMcRWT%Iuy+~6V)+eG;5tEM@7qGY5u+8ut.fRI,|1sNc9');
define('LOGGED_IN_KEY',    '*0D?Kii>+*-a7xu{3]q^VUS|fJd4=>/Z0c+}EU#PUEE]p1U=8^^ms>Vktqh5^oC1');
define('NONCE_KEY',        'XefP>|Ohk_KN]1W#~):S]qO{v]~t+&Ou&I+{n?vyoQejAr4?R4zSw1n>Bnv[LLx4');
define('AUTH_SALT',        ' _@Y[{|~Ne-wN!^)xaBE?k*PbrYC:]+9J2,&E/3A^> c/8)s`b?#k*,/J35a-QJQ');
define('SECURE_AUTH_SALT', 'Ba{w$n?Hnj5nQc1^A4OKkTY#1q0jJ;p{iARHe?Uz1/36(?^`fIE_Yj<8^+6Sj!)c');
define('LOGGED_IN_SALT',   'Fiqlv+wt3,~Kx5(LXDk>F0{yGD^@GuA+rvMQ< R2Qncq)`6n1cYVb8w^P~7*THv-');
define('NONCE_SALT',       'CnOJR]|DYR0#b!zo98+v;u>D4IX--Eu3sipD}pfeA`nd.7DE|luxj8UFZ9*d90??');

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
