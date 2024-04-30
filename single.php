<?php
/**
 * Joel Single Blog Page
 *
 * @package joel_portfolio
 */

get_header();
?>

<div class="container">

    <article>
        <h2><?php the_title(); ?></h2>
        <?php if (has_post_thumbnail()) : ?>
                <div class="post-thumbnail">
                    <?php the_post_thumbnail('large'); ?>
                </div>
                <?php endif; ?>
        <div class="post-meta">
            <p>Published on <?php the_date(); ?></p>
        </div>
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
            <?php the_content(); ?>
        </div>
    </article>

</div>

<?php get_footer(); ?>
