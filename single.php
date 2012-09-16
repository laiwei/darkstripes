<?php get_header(); ?>

<div id="main">
<div id="content">
    <div>

        <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

            <?php get_template_part( 'content', 'single' ); ?>

        <?php endwhile; ?>

    </div>
    <?php get_sidebar(); ?>
</div>
</div>

<?php get_footer(); ?>