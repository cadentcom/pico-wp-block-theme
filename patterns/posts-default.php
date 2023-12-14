<?php
/**
 * Title: Posts Default
 * Slug: picostudio/posts-default
 * Categories: Pico Blocks
 */
?>

<!-- wp:group {"style":{"spacing":{"padding":{"right":"0","left":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="padding-right:0;padding-left:0">
    <!-- wp:query {"queryId":39,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":true}} -->
    <div class="wp-block-query">
        <!-- wp:post-template {"layout":{"type":"default"}} -->
        <!-- wp:group {"style":{"color":{"background":"#f7f7f7"},"spacing":{"padding":{"top":"30px","bottom":"30px","left":"30px","right":"30px"},"margin":{"bottom":"30px"}},"border":{"radius":"10px"}},"layout":{"type":"default"}} -->
        <div class="wp-block-group has-background"
            style="border-radius:10px;background-color:#f7f7f7;margin-bottom:30px;padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px">
            <!-- wp:post-featured-image {"isLink":true,"aspectRatio":"3/2"} /-->

            <!-- wp:group {"style":{"spacing":{"margin":{"top":"20px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
            <div class="wp-block-group" style="margin-top:20px">
                <!-- wp:post-date {"format":null,"isLink":true,"style":{"spacing":{"padding":{"top":"0px","bottom":"0px"}}}} /-->

                <!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"right"}} -->
                <div class="wp-block-group"><!-- wp:paragraph -->
                    <p><?php esc_html_e('By:','picostudio');?> </p>
                    <!-- /wp:paragraph -->

                    <!-- wp:post-author-name {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|custom-pico-background"}}},"typography":{"textTransform":"capitalize"}}} /-->
                </div>
                <!-- /wp:group -->
            </div>
            <!-- /wp:group -->

            <!-- wp:post-title {"level":3,"isLink":true,"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"500"},"spacing":{"padding":{"top":"0","bottom":"0"}}}} /-->
        </div>
        <!-- /wp:group -->
        <!-- /wp:post-template -->

        <!-- wp:query-pagination -->
        <!-- wp:query-pagination-previous /-->

        <!-- wp:query-pagination-numbers /-->

        <!-- wp:query-pagination-next /-->
        <!-- /wp:query-pagination -->
    </div>
    <!-- /wp:query -->
</div>
<!-- /wp:group -->