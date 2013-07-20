    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

        <header>
            <h1 class="entry-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
            <p>
                <span class="meta-prep meta-prep-author">作者: </span>
                <span class="author vcard"><?php the_author_posts_link(); ?></span>
                <span class="meta-sep"> | </span>
                <?php if(function_exists('the_views')) :?>
                    <span class="leave-reply" >&nbsp; <?php echo the_views();?> </span>
                <?php endif; ?>
                <span class="meta-sep"> &nbsp;|&nbsp; </span>
                <time datetime="<?php the_time('Y-m-d\TH:i:sO') ?>" pubdate="" data-updated="true">
                    <?php  the_time( get_option( 'date_format' ) ); ?> &nbsp;
                    <?php  the_time( get_option( 'time_format' ) ); ?>
                </time>
                <span class="edit-link"><?php edit_post_link( __( 'Edit'), '<span class="meta-sep"> | </span>') ?></span>
            </p>
        </header>

        <div class="entry-content">            
            <?php the_content(); ?>               
        </div>

        <footer>
            <p>
                <span class="cat-links">
                    <span class="entry-utility-prep entry-utility-prep-cat-links">
                        <?php _e( 'Posted in '); ?>
                    </span>
                    <?php echo get_the_category_list(', '); ?>
                </span>
                <span class="tag-links">
                    <span class="entry-utility-prep entry-utility-prep-tag-links">
                        <?php the_tags( '<span class="meta-sep"> | </span>' . __('Tagged: '), ', ', '' ) ?>
                    </span>
                </span>
                <span class="meta-sep"> | </span>
                <span class="comments-link">
                    <?php comments_popup_link( __( 'Leave a comment'), __( '1 Comment'), __( '% Comments') ) ?>
                </span>
                <span class=\"edit-link\">
                    <?php edit_post_link( __( 'Edit'), '<span class="meta-sep"> | </span>' ) ?>
                </span>
            </p>
        </footer>

    </article>
