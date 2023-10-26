<?php

function la_cache_theme_support() {
	// Agrega dinámicamente el title tag sopport
	add_theme_support('title-tag');
}

add_action('after_setup_theme', 'la_cache_theme_support');


function la_cache_enqueue_styles() {

	$version = wp_get_theme()->get( 'Version' );
	wp_enqueue_style('la_cache_style', get_template_directory_uri() . '/style.css', array(), $version, 'all');
	wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css', array(), '5.0.2', 'all');
	
}

add_action( 'wp_enqueue_scripts', 'la_cache_enqueue_styles');

function la_cache_register_scripts() {

	wp_enqueue_script('jquery');
	wp_enqueue_script('bootstrap_popper', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js', array(), '2.11.8', true);
	wp_enqueue_script('bootstrap_js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js', array('jquery'), '5.3.2', true);
	wp_enqueue_script('bootstrap_js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js', array('jquery'), '5.3.2', true);

	// https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js
	// https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js
}

add_action( 'wp_enqueue_scripts', 'la_cache_register_scripts');

add_theme_support('post-thumbnails'); // agregar la imagen destacada en dashboard de wp para crear paginas

?>