<?php 

function px_font_colours_customization( $wp_customize ) {
    $wp_customize->add_setting( 'px_link_colour', [
        'default'           => '#284b59',
        'sanitize_callback' => 'sanitize_hex_color',
    ] );

    $wp_customize->add_setting( 'px_link_colour_hover', [
        'default'           => '#c4023c',
        'sanitize_callback' => 'sanitize_hex_color',
    ] );

    $wp_customize->add_setting( 'px_underline_colour', [
        'default'           => '#fca103',
        'sanitize_callback' => 'sanitize_hex_color',
    ] );


    $wp_customize->add_section( 'px_font_section', [
        'title'     =>  __( 'Paradigm X Font Colour Settings', 'paradigmx' ),
        'priority'  =>  31
    ] );

    $wp_customize->add_control(new WP_Customize_Color_Control( 
        $wp_customize, 
        'px_link_colour_input', 
        array(
            'label'      => __( 'Hyperlink Color', 'paradigmx' ),
            'section'    => 'px_font_section',
            'settings'   => 'px_link_colour',
        ) ) 
    );

    $wp_customize->add_control(new WP_Customize_Color_Control( 
        $wp_customize, 
        'px_link_colour_hover_input', 
        array(
            'label'      => __( 'Hyperlink Color On Hover', 'paradigmx' ),
            'section'    => 'px_font_section',
            'settings'   => 'px_link_colour_hover',
        ) ) 
    );

    $wp_customize->add_control(new WP_Customize_Color_Control( 
        $wp_customize, 
        'px_underline_colour_input', 
        array(
            'label'      => __( 'Hyperlink Underline Color', 'paradigmx' ),
            'section'    => 'px_font_section',
            'settings'   => 'px_underline_colour',
        ) ) 
    );
}