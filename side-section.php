<?php get_header(); ?>
<div class="grid-container">
    <section id="side-section" class="grid-item">
    <?php 
    if ( has_custom_logo() ) { 
    ?>
        <section alt="website logo"><?php the_custom_logo(); ?></section>
    <?php
    }
    ?>
    <h1 id="site-title"><?php echo get_bloginfo( 'name' ); ?></h1>
    <h2 id="site-description"><?php echo get_bloginfo( 'description' ) ?></h2>
    <?php get_sidebar(); ?>
    </section>
    <section id="lines" class="grid-item">
        <div class="pink-line line"></div>
        <div class="brown-line line"></div>
        <div class="yellow-line line"></div>
        <div class="green-line line"></div>
        <div class="blue-line line"></div>
    </section>