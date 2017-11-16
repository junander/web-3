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
get_header();
?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

        <?php
        // Show the selected frontpage content.
        if (have_posts()) :
            while (have_posts()) : the_post();
                ?>
                <h1>FRONT PAGE TEMPLATE</h1>
                <h2><?php the_title(); ?></h2>
                <?php the_content(); ?>

                <?php
            endwhile;
        else : // I'm not sure it's possible to have no posts when this page is shown, but WTH.
            ?>
            <p>Nothing to see</p>
        <?php endif; ?>

    </main><!-- #main -->
</div><!-- #primary -->

<hr>

<h2>Query Example: 4 posts</h2>

<?php 

$args = array(
	'post_type' => 'post',
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
  
  <p>No posts returned for this query</p>
  
  <?php
endif;

?>

<hr>

<h2>Query Example: 4 posts by category</h2>
<div class="altPosts" id="altPosts">
<?php
$args = array(
	'post_type' => 'post',
	'posts_per_page' => 4,
	'post_status' => 'publish',
	'order' => 'DESC',
	'orderby' => 'date',
	//'cat' => 38, //cat id for alt bands of the 80's - don't recommend this method
	'category_name' => 'alt-bands-of-the-80s',
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

<hr>

<h2>Query Example: Tags</h2>

<div class="altPosts" id="altPosts2">
<?php
$args = array(
	'post_type' => 'post',
	'posts_per_page' => 4,
	'post_status' => 'publish',
	'order' => 'DESC',
	'orderby' => 'date',
	//'tag_id' => 19,
	'tag' => 'mountainous'
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
  <p><?php the_tags(); ?></p>
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
<?php
get_footer();
