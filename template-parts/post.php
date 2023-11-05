<div>
    <!-- post title -->
    <h4>
        <a href="<?php the_permalink(); ?>">
            <?php the_title(); ?>
        </a>
    </h4>
    <!-- excerpt -->
    <?php
    if (has_excerpt()) {
        the_excerpt();
    } else {
        the_content();
    }
    ?>
</div>