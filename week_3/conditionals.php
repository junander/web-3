<?php include('header.php'); ?>

<?php $a = 7;
       ?>

<?php

if ($a === 3) {
    echo '<p>$a is 3</p>';
} else if ($a === 4){
	echo '<p>$a is 4</p>';
} else {
	echo '<p>$a is something else</p>';
}
?>

<?php

//this is also a valid way of doing an if statement
/**
 * This is one line of comments
 * Ths is a second line of comments
 */
//if ($condition):

//endif;
?>

<?php

include('footer.php');
