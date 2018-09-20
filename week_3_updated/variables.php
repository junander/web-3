<?php include('header.php'); ?>

<?php

//string variable
$welcome_message = 'Howdy World';
$name = 'Joe';
//number variable
$my_second_fav_num = 8;
//boolean variable
$my_boolean = true;

?>

<p><?php echo $welcome_message; ?></p>
<p><?php echo $welcome_message; ?></p>

<?php $welcome_message = 'Hi World'; ?>

<p><?php echo $welcome_message; ?></p>
<p><?php echo $welcome_message; ?></p>

<p>My favorite number is: <?php echo $my_number; ?></p>
<p>The total of my favorite numbers is: <?php echo $my_number + $my_second_fav_num; ?></p>

<?php //concatenation example ?>
<p><?php echo $welcome_message.' '.$name ?></p>

<?php include('footer.php');