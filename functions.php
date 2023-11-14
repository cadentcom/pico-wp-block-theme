<?php
/**
 * Pico Theme functions and definitions
 *
 * @package pico_theme
 * @since 1.0
 */

if (!function_exists('pico_theme_support')) {
    function pico_theme_support()
    {
        // Add support for block styles.
        add_theme_support('wp-block-styles');

        // Enqueue editor styles.
        add_editor_style('style.css');

    }
}
add_action('after_setup_theme', 'pico_theme_support');


if (!function_exists('pico_theme_styles')) {
    function pico_theme_styles()
    {
        // Register theme stylesheet.
        $theme_version = wp_get_theme()->get('Version');

        $version_string = is_string($theme_version) ? $theme_version : false;
        wp_enqueue_style(
            'seo-marketing-agency-style',
            get_template_directory_uri() . '/assets/css/style.css',
            array(),
            $version_string
        );
    }
}
add_action('wp_enqueue_scripts', 'pico_theme_styles');