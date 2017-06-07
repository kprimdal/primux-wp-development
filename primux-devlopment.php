<?php

/**
 * Plugin Name: Primux Development
 * Plugin URI: http://primux.dk
 * Description: Plugin used internally by Primux to Development
 * Version: 1.0.0
 * Author: Kristian Primdal
 * Author URI: http://primux.dk
 * License: GNU GENERAL PUBLIC LICENSE
 */

use Primux\Primux;

if ( ! defined('ABSPATH')) {
    die; // Exit if accessed directly.
}

if ( ! defined('WP_DEBUG')) {
    define('WP_DEBUG', true);
}

if ( ! defined('WP_DEBUG_DISPLAY')) {
    define('WP_DEBUG_DISPLAY', true);
}


require __DIR__ . '/autoload.php';
require __DIR__ . '/vendor/autoload.php';

$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
    'https://github.com/kprimdal/primux-wp-development',
    __FILE__,
    'primux-wp-development'
);

new Primux;