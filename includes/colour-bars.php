<?php

function custom_bar_colours() { 

    if ( get_theme_mod( 'px_colour_one' ) ) { 
    ?>
        <style>
            .pink-line {
                background-color: <?php echo get_theme_mod( 'px_colour_one', '#fa7588' ) ?>;
            }
        </style>    
    <?php
    } 

    if ( get_theme_mod( 'px_colour_two' ) ) { 
    ?>
        <style>
            .brown-line {
                background-color: <?php echo get_theme_mod( 'px_colour_two', '#5a4634' ) ?>;
            }
        </style>    
    <?php
    } 

    if ( get_theme_mod( 'px_colour_three' ) ) { 
    ?>
        <style>
            .yellow-line {
                background-color: <?php echo get_theme_mod( 'px_colour_three', '#fed38a' ) ?>;
            }
        </style>    
    <?php
    } 

    if ( get_theme_mod( 'px_colour_four' ) ) { 
    ?>
        <style>
            .green-line {
                background-color: <?php echo get_theme_mod( 'px_colour_four', '#c6db72' ) ?>;
            }
        </style>    
    <?php
    } 

    if ( get_theme_mod( 'px_colour_five' ) ) { 
    ?>
        <style>
            .blue-line {
                background-color: <?php echo get_theme_mod( 'px_colour_five', '#54bd9d' ) ?>;
            }
        </style>    
    <?php
    } 

}