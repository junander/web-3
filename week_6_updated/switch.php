<?php include('header.php'); ?>

<?php

$food = 'carrot';

switch($food){
    case 'apple': // if($food == 'apple')
        echo '<p>I had a fruit for lunch</p>';
        break;
    case 'carrot': // else if($food == 'carrot')
        echo '<p>I had an vegetable for lunch</p>';
        break;
    case 'coffee': // else if ($food == 'coffee')
        echo '<p>I had a coffe lunch. Not healthy.</p>';
        break;
    default: // else
        echo '<p>I didn\'t eat lunch today</p>';
        break;
}

include('footer.php');