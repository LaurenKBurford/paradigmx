<?php

function px_widgets() {
    register_sidebar([
        'name'          =>  __( 'Main Sidebar and Navigation', 'paradigmx' ),
        'id'            =>  'px_sidebar',
        'description'   =>  __( 'Fixed Sidebar for Paradigm X', 'paradigmx' ),
        'before_widget' =>  '<div id="%1$s" class="%2$s">',
        'after_widget'  =>  '</div>',
        'before_title'  =>  '<h3>',
        'after_title'   =>  '</h3>',
    ]);
}