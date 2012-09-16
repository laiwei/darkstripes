<article class="hentry" role="article">

<header>
    <h1 class="entry-title"><?php the_title(); ?></h1>
    <p class="meta">
        <time datetime="<?php the_time('Y-m-d\TH:i:sO') ?>" pubdate="" data-updated="true">
            <?php the_time( get_option( 'date_format' ) ); ?>
        </time>
    </p>   
    <p>
        <span class="meta-prep meta-prep-author">By </span>
        <span class="author vcard"><?php the_author_posts_link(); ?></span>
        <span class="edit-link"><?php edit_post_link( __( '<span class="meta-sep"> | </span>Edit')) ?></span>
    </p>
</header>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="entry-content">
        <?php if( has_post_thumbnail() ): ?>
            <?php the_post_thumbnail(); ?>
        <?php endif; ?>
        <?php the_content(); ?>
        <?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:' ) . '&after=</div>') ?>
    </div>
</div>

<footer>
    <p>
        <?php
        printf( 
            __( 'This article was posted in %1$s%2$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>. Follow comments with the <a href="%5$s" title="Comments RSS to %4$s" rel="alternate" type="application/rss+xml">RSS feed for this post</a>.', 'blankslate' ),
            get_the_category_list(', '),
            get_the_tag_list( __( ' and tagged '), ', ', '' ),
            get_permalink(),
            the_title_attribute('echo=0'),
            get_post_comments_feed_link() 
        ) 
        ?>

        <?php if ( ('open' == $post->comment_status) && ('open' == $post->ping_status) ) : ?>

        <?php printf( __( '<a class="comment-link" href="#respond" title="Post a Comment">Post a Comment</a> or leave a trackback: <a class="trackback-link" href="%s" title="Trackback URL for your post" rel="trackback">Trackback URL</a>.'), get_trackback_url() ) ?>

        <?php elseif ( !('open' == $post->comment_status) && ('open' == $post->ping_status) ) : ?>
        
        <?php printf( __( 'Comments are closed, but you can leave a trackback: <a class="trackback-link" href="%s" title="Trackback URL for post" rel="trackback">Trackback URL</a>.'), get_trackback_url() ) ?>

        <?php elseif ( ('open' == $post->comment_status) && !('open' == $post->ping_status) ) : ?>

        <?php _e( 'Trackbacks are closed, but you can <a class="comment-link" href="#respond" title="Post a Comment">Post a Comment</a>.', 'blankslate' ) ?>

        <?php elseif ( !('open' == $post->comment_status) && !('open' == $post->ping_status) ) : ?>

        <?php _e( ' Both comments and trackbacks are closed.') ?>

        <?php endif; ?>
    </p>
</footer>

<?php comments_template( '', true ); ?>

</article>