<?php include('header.php'); ?>

<?php $number = 6; ?>

<?php
if($number < 5){
    echo 'My number is less than 5';
} else if($number === 5){
    echo 'My number is equal to 5';
} else {
    echo 'My number is greater than 5';
}

//Simple site example
$my_page_name = 'About Us';

if($my_page_name === 'About Us'){
    //show slideshow
} else {
    //show banner
}

//WordPress example
$is_logged_in = true;

if($is_logged_in){
    //show special menu
} else {
    //show regular menu
}

?>

<?php
//this is also a valid way of doing an if statement
/**
 * This is one line of comments
 * Ths is a second line of comments
 */
/*if ($condition):

endif;*/
?>

<?php

include('footer.php');
