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

