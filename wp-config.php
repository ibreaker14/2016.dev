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
define('DB_NAME', '2016DBxlfr');

/** MySQL database username */
define('DB_USER', '2016DBxlfr');

/** MySQL database password */
define('DB_PASSWORD', 'IUfoCLWTco');

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
define('AUTH_KEY',         'ho8Kw0Zok0Cz[Rg}[4g!NYV!}YzFRNv>Qr+#_Oa#Hp~-HS]9lxt5K_1ZWl:C-|_Od');
define('SECURE_AUTH_KEY',  'O-[#Sd[Ks_~KV_CETP+<euALHq*Xm;]AixPaW_2a+HS~+#St9LHp~3Irn$FU{73fr');
define('LOGGED_IN_KEY',    '6ix9P#2eap2S+]WSen>Ufc,3r^IFU${XyEQMy,Qq3IEm$Tj{<6f*MXGCN-4dso4G@');
define('NONCE_KEY',        'X6MIq*Xm{Ai.Pb<.;b+ETP8J!0YVk}Bz|RNc,Fr@JFQ>7gvr3U^}YUf}My,^[9h_');
define('AUTH_SALT',        '!Rc>,4c@JUQ@>Uv7MJr^Ynt_~GW:Dlhw9O|1:Zl1S-[|Rd4Kso~GV:84gs8ZaWm;D');
define('SECURE_AUTH_SALT', '8Ow|ds40Go[Vg:[8g!JZV!}kzBRN2H*]WTi]Lx_PLW;Dl+xDO#5eap1H~]#Sh[Kt_');
define('LOGGED_IN_SALT',   '-aW_:a-GS~-#St9KGs~Vl:C8hw{Aifu6X.{XiALx<.Lm2EqmxDe]62epHT*;]Sic');
define('NONCE_SALT',       'q6Lu.*LX;Em+xAP#2eap2T8NJv!Yk0}BjzQg>,3crJU^$>UjBMIu^MnEBj,:Clhs');

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
