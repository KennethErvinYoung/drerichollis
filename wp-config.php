<?php
/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

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
define('DB_NAME', 'wpdb-drerichollis');

/** MySQL database username */
define('DB_USER', 'drerichollis');

/** MySQL database password */
define('DB_PASSWORD', 'nF1UnErv2bS2K9rJ');

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
define('AUTH_KEY',         'K,+3.ScxqZ ap4[h2 Xku)J!h6)!EgYg)xb:fBx!woJ,w!tBD-#gwA+nfJ9A$!Ps');
define('SECURE_AUTH_KEY',  '(TL38IVdaZp)fH_b/>}=uemwgKD$[VF3/[4&V,+r# xdWu9]LJ>brXh~4p~S@Q3_');
define('LOGGED_IN_KEY',    'rdevD$V/<czU&U|ubL(--*#RRNAm^apS&~deq*mjNq:v8U25<~0%/YF%~Aj&Jh_7');
define('NONCE_KEY',        '[.5&kK}sgodl<dIhF.<t0(gE:-VM};+jHvOg($-It?IU.52)I!%#7bL#$If=)!-9');
define('AUTH_SALT',        'R]k4,fqTatBwbd3ZcF$4c-=!=.[4Ozc6X6vFN>O&~hb`^N`=b.xCq2mzT0smc+t{');
define('SECURE_AUTH_SALT', 'e]oRw`,{*X3bS1,ll[btXT~X;`mS%Vm0W)d]%w8a6laFCv[7-;O5wMKG3O<An<Y%');
define('LOGGED_IN_SALT',   'ZijYz$qD;BCTBzGh^mgH91cdZ2zUiY_U{M+ 9_f5Lnfz#c4mb7CKE|l@pah!`dO>');
define('NONCE_SALT',       ',NO,`S.{__4z~nyt+%{{qt4f#-0h4wO-nrKq8t{D+OFOi[@=&hZ>/+yK!NdODE&3');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_drerichollis';

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
