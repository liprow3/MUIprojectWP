<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'db_mui' );

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
define( 'AUTH_KEY',         'Q6hZSCK+VT7m_JnVigSq3xs:c;&3)Ehw$Kwjke.D59}7X-f>3`<Xzbi[1Kt#7ris' );
define( 'SECURE_AUTH_KEY',  'p@J_uJH*JhiM)KJ-#{5uZs{c<llh7pw@ex(;^ Nu#k(IP4=Z6?G~H-2Cc35h-2S9' );
define( 'LOGGED_IN_KEY',    '}|{@/rw}:$0$4ltO{c1rd{SBX8d<TQ5+_BE[`V7#xM^n7jMVKu3~ITE#%g9]F.O0' );
define( 'NONCE_KEY',        'Epd.Kr7nWBZ9sg52JYeH/q}Bv| oZzU#rd=%R([VT$B-KWZtn/tp]Z0;V=Bq!SS>' );
define( 'AUTH_SALT',        'rs60)fE[o0U9WYB^gNAl6C1,*poJi+_4os(vKe_Q^N}3Bx{*am.[ld?^iThEK+B1' );
define( 'SECURE_AUTH_SALT', 'X*HeN,ColaJA@J77iA}X`{9VtHoXx[y-0w<9,nQ6u$>d*`<l^HdEzjB-jL~;)g$c' );
define( 'LOGGED_IN_SALT',   'ms)?oQ6i_pUWRp wO^;0?B[P<z0qZn#*2nEj%zXA@`&K3[}2*Z&u l]gWlu*ip/a' );
define( 'NONCE_SALT',       '{pYFv{!}28+nZTu}M,&p#X$<!M:X3Tz1g0W3{YFNKpkC=YvO,G*j.LBjV Bw4%GB' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
