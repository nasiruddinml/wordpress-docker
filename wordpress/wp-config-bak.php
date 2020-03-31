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
define( 'DB_NAME', 'sunstar-engineering' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '7I[*JfoEnMRsfgNW$eXY0>&*v32G*4a<yQDM55@P_&Cl,:_/R%UCexs}jo&I1?>3' );
define( 'SECURE_AUTH_KEY',  'j>rKgJ./U>) @;a}YD.*}_hA3Xg[U*zIYc*d4FohI[*l .8)7.shwzLga$# OREQ' );
define( 'LOGGED_IN_KEY',    'WU{? *!1lP0ge;_wgs]?/+6Uq9nIF^{qkzjUf|w#ETi+B4yp?P<Tq>piV!z3h5;>' );
define( 'NONCE_KEY',        'Ve0=fP9c_X_b:7/QS9ygiHlGN|H5e?K|eU|!sCC*zBgS<OtB<O5yiKPcUcgKTB93' );
define( 'AUTH_SALT',        '0xv)vmpMU{k`%${]esVzf3sAhKp]#X;~C%B&0mavdHH^Qd3N;Z01r6_v<s|.9@sd' );
define( 'SECURE_AUTH_SALT', ';rE18@[Pq_xJA.{,8/^SRjs1[5j#|f(-2`<$`B[;.%h,p!mIN9Gq*&-uf*&52u&Y' );
define( 'LOGGED_IN_SALT',   '|olAWykSjfhxeh5?hJ +T GtCkv:D.u)ZzT-,t$j|,XYCjz@FE wseqoC(Rmx|d;' );
define( 'NONCE_SALT',       '{k4c_)-Yyb2JQ8_IL7~$(JbTd1f1L.|_8Ib5CF4jw#HWXI* Ow-R<QVo5&o4e2EN' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', true);
define( 'WP_DEBUG_LOG', true );
define( 'WP_DEBUG_DISPLAY', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
