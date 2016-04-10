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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'F|-@mQmDR|vCAG<}E-=U<ea&J8ua HdC|?! W#_$!x-Y6hVMG=8TtLFF={vklNuo');
define('SECURE_AUTH_KEY',  ' ugLc]s 3-b~d51+$)PEyq9Ny(?tDyf$YXQdL/]x4.Isr-ofjX8?Z90 XU-uU+b2');
define('LOGGED_IN_KEY',    '2M!0}:0e0vcCdhk}xE0$#zmShd|krkCf~oE$$$?4qqsZ$6>yYzt%I<FU|1A0>5lD');
define('NONCE_KEY',        '^LNFrr3lk?&nq-=P:+]+l$:q;{iH#ms+|b96It]P4Z=g-{.c}Vd,TaVu,%,*x&,/');
define('AUTH_SALT',        ':+{ob8G5g/  ;o})-+!ya#+E@a&C)|+{0L+*<$=Q>m< %!k-Q6H?zBr4--.vO}@J');
define('SECURE_AUTH_SALT', 't7z;#!5J~!!PS5_yO-nKnS.<m5{KO/hdI.B&++i,u@k0P,|ro.#VeA2=8VL*1{@O');
define('LOGGED_IN_SALT',   '?kxh<q+jMLhpGBXx@v@)K:&`kzTOfK6`RWh#Ix<Kow*7-k~nQp+jL|{7-w@aSVl@');
define('NONCE_SALT',       ']uyOV+DPA{6#%.tyCktxZ1o`Te;xFEPd$G{yQ2N2WoLp]L4-8<aHyWJmz.57G|7S');

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
