<?php
/**
 * Title: Recent Works
 * Slug: picostudio/recent-works
 * Categories: Pico Blocks
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"top":"50px","bottom":"50px","left":"50px","right":"50px"}},"border":{"top":{"color":"#f2f2f2","width":"1px"},"right":{},"bottom":{},"left":{}}},"layout":{"type":"default"}} -->
<div class="wp-block-group"
    style="border-top-color:#f2f2f2;border-top-width:1px;padding-top:50px;padding-right:50px;padding-bottom:50px;padding-left:50px">
    <!-- wp:group {"style":{"spacing":{"margin":{"bottom":"30px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
    <div class="wp-block-group" style="margin-bottom:30px">
        <!-- wp:paragraph {"style":{"typography":{"fontSize":"30px"}}} -->
        <p style="font-size:30px">
            <?php echo esc_html_x('RECENT WORK', 'Recent Work section title', 'picostudio'); ?>
        </p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"layout":{"type":"constrained"}} -->
    <div class="wp-block-group">
        <!-- wp:query {"query":{"perPage":5,"pages":0,"offset":0,"postType":"recent-works","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"parents":[]}} -->
        <div class="wp-block-query">
            <!-- wp:post-template -->
            <!-- wp:group {"style":{"spacing":{"padding":{"top":"30px","bottom":"30px"}},"border":{"top":{"color":"#f1f1f1","width":"1px"},"bottom":{"color":"#f1f1f1","width":"1px"},"right":{},"left":{}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between","verticalAlignment":"center"}} -->
            <div class="wp-block-group"
                style="border-top-color:#f1f1f1;border-top-width:1px;border-bottom-color:#f1f1f1;border-bottom-width:1px;padding-top:30px;padding-bottom:30px">
                <!-- wp:post-featured-image {"aspectRatio":"auto","width":"20%","style":{"spacing":{"margin":{"right":"0px"}}}} /-->

                <!-- wp:post-title {"level":4,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-pico-background"}}},"typography":{"fontStyle":"normal","fontWeight":"700","textTransform":"uppercase","fontSize":"0px"},"spacing":{"margin":{"right":"22px"}}},"textColor":"custom-pico-background"} /-->

                <!-- wp:categories /-->

                <!-- wp:post-date /-->
            </div>
            <!-- /wp:group -->
            <!-- /wp:post-template -->
        </div>
        <!-- /wp:query -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->