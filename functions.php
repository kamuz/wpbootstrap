<?php

// Register Walker Class for Bootstrap
require_once('walker.php');

// Theme Support
function wpk_theme_support(){
    add_theme_support('post-thumbnails');
    // Nav Menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'wpbootstrap'),
    ));
}

add_action('after_setup_theme', 'wpk_theme_support');

// Excerpt length
function set_excerpt_length(){
    return 20;
}

add_filter('excerpt_length', 'set_excerpt_length');