<?php
add_theme_support( 'post-thumbnails' );

if ( function_exists('register_sidebar') )
    register_sidebar();

if ( function_exists('register_sidebar') )
    register_sidebar(array(
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h4 class="section">',
        'after_title' => '</h4>',
    ));

if ( ! function_exists( 'manga_post_nav' ) ) :
    /**
     * Display navigation to next/previous post when applicable.
     *
     * @since Manga World 1.0
     *
     * @return void
     */
    function manga_post_nav() {
        global $post;

        // Don't print empty markup if there's nowhere to navigate.
        $previous = ( is_attachment() ) ? get_post( $post->post_parent ) : get_adjacent_post( false, '', true );
        $next     = get_adjacent_post( false, '', false );

        if ( ! $next && ! $previous )
            return;
        ?>
        <nav class="navigation post-navigation" role="navigation">
            <h1 class="screen-reader-text"><?php _e( 'Post navigation', 'manga_world' ); ?></h1>
            <div class="nav-links">

                <?php previous_post_link( '%link', _x( '<span class="meta-nav">&larr;</span> %title', 'Previous post link', 'manga_world' ) ); ?>
                <?php next_post_link( '%link', _x( '%title <span class="meta-nav">&rarr;</span>', 'Next post link', 'manga_world' ) ); ?>

            </div><!-- .nav-links -->
        </nav><!-- .navigation -->
    <?php
    }
endif;

function manga_get_featured_posts() {
    /**
     * Filter the featured posts to return in Manga World.
     *
     * @since Manga World 1.0
     *
     * @param array|bool $posts Array of featured posts, otherwise false.
     */
    return apply_filters( 'manga_get_featured_posts', array() );
}

function manga_has_featured_posts() {
    return ! is_paged() && (bool) manga_get_featured_posts();
}

function add_menu(){
    add_theme_support('menus');

    register_nav_menu('header_nav', 'Menu header');
    register_nav_menu('ventes', 'Menu ventes');


}
add_action( 'after_setup_theme', 'add_menu' );

