<?php
/**
 * Joel Portfolio Blog Page
 *
 * @package joel_portfolio
 */
$title = "Blog";
get_header();
?>

<div class="container">

    <?php
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 10,
        'paged' => $paged
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
            ?>
            <article>
                <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <?php if (has_post_thumbnail()) : ?>
                <div class="post-thumbnail">
                    <?php the_post_thumbnail('small'); ?>
                </div>
                <?php endif; ?>
                <?php
                    $categories = get_the_category();
                    if ($categories) {
                        echo '<p>Categories: ';
                        foreach ($categories as $category) {
                            echo '<a href="' . esc_url(get_category_link($category->term_id)) . '">' . esc_html($category->name) . '</a>, ';
                        }
                        echo '</p>';
                    }
                ?>
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
        echo '<div class="pagination">';
        echo paginate_links(array(
            'total' => $query->max_num_pages,
            'current' => $paged,
            'prev_text' => __('« Previous'),
            'next_text' => __('Next »'),
        ));
        echo '</div>';
    else :
        // If no posts are found, output a message
        echo 'No posts found.';
    endif;
    ?>

</div>

<?php get_footer(); ?>
