<?php
/**
 * Title: Cover height 100vh, header, subheader and button
 * Slug: ck/hero1
 * Categories: hero
 */
$cover_url = plugins_url('../../media/bg/Hai_Van_Pass_ocean_view.jpeg', __FILE__);
?>
<!-- wp:cover {"url":"<?= $cover_url ?>","id":17,"align":"full","className":"pmk-cover"} -->
<div class="wp-block-cover alignfull has-background-dim pmk-cover" style="background-image:url(<?= $image ?>)">
    <div class="wp-block-cover__inner-container">
        <!-- wp:heading {"align":"center"} -->
        <h2 class="has-text-align-center">Media Kit</h2><!-- /wp:heading -->
        <!-- wp:paragraph {"align":"center"} -->
        <p class="has-text-align-center">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dui<br>tortor,
            porttitor ut enim non, iaculis sagittis dolor.</p><!-- /wp:paragraph -->
        <!-- wp:buttons {"align":"center"} -->
        <div class="wp-block-buttons aligncenter">
            <!-- wp:button {"className":"pmk-button is-style-fill"} -->
            <div class="wp-block-button pmk-button is-style-fill"><a class="wp-block-button__link">CONTACT US</a></div>
            <!-- /wp:button -->
        </div><!-- /wp:buttons -->
    </div>
</div><!-- /wp:cover -->