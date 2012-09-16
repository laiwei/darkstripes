<?php get_header(); ?>

<div id="main">
<div id="content">
    <div class="blog-index">

    <article>
        <h1 class="page-title"><?php _e( 'Search Results for '); ?><span><?php the_search_query(); ?></span></h1>
    </article>

    <?php if (have_posts()) :  while (have_posts()) : the_post(); ?>

    <?php get_template_part( 'content', 'search' ); ?>

    <?php endwhile; else: ?>

    <?php get_template_part( 'no_posts' ); ?>
    
    <?php endif; ?>

    </div>

    <?php get_sidebar(); ?>

</div>
</div>

<?php get_footer(); ?>