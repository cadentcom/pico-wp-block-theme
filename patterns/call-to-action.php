<?php
/**
 * Title: Call To Action
 * Slug: picostudio/call-to-action
 * Categories: Pico Blocks
 * Keywords: Call To Action
 */
?>

<!-- wp:group {"style":{"color":{"background":"#272727"},"layout":{"type":"default"}} -->
<div class="wp-block-group has-background" style="background-color:#272727">
    <!-- wp:group {"style":{"spacing":{"padding":{"top":"50px","bottom":"50px","left":"50px","right":"50px"}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"bottom"}} -->
    <div class="wp-block-group" style="padding-top:50px;padding-right:50px;padding-bottom:50px;padding-left:50px">
        <!-- wp:paragraph {"style":{"typography":{"fontSize":"120px","lineHeight":"1.2"},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
        <p class="has-white-color has-text-color has-link-color" style="font-size:120px;line-height:1.2">
            <strong>
                <?php echo esc_html_x("LET'S GET", "Call to action title", "picostudio"); ?>
            </strong>
            <br>
            <strong>
                <?php echo esc_html_x("STARTED", "Call to action title", "picostudio"); ?>
            </strong>
        </p>
        <!-- /wp:paragraph -->

        <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
        <div class="wp-block-group">
            <!-- wp:buttons {"style":{"spacing":{"blockGap":"0","margin":{"top":"0","bottom":"0"}},"layout":{"selfStretch":"fit","flexSize":null}}} -->
            <div class="wp-block-buttons" style="margin-top:0;margin-bottom:0">
                <!-- wp:button {"textColor":"white","width":100,"style":{"color":{"background":"#ffffff00"},"typography":{"fontSize":"30px","fontStyle":"normal","fontWeight":"700","textTransform":"uppercase"},"spacing":{"padding":{"left":"0px","right":"0px","top":"0px","bottom":"0px"}},"elements":{"link":{"color":{"text":"var:preset|color|white"}}}}} -->
                <div class="wp-block-button has-custom-width wp-block-button__width-100 has-custom-font-size"
                    style="font-size:30px;font-style:normal;font-weight:700;text-transform:uppercase"><a
                        class="wp-block-button__link has-white-color has-text-color has-background has-link-color wp-element-button"
                        href="#"
                        style="background-color:#ffffff00;padding-top:0px;padding-right:0px;padding-bottom:0px;padding-left:0px"
                        target="_blank" rel="noreferrer noopener"><?php echo esc_html_x("CONTACT US", "Call to action button", "picostudio"); ?></a></div>
                <!-- /wp:button -->
            </div>
            <!-- /wp:buttons -->

            <!-- wp:image {"id":76,"width":"28px","height":"auto","aspectRatio":"0.75","scale":"contain","sizeSlug":"full","linkDestination":"none"} -->
            <figure class="wp-block-image size-full is-resized">
                <img src="<?php echo esc_url(get_template_directory_uri() . '../assets/images/right-up.png') ?>" alt=""
                    class="wp-image-76" style="aspect-ratio:0.75;object-fit:contain;width:28px;height:auto" />
            </figure>
            <!-- /wp:image -->
        </div>
        <!-- /wp:group -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->