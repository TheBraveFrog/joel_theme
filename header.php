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
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
    <title>Joel Tobias |<?php $title ?> </title>
    <meta name="description" content="About Joel Tobias" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Hind:wght@300;400;500;600;700&family=Kanit:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <div class="logo">
			<?php if (function_exists('the_custom_logo')) {
				the_custom_logo();
			} ?>
		</div>
        <div>
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
        </div>
    </header>
    
