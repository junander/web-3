<?php include('header.php'); ?>

<?php $hello = 'Hello World'; ?>

<p><?php echo $hello; ?></p>

<?php
//looking at type issues
 $string_number_one = '1';
 $number_two = 2;
 
 echo $string_number_one + $number_two;

?>

<?php include('footer.php');