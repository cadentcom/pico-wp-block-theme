<?php
/**
 * Title: Hero Section
 * Slug: pico-theme/main-banner
 */
?>

<!-- wp:group {"style":{"spacing":{"blockGap":"0","margin":{"top":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="margin-top:0">
    <!-- wp:group -->
    <div class="wp-block-group">
        <!-- wp:columns {"verticalAlignment":null} -->
        <div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center"} -->
            <div class="wp-block-column is-vertically-aligned-center hero-content">
                <!-- wp:heading {"level":1,"style":{"elements":{"link":{"color":{"text":"var:preset|color|contrast"}}}},"textColor":"contrast"} -->
                <h1 class="wp-block-heading has-contrast-color has-text-color has-link-color">
                    <?php echo esc_html_x('We Help To Build Your Success With great Marketing', 'heading of the hero section', 'pico-theme'); ?>
                </h1>
                <!-- /wp:heading -->

                <!-- wp:paragraph -->
                <p>
                    <?php echo esc_html_x('Mauris in diam sed magna rutrum scelerisque. Nulla iaculis quis massa eu iaculis. Fusce in tempus augue, et hendrerit ligula.', 'content of the hero section', 'pico-theme'); ?>
                </p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons {"layout":{"type":"flex"}} -->
                <div class="wp-block-buttons"><!-- wp:button -->
                    <div class="wp-block-button"><a class="wp-block-button__link wp-element-button">
                            <?php echo esc_html_x('know more', 'button of the hero section', 'pico-theme'); ?>
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
                        src="<?php echo get_parent_theme_file_uri('/assets/imgs/hero/hero-object.png'); ?>" alt=""
                        class="wp-image-10" /></figure>
                <!-- /wp:image -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->