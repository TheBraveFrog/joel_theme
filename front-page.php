<?php
/**
 * Joel Portfolio Front Page
 *
 *
 * @package joel_portfolio
 */

 get_header();

    $image_one = get_field( "site_images", 51);
    $image_one_size = $image_one['sizes']['large'];
    $image_one_alt = $image_one['alt'];
    $image_two = get_field( "site_images", 52);
    $image_two_size = $image_two['sizes']['large'];
    $image_two_alt = $image_two['alt'];
    $image_three = get_field( "site_images", 53);
    $image_three_size = $image_three['sizes']['large'];
    $image_three_alt = $image_three['alt'];
    $banner_one = get_field( "site_images", 79);
    $banner_one_size = $banner_one['sizes']['large'];
    $banner_one_alt = $banner_one['alt'];
?>

<section class="home-banner">
    <div>
        <h1>I'm Joel Tobias. A Business Analyst in Edmonton</h1>
        <p>I’m probably the most passionate BA you will ever get to work with. If you have a great project that needs some amazing skills, I’m your guy.</p>
    </div>
    <img class="site-image" src="<?php echo $image_one_size ?>" alt="<?php echo $image_one_alt ?>">
</section>
<section class="objectives">
    <div>
        <h2>Career Objectives - Values</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, eos praesentium. Culpa beatae est sunt cupiditate, aspernatur quasi quaerat quas vitae, cumque totam unde facilis eum laborum, quibusdam accusantium iste. Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores error magnam ab doloribus minima, adipisci exercitationem, harum cupiditate natus modi amet atque? Quos, soluta debitis. Perferendis possimus at inventore incidunt.</p>
    </div>
</section>
<section class="story">
    <div>
        <h2>Blue to White Collar</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, eos praesentium. Culpa beatae est sunt cupiditate, aspernatur quasi quaerat quas vitae, cumque totam unde facilis eum laborum, quibusdam accusantium iste. Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores error magnam ab doloribus minima, adipisci exercitationem, harum cupiditate natus modi amet atque? Quos, soluta debitis. Perferendis possimus at inventore incidunt.</p>
    </div>
    <img class="site-image" src="<?php echo $image_two_size ?>" alt="<?php echo $image_two_alt ?>">
</section>
<section class="interests">
    <div>
        <h2>Interests</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, eos praesentium. Culpa beatae est sunt cupiditate, aspernatur quasi quaerat quas vitae, cumque totam unde facilis eum laborum, quibusdam accusantium iste. Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores error magnam ab doloribus minima, adipisci exercitationem, harum cupiditate natus modi amet atque? Quos, soluta debitis. Perferendis possimus at inventore incidunt.</p>
    </div>
    <img class="site-image" src="<?php echo $image_three_size ?>" alt="<?php echo $image_three_alt ?>">
</section>


<?php 
    get_footer();
?>

