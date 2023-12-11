<?php
/**
 * Title: About Default
 * Slug: picostudio/about-default
 * Categories: Pico Blocks
 */
?>

<!-- wp:group {"style":"spacing":{"padding":{"top":"50px","bottom":"50px","left":"50px","right":"50px"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-top:50px;padding-right:50px;padding-bottom:50px;padding-left:50px">
    <!-- wp:group {"style":{"spacing":{"margin":{"bottom":"30px"}}},"layout":{"type":"default"}} -->
    <div class="wp-block-group" style="margin-bottom:30px">
        <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
        <div class="wp-block-group">
            <!-- wp:paragraph {"style":{"typography":{"fontSize":"30px"}}} -->
            <p style="font-size:30px">
                <strong>
                    <?php echo esc_html_x('Let’s push your business forward', 'About default section title', 'picostudio'); ?>
                </strong>
            </p>
            <!-- /wp:paragraph -->

            <!-- wp:paragraph {"align":"right"} -->
            <p class="has-text-align-right">
                <a href="#">
                    <?php echo esc_html_x('Contact us', 'About default contact button', 'picostudio'); ?>
                </a>
            </p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"layout":{"type":"default"}} -->
    <div class="wp-block-group">
        <!-- wp:image {"id":87,"sizeSlug":"full","linkDestination":"none"} -->
        <figure class="wp-block-image size-full">
            <img src="<?php echo esc_url(get_template_directory_uri() . '../assets/images/pico-about-image.jpg') ?>"
                alt="" />
        </figure>
        <!-- /wp:image -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"margin":{"top":"30px"}}},"layout":{"type":"default"}} -->
    <div class="wp-block-group" style="margin-top:30px">
        <!-- wp:columns -->
        <div class="wp-block-columns">
            <!-- wp:column {"width":"40%"} -->
            <div class="wp-block-column" style="flex-basis:40%">
                <!-- wp:paragraph {"style":{"typography":{"fontSize":"34px"}}} -->
                <p style="font-size:34px">
                    <?php echo esc_html_x("With Base Studio, your goals aren't just realized – they're reimagined with strong designs and visuals.", "About text left", "picostudio"); ?>
                </p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"width":"20%"} -->
            <div class="wp-block-column" style="flex-basis:20%"></div>
            <!-- /wp:column -->

            <!-- wp:column {"width":"40%"} -->
            <div class="wp-block-column" style="flex-basis:40%">
                <!-- wp:paragraph {"style":{"typography":{"fontSize":"30px"},"spacing":{"margin":{"top":"0px","bottom":"0px"}}}} -->
                <p style="margin-top:0px;margin-bottom:0px;font-size:30px">
                    <?php echo esc_html_x('Our team takes the time to dive deep into your brand identity, product goals, and values.', 'About text right', 'picostudio'); ?>
                </p>
                <!-- /wp:paragraph -->

                <!-- wp:buttons -->
                <div class="wp-block-buttons">
                    <!-- wp:button -->
                    <div class="wp-block-button">
                        <a class="wp-block-button__link wp-element-button" href="#">
                            <?php echo esc_html_x('Contact us', 'About contact button'); ?>
                        </a>
                    </div>
                    <!-- /wp:button -->
                </div>
                <!-- /wp:buttons -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->