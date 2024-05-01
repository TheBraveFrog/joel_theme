<?php
/**
 * Joel Portfolio Category View
 *
 * @package joel_portfolio
 */

get_header();
?>

<div class="container">

    <h1><?php single_cat_title(); ?></h1>

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
                <?php if (has_post_thumbnail()) : ?>
                    <div class="post-thumbnail">
                        <?php the_post_thumbnail('medium'); ?>
                    </div>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <?php endif; ?>
                <div class="post-meta">
                    <p>Published on <?php the_date(); ?></p>
                </div>
                <div class="post-content">
                    <?php echo wp_trim_words(get_the_excerpt(), 20);?>
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
