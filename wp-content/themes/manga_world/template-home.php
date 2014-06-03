<?php
/*
Template Name: home
*/


?>


<?php get_header(); ?>

<div class="nouveautes">
    <h3><?php the_field('title_nouveautes'); ?></h3>


</div>

<p><?php the_field('title', 12); ?></p>

<img src="<?php the_field('logo'); ?>" alt=""/>

<?php get_footer(); ?>