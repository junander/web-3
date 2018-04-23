<?php get_header(); ?>

<main role="main">
	<!-- section -->
	<section class="goth">

		<?php
        //post_type and posts_per_page
        $args = array(
            'post_type' => 'page',
            'posts_per_page' => 4,
         );
        
        $this_query = new WP_Query($args);
        $count = 1;
        
        if($this_query->have_posts()):
        
        while($this_query->have_posts()): $this_query->the_post();
        ?>  
            <article>
                <p>Post #<?php echo $count; ?></p>
                <?php the_post_thumbnail('thumbnail'); ?>
                <a href="<?php the_permalink() ?>">
                   <?php the_title(); ?>
                </a>
            </article>
        
            <?php $count++; ?>
        
        <?php
        endwhile;
        
        else:
        
        ?>
         <p>There is no content!</p>
        <?php
        endif;
        
        ?>

	</section>
	<!-- /section -->
    
    <hr>
    <hr>
    
    <!-- section -->
	<section>
        <h3>Custom query: orderby</h3>
		<?php
        //post_type and posts_per_page and orderby
        $args = array(
            'post_type' => 'page',
            'posts_per_page' => 5,
            'order' => 'DESC',
            'orderby' => 'title',
         );
        
        $this_query = new WP_Query($args);
        $count = 1;
        
        if($this_query->have_posts()):
        
        while($this_query->have_posts()): $this_query->the_post();
        ?>  
            <article>
                <p>Post #<?php echo $count; ?></p>
                <?php the_post_thumbnail('thumbnail'); ?>
                <a href="<?php the_permalink() ?>">
                   <?php the_title(); ?>
                </a>
            </article>
        
            <?php $count++; ?>
        
        <?php
        endwhile;
        
        else:
        
        ?>
         <p>There is no content!</p>
        <?php
        endif;
        
        ?>

	</section>
    
    <hr>
    <hr>
    
    <!-- section -->
	<section class="georgia">
        <h3>Custom query: posts by taxonomy</h3>
		<?php
        //post_type and posts_per_page and orderby
        $args = array(
            'post_type' => 'post',
            'posts_per_page' => 5,
            'order' => 'DESC',
            'orderby' => 'title',
            //'category_name' => 'goth'
            'tag' => 'flat',
         );
        
        $this_query = new WP_Query($args);
        $count = 1;
        
        if($this_query->have_posts()):
        
        while($this_query->have_posts()): $this_query->the_post();
        ?>  
            <article>
                <p>Post #<?php echo $count; ?></p>
                <?php the_post_thumbnail('thumbnail'); ?>
                <a href="<?php the_permalink() ?>">
                   <?php the_title(); ?>
                </a>
            </article>
        
            <?php $count++; ?>
        
        <?php
        endwhile;
        
        else:
        
        ?>
         <p>There is no content!</p>
        <?php
        endif;
        
        ?>

	</section>
    
    
</main>

<?php get_footer(); ?>