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
				<h3 id="authorname"><?php the_author(); ?></h3>
			<div id="contentbox">
				<?php the_content(); ?>
				</div><!-- end contentbox -->
				<div id="authorinfo">
				<h3>About The Author</h3>
				<?php the_author_meta('display_name'); ?>
				<br/><?php the_author_meta('description'); ?>
				 <?php the_author_posts_link(); ?>
				</div>
				<div id="catlist">
				this post filed in: <br/><?php the_category( ', ' ); ?>
				</div><!-- end catlist -->
				<?php
				
				endwhile;
			?>
		</div><!-- #content -->
	</div><!-- #primary -->

<?php
get_footer();
