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
       )
     );
   }
   add_action( 'init', 'register_my_menus' );

//    blog images
add_theme_support('post-thumbnails');
