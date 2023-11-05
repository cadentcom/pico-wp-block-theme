<footer>
    <div>
        <h4>quick menu</h4>
        <?php get_template_part('/template-parts/footer-navigation');?>
    </div>
    <div>
        <h4>related posts</h4>
        <?php
        if (have_posts()) {
            while (have_posts()) {
                the_post();
                get_template_part('template-parts/post');
            }
        }
        ?>
    </div>
</footer>