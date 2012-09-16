<?php get_header(); ?>

<?php 
global $query_string;
query_posts($query_string . "&posts_per_page=-1"); 
?>

<div id="main">
    <div id="content">
        <div>
            <article role="article">

                <header>  
                    <h1 class="page-title author">
                        <?php 
                        printf( 
                            __( 'Author Archives: <span class="vcard">%s</span>', 'blankslate' ),
                            '<a class="url fn n" href="'.$authordata->user_url.'" title="'.$authordata->display_name.'" rel="me">'.$authordata->display_name.'</a>'
                        );
                        ?>
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