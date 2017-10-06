<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

		<?php // Show the selected frontpage content.
		if ( have_posts() ) :
			while ( have_posts() ) : the_post();
				?>
				<h1>FRONT PAGE TEMPLATE</h1>
				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
				
				<?php
			endwhile;
		else : // I'm not sure it's possible to have no posts when this page is shown, but WTH.
			?>
			<p>Nothing to see</p>
			<?php
		endif; ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer();
