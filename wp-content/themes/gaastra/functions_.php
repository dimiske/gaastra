<?php
/** * Gaastra functions and definitions * * @package Gaastra * @since Gaastra 1.0 */ 

function gaastra_setup() {
	register_nav_menus(array('primary' => __( 'Primary Menu', 'gaastra' )));
	add_theme_support('post-thumbnails');
	set_post_thumbnail_size(672, 372, true);
    add_image_size( 'gaastra-full-width', 1900, 740, true );
}
add_action('after_setup_theme', 'gaastra_setup');
	
function special_nav_class($classes, $item){
	$classes[] = "nav-item";
	return $classes;
}
add_filter('nav_menu_css_class' , 'special_nav_class' , 10 , 2);
	
function gaastra_font_url() {
    $font_url = '';
    /*
     * Translators: If there are characters in your language that are not supported
     * by Lato, translate this to 'off'. Do not translate into your own language.
     */
    if ( 'off' !== _x( 'on', 'Lato font: on or off', 'gaastra' ) ) {
		$query_args = array(
			'family' => urlencode( 'Roboto:300,400,500,700|Lora:400,400italic,700' ),
			'subset' => urlencode( 'latin,latin-ext' ),
		);
	  

		$font_url = add_query_arg( $query_args, 'https://fonts.googleapis.com/css' );

	}

    return $font_url;
}

function gaastra_scripts() {
    // Add fonts, used in the main stylesheet.
    wp_enqueue_style( 'gaastra-roboto', gaastra_font_url(), array(), null );
    // Add Genericons font, used in the main stylesheet.
    //wp_enqueue_style( 'genericons', get_template_directory_uri() . '/genericons/genericons.css', array(), '3.0.3' );
    // Load our main stylesheet.
    wp_enqueue_style( 'gaastra-style', get_stylesheet_uri() );
}

add_action( 'wp_enqueue_scripts', 'gaastra_scripts' );