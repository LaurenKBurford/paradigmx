<?php

function px_customize_register( $wp_customize ) {
    px_colour_bars_customization( $wp_customize );
    px_font_colours_customization( $wp_customize );
}