<?php
/**
 * The template for displaying the home/index page.
 * This template will also be called in any case where the Wordpress engine 
 * doesn't know which template to use (e.g. 404 error)
 */
get_header();
?>

<div class="wrap">
    <h1>My Super Neat Home Page</h1>

    <div id="primary" class="content-area gray-background">
        <main id="main" class="site-main" role="main">
			
            <?php if (have_posts()): ?>

                <?php while ( have_posts() ) : the_post(); ?>
                	
                	<h2><?php the_title(); ?></h2>
                	
                	<?php the_content(); ?>
                	
                	<p><em>by -<?php the_author(); ?></em></p>
                <?php endwhile; ?>

            <?php else: ?>

                <p>Nothing to see here.</p>

            <?php endif; ?>

        </main><!-- #main -->
    </div><!-- #primary -->
</div><!-- .wrap -->

<?php
get_footer();
