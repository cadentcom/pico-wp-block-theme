<?php
/**
 * Title: Hero Banner
 * Slug: pico-theme/hero-banner
 * Categories: hero, banner
 */
?>

<!-- wp:group {"layout":{"inherit":"true"}} -->
<div class="wp-block-group" style="margin-top:0">
    <!-- wp:group {"style":{"background":{"backgroundImage":{"url":"<?php get_parent_theme_file_uri('/assets/imgs/hero/hero-bg.png'); ?>","id":10,"source":"file",}},"spacing":{"padding":{"top":"100px","bottom":"100px"}}},"layout":{"type":"constrained","contentSize":"1140px"}} -->
    <div class="wp-block-group" style="padding-top:100px;padding-bottom:100px">
        <!-- wp:columns {"verticalAlignment":null} -->
        <div class="wp-block-columns hero">
            <!-- wp:column {"verticalAlignment":"center"} -->
            <div class="wp-block-column is-vertically-aligned-center hero-content">
                <!-- wp:heading {"level":1} -->
                <h1 class="wp-block-heading">
                    <?php esc_html_e('We Help To Build Your Success With great Marketing', 'pico-theme'); ?>
                </h1>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>
                    <?php esc_html_e('Mauris in diam sed magna rutrum scelerisque. Nulla iaculis quis massa eu iaculis. Fusce in tempus augue, et hendrerit ligula.', 'pico-theme'); ?>
                </p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons {"layout":{"type":"flex"}} -->
                <div class="wp-block-buttons">
                    <!-- wp:button -->
                    <div class="wp-block-button"><a class="wp-block-button__link wp-element-button">
                            <?php esc_html_e('know more', 'pico-theme'); ?>
                        </a></div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"verticalAlignment":"center"} -->
            <div class="wp-block-column is-vertically-aligned-center">
                <!-- wp:image {"align":"right","id":10,"sizeSlug":"large","linkDestination":"none"} -->
                <figure class="wp-block-image alignright size-large"><img
                        src="https://rk-theme.com/block-theme/wp-content/uploads/2023/11/403856-PD6HJM-226-1024x1024.jpg"
                        alt="" class="wp-image-10" /></figure>
                <!-- /wp:image -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->