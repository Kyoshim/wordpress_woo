<?php
/*
Template Name: home
*/
?>


<?php get_header(); ?>

<div class="content container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="nouveautes block_content">
                <h3><?php the_field('title_nouveautes'); ?></h3>
                <?php
                $args = array( 'post_type' => 'product', 'stock' => 1,'product_cat' => 'Mangas', 'posts_per_page' => 3, 'orderby'
                =>'date','order' => 'DESC');
                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
                <div class="produits">
                    <a id="id-<?php the_id(); ?>" class="portfolio-link" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                        <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium_shop' );
                        echo '<img src="'.$thumb['0'].'" class="img-responsive"/>';
                        ?>
                        <p><?php the_title(); ?></p>
                        <span><?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?></span>
                    </a>
                    <span class="price"><?php echo $product->get_price_html(); ?></span>
                </div>
                <?php endwhile; ?>
                <?php wp_reset_query(); ?>
            </div>
            <div class="dvd block_content">
                <h3><?php the_field('title_dvd'); ?></h3>
                <?php
                $args = array( 'post_type' => 'product', 'stock' => 1,'product_cat' => 'DVD', 'posts_per_page' => 3, 'orderby'
                =>'date','order' => 'DESC');
                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
                    <div class="produits">
                        <a id="id-<?php the_id(); ?>" class="portfolio-link" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                            <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium_shop' );
                            echo '<img src="'.$thumb['0'].'" class="img-responsive"/>';
                            ?>
                            <p><?php the_title(); ?></p>
                            <span><?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?></span>
                        </a>
                        <span class="price"><?php echo $product->get_price_html(); ?></span>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_query(); ?>
            </div>
            <div class="blu_ray block_content">
                <h3><?php the_field('title_blu_ray'); ?></h3>
                <?php
                $args = array( 'post_type' => 'product', 'stock' => 1,'product_cat' => 'Blu-ray', 'posts_per_page' => 3, 'orderby'
                =>'date','order' => 'DESC');
                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
                    <div class="produits">
                        <a id="id-<?php the_id(); ?>" class="portfolio-link" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                            <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium_shop' );
                            echo '<img src="'.$thumb['0'].'" class="img-responsive"/>';
                            ?>
                            <p><?php the_title(); ?></p>
                            <span><?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?></span>
                        </a>
                        <span class="price"><?php echo $product->get_price_html(); ?></span>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_query(); ?>
            </div>
            <div class="figurines block_content">
                <h3><?php the_field('title_figurines'); ?></h3>
                <?php
                $args = array( 'post_type' => 'product', 'stock' => 1,'product_cat' => 'Figurines', 'posts_per_page' => 3, 'orderby'
                =>'date','order' => 'DESC');
                $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
                    <div class="produits">
                        <a id="id-<?php the_id(); ?>" class="portfolio-link" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                            <?php $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium_shop' );
                            echo '<img src="'.$thumb['0'].'" class="img-responsive"/>';
                            ?>
                            <p><?php the_title(); ?></p>
                            <span><?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?></span>
                        </a>
                        <span class="price"><?php echo $product->get_price_html(); ?></span>
                    </div>
                <?php endwhile; ?>
                <?php wp_reset_query(); ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>