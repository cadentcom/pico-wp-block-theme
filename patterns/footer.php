<?php
/**
 * Title: Footer
 * Slug: pico-wp-block-theme/footer
 * Categories: footer
 */
?>

<!-- wp:group {"style":{"color":{"background":"#38182f"}},"layout":{"inherit":true,"type":"constrained"}} -->
<div class="wp-block-group has-background" style="background-color:#38182f">
    <!-- wp:group {"style":{"spacing":{"padding":{"top":"1.88rem","bottom":"1.88rem","left":"1.88rem","right":"1.88rem"},"margin":{"top":"0rem","bottom":"0rem"}}}} -->
    <div class="wp-block-group"
        style="margin-top:0rem;margin-bottom:0rem;padding-top:1.88rem;padding-right:1.88rem;padding-bottom:1.88rem;padding-left:1.88rem">
        <!-- wp:paragraph {"align":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}},"typography":{"fontSize":"1rem"}},"textColor":"white"} -->
        <p class="has-text-align-center has-white-color has-text-color has-link-color" style="font-size:1rem">
            <?php echo esc_attr_x('Pico WP Block Theme © 2024 Cadent Technologies Corp.', 'Footer copyright text', 'picowpblock') ?>
        </p>
        <!-- /wp:paragraph -->
    </div>
    <!-- /wp:group -->
</div>
<!-- /wp:group -->