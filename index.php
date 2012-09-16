<?php get_header(); ?>

<div id="main">
<div id="content">
    <div class="blog-index">

    <?php if (have_posts()) :  while (have_posts()) : the_post(); ?>

    <?php get_template_part( 'content', get_post_format() ); ?>

    <?php endwhile; else: ?>

    <?php get_template_part( 'no_posts' ); ?>

    <?php endif; ?>

    <?php if ( $wp_query->max_num_pages > 1 ) : ?>
    <div class="pagination">
        <?php next_posts_link(__( ' <span class="meta-nav">&laquo; </span> Older articles')) ?>
        <?php previous_posts_link(__( 'Newer articles <span class="meta-nav"> &raquo;</span>')) ?>  
    </div>
    <?php endif ?>

    </div>
    <?php get_sidebar(); ?>
</div>
</div>

<?php get_footer(); ?>