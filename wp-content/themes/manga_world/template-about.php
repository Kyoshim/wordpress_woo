<?php
/*
Template Name: about-us
*/
?>

<?php get_header(); ?>

<div class="content">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
                <?php //ouverture d'une nouvelle boucle qui va chercher nos livres
                $members_loop = new WP_Query( 'post_type=member');
                if( $members_loop->have_posts() ):
                    while( $members_loop->have_posts() ): $members_loop->the_post();?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                            <?php the_post_thumbnail();?>
                            <?php the_title(); // Le titre du livre cette fois ?>
                            <?php the_content(); // le contenu du livre (champ wysiwyg principal) ?>
                            <?php edit_post_link(); // le boutons d'edition admin ?>
                        </article>
                    <?php endwhile;
                endif;
                wp_reset_postdata();
                ?>
        </div>
    </div>
</div>


<?php get_footer(); ?>