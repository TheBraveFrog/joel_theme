<?php
/**
 * Joel Portfolio Category View
 *
 * @package joel_portfolio
 */

get_header();
?>

<div class="container">

    <h2><?php single_cat_title(); ?></h2>

    <?php
    $args = array(
        'post_type' => 'post',
        'cat' => get_query_var('cat'), // Get the current category ID
        'posts_per_page' => 10,
        'paged' => (get_query_var('paged')) ? get_query_var('paged') : 1
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
            ?>
            <article>
                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                <div class="post-meta">
                    <p>Published on <?php the_date(); ?></p>
                </div>
                <div class="post-content">
                    <?php the_excerpt(); ?>
                </div>
                <div class="read-more">
                    <a href="<?php the_permalink(); ?>">Read more</a>
                </div>
            </article>
            <?php
        endwhile;

        // Pagination
        the_posts_pagination(array(
            'prev_text' => __('Previous', 'joel_portfolio'),
            'next_text' => __('Next', 'joel_portfolio'),
        ));
    else :
        // If no posts are found, output a message
        echo 'No posts found.';
    endif;

    // Restore original post data
    wp_reset_postdata();
    ?>

</div>

<?php get_footer(); ?>
