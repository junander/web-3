<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
		<h1>This is a Single Post</h1>
			<?php
				// Start the Loop.
				while ( have_posts() ) : the_post();
				
				?>
				
				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
				
				<?php
				
				endwhile;
			?>
		</div><!-- #content -->
	</div><!-- #primary -->

<?php
get_footer();
