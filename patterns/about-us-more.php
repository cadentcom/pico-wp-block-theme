<?php
/**
 * Title: About Us More
 * Slug: picostudio/about-us-more
 * Categories: Pico Blocks
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"100px","bottom":"100px","left":"100px","right":"100px"}}},"backgroundColor":"custom-pico-bg-light","layout":{"type":"default"}} -->
<div class="wp-block-group has-custom-pico-bg-light-background-color has-background"
    style="padding-top:100px;padding-right:100px;padding-bottom:100px;padding-left:100px">
    <!-- wp:heading {"textAlign":"center","style":{"typography":{"fontSize":"150px","fontStyle":"normal","fontWeight":"400","textTransform":"uppercase","lineHeight":"1"}}} -->
    <h2 class="wp-block-heading has-text-align-center"
        style="font-size:150px;font-style:normal;font-weight:400;line-height:1;text-transform:uppercase">
        <?php echo esc_html_x('"WE ARE AN AGENCY FOR BIG GROWTH"', 'About more title', 'picostudio'); ?>
    </h2>
    <!-- /wp:heading -->

    <!-- wp:columns -->
    <div class="wp-block-columns">
        <!-- wp:column -->
        <div class="wp-block-column"></div>
        <!-- /wp:column -->

        <!-- wp:column {"width":"53%"} -->
        <div class="wp-block-column" style="flex-basis:53%">
            <!-- wp:paragraph {"align":"center","style":{"typography":{"fontSize":"40px","lineHeight":"1.5"},"spacing":{"margin":{"left":"0px","right":"0px","top":"20px","bottom":"50px"}}}} -->
            <p class="has-text-align-center"
                style="margin-top:20px;margin-right:0px;margin-bottom:50px;margin-left:0px;font-size:40px;line-height:1.54">
                <?php echo esc_html_x("We are not just a team of designers and builders; we're storytellers.", "About more description", "picostudio"); ?>
            </p>
            <!-- /wp:paragraph -->
        </div>
        <!-- /wp:column -->

        <!-- wp:column -->
        <div class="wp-block-column"></div>
        <!-- /wp:column -->
    </div>
    <!-- /wp:columns -->

    <!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"}} -->
    <div class="wp-block-buttons">
        <!-- wp:button {"backgroundColor":"custom-pico-primary","textColor":"white","width":50,"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}}} -->
        <div class="wp-block-button has-custom-width">
            <a class="wp-block-button__link has-white-color has-custom-pico-primary-background-color has-text-color has-background has-link-color wp-element-button"
                href="#">
                <?php echo esc_html_x('LEARN ABOUT MORE', 'About more button', 'picostudio'); ?>
            </a>
        </div>
        <!-- /wp:button -->
    </div>
    <!-- /wp:buttons -->
</div>
<!-- /wp:group -->