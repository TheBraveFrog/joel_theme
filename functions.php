<?php
/**
 * Joel Portfolio Functions and Definitions
 *
 *
 * @package joel_portfolio
 */

/**
 */

//  customize menus
function register_my_menus() {
    register_nav_menus(
      array(
        'header' => __( 'Header Menu' ),
		'footer' => __( 'Footer' ),
       )
     );
   }
   add_action( 'init', 'register_my_menus' );



//    blog images
add_theme_support('post-thumbnails');


// custom logo
function pacesetter_custom_logo_setup() {
	$defaults = array(
		'height'               => 100,
		'width'                => 400,
		'flex-height'          => true,
		'flex-width'           => true,
		'header-text'          => array( 'site-title', 'site-description' ),
		'unlink-homepage-logo' => true, 
	);
	add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'pacesetter_custom_logo_setup' );

add_theme_support( 'custom-logo' );