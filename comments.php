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
            ?> | <?php _e( 'Leave a reply &rarr;'); ?></a>
        </h3>
    
        <ol>
            <?php wp_list_comments(); ?>
        </ol>

        <?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : ?>
        <nav id="comment-nav-below">
            <div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments' ) ); ?></div>
            <div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;' ) ); ?></div>
        </nav>
        <?php endif;?>

    </div>
        
    <?php else: ?>
    
        <?php if ( comments_open() ) : ?>
            <?php //add your message ?>
        <?php else :?>
            <p class="nocomments"><?php _e( 'Comments are closed.'); ?></p>
        <?php endif; ?>
        
    <?php endif; ?>

    <?php

    $fields =  array(
    'author' => '<p class="comment-form-author">
                <input type="text" name="author" id="author" value="' . esc_attr( $commenter['comment_author'] ) . '" value="" size="30" tabindex="1" ' . $aria_req . '>' . '
                <label for="author"><small>' . __( 'Name' ) . ( $req ? ' (required)' : '' ) .'</small></label> ' .
                '</p>',

    'email' => '<p class="comment-form-email">
                <input type="text" name="email" id="email" value="' . esc_attr( $commenter['comment_author_email'] ) . '" size="30" tabindex="2" ' . $aria_req . '>' . '
                <label for="email"><small>' . __( 'Mail (will not be published)' ) . ( $req ? ' (required)' : '' ) .'</small></label> ' .
                '</p>',

    'url' => '<p class="comment-form-url">
                <input type="text" name="url" id="url" value="' . esc_attr( $commenter['comment_author_url'] ) . '" value="" size="30" tabindex="3">' . '
                <label for="url"><small>' . __( 'Website' ) .'</small></label> ' .
                '</p>',
    );
    
    comment_form(
        array(
            'fields' => apply_filters( 'comment_form_default_fields', $fields ),
            'comment_notes_before' =>__( ''),
            'comment_notes_after' => '',
            'comment_field'  => '<p><textarea name="comment" id="comment" cols="58" rows="10" tabindex="4"></textarea></p>',
        )   
    ); 
    ?>

</div>