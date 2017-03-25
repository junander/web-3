<?php
/**
 * The template for displaying the home/index page.
 * This template will also be called in any case where the Wordpress engine 
 * doesn't know which template to use (e.g. 404 error)
 */
get_header();
?>

<div class="wrap">
    <h1>My Super Neat Home Page</h1>

    <div id="primary" class="content-area gray-background">
        <main id="main" class="site-main" role="main">
			
            <?php if (have_posts()): ?>

                <?php while ( have_posts() ) : the_post(); ?>
                	
                	<h2><?php the_title(); ?></h2>
                	
                	<?php the_post_thumbnail('medium'); ?>
                	
                	<?php the_content(); ?>
                	
                	<p><em>by -<?php the_author(); ?></em></p>
                <?php endwhile; ?>

            <?php else: ?>

                <p>Nothing to see here.</p>

            <?php endif; ?>

        </main><!-- #main -->
    </div><!-- #primary -->
    
    <div id="customLoops" class="content-area">
    
    <h3>Alt Pop</h3>
    <?php
    
    $args = array(
      'post_type' => 'post',
      'post_status' => 'publish',
      'posts_per_page' => 2,
      'order' => 'DESC',
      'orderby' => 'date',
      'category_name' => 'alt-pop',
    );
    
    $this_query = new WP_Query($args);
    
    if($this_query->have_posts()):
     while($this_query->have_posts()): $this_query->the_post();
    ?>
    
    <h4><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
    <a href="<?php the_permalink() ?>"><?php the_post_thumbnail('thumbnail'); ?></a>
    <p><?php the_excerpt(); ?></p>
    
    <?php endwhile; ?>
    <?php else: ?>
    
    <p>There are no posts right now</p>
    
    <?php endif; ?>
    
    <h3>Oh My Goth</h3>
    <?php
    
    $args = array(
      'post_type' => 'post',
      'post_status' => 'publish',
      'posts_per_page' => 2,
      'order' => 'DESC',
      'orderby' => 'date',
      'category_name' => 'goth',
    );
    
    $this_query = new WP_Query($args);
    
    if($this_query->have_posts()):
     while($this_query->have_posts()): $this_query->the_post();
    ?>
    
    <h4><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
    <p><?php the_excerpt(); ?></p>
    
    <?php endwhile; ?>
    <?php else: ?>
    
    <p>There are no posts right now</p>
    
    <?php endif; ?>
    
    </div>
    
</div><!-- .wrap -->

<?php
get_footer();
