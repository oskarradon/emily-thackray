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
}
add_action( 'wp_enqueue_scripts', 'emily_thackray_scripts' );
