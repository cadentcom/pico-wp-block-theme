<?php

if (!function_exists('wp_body_open')) {

    function wp_body_open()
    {
        do_action('wp_body_open');
    }
}


// Checking version
if (site_url() == 'http://localhost/cadent.com/') {
    define('VERSION', time());
} else {
    define('VERSION', wp_get_theme()->get('version'));
}


// Theme startup setup
if (!function_exists("cadent_theme_setup")) {
    function cadent_theme_setup()
    {
        load_theme_textdomain('cadent');
        add_theme_support('automatic-feed-links');
        add_theme_support('title-tag');
        add_theme_support('custom-logo');
        add_theme_support('post-formats', array('image', 'quote', 'video', 'audio', 'link', 'gallery'));
        add_theme_support('post-thumbnails');
        add_theme_support('html5', array('search-form', 'comment-list', 'comment-form'));

        // Register Navigation Menu
        register_nav_menus(array(
            "header_menu" => "Header Menu",
            "footer_menu" => "Footer Menu",
        ));
    }
    add_action('after_setup_theme', 'cadent_theme_setup');
}

// Theme assets include
/* function cadent_theme_assets_enqueue()
{
    // Theme style enqueue
    wp_enqueue_style('custom-style', get_theme_file_uri('./assets/css/cadent.css'), null, '1.0.0', 'all');
    wp_enqueue_style('cadent-style', get_stylesheet_uri(), null, VERSION);
}

add_action("wp_enqueue_scripts", "cadent_theme_assets_enqueue"); */
