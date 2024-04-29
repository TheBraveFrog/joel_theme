<?php
/**
 * joel portfolio functions and definitions
 *
 *
 * @package joel_portfolio
 */

/**
 */

//  widgets
function register_my_menus() {
    register_nav_menus(
      array(
        'header' => __( 'Header Menu' ),
       )
     );
   }
   add_action( 'init', 'register_my_menus' );