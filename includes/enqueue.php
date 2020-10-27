<?php

function px_enqueue() {
    $uri                    =   get_theme_file_uri();

    wp_register_style( 'px_google_fonts', 'https://fonts.googleapis.com/css2?family=Anton&family=Crimson+Text:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&family=Sen:wght@400;700;800&display=swap' );
    wp_register_style( 'px_homepage_style', $uri . '/css/styles.css' );
   
    wp_enqueue_style( 'px_google_fonts' );
    wp_enqueue_style( 'px_homepage_style' );

    wp_register_script( 'px_homepage_functions', $uri . '/js/homepage-functions.js', [], false, true );

    wp_enqueue_script( 'jquery' );
    wp_enqueue_script( 'px_homepage_functions' );


}