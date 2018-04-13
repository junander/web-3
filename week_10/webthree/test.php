<?php

/**
 * The template for displaying the home/index page.
 * This template will also be called in any case where the Wordpress engine 
 * doesn't know which template to use (e.g. 404 error)
 */
get_header();
?>

<?php

if($content):

    foreach($item as $content):
        echo $item;
    endforeach;

else:
    echo 'No Content!';
endif;

if($content){
    
    foreach($item as $content){
        echo $item;
    }
    
} else {
    echo 'No Content';
}

?>

<?php
get_footer();