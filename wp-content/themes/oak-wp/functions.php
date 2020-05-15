<?php

add_action('wp_enqueue_scripts', function () {
    wp_enqueue_style('oak-css', get_stylesheet_uri());

    wp_enqueue_script('react', 'https://unpkg.com/react@16/umd/react.development.js', [], '', true);
    wp_enqueue_script('react-dom', 'https://unpkg.com/react-dom@16/umd/react-dom.development.js', [], '', true);
    wp_enqueue_script('babel', 'https://unpkg.com/babel-standalone@6/babel.min.js', [], '', true);
    wp_enqueue_script('like-button-js', get_template_directory_uri().'/js/like_button.js', [], '0.0.1', true);
    wp_enqueue_script('oak-js', get_template_directory_uri().'/script.js', [], '0.0.1', true);
});

add_action('init', function () {
    register_nav_menus([
        'header-menu' => __( 'Header Menu' ),
        'footer-menu' => __( 'Footer Menu' ),
    ]);
});
