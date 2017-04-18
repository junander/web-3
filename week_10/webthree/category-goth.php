<?php
/**
 * Category template targeting the specific category term with the slug "goth"
 * @see : https://developer.wordpress.org/themes/basics/template-hierarchy/#category
 */
get_header();
?>

<div class="wrap goth">
    <h1><?php the_archive_title(); ?></h1>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <?php if (have_posts()): ?>

                <?php while (have_posts()) : the_post(); ?>

                    <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                    <p><?php the_excerpt(); ?></p>

                <?php endwhile; ?>

            <?php else: ?>

                <p>Nothing post for this category.</p>

            <?php endif; ?>

        </main><!-- #main -->
    </div><!-- #primary -->
</div><!-- .wrap -->

<?php
get_footer();
