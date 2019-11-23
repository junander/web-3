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
        <h1 class="page-title"><?php the_title();?></h1>
    </header>

    <div id="primary" class="content-area row">
        <div class="col-sm-9">
            <main id="main" class="site-main" role="main">

                <?php if (have_posts()): ?>

                <?php while (have_posts()): the_post();?>

                <?php the_content();?>

                <?php endwhile;?>

                <?php else: ?>

                <p>Nothing to see here.</p>

                <?php endif;?>

            </main><!-- #main -->
        </div>
        <div class="col-sm-3 purple-background">
            <h2>My Sidebar</h2>
             <?php if (is_active_sidebar('main_sidebar')): ?>
            <ul id="sidebar" class="list-unstyled">
                <?php dynamic_sidebar('main_sidebar');?>
            </ul>
            <?php else: ?>
            <p><?php _e('Sidebar content coming soon...', 'web3'); ?></p>
            <?php endif;?>
        </div>
    </div><!-- #primary -->
</div><!-- .wrap -->

<?php
get_footer();