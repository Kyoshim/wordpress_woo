<?php
add_theme_support( 'post-thumbnails' );

add_action( 'init', 'codex_book_init' );

function codex_book_init() {
    $labels = array(
        'name'               => _x( 'Books', 'post type general name', 'your-plugin-textdomain' ),
        'singular_name'      => _x( 'Book', 'post type singular name', 'your-plugin-textdomain' ),
        'menu_name'          => _x( 'Books', 'admin menu', 'your-plugin-textdomain' ),
        'name_admin_bar'     => _x( 'Book', 'add new on admin bar', 'your-plugin-textdomain' ),
        'add_new'            => _x( 'Add New', 'book', 'your-plugin-textdomain' ),
        'add_new_item'       => __( 'Add New Book', 'your-plugin-textdomain' ),
        'new_item'           => __( 'New Book', 'your-plugin-textdomain' ),
        'edit_item'          => __( 'Edit Book', 'your-plugin-textdomain' ),
        'view_item'          => __( 'View Book', 'your-plugin-textdomain' ),
        'all_items'          => __( 'All Books', 'your-plugin-textdomain' ),
        'search_items'       => __( 'Search Books', 'your-plugin-textdomain' ),
        'parent_item_colon'  => __( 'Parent Books:', 'your-plugin-textdomain' ),
        'not_found'          => __( 'No books found.', 'your-plugin-textdomain' ),
        'not_found_in_trash' => __( 'No books found in Trash.', 'your-plugin-textdomain' ),
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'book' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => null,
        'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
    );

    register_post_type( 'book', $args );
}

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

