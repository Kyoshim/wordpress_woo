<?php get_header(); ?>
<div class="main">
    <?php get_template_part('loop'); ?>
    <?php previous_posts_link(); ?>
    <?php next_posts_link(); ?>
    <p><?php the_field('Header logo'); ?></p>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
