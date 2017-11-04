<?php
/**
 * The template for displaying the home/index page.
 * This template will also be called in any case where the Wordpress engine 
 * doesn't know which template to use (e.g. 404 error)
 */
get_header();
?>

<div class="wrap">
    <?php if (is_home() && !is_front_page()) : ?>
        <header class="page-header">
            <h1 class="page-title"><?php single_post_title(); ?></h1>
        </header>
    <?php else : ?>
        <header class="page-header">
            <h2 class="page-title"><?php _e('Posts', 'twentyseventeen'); ?></h2>
        </header>
    <?php endif; ?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

           <?php if ( have_posts() ): ?>
			<h2>Category Archive: <?php echo single_cat_title( '', false ); ?></h2>
			<ol>
			<?php while ( have_posts() ) : the_post(); ?>
				<li>
					<article>
						<h2 class="articletitle"><a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
						<p class="listotags"> <?php the_tags( 'Tags: ', ', ', '<br />' ); ?> </p>
						<p class="writtenby">This post was written by <?php the_author(); ?></p>
						<time datetime="<?php the_time( 'Y-m-d' ); ?>" pubdate><?php the_date(); ?> <?php the_time(); ?></time> <?php comments_popup_link('Leave a Comment', '1 Comment', '% Comments'); ?>
						<?php 
			if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
				the_post_thumbnail('thumbnail');
			} 
			?>
						<?php the_excerpt(); ?> <a href="<?php esc_url( the_permalink() ); ?>" title="Permalink to <?php the_title(); ?>" rel="bookmark">read more</a>
					</article>
				</li>
	
			<?php endwhile; ?>
			</ol>
			<div class="navigation"><p><?php posts_nav_link('&#8734;','Go 
			Forward In Time','Go Back in Time'); ?></p></div>
			<?php else: ?>
			<h2>No posts to display in <?php echo single_cat_title( '', false ); ?></h2>
			<?php endif; ?>

        </main><!-- #main -->
    </div><!-- #primary -->
</div><!-- .wrap -->

<?php
get_footer();