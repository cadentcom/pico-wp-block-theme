<?php
/**
 * Title: Single Post Template
 * Slug: picostudio/single-post-template
 * Categories: Pico Blocks
 */
?>

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group">
    <!-- wp:group {"style":{"color":{"background":"#f1f1f1"},"spacing":{"padding":{"top":"30px","bottom":"30px","left":"30px","right":"30px"}}},"layout":{"type":"default"}} -->
    <div class="wp-block-group has-background"
        style="background-color:#f1f1f1;padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px">
        <!-- wp:post-featured-image {"aspectRatio":"auto"} /-->

        <!-- wp:post-title {"style":{"typography":{"textTransform":"uppercase","fontStyle":"normal","fontWeight":"500","fontSize":"26px","lineHeight":"1.1"},"spacing":{"margin":{"top":"30px"}}}} /-->

        <!-- wp:group {"style":{"spacing":{"margin":{"top":"30px","bottom":"15px"}}},"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"space-between"}} -->
        <div class="wp-block-group" style="margin-top:30px;margin-bottom:15px">
            <!-- wp:post-date /-->
            <!-- wp:post-author-name /-->
        </div>
        <!-- /wp:group -->

        <!-- wp:post-content {"style":{"spacing":{"blockGap":"0"}}} /-->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"color":{"background":"#f1f1f1"},"spacing":{"padding":{"top":"30px","bottom":"30px","left":"30px","right":"30px"},"margin":{"top":"50px"}}},"layout":{"type":"default"}} -->
    <div class="wp-block-group has-background"
        style="background-color:#f1f1f1;margin-top:50px;padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px">
        <!-- wp:comments -->
        <div class="wp-block-comments">
            <!-- wp:comments-title {"style":{"typography":{"fontSize":"22px","fontStyle":"normal","fontWeight":"500"}},"fontFamily":"montserrat"} /-->
            <!-- wp:post-comments-form /-->
            <!-- wp:comment-template {"style":{"spacing":{"margin":{"top":"50px"}}}} -->
            <!-- wp:columns -->
            <div class="wp-block-columns">
                <!-- wp:column {"width":"40px"} -->
                <div class="wp-block-column" style="flex-basis:40px">
                    <!-- wp:avatar {"size":40,"style":{"border":{"radius":"20px"}}} /-->
                </div>
                <!-- /wp:column -->
                <!-- wp:column -->
                <div class="wp-block-column">
                    <!-- wp:comment-author-name {"fontSize":"small"} /-->
                    <!-- wp:group {"style":{"spacing":{"margin":{"top":"0px","bottom":"0px"}}},"layout":{"type":"flex"}} -->
                    <div class="wp-block-group" style="margin-top:0px;margin-bottom:0px">
                        <!-- wp:comment-date {"fontSize":"small"} /-->
                        <!-- wp:comment-edit-link {"fontSize":"small"} /-->
                    </div>
                    <!-- /wp:group -->
                    <!-- wp:comment-content /-->
                    <!-- wp:comment-reply-link {"fontSize":"small"} /-->
                </div>
                <!-- /wp:column -->
            </div>
            <!-- /wp:columns -->
            <!-- /wp:comment-template -->

            <!-- wp:comments-pagination -->
            <!-- wp:comments-pagination-previous /-->

            <!-- wp:comments-pagination-numbers /-->

            <!-- wp:comments-pagination-next /-->
            <!-- /wp:comments-pagination -->
        </div>
        <!-- /wp:comments -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->