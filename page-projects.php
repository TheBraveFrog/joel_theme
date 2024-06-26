<?php
/**
 * Joel Portfolio Projects Page
 *
 * @package joel_portfolio
 */

get_header();
?>

<h1 class="page-title">Projects</h1>

<div class="projects-container">
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
                                echo '<div class="project-grid">';
                                if (!empty($link_url)) {
                                    echo '<a href="' . esc_url($link_url) . '" target="' . esc_attr($link_target) . '" class="project-grid">';
                                }
                                echo'<div class="project-img">';
                                echo '<img src="' . esc_url($image_src[0]) . '" alt="' . esc_attr($image_alt) . '"></a>';
                                echo "</div>";
                            }

                            $processed_images[] = $image_id;
                        }
                    }
                }
                ?>
                <?php
                if ($project_title) {
                    echo '<div class="project-content">';
                    echo '<h2>' . esc_html($project_title) . '</h2>';
                }

                if ($project_description) {
                    echo '<div>';
                    echo '<p>' . esc_html($project_description) . '</p>';
                    echo '</div>'; 
                }

                if ($responsibilities) {
                    echo '<div>';
                    echo '<h3>Responsibilities:</h3>'; 
                    echo '<ul>'; 
                    $responsibility_paragraphs = explode("\n", $responsibilities);
                    foreach ($responsibility_paragraphs as $responsibility_paragraph) {
                        echo '<li>' . esc_html($responsibility_paragraph) . '</li>';
                    }
                    echo '</ul>';
                    echo '</div>'; 
                }

                if ($takeaways) {
                echo '<div>';    
                echo '<h3>Takeaways</h3>';
                echo '<p>' . esc_html($takeaways) . '</p>';
                echo '</div>';
                };

                if ($link) {
                    echo '<div class="more-btn">';
                    echo '<h3>Learn More About '.esc_html($link_title).' Here:</h3>';
                    echo '<a href="' . esc_url($link_url) . '" target="' . esc_attr($link_target) . '">' . esc_html($link_title) . '</a>';
                    echo '</div>';
                };
                echo '</a>'; 
                echo '</div>';
                echo '</div>'; 
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
</div>

<?php get_footer(); ?>
