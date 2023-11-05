<?php get_header();?>
<main>
    <!-- hero section -->
    <section>
        <?php if (has_post_thumbnail()) {the_post_thumbnail();}?>
    </section>
</main>
<?php get_footer();?>