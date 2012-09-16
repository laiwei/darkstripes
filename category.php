<?php get_header(); ?>

<div id="main">
    <div id="content">
        <div>
            <article role="article">

                <header>  
                    <h1 class="page-title">
                        <?php _e( 'Category Archives for' ) ?> <span><?php single_cat_title() ?></span>
                    </h1>
                </header>
                
                <div id="blog-archives">
                    <?php rewind_posts(); ?>
                    <?php if (have_posts()) :  while (have_posts()) : the_post(); ?>
                        <?php get_template_part( 'content', 'miniposts' ); ?>
                    <?php endwhile; else: ?>
                        <?php get_template_part( 'no_posts' ); ?>
                    <?php endif; ?>
                </div>
        
            </article>
        </div>
        <?php get_sidebar(); ?>
    </div>
</div>

<?php get_footer(); ?>