<?php
/**
 * Title: Header Default
 * Slug: picostudio/header-default
 * Categories: Pico Blocks
 * Keywords: Header
 */
?>


<!-- wp:group {"layout":{"inherit":"true","type":"constrained"}} -->
<div class="wp-block-group">
    <!-- wp:group {"align":"full","style":{"spacing":{"padding":{"bottom":"20px","top":"20px","left":"50px","right":"50px"}}},"layout":{"type":"flex","justifyContent":"space-between"}} -->
    <div class="wp-block-group alignfull"
        style="padding-top:20px;padding-right:50px;padding-bottom:20px;padding-left:50px">
        <!-- wp:group {"layout":{"type":"flex"}} -->
        <div class="wp-block-group">
            <!-- wp:site-logo {"width":64} /-->

            <!-- wp:group -->
            <div class="wp-block-group">
                <!-- wp:site-title {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}},"typography":{"lineHeight":"0.8"}}} /-->

                <!-- wp:site-tagline /-->
            </div>
            <!-- /wp:group -->
        </div>
        <!-- /wp:group -->

        <!-- wp:navigation {"icon":"menu","layout":{"type":"flex","setCascadingProperties":true,"justifyContent":"center","orientation":"horizontal"},"style":{"spacing":{"margin":{"top":"0"}}}} /-->

        <!-- wp:buttons -->
        <div class="wp-block-buttons">
            <!-- wp:button -->
            <div class="wp-block-button">
                <a class="wp-block-button__link wp-element-button">
                    <?php echo esc_html("CONTACT US", "picostudio") ?>
                </a>
            </div>
            <!-- /wp:button -->
        </div>
        <!-- /wp:buttons -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->