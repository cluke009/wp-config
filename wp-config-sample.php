<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * Custom wp-config for multiple environments.
 * Inspired by http://abandon.ie/wordpress-configuration-for-multiple-environments
 *
 * @package WordPress
 * @author Geraldo Ramos
 * @link http://github.com/cluke009/wp-config
 */


// Define Environments - may be a string or array of options for an environment
// No need to define local as that is our default.
$environments = array(
    'dev'        => 'dev.domain.com',
    'staging'    => 'stage.domain.com',
    'production' => 'domain.com',
);

// Set environment
define('ENVIRONMENT', array_search($_SERVER['HTTP_HOST'], $environments));

// Define different configuration details depending on environment
switch (ENVIRONMENT) {

    default:
        define('DB_NAME', '');
        define('DB_USER', '');
        define('DB_PASSWORD', '');
        define('DB_HOST', 'localhost');
        define('WP_DEBUG', true);
        define('WP_HOME', 'http://localhost/folder');
        define('WP_SITEURL', 'http://localhost/folder');

        break;

    case 'dev':
        define('DB_NAME', '');
        define('DB_USER', '');
        define('DB_PASSWORD', '');
        define('DB_HOST', '');

        break;

    case 'staging':
        define('DB_NAME', '');
        define('DB_USER', '');
        define('DB_PASSWORD', '');
        define('DB_HOST', '');

        break;

    case 'production':
        define('DB_NAME', '');
        define('DB_USER', '');
        define('DB_PASSWORD', '');
        define('DB_HOST', '');

        break;
}
// Site configuration
if (!defined('DB_CHARSET')) {
    define('DB_CHARSET', 'utf8');
}

if (!defined('DB_COLLATE')) {
    define('DB_COLLATE', '');
}

if (!defined('WP_CACHE')) {
    define('WP_CACHE', true);
}

if (!defined('WP_SITEURL')) {
    define('WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST']);
}

if (!defined('WP_HOME')) {
    define('WP_HOME', 'http://' . $_SERVER['HTTP_HOST']);
}

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */

if (!defined('AUTH_KEY')) {
    define('AUTH_KEY', 'put your unique phrase here');
}

if (!defined('SECURE_AUTH_KEY')) {
    define('SECURE_AUTH_KEY', 'put your unique phrase here');
}

if (!defined('LOGGED_IN_KEY')) {
    define('LOGGED_IN_KEY', 'put your unique phrase here');
}

if (!defined('NONCE_KEY')) {
    define('NONCE_KEY', 'put your unique phrase here');
}

if (!defined('AUTH_SALT')) {
    define('AUTH_SALT', 'put your unique phrase here');
}

if (!defined('SECURE_AUTH_SALT')) {
    define('SECURE_AUTH_SALT', 'put your unique phrase here');
}

if (!defined('LOGGED_IN_SALT')) {
    define('LOGGED_IN_SALT', 'put your unique phrase here');
}

if (!defined('NONCE_SALT')) {
    define('NONCE_SALT', 'put your unique phrase here');
}

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
if (!isset($table_prefix)) {
    $table_prefix = 'wp_';
}

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
if (!defined('WPLANG')) {
    define('WPLANG', '');
}

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
if (!defined('WP_DEBUG')) {
    define('WP_DEBUG', false);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
    define('ABSPATH', dirname(__FILE__) . '/');
}

/** Sets up WordPress vars and included files. */
require_once (ABSPATH . 'wp-settings.php');
