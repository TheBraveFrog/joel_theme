<?php
/**
 * joel portfolio front page
 *
 *
 * @package joel_portfolio
 */

    $image_one = get_field( "site_image", 51);
    $image_one_size = $image_one['sizes']['large'];
    $image_one_alt = $image_one['alt'];
    $image_two = get_field( "site_image", 52);
    $image_two_size = $image_two['sizes']['large'];
    $image_two_alt = $image_two['alt'];
    $image_three = get_field( "site_image", 53);
    $image_three_size = $image_three['sizes']['large'];
    $image_three_alt = $image_three['alt'];
?>

<section>
    <h1>I'm Joel Tobias. A Business Analyst in Edmonton</h1>
    <img class="site-image" src="<?php echo $image_one_size ?>" alt="<?php echo $image_one_alt ?>">
</section>
<section>
    <h2>Career Objectives/ Values</h2>
</section>
<section>
    <h2>Blue to White Collar</h2>
    <img class="site-image" src="<?php echo $image_two_size ?>" alt="<?php echo $image_two_alt ?>">
</section>
<section>
    <h2>Interests</h2>
    <img class="site-image" src="<?php echo $image_three_size ?>" alt="<?php echo $image_three_alt ?>">
</section>

<?php
/**
 */

 get_header();

dynamic_sidebar( 'new-sidebar' );

?>