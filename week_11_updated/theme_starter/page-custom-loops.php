<?php

/**
 * The template for displaying the home/index page.
 * This template will also be called in any case where the Wordpress engine
 * doesn't know which template to use (e.g. 404 error)
 */
get_header();
?>

<div class="container-fluid">
    <header class="page-header">
        <h1 class="page-title"><?php the_title();?></h1>
    </header>

    <div id="primary" class="content-area purple-background">
        <main id="main" class="site-main" role="main">

            <?php if (have_posts()): ?>

            <?php while (have_posts()): the_post();?>

	            <?php the_content();?>

	            <?php endwhile;?>

            <?php else: ?>

            <p>Nothing to see here.</p>

            <?php endif;?>

        </main><!-- #main -->
    </div><!-- #primary -->
</div><!-- .wrap -->

<hr>
<h2>Custom Loop #1</h2>
<?php //custom loop #1 ?>

<?php
$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
$params = array(
    'post_type' => 'post',
    //'post_type' => 'page',
    //'post_status' => 'publish',
    //'post_status' => 'private',
    'post_status' => 'any',
    'posts_per_page' => 3,
    //'posts_per_page' => -1,
    'order' => 'ASC',
    'orderby' => 'title',
    'paged' => $paged,
);

$this_query = new WP_Query($params);

if ($this_query->have_posts()):
    while ($this_query->have_posts()): $this_query->the_post();
        ?>

		<h3>
		    <a href="<?php the_permalink()?>">
		        <?php the_title();?>
		    </a>
		</h3>
		<a href="<?php the_permalink()?>">
		    <?php the_post_thumbnail('thumbnail');?>
		</a>
		<p><?php the_excerpt();?></p>
		<a href="<?php the_permalink()?>">Read More...</a>

		<?php endwhile;?>
	<?php else: ?>

<p>There are no posts right now</p>

<?php endif;?>

<p>Pagination:</p>
<?php
$params = array(
    'total' => $this_query->max_num_pages,
    'current' => max(1, get_query_var('paged')),
    'format' => '?paged=%#%',
);
echo paginate_links($params);
?>

<hr>

<h2>Custom Loop #2: Cool Stuff</h2>
<?php //custom Loop #2: Cool Stuff ?>

<?php
$params = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'order' => 'ASC',
    'orderby' => 'title',
    //'cat' => 2,
    'category_name' => 'cool-stuff',
);

$this_query = new WP_Query($params);

if ($this_query->have_posts()):
    while ($this_query->have_posts()): $this_query->the_post();
        ?>

		<h3>
		    <a href="<?php the_permalink()?>">
		        <?php the_title();?>
		    </a>
		</h3>
		<a href="<?php the_permalink()?>">
		    <?php the_post_thumbnail('thumbnail');?>
		</a>
		<p><?php the_excerpt();?></p>
		<div>Categories: <?php the_category(', ')?></div>
		<a href="<?php the_permalink()?>">Read More...</a>

		<?php endwhile;?>
	<?php else: ?>

<p>There are no posts right now</p>

<?php endif;?>

<hr>

<h2>Custom Loop #3: Fluffy Posts</h2>
<?php //custom Loop #3: Fluffy Posts ?>

<?php
$params = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'order' => 'ASC',
    'orderby' => 'title',
    'tag' => 'fluffy',
);

$this_query = new WP_Query($params);

if ($this_query->have_posts()):
    while ($this_query->have_posts()): $this_query->the_post();
        ?>

		<h3>
		    <a href="<?php the_permalink()?>">
		        <?php the_title();?>
		    </a>
		</h3>
		<a href="<?php the_permalink()?>">
		    <?php the_post_thumbnail('thumbnail');?>
		</a>
		<p><?php the_excerpt();?></p>
		<div>Categories: <?php the_category(', ')?></div>
		<div><?php the_tags();?></div>
		<a href="<?php the_permalink()?>">Read More...</a>

		<?php endwhile;?>
	<?php else: ?>

<p>There are no posts right now</p>

<?php endif;?>

<?php
get_footer();