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

if ( ! defined('ABSPATH')) {
    die; // Exit if accessed directly.
}

require __DIR__ . '/autoload.php';
require __DIR__ . '/vendor/autoload.php';

$myUpdateChecker = Puc_v4_Factory::buildUpdateChecker(
    'https://github.com/kprimdal/primux-wp-development',
    __FILE__,
    'unique-plugin-or-theme-slug'
);