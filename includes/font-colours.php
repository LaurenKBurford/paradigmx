<?php

function custom_font_colours() { 
    if ( get_theme_mod( 'px_link_colour' ) ) { 
    ?>
        <style>
            a {
                color: <?php echo get_theme_mod( 'px_link_colour', '#284b59' ) ?>;
            }
        </style>    
    <?php
    }

    if ( get_theme_mod( 'px_link_colour_hover' ) ) { 
    ?>
        <style>
            a:hover {
                color: <?php echo get_theme_mod( 'px_link_colour_hover', ' #c4023c' ) ?>;
            }
        </style>    
    <?php
    } 
    
    if ( get_theme_mod( 'px_underline_colour' ) ) { 
        ?>
            <style>
                a {
                    text-decoration-color: <?php echo get_theme_mod( 'px_underline_colour', '#fca103' ) ?>;
                }
            </style>    
        <?php
        }

}