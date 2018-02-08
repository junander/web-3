<?php include('header.php'); ?>

<?php $condition = 4; ?>

<?php

if ($condition === 2) {
    echo '<p>This condition is true</p>';
} else if ($condition === 3) {
    echo '<p>This condition is 3</p>';
} else {
    echo '<p>This condition has not been met</p>';
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
