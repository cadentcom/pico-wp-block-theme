<?php
/**
 * Title: Hero Banner
 * Slug: pico-theme/hero-banner
 * Categories: hero, banner
 */
?>

<!-- wp:cover {"url":"<?php get_parent_theme_file_uri('/assets/imgs/hero/hero-bg.png'); ?>","id":9,"layout":{"type":"constrained"}} -->
<div class="wp-block-cover is-light">
    <span aria-hidden="true" class="wp-block-cover__background has-background-dim">
    </span>
    <img class="wp-block-cover__image-background wp-image-9" alt=""
        src="<?php get_parent_theme_file_uri('/assets/imgs/hero/hero-bg.png'); ?>" data-object-fit="cover" />
    <div class="wp-block-cover__inner-container">
        <!-- wp:group {"layout":{"type":"constrained","contentSize":"90%"}} -->
        <div class="wp-block-group">
            <!-- wp:columns {"verticalAlignment":"center"} -->
            <div class="wp-block-columns">
                <!-- wp:column {"verticalAlignment":"center"} -->
                <div class="wp-block-column is-vertically-aligned-center hero-content">
                    <!-- wp:heading {"level":1,"fontSize":"x-large"} -->
                    <h1 class="wp-block-heading">
                        <?php esc_html_e('We Help To Build Your Success With great Marketing', 'pico-theme'); ?>
                    </h1>
                    <!-- /wp:heading -->

                    <!-- wp:paragraph -->
                    <p>
                        <?php esc_html_e('Mauris in diam sed magna rutrum scelerisque. Nulla iaculis quis massa eu iaculis. Fusce in tempus augue, et hendrerit ligula.', 'pico-theme'); ?>
                    </p>
                    <!-- /wp:paragraph -->

                    <!-- wp:buttons -->
                    <div class="wp-block-buttons">
                        <!-- wp:button -->
                        <div class="wp-block-button">
                            <a class="wp-block-button__link wp-element-button">
                                <?php esc_html_e('know more', 'pico-theme'); ?>
                            </a>
                        </div>
                        <!-- /wp:button -->
                    </div>
                    <!-- /wp:buttons -->

                </div>
                <!-- /wp:column -->

                <!-- wp:column -->
                <div class="wp-block-column">
                    <!-- wp:image {"align":"right","id":10,"width":"548px","height":"auto","sizeSlug":"full","linkDestination":"none"} -->
                    <figure class="wp-block-image alignright size-full is-resized">
                        <img src="<?php get_parent_theme_file_uri('/assets/imgs/hero/hero-object.png') ?>" alt=""
                            class="wp-image-10" style="width:548px;height:auto" />
                    </figure>
                    <!-- /wp:image -->
                </div>
                <!-- /wp:column -->

            </div>
            <!-- /wp:columns -->
        </div>
        <!-- /wp:group -->
    </div>
</div>
<!-- /wp:cover -->