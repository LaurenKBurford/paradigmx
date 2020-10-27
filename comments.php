<?php 

if ( post_password_required() ) {
    return;
} ?>

<div id="comment-section">
    <?php 
    if ( have_comments() ) {
        foreach ( $comments as $comment ) { 
    ?>
            <div id="comment-avatar"><?php echo get_avatar( $comment, 60, '', '', [] ); ?></div>
            <div id="comment-author"><?php comment_author(); ?></div> <br> 
            <div id="comment-date"><?php comment_date(); ?></div>
            <div id="comment-text"><?php comment_text(); ?></div>
    <?php
        }
        the_comments_pagination();
    } 
    ?>
</div>

<?php
comment_form([
    'class_submit'          =>  'comment-submit',
    'label_submit'          =>  __( 'Submit Comment', 'paradigmx' ),
    'title_reply'           =>  __( 'Leave a commment', 'paradigmx' ),
    'comment_notes_before'  =>  __( 'Your email address will not be published.', 'paradigmx' )
]);




