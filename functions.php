<?php

function la_cache_enqueue_styles() {
    
    wp_enqueue_style( 'style', get_stylesheet_directory_uri() . '/css/normalize.css');
    
    wp_enqueue_style ('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css');
    
    wp_enqueue_style( 'style', get_stylesheet_uri());
    
    wp_enqueue_script ('jquery');

    wp_enqueue_script ('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js', array( 'jquery' ), '5.3.2', true);
}

add_action( 'wp_enqueue_scripts', 'la_cache_enqueue_styles', 15 );

add_theme_support('post-thumbnails'); // agregar la imagen destacada en dashboard de wp para crear paginas

?>