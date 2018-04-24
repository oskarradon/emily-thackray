<?php
/**
 * emily-thackray functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package emily-thackray
 */

if ( ! function_exists( 'emily_thackray_setup' ) ) :
	function emily_thackray_setup() {
		add_theme_support( 'post-thumbnails' );
	}
endif;
add_action( 'after_setup_theme', 'emily_thackray_setup' );

function emily_thackray_scripts() {
	wp_enqueue_style( 'emily-thackray-style', get_stylesheet_uri() );

	wp_deregister_script('jquery');
	wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', false, '1.8.1');
	wp_enqueue_script('jquery');

	wp_register_script('gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.4/TweenMax.min.js', false, '1.8.1');
	wp_enqueue_script('gsap');

	wp_register_script('myscript', get_template_directory_uri() .'/script.js', array ('jquery'), false, false);
	wp_enqueue_script('myscript');
}
add_action( 'wp_enqueue_scripts', 'emily_thackray_scripts' );
