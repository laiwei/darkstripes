<article class="hentry" role="article" id="post-<?php the_ID(); ?>" <?php post_class(); ?>> 
    <header>
        <h1 class="entry-title"><?php the_title(); ?></h1>
        <p>
            <span class="meta-prep meta-prep-author">By </span>
            <span class="author vcard"><?php the_author_posts_link(); ?></span>
            <span class="edit-link"><?php edit_post_link( __( 'Edit'), '<span class="meta-sep"> | </span>') ?></span>
        </p>
    </header>

    <div>
        <div class="entry-content">
            <?php the_content(); ?>
            <?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:') . '&after=</div>') ?>
        </div>
    </div>

    <footer>

    </footer>

    <?php comments_template('', true); ?>
</article>