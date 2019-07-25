<?php

/**
 * Register Walker Class for Bootstrap
 */
require get_template_directory() . '/walker.php';

/**
 * Customizer File
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Add/Modify Widget Class
 */
require get_template_directory() . '/widgets/class-wp-widget-categories.php';

/**
 * Theme Support
 */
function wpb_theme_support(){
    // Post Thumbnail
    add_theme_support('post-thumbnails');
    // Custom Logo
    $defaults = array(
        'height' => 100,
        'width' => 400,
        'flex-height' => true,
        'flex-width' => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
    // Nav Menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'wpbootstrap'),
    ));
    // Post Formats
    add_theme_support('post-formats', array('aside', 'gallery'));
    // Custom header via Customizer
    $args = array(
        'default-image' => get_template_directory_uri() . '/img/01.jpg',
        'flex-width' => true,
        'width' => 1000,
        'flex-height' => true,
        'height' => 250,
    );
    add_theme_support( 'custom-header', $args );
    $defaults = array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array( 'site-title', 'site-description' ),
    );
    add_theme_support( 'custom-logo', $defaults );
}

add_action('after_setup_theme', 'wpb_theme_support');

/**
 * Excerpt Length
 */
function set_excerpt_length(){
    return 20;
}
add_filter('excerpt_length', 'set_excerpt_length');

/**
 * Widget Locations
 */
function wpb_init_widgets($id){
    register_sidebar(array(
        'name' => 'Categories',
        'id' => 'categories',
        'before_widget' => '<div class="categories">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ));

    register_sidebar(array(
        'name' => 'Sidebar',
        'id' => 'sidebar',
        'before_widget' => '<div class="well">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ));
}
add_action('widgets_init', 'wpb_init_widgets');

/**
 * Define Output of Categories Widget
 */
function wpb_categories_list_group_filter ($variable) {
   $variable = str_replace('<li class="cat-item cat-item-', '<li class="list-group-item cat-item cat-item-', $variable);
   $variable = str_replace('(', '<span class="badge cat-item-count"> ', $variable);
   $variable = str_replace(')', ' </span>', $variable);
   return $variable;
}
add_filter('wp_list_categories','wpb_categories_list_group_filter');

/**
 * Get parent posts
 */
function get_top_parent(){
    global $post;
    if($post->post_parent){
        $ancestors = get_post_ancestors($post->ID);
        return $ancestors[0];
    }
    return $post->ID;
}

/**
 * Is parent
 */
function page_is_parent(){
    global $post;
    $pages = get_pages('child_of=' . $post->ID);
    return count($pages);
}

/**
 * Register Widgets
 */
function wpboostrap_register_widgets(){
    register_widget('WP_Widget_Categories_Custom');
}

add_action('widgets_init', 'wpboostrap_register_widgets');