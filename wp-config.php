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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'damon' );

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
define( 'AUTH_KEY',         'q&O1V@`{wqIZ.Xb#fcXP2&@of;l=0_y6.JD`RZ;QVZ4/&,&6]O2/B#211:?5x<?r' );
define( 'SECURE_AUTH_KEY',  'wnzy0]|CSLbSgSgu,>mKqb5136GD8Z^I#Z$S6>-FTMH+MqRd#l5T6C[Y,}! g*E}' );
define( 'LOGGED_IN_KEY',    'd5ielws4^$teiM>$PKtfU>Xee-mKc@wY&5]>bkaLHq=On4Vpc7cI?dr0-m]*D?nh' );
define( 'NONCE_KEY',        '5kCT=7dMIxoHe$$36fjz7%nnL}Wy4U@Z@KUXUec#%0P;1GzK>Ub_]6`Fv/psUu N' );
define( 'AUTH_SALT',        'Jk#zD-W4ZiGdbWV<xLK:#`5idg14lmk]dX^2-X#ar>mqPpu%PmGwR6U}F%94ti|h' );
define( 'SECURE_AUTH_SALT', 'vpe6jLWHRv,_34}It+G|:)15v+3DCChwi2<FfT7/.s9VOMo=#p>t)%jjiR-D0Dc(' );
define( 'LOGGED_IN_SALT',   '~g_~JY?jNE< UC^n3I#<imMb;wAPD/I>|<r}Y;[r ObPB~S-1nCKY^$5E@,|)IkB' );
define( 'NONCE_SALT',       'T3h/T!5V>INUia(%2)xvZB;v*NK;-EO,BBucAiU~jIYBkcRL;>EDoJc$V(jF(3Ok' );

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
