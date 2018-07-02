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
 * Theme Support
 */
function wpb_theme_support(){
    add_theme_support('post-thumbnails');
    // Nav Menus
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'wpbootstrap'),
    ));
    // Post Formats
    add_theme_support('post-formats', array('aside', 'gallery'));
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
