<?php
/**
 * Joel Portfolio Blog Page
 *
 * @package joel_portfolio
 */
$title = "Blog";
get_header();
?>


<?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$args = array(
    'post_type' => 'post',
    'posts_per_page' => 5,
    'paged' => $paged
);

$query = new WP_Query($args);

if ($query->have_posts()):
    while ($query->have_posts()):
        $query->the_post();
        ?>
        <article class="blog-page">
            <div class="all-blog-info">
                <div>
                    <?php if (has_post_thumbnail()): ?>
                        <div class="post-thumbnail">
                            <?php the_post_thumbnail('medium'); ?>
                        </div>
                    <?php endif; ?>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
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
                </div>
                <div class="all-content">
                    <div class="content">
                        <div class="post-content">
                            <?php echo wp_trim_words(get_the_excerpt(), 40); ?>
                        </div>
                    </div>
                    <div class="read-more">
                        <a href="<?php the_permalink(); ?>">Read more</a>
                    </div>
                </div>
            </div>
        </article>
        <?php
    endwhile;

    // Pagination
    echo '<div class="pagination">';
    echo paginate_links(
        array(
            'total' => $query->max_num_pages,
            'current' => $paged,
            'prev_text' => __('« Previous'),
            'next_text' => __('Next »'),
        )
    );
    echo '</div>';
else:
    echo 'No posts found.';
endif;
?>

<?php get_footer(); ?>