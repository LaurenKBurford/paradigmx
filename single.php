<?php get_template_part( 'side-section' ); ?>
    <div id="main-section" class="grid-item">
        <?php
        if ( have_posts() ) {
            while ( have_posts() ) {
                the_post(); 
        ?>
                <a href="<?php the_permalink(); ?>"><?php the_title( '<h2>', '</h2>' ); ?></a>
                <?php the_content(); ?>
                <div id="the-date"><p><?php echo get_the_date(); ?></p></div>
                <div id="categories"><p><?php the_category( ' ' ); ?></p></div>
                <?php
                if ( comments_open() || get_comments_number() ) {
                    comments_template();
                } 
            }
            ?>
            <br>
            <div id="next-prev-links">
                <?php next_posts_link( '&larr; Older' ); ?>
                <div id="float-right"><?php previous_posts_link( 'Newer &rarr;' ); ?></div>
            <?php 
            previous_posts_link( 'Newer &rarr;' );
        }
        ?>
            </div><br><br>
    </div>
</div>
<?php get_footer();