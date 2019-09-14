<?php get_header(); ?>

<main role="main" style="">
	<!-- section -->
	<section>

		<h1>
            <em>Page Title:</em> <?php the_title(); ?>
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
	<!-- /section -->
    
    <section>
        
        <h2>Recent Books</h2>
        
        <?php
        
        //example of a loop targeting a specific Custom Post Type
        
        $args = array(
         'post_type' => 'books',
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
    
    <section>
        
        <h2>Recent Books and Posts</h2>
        
        <?php
        
        //example of a loop targeting multiple post types
        
        $args = array(
         'post_type' => array('books','post'),
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
    
    <section style="background: purple; color: yellow;">
        
        <h2>Recent Alternative Posts</h2>
        
        <?php
        
        //example of a loop targeting a category
        
        $args = array(
         'post_type' => array('post'),
         'post_status' => 'publish',
         'posts_per_page' => -1,
         'ignore_sticky_posts' => true,
         'category_name' => 'alternative'
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
    
    <section style="background: black; color: white;">
        
        <h2>Recent Nu Wave Posts</h2>
        
        <?php
        
        //example of a loop targeting a tag
        
        $args = array(
         'post_type' => array('post'),
         'post_status' => 'publish',
         'posts_per_page' => -1,
         'ignore_sticky_posts' => true,
         'tag' => 'nu-wave'
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

<?php get_sidebar(); ?>

<?php get_footer(); ?>