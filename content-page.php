<article class="hentry" role="article" id="post-<?php the_ID(); ?>" <?php post_class(); ?>> 
    <header>
        <h1 class="entry-title"><?php the_title(); ?></h1>
    </header>

    <div>
        <div class="entry-content">
            <?php the_content(); ?>
            <?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:') . '&after=</div>') ?>
        </div>
    </div>

    <footer>
        <?php edit_post_link( __( 'Edit' ), '<span class="edit-link">', '</span>' ) ?>
    </footer>

    <?php comments_template('', true); ?>
</article>