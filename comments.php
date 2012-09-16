<div id="comments"  class="clearfix">

<?php if ( post_password_required() ) : ?>
    <div class="nopassword"><?php _e('This post is password protected. Enter the password to view any comments.'); ?></div></div>
<?php
    return;
    endif;
?>

    <?php if ( have_comments() ) : ?>

    <div id="comments-list" class="comments">
    
        <h3 id="comments-title">
            <?php
            printf( 
                _n( 'One Comment', '%1$s Comments', get_comments_number()),
                number_format_i18n( get_comments_number() )
            );
            ?>
        </h3>
    
        <p class="write-comment-link"><a href="#respond"><?php _e( 'Leave a reply &rarr;'); ?></a></p>
        
        <ol>
            <?php wp_list_comments( ); ?>
        </ol>

        <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // are there comments to navigate through ?>
        <nav id="comment-nav-below">
            <div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'yoko' ) ); ?></div>
            <div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'yoko' ) ); ?></div>
        </nav>
        <?php endif;?>

    </div>
        
    <?php else: ?>
    
        <?php if ( comments_open() ) : ?>
            <p class="nocomments"><?php _e( 'No comments yet.'); ?></p>
        <?php else :?>
            <p class="nocomments"><?php _e( 'Comments are closed.'); ?></p>
        <?php endif; ?>
        
    <?php endif; ?>


</div>