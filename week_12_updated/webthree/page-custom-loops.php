<?php
/**
 * The template for displaying the home/index page.
 * This template will also be called in any case where the Wordpress engine 
 * doesn't know which template to use (e.g. 404 error)
 */
get_header();
?>

<div class="wrap">
    <h1>This is a page for some more custom loops</h1>

    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

            <?php if (have_posts()): ?>

                <?php while (have_posts()) : the_post(); ?>
                	<h2><?php the_title(); ?></h2>
                    <?php the_content(); ?>
                <?php endwhile; ?>

            <?php else: ?>

                <p>Nothing to see here.</p>

            <?php endif; ?>

        </main><!-- #main -->
        
        <h2>Query for Movies</h2>

<?php 

$args = array(
	'post_type' => 'movie',
	'posts_per_page' => 4,
	'post_status' => 'publish',
	'order' => 'DESC',
	'orderby' => 'date',
);

$my_query = new WP_Query($args);

if($my_query->have_posts()):
  while($my_query->have_posts()): $my_query->the_post();
  ?>
  
  <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
  <a href="<?php the_permalink(); ?>">
    <?php the_post_thumbnail('thumbnail'); ?>
  </a>
  <p><?php the_excerpt(); ?></p>
  <hr>
  
  <?php
  endwhile;
  
  else:
  ?>
  
  <p>No movies currently.</p>
  
  <?php
endif;

?>

<hr/>
<hr/>

        <h2>Query for Movies *and* Comics</h2>

<?php 

$args = array(
	'post_type' => array( 'movie', 'comic' ),
	'posts_per_page' => 4,
	'post_status' => 'publish',
	'order' => 'DESC',
	'orderby' => 'date',
);

$my_query = new WP_Query($args);

if($my_query->have_posts()):
  while($my_query->have_posts()): $my_query->the_post();
  ?>
  
  <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
  <a href="<?php the_permalink(); ?>">
    <?php the_post_thumbnail('thumbnail'); ?>
  </a>
  <p><?php the_excerpt(); ?></p>
  <hr>
  
  <?php
  endwhile;
  
  else:
  ?>
  
  <p>No movies currently.</p>
  
  <?php
endif;

?>

<hr/>
<hr/>

        <h2>Query for Action Movies</h2>
        
        <div class="altPosts" id="altPosts">
<?php
$args = array(
	'post_type' => 'movie',
	'posts_per_page' => 4,
	'post_status' => 'publish',
	'order' => 'DESC',
	'orderby' => 'date',
	'tax_query' => array(
		array(
			'taxonomy' => 'genre',
			'field'    => 'slug',
			'terms'    => 'action',
		),
	),
);

$my_query = new WP_Query($args);

if($my_query->have_posts()):
  while($my_query->have_posts()): $my_query->the_post();
  ?>
  
  <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
  <a href="<?php the_permalink(); ?>">
    <?php the_post_thumbnail('thumbnail'); ?>
  </a>
  <p><?php the_excerpt(); ?></p>
  <p>Categories: <?php the_category(', ') ?></p>
  <hr>
  
  <?php
  endwhile;
  
  else:
  ?>
  
  <p>No posts returned for this query</p>
  
  <?php
endif;
?>
</div>
        
    </div><!-- #primary -->
</div><!-- .wrap -->

<?php
get_footer();
