<?php

// include
require_once('includes/theme-options.php');

//constants
define( 'TEMPPATH', get_bloginfo('stylesheet_directory'));
define( 'IMAGES', TEMPPATH. "/images"); 

// menu support
if ( function_exists( 'register_nav_menus' ) ) {
    register_nav_menus(
        array(
          'main' => 'Main Nav'
        )
    );
}

function darkstripes_menu_args( $args ) {
    $args['show_home'] = true;
    return $args;
}
add_filter( 'wp_page_menu_args', 'darkstripes_menu_args' );

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

//comments
function darkstripes_commenter_link() {
    $commenter = get_comment_author_link();
    if ( ereg( '<a[^>]* class=[^>]+>', $commenter ) ) {
        $commenter = preg_replace( '/(<a[^>]* class=[\'"]?)/', '\\1url ' , $commenter );
    } else {
        $commenter = preg_replace( '/(<a )/', '\\1class="url "' , $commenter );
    }
    $avatar_email = get_comment_author_email();
    $avatar = str_replace( "class='avatar", "class='photo avatar", get_avatar( $avatar_email, 80 ) );
    echo $avatar . ' <span class="fn n">' . $commenter . '</span>';
}

function darkstripes_comments($comment, $args, $depth) {
    $GLOBALS['comment'] = $comment;
    $GLOBALS['comment_depth'] = $depth;
?>
    <li id="comment-<?php comment_ID() ?>" <?php comment_class() ?>>
        <div class="comment-author vcard"><?php darkstripes_commenter_link() ?></div>
        <div class="comment-meta">
            <?php 
                printf(
                    __('%1$s at %2$s <span class="meta-sep"> </span>'),
                    get_comment_date(),
                    get_comment_time() 
                );
                edit_comment_link(__('Edit'), ' <span class="meta-sep"> | </span> <span class="edit-link">', '</span>'); 
            ?>
        </div>
        
        <?php if ($comment->comment_approved == '0') _e("\t\t\t\t\t<span class='unapproved'>Your comment is awaiting moderation.</span>\n") ?>

        <div class="comment-content">
            <?php comment_text() ?>
        </div>
        
        <?php
            if($args['type'] == 'all' || get_comment_type() == 'comment') :
                comment_reply_link(
                    array_merge($args, array(
                            'reply_text' => __('Reply','blankslate'),
                            'login_text' => __('Log in to reply.','blankslate'),
                            'depth' => $depth,
                            'before' => '<div class="comment-reply-link">',
                            'after' => '</div>'
                        )
                    )
                );
            endif;
        ?>

<?php } ?>