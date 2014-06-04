<?php
/*
Template Name: home
*/
?>


<?php get_header(); ?>

<div class="content">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="nouveautes block_content">
                <h3><?php the_field('title_nouveautes'); ?></h3>
            </div>
            <div class="dvd block_content">
                <h3><?php the_field('title_dvd'); ?></h3>
            </div>
            <div class="blu_ray block_content">
                <h3><?php the_field('title_blu_ray'); ?></h3>
            </div>
            <div class="figurines block_content">
                <h3><?php the_field('title_figurines'); ?></h3>
            </div>
        </div>
    </div>
</div>

<img src="<?php the_field('logo'); ?>" alt=""/>

<?php get_footer(); ?>