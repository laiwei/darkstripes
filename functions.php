<?php

//constants
define( 'TEMPPATH', get_bloginfo('stylesheet_directory'));
define( 'IMAGES', TEMPPATH. "/images"); 

// menu support
add_theme_support( 'nav-menus' );
if ( function_exists( 'register_nav_menus' ) ) {
    register_nav_menus(
        array(
          'main' => 'Main Nav'
        )
    );
}
if (function_exists('wp_page_menu_args')) {
    function wp_page_menu_args() 
    {
        $args['show_home'] = true;
        return $args;
    }
}

// Read More
function add_p_tag($link){
    return '<a href=" '. get_permalink() .'#more-'.get_the_ID().'" class="more-link" rel="full-article">Read More →</a>';
}
add_filter('the_content_more_link', 'add_p_tag');

// sidebar
if ( function_exists( 'register_sidebar' ) ) {
    register_sidebar( array (
        'name' => __( 'Primary Sidebar', 'primary-sidebar' ),
        'id' => 'primary-widget-area',
        'before_widget' => '<section class="widget-container %2$s" >',
        'after_widget' => "</section>",
        'before_title' => '<h1 class="widget-title">',
        'after_title' => '</h1>',
    ) );
}

?>