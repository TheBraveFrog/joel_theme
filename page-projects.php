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
                $responsibilities = get_field('responsibilities');
                $takeaways = get_field('takeaways');
                $link = get_field('link');
                $link_url = isset($link['url']) ? $link['url'] : '';
                $link_title = isset($link['title']) ? $link['title'] : '';
                $link_target = isset($link['target']) ? $link['target'] : '_self'; 
                $project_images = get_field('images');

                $processed_images = array();

                if ($project_images) {
                    foreach ($project_images as $image_id) {
                        if (!in_array($image_id, $processed_images)) {
                            $image_alt = get_post_meta($image_id, '_wp_attachment_image_alt', true);
                            $image_src = wp_get_attachment_image_src($image_id, 'full');
                            if ($image_src) {
                                echo '<img src="' . esc_url($image_src[0]) . '" alt="' . esc_attr($image_alt) . '"></a>';
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

                if ($responsibilities) {
                    echo '<h3>Responsibilities:</h3>'; 
                    echo '<ul>'; 
                    $responsibility_paragraphs = explode("\n", $responsibilities);
                    foreach ($responsibility_paragraphs as $responsibility_paragraph) {
                        echo '<li>' . esc_html($responsibility_paragraph) . '</li>';
                    }
                    echo '</ul>'; 
                }

                if ($takeaways) {
                echo '<h3>Takeaways</h3>';
                echo '<p>' . esc_html($takeaways) . '</p>';
                };

                if ($link) {
                    echo '<a href="' . esc_url($link_url) . '" target="' . esc_attr($link_target) . '">' . esc_html($link_title) . '</a>';
                    };


                endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </div>

</div>

<?php get_footer(); ?>
