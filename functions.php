<?php

// Register Walker Class for Bootstrap
require_once('walker.php');

// Theme Support
function wpk_theme_support(){
    // Nav Menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'wpbootstrap'),
    ));
}

add_action('after_setup_theme', 'wpk_theme_support');