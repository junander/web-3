<?php include 'header.php';?>

<?

/**
 * Here are a couple examples of declaring variables
 * Remember, declaring a variable requires three things:
 * 1) The name of a variable prepended with a '$'
 * 2) A single '='
 * 3) The variable definition, i.e. a string, a number, etc.
 * **Remember to un-comment examples to see them work**
 */

 //a string variable
$hello = 'Hello World, what a great day';
//an integer variable (an integer is a numeric type)
$age = 41;
?>

<p><?php //echo $hello; ?></p>
<p><?php //echo $hello; ?></p>

<?php
//changing our string variable to a different string 
$hello = 'Hello World, what a lovely day';
?>

<p><?php //echo $hello; ?></p>

<?php
//integer varaibles
$x = 4;
$y = 5;

//using operators to perform mathematical operations on our integer variables
//echo '<p>'.($x + $y).'</p>';
//echo '<p>'.$x*$y.'</p>';

//string variables
$x = 'twenty';
$y = 'one';
$p_open = '<p>';
$p_close = '</p>';

//concatenation of string variables
//echo $p_open.$x.$y.$p_close;

//another way of performing concatenation of string variables
$x = 'twenty';
$x .= 'one';

//echo $x;

//string variables
$x = 'twenty';
$y = 'one';

//showing type conversion
//if a string variable is used with an operator, PHP will convert that string to a numeric value
//in this case PHP considers these variables to = 0, even though they spell the name of a number
//echo $x + $y;

//string variables
$x = '2';
$y = '1';


//another example of type conversion
//in this case, PHP can successfully convert each of these string values to an integer value, i.e. '2' => 2
//echo $x + $y;

//integer variables
$x = 2;
$y = 1;

//example of concatenation two integer variables
echo $x . $y;

?>

<?php include 'footer.php';