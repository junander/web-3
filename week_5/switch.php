<?php include('header.php'); ?>

<?php

$food = 'apple';

switch($food){
    case 'apple':
        echo '<p>I had a fruit for lunch</p>';
        break;
    case 'carrot':
        echo '<p>I had a vegetable for lunch</p>';
        break;
    case 'coffee':
        echo '<p>I had a coffee lunch. Not healthy.</p>';
        break;
    case '5':
        echo 'This is the number 5';
        break;
    default:
        echo '<p>I didn\'t eat lunch today</p>';
        break;
}

include('footer.php');