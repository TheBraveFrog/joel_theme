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
    // Define the query arguments
    $args = array(
        'post_type' => 'project', // Your custom post type
        'posts_per_page' => -1, // -1 to display all posts, you can adjust this as needed
    );

    // Instantiate a new WP_Query object
    $query = new WP_Query($args);

    // Check if there are posts
    if ($query->have_posts()) :
        // Start the loop
        while ($query->have_posts()) :
            $query->the_post();

            // Display ACF fields
            $project_title = get_field('title');
            $project_description = get_field('description');

            // Display project title
            if ($project_title) {
                echo '<h2>' . esc_html($project_title) . '</h2>';
            }

            // Display project description
            if ($project_description) {
                echo '<p>' . esc_html($project_description) . '</p>';
            }

            // Display the post content
            the_content();

        endwhile; // End of the loop.

        // Restore original post data
        wp_reset_postdata();

    else :
        // If no posts are found, display a message
        echo '<p>No projects found.</p>';

    endif; // End have_posts() check.
    ?>

</div>

<?php get_footer(); ?>
