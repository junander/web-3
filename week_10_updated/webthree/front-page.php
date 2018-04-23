<?php get_header('front-page'); ?>

<main role="main">
	<!-- section -->
	<section>

		<h1>Really Cool Page Home Page:
			<?php the_title(); ?>
		</h1>

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

			<?php the_excerpt(); ?>

			<?php comments_template('', true); // Remove if you don't want comments ?>

			<br class="clear">

			<?php edit_post_link(); ?>

		</article>
		<!-- /article -->

		<?php endwhile; ?>

		<?php else : ?>

		<!-- article -->
		<article>

			<h2>
				<?php _e('Sorry, nothing to display.', 'web3'); ?>
			</h2>

		</article>
		<!-- /article -->

		<?php endif; ?>

	</section>
	<!-- /section -->
</main>

<?php get_sidebar(); ?>

<?php get_footer(); ?>