<?php

function css_resources(){
    wp_enqueue_style("style", get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'css_resources');


// Navigation Menus
register_nav_menus(array(
    
    'header' => __( "Header Menu"),
    'footer' => __( "Footer Menu"),
    
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








?>

