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
define( 'DB_NAME', 'phelles_dk' );

/** MySQL database username */
define( 'DB_USER', 'phelles_dk' );

/** MySQL database password */
define( 'DB_PASSWORD', 'quvY4WEpubeXNiGXxU5f29qS' );

/** MySQL hostname */
define( 'DB_HOST', 'phelles.dk.mysql' );

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
define( 'AUTH_KEY',         'n;%PeWZ|5&$maL3PYL(WU; uMpcs/<>O;iq?l}Sr81pbYUjvnN.>@OI{_)%Jh7>[' );
define( 'SECURE_AUTH_KEY',  '-nnWxf@Ib>=V/eq+BfRL)0Qk7n$6TsUC{ <RxW4W{dHG+2iJ+dOf4{BQBCmEXF:N' );
define( 'LOGGED_IN_KEY',    'ml07sm`+s;NJ%2g%(A-HM.P@qhaJ:y5m3cA*;n%7%SFSyw>6{#;?_HUId}2k)`Vg' );
define( 'NONCE_KEY',        'GsTI*J)!?XA.k35`^0nYt;P6nH%:V@t+M|9ql9B1nmOO=Zqpn[zJ*j.KX0xB6ZjY' );
define( 'AUTH_SALT',        'x41TNxJE3@TE<NOfFH[KfM@4xTI-N{wE}.*,Q3L!KwN-U&2&Bf{<{ @ipW4S=l~k' );
define( 'SECURE_AUTH_SALT', 'RU/=|bOa[v:YP8[n&(+D.|kMTP5rx$3|I>cB->;p=DkK|AH6}P{V(<o~^|3|TBuJ' );
define( 'LOGGED_IN_SALT',   '~d~^)5y:%|^?!avQGJ DkRmEEnhY#:.[_m>j5b;{h`#nJ%Uu<kIm=96pmP7lPH.S' );
define( 'NONCE_SALT',       'xw6 =NJ!}OBh_}u@5^a*6O]l[V:,oIYqnnFGoW3TAw>Nq`(i/*<>0iaY(]Z^d4] ' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'basicwp_';

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
