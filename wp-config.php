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
define( 'DB_NAME', 'trunganh' );

/** MySQL database username */
define( 'DB_USER', 'trunganh' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Trunganh123@123' );

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
define( 'AUTH_KEY',         'aU. /R67sl?wlC#ZM_5NG{)UnN:EJN?q?5Q@9Jf2,o1hryV_`>PWA{MZmcOHJiyh' );
define( 'SECURE_AUTH_KEY',  'xexq*8]`<VAZdf:wv_W^uQig0Nu^.>E3Z)PfL-RY%/IgkIm3~+e@,I2g.!g~Dn63' );
define( 'LOGGED_IN_KEY',    'r!(8LJ*DYc0scK>{{]gg##J`>ZZh.5wdF^e1`1/bML(j)-WYXyMP<-UOC3N[`PEa' );
define( 'NONCE_KEY',        'S9ZU+m`1iV{SlUS%=:qqneV;~*=i%h~#Dz$]gpG]TGEByBK~hk[^EnXI{>(I*93)' );
define( 'AUTH_SALT',        '/mgr%2q!sT7cn6ROfw#M_y!qOMF00gth{<rXz3;KsdUCGaV^LGwJ#Cl}I5z`^/7}' );
define( 'SECURE_AUTH_SALT', 'WmJz{b+ Qn!II7Gu1^aDEuY/EFM5~HC1OHl-2t1PuB~+Y%*i1S&L@abh,V?A^D-2' );
define( 'LOGGED_IN_SALT',   '4r3z)/!+Mo7-7X(eQ*h&gQ$Q`CTK[/d9b?2#`_lQ8bHjX52#P*>5&<m78)FY|gSC' );
define( 'NONCE_SALT',       'ozG1ia49WWd@H3Z3Q/^CVtNbMNWk`(m~Q|dKin1qbsp$@Y~CGmG@7<fS?Z#E;:$R' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
