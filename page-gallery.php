<?php
/**
 * Joel Portfolio Gallery Page
 *
 * @package joel_portfolio
 */

 $title = "Gallery";
get_header();
if ( function_exists( 'envira_gallery' ) ) { envira_gallery( 'gallery', 'slug' ); }
?>

<?php get_footer(); ?>
