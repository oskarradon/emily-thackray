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
		$defaults = array(
			'default-color'          => '',
			'default-image'          => '',
			'default-repeat'         => 'no-repeat',
			'default-position-x'     => 'left',
      'default-position-y'     => 'top',
      'default-size'           => 'cover',
			'default-attachment'     => 'scroll',
			'wp-head-callback'       => 'bg_body',
			'admin-head-callback'    => '',
			'admin-preview-callback' => ''
		);
		add_theme_support( 'custom-background', $defaults );
		function bg_body() {
			if( is_front_page() ) {
				_custom_background_cb();
			}
		}
		function title_format($content) {
			return '%s';
		}
		add_filter('private_title_format', 'title_format');
		add_filter('protected_title_format', 'title_format');
	}
endif;

add_action( 'after_setup_theme', 'emily_thackray_setup' );

function emily_thackray_scripts() {
	wp_enqueue_style( 'emily-thackray-style', get_stylesheet_uri() );


	wp_register_script('gsap', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.4/TweenMax.min.js');
	wp_enqueue_script('gsap');

	wp_register_script('myscript', get_template_directory_uri() .'/script.js', array ('jquery'), false, false);
	wp_enqueue_script('myscript');
}

add_action( 'wp_enqueue_scripts', 'emily_thackray_scripts' );
