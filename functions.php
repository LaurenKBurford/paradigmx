<?php

// Include
include(get_theme_file_path( '/includes/enqueue.php' ));
include(get_theme_file_path( '/includes/font-colours.php' ));
include(get_theme_file_path( '/includes/colour-bars.php' ));
include(get_theme_file_path( '/includes/setup.php' ));
include(get_theme_file_path( '/includes/widgets.php' ));
include(get_theme_file_path( '/includes/unset-fields.php' ));
include(get_theme_file_path( '/includes/arrange-fields.php' ));
include(get_theme_file_path( '/includes/customizer/colours.php' ));
include(get_theme_file_path( '/includes/customizer/font-colours.php' ));
include(get_theme_file_path( '/includes/theme-customizer.php' ));

// Hooks
add_action( 'wp_enqueue_scripts', 'px_enqueue' );
add_action( 'wp_head', 'custom_bar_colours' );
add_action( 'wp_head', 'custom_font_colours' );
add_action( 'after_setup_theme', 'px_setup_theme' );
add_action( 'widgets_init', 'px_widgets' );
add_filter('comment_form_default_fields', 'unset_url_field' );
add_filter( 'comment_form_fields', 'px_move_comment_field_to_bottom' );
remove_action( 'set_comment_cookies', 'wp_set_comment_cookies' );
add_action( 'customize_register', 'px_customize_register' );


     
    

