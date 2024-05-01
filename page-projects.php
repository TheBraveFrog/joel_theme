<?php
/**
 * Joel Portfolio Projects Page
 *
 * @package joel_portfolio
 */

get_header();
?>

<div class="projects-container">

    <div class="project-img">
        <?php
        $args = array(
            'post_type' => 'project',
        );

        $query = new WP_Query($args);

        if ($query->have_posts()):
            while ($query->have_posts()):
                $query->the_post();
                $project_title = get_field('title');
                $project_description = get_field('description');
                $project_images = get_field('images');

                $processed_images = array();

                if ($project_images) {
                    foreach ($project_images as $image_id) {
                        if (!in_array($image_id, $processed_images)) {
                            $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
                            $image_src = wp_get_attachment_image_src($image_id, 'full');
                            if ($image_src) {
                                echo '<img src="' . esc_url($image_src[0]) . '" alt="' . esc_attr($image_alt) . '">';
                            }

                            $processed_images[] = $image_id;
                        }
                    }
                }
                ?>
            </div>
            <div class="project-content">
                <?php
                if ($project_title) {
                    echo '<h2>' . esc_html($project_title) . '</h2>';
                }

                if ($project_description) {
                    echo '<p>' . esc_html($project_description) . '</p>';
                }

                    endwhile;
                    wp_reset_postdata();
                endif;
                ?>
            </div>

</div>

<?php get_footer(); ?>