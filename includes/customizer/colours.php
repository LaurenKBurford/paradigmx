<?php 

function px_colour_bars_customization( $wp_customize ){
    $wp_customize->add_setting( 'px_colour_one', [
        'default'           => '#fa7588',
        'sanitize_callback' => 'sanitize_hex_color',
    ] );

    $wp_customize->add_setting( 'px_colour_two', [
        'default'           => '#5a4634',
        'sanitize_callback' => 'sanitize_hex_color',
    ] );

    $wp_customize->add_setting( 'px_colour_three', [
        'default'           => '#fed38a',
        'sanitize_callback' => 'sanitize_hex_color',
    ] );

    $wp_customize->add_setting( 'px_colour_four', [
        'default'           => '#c6db72',
        'sanitize_callback' => 'sanitize_hex_color',
    ] );

    $wp_customize->add_setting( 'px_colour_five', [
        'default'           => '#54bd9d',
        'sanitize_callback' => 'sanitize_hex_color',
    ] );

    $wp_customize->add_section( 'px_colour_section', [
        'title'     =>  __( 'Paradigm X Colour Bar Settings', 'paradigmx' ),
        'priority'  =>  30
    ] );

    $wp_customize->add_control(new WP_Customize_Color_Control( 
        $wp_customize, 
        'px_colour_one_input', 
        array(
            'label'      => __( 'Color Bar One', 'paradigmx' ),
            'section'    => 'px_colour_section',
            'settings'   => 'px_colour_one',
        ) ) 
    );

    $wp_customize->add_control(new WP_Customize_Color_Control( 
        $wp_customize, 
        'px_colour_two_input', 
        array(
            'label'      => __( 'Color Bar Two', 'paradigmx' ),
            'section'    => 'px_colour_section',
            'settings'   => 'px_colour_two',
        ) ) 
    );

    $wp_customize->add_control(new WP_Customize_Color_Control( 
        $wp_customize, 
        'px_colour_three_input', 
        array(
            'label'      => __( 'Color Bar Three', 'paradigmx' ),
            'section'    => 'px_colour_section',
            'settings'   => 'px_colour_three',
        ) ) 
    );

    $wp_customize->add_control(new WP_Customize_Color_Control( 
        $wp_customize, 
        'px_colour_four_input', 
        array(
            'label'      => __( 'Color Bar Four', 'paradigmx' ),
            'section'    => 'px_colour_section',
            'settings'   => 'px_colour_four',
        ) ) 
    );

    $wp_customize->add_control(new WP_Customize_Color_Control( 
        $wp_customize, 
        'px_colour_five_input', 
        array(
            'label'      => __( 'Color Bar Five', 'paradigmx' ),
            'section'    => 'px_colour_section',
            'settings'   => 'px_colour_five',
        ) ) 
    );
}