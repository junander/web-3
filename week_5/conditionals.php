<?php include('header.php'); ?>

<?php $condition = '5'; ?>

<?php
$condition = intval($condition);
if($condition < 5){
    echo 'I\'m less than 5!';
} else if($condition === 5){
    echo 'I\'m equal to 5!';
} else {
    echo 'I\'m greater than 5!';
}

?>

<?php

//this is also a valid way of doing an if statement
/**
 * This is one line of comments
 * Ths is a second line of comments
 */
if ($condition):

endif;
?>

<?php

include('footer.php');
