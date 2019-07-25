<!DOCTYPE html>
<html <?php language_attributes() ?>>
    <head>
        <meta charset="<?php bloginfo('charset') ?>">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="<?php bloginfo('description') ?>">
        <link rel="icon" href="<?php bloginfo('template_url') ?>/favicon.ico">
        <title>
            <?php bloginfo('name'); if(is_front_page()) echo ' | '?>
            <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
        </title>
        <link href="<?php bloginfo('template_url') ?>/css/bootstrap.min.css" rel="stylesheet">
        <link href="<?php bloginfo('template_url') ?>/css/main.css" rel="stylesheet">
        <link href="<?php bloginfo('stylesheet_url') ?>" rel="stylesheet">
        <?php wp_head() ?>
    </head>
    <body <?php body_class(); ?>>
        <div class="navbar-wrapper">
            <div class="container">
                <nav class="navbar navbar-inverse navbar-static-top">
                    <div class="container">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand" href="/">
                            <?php
                            if(has_custom_logo()){
                                the_custom_logo();
                            }
                            else{
                                echo get_bloginfo('site_name');
                            }
                            ?>
                            </a>
                        </div>
                        <?php
                        wp_nav_menu(array(
                            'menu' => 'primary',
                            'theme_location' => 'primary',
                            'depth' => 2,
                            'container' => 'div',
                            'container_class' => 'collapse navbar-collapse',
                            'container_id' => 'main-nav',
                            'menu_class' => 'nav navbar-nav',
                            'falback_cb' => 'wp_bootstrap_navwalker::fallback',
                            'walker' => new wp_bootstrap_navwalker()
                        ));
                        ?>
                    </div>
                </nav>
            </div>
        </div>