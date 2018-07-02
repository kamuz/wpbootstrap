<?php

function wpb_customize_register($wp_customize){
    // Showcase Section
    $wp_customize->add_section('showcase', array(
        'title' => __('Showcase', 'wpbootstrap'),
        'description' => sprintf(__('Options for showcase', 'wpbootstrap')),
        'priority' => 130
    ));

    $wp_customize->add_setting('showcase_image', array(
        'default' => get_bloginfo('template_directory') . '/img/showcase.jpg',
    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showcase_image', array(
        'label' => __('Showcase Image', 'wpbootstrap'),
        'section' => 'showcase',
        'settings' => 'showcase_image',
        'priority' => 1
    )));

    $wp_customize->add_setting('showcase_heading', array(
        'default' => _x('Example headline.', 'wpbootstrap'),
    ));

    $wp_customize->add_control('showcase_heading', array(
        'label' => __('Heading', 'wpbootstrap'),
        'section' => 'showcase',
        'type' => 'text',
        'priority' => 2
    ));

    $wp_customize->add_setting('showcase_text', array(
        'default' => _x('Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit..', 'wpbootstrap'),
    ));

    $wp_customize->add_control('showcase_text', array(
        'label' => __('Text', 'wpbootstrap'),
        'section' => 'showcase',
        'type' => 'textarea',
        'priority' => 3
    ));
}
add_action('customize_register', 'wpb_customize_register');