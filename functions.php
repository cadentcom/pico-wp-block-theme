<?php

if (!function_exists('pico_studio_theme_support')):
    function pico_studio_theme_support()
    {

        // Add support for block styles.
        add_theme_support('wp-block-styles');

        // Enqueue editor styles.
        add_editor_style('style.css');

    }
endif;
add_action('after_setup_theme', 'pico_studio_theme_support');


function pico_studio_register_recent_work_post_type()
{

    /**
     * Post Type: Recent Works.
     */

    $labels = [
        "name" => esc_html__("Recent Works", "picostudio"),
        "singular_name" => esc_html__("Recent Work", "picostudio"),
        "menu_name" => esc_html__("Recent Works", "picostudio"),
        "all_items" => esc_html__("All Recent Works", "picostudio"),
        "add_new" => esc_html__("Add New Recent Work", "picostudio"),
        "add_new_item" => esc_html__("Add New  Recent Work", "picostudio"),
        "edit_item" => esc_html__("Edit Recent Work", "picostudio"),
        "new_item" => esc_html__("New Recent Work", "picostudio"),
        "view_item" => esc_html__("View Recent Work", "picostudio"),
        "view_items" => esc_html__("View Recent Works", "picostudio"),
    ];

    $args = [
        "label" => esc_html__("Recent Works", "picostudio"),
        "labels" => $labels,
        "description" => "",
        "public" => true,
        "publicly_queryable" => true,
        "show_ui" => true,
        "show_in_rest" => true,
        "rest_base" => "",
        "rest_controller_class" => "WP_REST_Posts_Controller",
        "rest_namespace" => "wp/v2",
        "has_archive" => true,
        "show_in_menu" => true,
        "show_in_nav_menus" => true,
        "delete_with_user" => false,
        "exclude_from_search" => false,
        "capability_type" => "post",
        "map_meta_cap" => true,
        "hierarchical" => false,
        "can_export" => false,
        "rewrite" => ["slug" => "recent-works", "with_front" => true],
        "query_var" => true,
        "menu_icon" => "dashicons-admin-tools",
        "supports" => ["title", "editor", "thumbnail", "excerpt"],
        "show_in_graphql" => false,
    ];

    register_post_type("recent-works", $args);
}

add_action('init', 'pico_studio_register_recent_work_post_type');
