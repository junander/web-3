<?php
/**
 * Tag template - the fallback for all tag pages that do not have a more specific template
 * @see : https://developer.wordpress.org/themes/basics/template-hierarchy/#tag
 */
get_header();
?>

<div class="wrap">
    <h1><?php the_archive_title(); ?></h1>

    <p><em>This is one of our tag pages, it is very neat.</em></p>

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
