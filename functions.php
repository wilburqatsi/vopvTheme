<?php

function css_resources(){
    wp_enqueue_style("style", get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'css_resources');


// Navigation Menus
register_nav_menus(array(
    
    'header' => __( "Header Menu"),
    'footer' => __( "Footer Menu"),
	'WCID' => __( "WCID Menu")
    
));

function themename_custom_header_setup() {
    $args = array(
        'default-image'      => get_template_directory_uri() . 'img/default-image.jpg',
        'default-text-color' => '000',
        'width'              => 1000,
        'height'             => 250,
        'flex-width'         => true,
        'flex-height'        => true,
    );
    add_theme_support( 'custom-header', $args );
}

add_action( 'after_setup_theme', 'themename_custom_header_setup' );


// Widget Locations

function initWidgets(){
	
	register_sidebar( array(
		'name' => 'Footer Area 1',
		'id' => 'footer1',
		'before_widget' => '<div class="widget-item">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	));
	
	register_sidebar( array(
		'name' => 'Footer Area 2',
		'id' => 'footer2',
		'before_widget' => '<div class="widget-item">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	));
	
	register_sidebar( array(
		'name' => 'Footer Area 3',
		'id' => 'footer3',
		'before_widget' => '<div class="widget-item">',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="widget-title">',
		'after_title' => '</h2>',
	));
	
//	register_sidebar( array(
//		'name' => 'Footer Area 4',
//		'id' => 'footer4',
//		'before_widget' => '<div class="widget-item">',
//		'after_widget' => '</div>',
//		'before_title' => '<h2 class="widget-title">',
//		'after_title' => '</h2>',
//	));
//    
//    register_sidebar( array(
//		'name' => 'Footer Area 5',
//		'id' => 'footer5',
//		'before_widget' => '<div class="widget-item">',
//		'after_widget' => '</div>',
//		'before_title' => '<h2 class="widget-title">',
//		'after_title' => '</h2>',
//	));
    
}

add_action('widgets_init', 'initWidgets');



?>

