<?php

/**
 * Enqueue styles and scripts
 */

function starter_theme_scripts() {
	
	// main stylesheet
	wp_enqueue_style( 
		'main', 
		get_template_directory_uri() . '/css/main.css',
		array(),
		'1.1.7'
	);

	// mail chimp stylesheet
	wp_enqueue_style( 
		'main', 
		get_template_directory_uri() . '//cdn-images.mailchimp.com/embedcode/slim-081711.css',
		array(),
		'1.0'
	);

	
	// modernizr
	wp_enqueue_script(
		'modernizr', 
		get_template_directory_uri() . '/js/vendor/modernizr-2.6.2.min.js',
		array(), // dependencies
		false,   // version
		false    // in footer
	);

	// special stuff for jquery
	wp_deregister_script('jquery');
	wp_register_script(
		'jquery',
		get_template_directory_uri() . '/js/vendor/jquery-1.10.1.min.js',
        array(),
		false,
		true
	);
	wp_enqueue_script( 'jquery' );

	// plugins
	wp_enqueue_script(
		'plugins',
		get_template_directory_uri() . '/js/plugins.js',
		array(
				'jquery'
			),
		'1.0',
		true

	);

	// main javascript
	wp_enqueue_script(
		'main',
		get_template_directory_uri() . '/js/main.js',
		array(
				'jquery',
				'plugins'
			),
		'1.0',
		true

	);
}

if ( !is_admin() ) add_action( 'wp_enqueue_scripts', 'starter_theme_scripts' );

/**
 * Add support for menus
 */

function register_starter_theme_menus() {
	register_nav_menus(
		array(
			'header-menu' => __( 'Header Menu' ),
			'extra-menu' => __( 'Extra Menu' )
		)
	);
}
add_action( 'init', 'register_starter_theme_menus' );


/**
 * Add featured images support
 */

if ( function_exists( 'add_theme_support' ) ) {
	add_theme_support( 'post-thumbnails' );
}

/**
 * Add image size
 */

if ( function_exists( 'add_image_size' ) ) { 
	add_image_size( 'full-column', 631, 9999 );
}


/**
 * Returns a dashed version of phrase
 */

function generate_handle ($str) 
{
	$str = preg_replace('/[^a-z0-9]+/i','-',
	   iconv('UTF-8','ASCII//TRANSLIT',$str));
	return strtolower( trim($str,'-') );
}

?>
