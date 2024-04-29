<?php 
/**
 * Joel Portfolio Header
 *
 *
 * @package joel_portfolio
 */

/**
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header>
        <?php  wp_nav_menu( array( 'theme_location' => 'header' ) );
                wp_nav_menu(
                    array(
                    'menu' => 'primary',
                    // do not fall back to first non-empty menu
                    'theme_location' => '__no_such_location',
                    // do not fall back to wp_page_menu()
                    'fallback_cb' => false
                    )
                ); ?>
    </header>
    
