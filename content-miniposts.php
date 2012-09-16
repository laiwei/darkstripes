<article>
    <h1 class="entry-title">
        <a href="<?php the_permalink(); ?>" title="<?php printf( __('Read') ) ?>" rel="bookmark"><?php the_title(); ?></a>
    </h1>
    <time datetime="<?php the_time('Y-m-d\TH:i:sO') ?>" pubdate="">
        <span class="month"><?php the_time('M'); ?></span>
        <span class="day"><?php the_time('j'); ?></span>
    </time>
    <footer>
        <span class="cat-links">
            <span class="entry-utility-prep entry-utility-prep-cat-links"><?php _e( 'Posted in ' ); ?></span>
            <?php echo get_the_category_list(', '); ?>
        </span>
    </footer>
</article>