<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Premiumsilvercabs' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'iG4s6hzK9scgFfwvhF.-i@&j2S78Dv75oc>z/]Z&TM/W?iuUf+lW54C|~*!zm<.2' );
define( 'SECURE_AUTH_KEY',  ' ~?1&QC Vme,:K[|4YfGX5tT5[Y?b>F(poNhG$t$vxT0 3TeP/P+^V[6$`?AkVO<' );
define( 'LOGGED_IN_KEY',    'Z1|4pK&T1fJSQ>&y_4#X {L%QU#[1ee=u+,~HoB:fabD29yQ:]O<jts3XDRk7M/(' );
define( 'NONCE_KEY',        'q#T:p_IK$Gx$(QH(n/LAuBaEba&clb&GEy5j0}D&`S9An$(cc=K:x0$o{o{@pbf]' );
define( 'AUTH_SALT',        '@=E{=Ds`,},]BW1X}!cSm_`CM0:L)_R7pw^g_*mU%GcpYr%:@&gQI<_v{XE^oU)v' );
define( 'SECURE_AUTH_SALT', ']BK& uRl=v}mi83jELT`SVPMetnxJqK0ktu6_0X&A-E+Ny;JfD41]J_0Nwe=dQ(?' );
define( 'LOGGED_IN_SALT',   '.JcND(LBxxV3cEu|.{L2Td%2ECPn[ T*-xAM y]1a=s*o4uu~>7P~ M/%Z[%ugES' );
define( 'NONCE_SALT',       '#}{7;.LvHqBKSFE1lG)?WC4=K:;-j-7f*?zzuK^(;r)Vxx}S~p|[IUJWSxS:c6AO' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
