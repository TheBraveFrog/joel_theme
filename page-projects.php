<?php
/**
 * Joel Portfolio Projects Page
 *
 * @package joel_portfolio
 */

get_header();
?>

<div class="container">

    <?php
    $args = array(
        'post_type' => 'project',
        'posts_per_page' => -1,
    );

    $query = new WP_Query($args);

    // Check if there are posts
    if ($query->have_posts()) :
        while ($query->have_posts()) :
            $query->the_post();

            $project_title = get_field('title');
            $project_description = get_field('description');

            if ($project_title) {
                echo '<h2>' . esc_html($project_title) . '</h2>';
            }

            if ($project_description) {
                echo '<p>' . esc_html($project_description) . '</p>';
            }

            the_content();

        endwhile; 

        wp_reset_postdata();

    else :
        echo '<p>No projects found.</p>';

    endif; 
    ?>

</div>

<?php get_footer(); ?>
