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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'MJ-shop' );

/** Database username */
define( 'DB_USER', 'FLevard' );

/** Database password */
define( 'DB_PASSWORD', '17082019arsfL!' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'mk%_98,8K__y1)8eV6e)pAX7wrV<:Q3yL8auF.|h@s^G=Q7=lW;BwJu5l<zNb! Z');
define('SECURE_AUTH_KEY',  ']du}NhUEl/-tK6jcr`Z wLfS:v`3}33*l$1r|t6Fy8;sb9{6E.6;*jU&wLcMzuT4');
define('LOGGED_IN_KEY',    'N}Q`5#rE4E.+VIQ/PX+-o7E0fzS7q6*wwz;&aI w@{g+i2s}*B%F0gw&]J7+OJ2q');
define('NONCE_KEY',        '!+cew=f%L$%6@q8OTz/aI{y(4/<v /$Ha=3dD]5,j-#(:LxSGN|`;}1xD-CO#4S/');
define('AUTH_SALT',        '_-cy_X:FMlsdE1g-~GI3z_5(3; -3iNjPhqkU+%O-#0.BI^X!Uz?@C0wHAt/!Hs>');
define('SECURE_AUTH_SALT', '+%OhA*O[sXQ=s]d>@; -UX|m|<bDs#f||~p+j,R~yB$Fpk_QOv;Mtu M.,FE~eXJ');
define('LOGGED_IN_SALT',   'a6|Dsri.)/#.|Ybax|4]zobham!&>jdDkE$sDQ7-ieYBIL*y&]<@9 _v+mZa2iL1');
define('NONCE_SALT',       'TB.F3M1:!+~.i5v@~t{-g`;=4+NiQX-[5 d>!97EG|+$3>/t4A3Lc8)O4>uX++E~');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'MJshop_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

define('FS_METHOD', 'direct');

/* Add any custom values between this line and the "stop editing" line. */

// ajouter des constantes custom

// Je définis l'URL vers la page d'accueil de mon site
define(
    'WP_HOME',
    rtrim ( 'http://localhost/MJ-shop/', '/' )
);

// Je définis l'URL vers le dossier source de WordPress
define(
    'WP_SITEURL',
    WP_HOME . '/wordpress'
);

// Je définis l'URL vers le dossier wp-content
define(
    'WP_CONTENT_URL',
    WP_HOME . '/wp-content'
);

// Je définis le path (chemin côté serveur) vers le dossier wp-content
define(
    'WP_CONTENT_DIR',
    __DIR__ . '/wp-content'
);


/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
