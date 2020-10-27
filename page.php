<?php get_template_part( 'side-section' ); ?>
    <div id="main-section" class="grid-item">
        <?php
        if ( have_posts() ) {
            while ( have_posts() ) {
                the_post();
                the_title( '<h2>', '</h2>' );
                the_content();
            }
        }
        ?>
    </div>
</div>
<?php get_footer();
