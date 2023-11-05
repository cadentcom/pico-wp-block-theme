<header>
    <!-- Site Logo -->
    <div>
        <?php
        if (has_custom_logo()) : the_custom_logo(); ?>
        <?php else : ?>
            <a href="<?php home_url(); ?>"><?php echo bloginfo('name'); ?></a>
        <?php endif; ?>
    </div>
    <!-- navigation -->
    <?php get_template_part('/template-parts/navigation'); ?>
</header>