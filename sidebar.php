<div id="primary-menu">
        <?php 
            if( has_nav_menu( 'primary' ) ) {
                wp_nav_menu([
                    'theme_location'            =>  'primary',
                    'container'                 =>  false,
                    'fallback_cb'               =>  false
                ]);
            }
        ?>
    </div>
<?php
if ( is_active_sidebar( 'px_sidebar' ) ) {
    dynamic_sidebar( 'px_sidebar' );
}