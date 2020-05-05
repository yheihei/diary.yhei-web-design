<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_parent_theme_file_uri() . '/style.css' );
    // Theme stylesheet.
	wp_enqueue_style( 'twentyseventeen-style', get_stylesheet_uri(), null, filemtime( get_stylesheet_directory() . '/style.css'), null );
}

