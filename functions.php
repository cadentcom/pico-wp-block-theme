<?php

if (!function_exists('pico_added_meta_tags')) {
    function pico_added_meta_tags()
    {
        $description = esc_html(get_bloginfo("description"));
        echo '<meta name="description" content="' . $description . '" />';
    }
    add_action('wp_head', 'pico_added_meta_tags');
}

