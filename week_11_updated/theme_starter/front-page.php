<?php

/**
 * The template for displaying the home/index page.
 * This template will also be called in any case where the Wordpress engine 
 * doesn't know which template to use (e.g. 404 error)
 */
get_header();
?>

<div class="container-fluid">
    <header class="page-header">
        <h1 class="page-title">FRONT PAGE: <?php the_title(); ?></h1>
    </header>
    
    <div class="banner-gallery">
        <?php echo do_shortcode('[smartslider3 slider=5]'); ?>
    </div>

    <div id="primary" class="content-area blue-background">
        <main id="main" class="site-main" role="main">

            <?php if (have_posts()) : ?>

                <?php while (have_posts()) : the_post(); ?>
                
                    <?php the_content(); ?>

                <?php endwhile; ?>

            <?php else : ?>

                <p>Nothing to see here.</p>

            <?php endif; ?>

        </main><!-- #main -->
    </div><!-- #primary -->
    
    <div id="secondary" class="content-area purple-background">
        <main id="main" class="site-main" role="main">

            <?php if (have_posts()) : ?>

                <?php while (have_posts()) : the_post(); ?>
                
                    <?php the_content(); ?>

                <?php endwhile; ?>

            <?php else : ?>

                <p>Nothing to see here.</p>

            <?php endif; ?>

        </main><!-- #main -->
    </div><!-- #primary -->
</div><!-- .wrap -->

<?php
get_footer();