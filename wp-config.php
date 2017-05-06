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
define('DB_NAME', 'wpdb');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'oxGe-1o-1woYX+Nx[pIFy`zJ:nZ+{uhh!O<d7XDP>P-Lj;L5)70l;M(LR6CQzKy6');
define('SECURE_AUTH_KEY',  ';]qG!ZlT9pei;;h]B[OWF5LKssxm~q^hD;+~=7l-$ZCFJ2|cPsd+^8]^dcC5@h/0');
define('LOGGED_IN_KEY',    '1NN.8QX7R%erHc+e3T-RbT168fd{C[J5r!eRL5fZ9 ]pQbw&(UEzbB[vBuacSrZF');
define('NONCE_KEY',        '~&{jx.>&FP%X^f[ |O>hPG2O>k!S}^5fqF6:Z(5$bkmqt0^F|+hrSBADM.|$KS~Z');
define('AUTH_SALT',        'rGMA;A.&r4u_S-gsEfN)S-65whGk]:jF9wPh?hPK7kbW+zTzA!Tnyu_nIC>F@=Sk');
define('SECURE_AUTH_SALT', 'bNdFMfgW]mzR|J`L82oj<1(:HAH$4Aq4.ntv*-t,}1d7xU,<Flq74~wl)yk65Y*^');
define('LOGGED_IN_SALT',   '|!+zqzL1KGYh7@F>qdz=?o*%<>9[[ikq4U5h5`qVJbxaT%:T#moH/1(AEOs<8)Y~');
define('NONCE_SALT',       'o2%oD`r5Zl~b)nWc3YgT/&`/_dj%qRHB#@L<${B*F!<xc!pFhE`*w6aRDCB8j(5x');

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
