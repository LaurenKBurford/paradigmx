<?php 

function px_setup_theme() {
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'title-tag' );
    add_theme_support( 'custom-logo', array(
        'height'      => 450,
        'width'       => 700,
        ) 
    );
    register_nav_menu( 'primary', __( 'Primary Menu', 'paradigmx' ) );
}