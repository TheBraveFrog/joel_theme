<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 */

get_header();
?>
<?php while (have_posts()): ?>
    <?php the_post(); ?>
    <div class="container">
        <div class="row">
            <?php if (has_post_thumbnail()): ?>
            <div class="col-sm-4">
                <?php $featured_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'large'); ?>
                <img src="<?= $featured_image[0]; ?>" alt='' class="img-fluid" />
            </div>
            <?= '<div class="col-sm-8 '; ?>
            <?php else: ?>
            <?= '<div class="col-sm-12 '; ?>
            <?php endif; ?>
            <?= 'actual-content"> '; ?>
            <?php the_content(); ?>
            </div> <!-- end of either the col-8 or col-12 started in the if/else above -->
            </div> <!-- end of row -->
        </div>
<?php endwhile; ?>
<?php get_footer(); ?>
