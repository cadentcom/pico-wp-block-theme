<?php
/**
 * Title: Footer Defalt
 * Slug: picostudio/footer-default
 * Categories: Pico Blocks
 * Keywords: Footer
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"0","bottom":"0","left":"50px","right":"50px"}},"color":{"background":"#272727"}},"layout":{"type":"default"}} -->
<div class="wp-block-group has-background"
    style="background-color:#272727;padding-top:0;padding-right:50px;padding-bottom:0;padding-left:50px">
    <!-- wp:group {"style":{"border":{"top":{"color":"var:preset|color|custom-pico-base-light","width":"1px"},"bottom":{"color":"var:preset|color|custom-pico-base-light","width":"1px"},"right":{},"left":{}},"spacing":{"padding":{"top":"50px","bottom":"50px"}}},"layout":{"type":"default"}} -->
    <div class="wp-block-group"
        style="border-top-color:var(--wp--preset--color--custom-pico-base-light);border-top-width:1px;border-bottom-color:var(--wp--preset--color--custom-pico-base-light);border-bottom-width:1px;padding-top:50px;padding-bottom:50px">
        <!-- wp:columns -->
        <div class="wp-block-columns">
            <!-- wp:column {"width":"30%"} -->
            <div class="wp-block-column" style="flex-basis:30%">
                <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
                <div class="wp-block-group">
                    <!-- wp:site-logo /-->

                    <!-- wp:group {"layout":{"type":"constrained"}} -->
                    <div class="wp-block-group">
                        <!-- wp:site-title {"style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-pico-base"}}},"typography":{"lineHeight":"1"},"spacing":{"padding":{"top":"0px","bottom":"0px"},"margin":{"top":"0px","bottom":"0px"}}},"textColor":"custom-pico-base"} /-->

                        <!-- wp:site-tagline {"style":{"elements":{"link":{"color":{"text":"#f3f3f3"}}},"color":{"text":"#f3f3f3"}}} /-->
                    </div>
                    <!-- /wp:group -->
                </div>
                <!-- /wp:group -->

                <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"#f0f0f0"}}},"color":{"text":"#f0f0f0"},"spacing":{"margin":{"top":"30px"}}}} -->
                <p class="has-text-color has-link-color" style="color:#f0f0f0;margin-top:30px">
                    <?php echo esc_html_x('At Pico Studio, we believe that design goes beyond just creating a visually appealing product for customers.', 'Footer description', 'picostudio'); ?>
                </p>
                <!-- /wp:paragraph -->
            </div>
            <!-- /wp:column -->

            <!-- wp:column {"width":"20%"} -->
            <div class="wp-block-column" style="flex-basis:20%"></div>
            <!-- /wp:column -->

            <!-- wp:column {"width":"50%"} -->
            <div class="wp-block-column" style="flex-basis:50%">
                <!-- wp:group {"layout":{"type":"default"}} -->
                <div class="wp-block-group">
                    <!-- wp:columns {"style":{"spacing":{"blockGap":{"left":"50px"}}}} -->
                    <div class="wp-block-columns">
                        <!-- wp:column -->
                        <div class="wp-block-column">
                            <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-pico-base-light"}}},"spacing":{"margin":{"top":"0px","bottom":"30px"}}},"textColor":"custom-pico-base-light"} -->
                            <p class="has-custom-pico-base-light-color has-text-color has-link-color"
                                style="margin-top:0px;margin-bottom:30px">
                                <strong>
                                    <?php echo esc_html_x('NAVIGATION', 'Footer widget title', 'picostudio'); ?>
                                </strong>
                            </p>
                            <!-- /wp:paragraph -->

                            <!-- wp:navigation {"customTextColor":"#f3f3f3","overlayMenu":"never","className":"pico-footer-nav","layout":{"type":"flex","orientation":"vertical"},"style":{"spacing":{"blockGap":"10px"}}} /-->
                        </div>
                        <!-- /wp:column -->

                        <!-- wp:column -->
                        <div class="wp-block-column">
                            <!-- wp:paragraph {"style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-pico-base-light"}}},"spacing":{"margin":{"bottom":"30px","top":"0px"}}},"textColor":"custom-pico-base-light"} -->
                            <p class="has-custom-pico-base-light-color has-text-color has-link-color"
                                style="margin-top:0px;margin-bottom:30px">
                                <strong>
                                    <?php echo esc_html_x('SOCIAL LINKS', 'Footer widget title', 'picostudio'); ?>
                                </strong>
                            </p>
                            <!-- /wp:paragraph -->

                            <!-- wp:navigation {"customTextColor":"#f3f3f3","overlayMenu":"never","className":"pico-social-links","layout":{"type":"flex","orientation":"vertical"},"style":{"spacing":{"blockGap":"10px"}}} /-->
                        </div>
                        <!-- /wp:column -->
                    </div>
                    <!-- /wp:columns -->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:column -->
        </div>
        <!-- /wp:columns -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"spacing":{"padding":{"top":"30px","bottom":"30px"}}},"layout":{"type":"default"}} -->
    <div class="wp-block-group" style="padding-top:30px;padding-bottom:30px">
        <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"#cacaca"}}},"color":{"text":"#cacaca"},"typography":{"fontSize":"14px","letterSpacing":"2px"}}} -->
        <p class="has-text-align-center has-text-color has-link-color"
            style="color:#cacaca;font-size:14px;letter-spacing:2px">
            <strong>
                <?php echo esc_html_x('©COPYRIGHT RESUREVED BY CADENT.COM', 'copyright text', 'picostudio'); ?>
            </strong>
        </p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->