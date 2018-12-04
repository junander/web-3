<?php get_header(); ?>

<main class="front-page" role="main" style="background-color: azure">
	<!-- section -->
	<section>

		<h1>
            Welcome to My Site
		</h1>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<?php the_content(); ?>

			<?php comments_template( '', true ); // Remove if you don't want comments ?>

			<br class="clear">

			<?php edit_post_link(); ?>

		</article>
		<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

		<!-- article -->
		<article>

			<h2>
				<?php _e( 'Sorry, nothing to display.', 'web3' ); ?>
			</h2>

		</article>
		<!-- /article -->

		<?php endif; ?>

	</section>
    
    <section>
        
        <h2>Recent Posts</h2>
        
        <?php
        $args = array(
         'post_type' => 'post',
         'post_status' => 'publish',
         'posts_per_page' => -1,
         'ignore_sticky_posts' => true,
         );

        $this_query = new WP_Query($args);
        
        if($this_query->have_posts()):
          while($this_query->have_posts()): $this_query->the_post();
          ?>

          <h3>
            <a href="<?php the_permalink() ?>">
               <?php the_title(); ?>
            </a>
            <p><?php the_excerpt(); ?></p>
            <?php the_post_thumbnail('thumbnail'); ?>
          </h3>

         <?php endwhile; ?>
         <?php else: ?>

          <p>There are no recent posts right now</p>

         <?php endif; ?>
        
    </section>
	<!-- /section -->
</main>

<?php //get_sidebar(); ?>

<?php get_footer(); ?>