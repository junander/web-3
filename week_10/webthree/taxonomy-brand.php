<?php
/**
 * A template to specifically target the custom taxonomy "brand"
 * @see : https://developer.wordpress.org/themes/basics/template-hierarchy/#custom-taxonomies
 */
get_header();
?>

<div class="wrap">
    <hr>
    <h1><?php the_archive_title(); ?></h1>
    <hr>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <?php if (have_posts()): ?>

                <?php while (have_posts()) : the_post(); ?>

                    <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                    <a href="<?php the_permalink() ?>">
                        <?php the_post_thumbnail('thumbnail'); ?>
                    </a>

                <?php endwhile; ?>

            <?php else: ?>

                <p>Nothing post for this category.</p>

            <?php endif; ?>

        </main><!-- #main -->
    </div><!-- #primary -->
</div><!-- .wrap -->

<?php
get_footer();
