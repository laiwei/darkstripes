<?php get_header(); ?>

<div id="main">
<div id="content">
    <div>
        
        <?php the_post(); ?>
        <?php get_template_part( 'content', 'page' ); ?>

    </div>
    <?php get_sidebar(); ?>
</div>
</div>

<?php get_footer(); ?>