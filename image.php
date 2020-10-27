<?php get_template_part( 'side-section' ); ?>
    <div id="main-section" class="grid-item">
        <?php
        if ( have_posts() ) {
            while ( have_posts() ) {
                the_post();
                the_title( '<h2>', '</h2>' ); 
        ?>
                <a href=<?php echo $post->guid; ?>><h2 class="download-text">Direct Download</h2></a>
                <img src=<?php echo $post->guid; ?> />
                <div id="the-date"><p><?php echo get_the_date(); ?></p></div>
                <div id="categories"><p><?php the_category( ' ' ); ?></p></div>
                <?php
                if ( comments_open() || get_comments_number() ) {
                    comments_template();
                } 
            }
        }
        ?>
    </div>
</div>
<?php get_footer();