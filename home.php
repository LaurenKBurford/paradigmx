<?php get_template_part( 'side-section' ); ?>
    <div id="main-section" class="grid-item">
        <?php
        global $more;
        if ( have_posts() ) {
            while ( have_posts() ) {
                the_post(); 
                $more = 1;
        ?>
                <a href="<?php the_permalink(); ?>"><?php the_title( '<h2>', '</h2>' ); ?></a>
                <?php the_content(); ?>
                <div id="the-date"><p><?php echo get_the_date(); ?></p></div>
                <div id="categories"><p><?php the_category( ' ' ); ?></p></div>
                <div id="comments-number"><p><?php comments_number( ' ' ); ?></p></div>
            <?php
            }
            ?>
            <br>
            <div id="next-prev-links">
                <?php next_posts_link( '&larr; Older' ); ?>
                <div id="float-right"><?php previous_posts_link( 'Newer &rarr;' ); ?></div>
            </div><br><br>
        <?php
        }
        ?>
    </div>
</div>
<?php get_footer();