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