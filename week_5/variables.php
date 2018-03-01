<?php include('header.php'); ?>

<?php $hello = 'Hi World'; ?>

<p><?php echo $hello; ?></p>
<p><?php echo $hello; ?></p>
<p><?php echo $hello; ?></p>

<?php $hello = 'Hello World'; ?>

<p><?php echo $hello; ?></p>
<p><?php echo $hello; ?></p>

<?php
//looking at type issues
$string_number_one = '1';
$number_two = 2;
 
echo $string_number_one + $number_two;

//this is an example of concatenation
echo '<br />'.$string_number_one;
echo '<br />'.$string_number_one.$number_two;
?>

<?php include('footer.php');