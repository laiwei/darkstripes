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
                    <h1 class="page-title">
                        <?php if ( is_day() ) : ?>
                            <?php printf( __( 'Daily Archives: <span>%s</span>' ), get_the_time(get_option('date_format')) ) ?>
                        <?php elseif ( is_month() ) : ?>
                            <?php printf( __( 'Monthly Archives: <span>%s</span>' ), get_the_time('F Y') ) ?>
                        <?php elseif ( is_year() ) : ?>
                            <?php printf( __( 'Yearly Archives: <span>%s</span>'), get_the_time('Y') ) ?>
                        <?php elseif ( isset($_GET['paged']) && !empty($_GET['paged']) ) : ?>
                            Blog Archives
                        <?php endif; ?>
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