<?php

// Theme location registration
add_action('after_setup_theme', 'register_theme_menus');
function register_theme_menus() {
	register_nav_menu( "primary", "Primary Navigation" );
}

// Widget support
add_action('widgets_init', 'register_theme_widgets');
function register_theme_widgets() {
	register_sidebar(array(
		'name' => 'Right Sidebar',
		'id' => 'right-sidebar',
	));
	
	for($i=1; $i<=4; $i++):
		register_sidebar(array(
			'name' => 'Footer ' . $i,
			'id' => 'footer-' . $i,
			'before_widget' => '<div class="footer-column">',
			'after_widget' => '</div>',
			'before_title' => '<h1>',
			'after_title' => '</h1>',
		));
	endfor;
}

// Load styles
add_action( 'wp_enqueue_scripts', 'ncstate_styles' );
function ncstate_styles() {
    wp_register_style( 'ncstate-bootstrap', '//cdn.ncsu.edu/brand-assets/bootstrap/css/bootstrap.css', array() , null);
    wp_enqueue_style( 'ncstate-bootstrap' );

    wp_register_style( 'theme-css', get_template_directory_uri() . '/style.css', array( 'ncstate-bootstrap' ), null);
    wp_enqueue_style( 'theme-css' );
}

// Load js
add_action( 'wp_enqueue_scripts', 'ncstate_scripts' );
function ncstate_scripts() {
    // Deregister the included library
    wp_deregister_script( 'jquery' );

    // Register jQuery again from Google's CDN
    wp_register_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js', array(), null, true );

    wp_register_script( 'ncstate-bootstrap', '//cdn.ncsu.edu/brand-assets/bootstrap/js/bootstrap.min.js', array( 'jquery' ), null, true );
    wp_enqueue_script( 'ncstate-bootstrap' );

    wp_register_script( 'ncstate-main-js', get_template_directory_uri() . '/js/main.js', array( 'jquery' ), null, true );
    wp_enqueue_script( 'ncstate-main-js' );
}

//Enabling support for Post Thumbnail
add_theme_support('post-thumbnails');
set_post_thumbnail_size( 150, 150, 'center', 'center' );