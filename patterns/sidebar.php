<?php
/**
 * Title: Sidebar
 * Slug: picostudio/sidebar
 */
?>


<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group">
    <!-- wp:group {"style":{"spacing":{"padding":{"top":"30px","bottom":"30px","left":"30px","right":"30px"}},"color":{"background":"#f1f1f1"}},"layout":{"type":"default"}} -->
    <div class="wp-block-group has-background"
        style="background-color:#f1f1f1;padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px">
        <!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"600","textTransform":"capitalize"},"spacing":{"margin":{"bottom":"15px"}}},"fontFamily":"montserrat"} -->
        <h3 class="wp-block-heading has-montserrat-font-family"
            style="margin-bottom:15px;font-size:20px;font-style:normal;font-weight:600;text-transform:capitalize">
            <?php echo esc_html_x('search', 'Sidebar widget title', 'picostudio'); ?>
        </h3>
        <!-- /wp:heading -->

        <!-- wp:search {"label":"Search","showLabel":false,"placeholder":"Search.....","width":100,"widthUnit":"%","buttonText":"Search","buttonPosition":"no-button","buttonUseIcon":true,"style":{"border":{"radius":"10px","width":"1px"}},"borderColor":"custom-pico-base-light","className":"pico-sidebar-search-input"} /-->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"color":{"background":"#f1f1f1"},"spacing":{"padding":{"top":"30px","bottom":"30px","left":"30px","right":"30px"},"blockGap":"0","margin":{"top":"30px"}}},"layout":{"type":"default"}} -->
    <div class="wp-block-group has-background"
        style="background-color:#f1f1f1;margin-top:30px;padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px">
        <!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"600","textTransform":"capitalize"},"spacing":{"margin":{"bottom":"15px"}}},"fontFamily":"montserrat"} -->
        <h3 class="wp-block-heading has-montserrat-font-family"
            style="margin-bottom:15px;font-size:20px;font-style:normal;font-weight:600;text-transform:capitalize">
            <?php echo esc_html_x('recent', 'Sidebar widget title', 'picostudio'); ?>
            posts
        </h3>
        <!-- /wp:heading -->

        <!-- wp:latest-posts {"displayPostDate":true,"style":{"spacing":{"padding":{"top":"0","bottom":"0"},"margin":{"top":"0","bottom":"0"}}},"className":"pico-sidebar-recent-post"} /-->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"color":{"background":"#f1f1f1"},"spacing":{"padding":{"top":"30px","bottom":"30px","left":"30px","right":"30px"},"blockGap":"0","margin":{"top":"30px"}}},"layout":{"type":"default"}} -->
    <div class="wp-block-group has-background"
        style="background-color:#f1f1f1;margin-top:30px;padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px">
        <!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"600","textTransform":"capitalize"},"spacing":{"margin":{"bottom":"15px"}}},"fontFamily":"montserrat"} -->
        <h3 class="wp-block-heading has-montserrat-font-family"
            style="margin-bottom:15px;font-size:20px;font-style:normal;font-weight:600;text-transform:capitalize">
            <?php echo esc_html_x('Categories', 'Sidebar widget title', 'picostudio'); ?>
        </h3>
        <!-- /wp:heading -->

        <!-- wp:categories {"showPostCounts":true} /-->
    </div>
    <!-- /wp:group -->

    <!-- wp:group {"style":{"color":{"background":"#f1f1f1"},"spacing":{"padding":{"top":"30px","bottom":"30px","left":"30px","right":"30px"},"blockGap":"0","margin":{"top":"30px"}}},"layout":{"type":"default"}} -->
    <div class="wp-block-group has-background"
        style="background-color:#f1f1f1;margin-top:30px;padding-top:30px;padding-right:30px;padding-bottom:30px;padding-left:30px">
        <!-- wp:heading {"level":3,"style":{"typography":{"fontSize":"20px","fontStyle":"normal","fontWeight":"600","textTransform":"capitalize"},"spacing":{"margin":{"bottom":"15px"}}},"fontFamily":"montserrat"} -->
        <h3 class="wp-block-heading has-montserrat-font-family"
            style="margin-bottom:15px;font-size:20px;font-style:normal;font-weight:600;text-transform:capitalize">
            <?php echo esc_html_x('Archive posts', 'Sidebar widget title', 'picostudio'); ?>
        </h3>
        <!-- /wp:heading -->

        <!-- wp:archives {"style":{"spacing":{"margin":{"right":"0px","left":"0px","top":"0px","bottom":"0px"},"padding":{"right":"0px","left":"0px","top":"0px","bottom":"0px"}}}} /-->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->