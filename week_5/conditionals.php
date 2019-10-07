<?php //include('header.php'); ?>

<?php

$x = 5;
$y = 5;

/**
 * The following is an example of an 'if...else if...else' statement
 * The first 'if' evaluates a certain condition, in this case, is "$x" greater than "$y"
 * An 'else if' lets you evaulate additional conditions, in this case is "$x" equal to "$y"
 * You can have as many 'else if' conditions as you need
 * The 'else' condition is a fall back in case none of the other conditions are true
 * You are not required to have an 'else if' or 'else' in an 'if' statement, they are only there if you need them
 */

//if($x > $y){
//    echo '<p>x is greater than y</p>';
//} else if($x === $y){
//    echo '<p>x is equal to y</p>';
//} else {
//    echo '<p>x is *not* greater than y</p>';
//}

//example variables
$x = '5';
$y = 5;

/**
 * Looking at the difference between '==' and '==='
 * '==' just compares the value of two variables
 * '===' compares both value and variable type (string, integer, etc.) and is considered best practice
 */

//for our example variables above, this will evaulate to true
//PHP will conver our string variable '$x' to a numeric value and then compare against our integer variable $y
if ($x == $y) {
    echo '<p>x is equal to y in just value</p>';
}

//for the example variables above this will evaulate to false, because $x is a string while $y is an integer
if ($x === $y) {
    echo '<p>x is equal to y in value and variable type</p>';
}

?>

<?php

//**extra** this is also a valid way of doing an if...else if...else statement that you will sometimes see, especially in WordPress templates
//instead of brackets, this approach uses semicolons
//use this approach sparingly, as brackets are much easier to work with

$x = 5;
$y = 4;

if ($x > $y):
    echo '<p>x is greater than y</p>';
elseif ($x === $y):
    echo '<p>x is equal to y</p>';
else:
    echo '<p>x is *not* greater than y</p>';
endif;
?>

<?php

//include('footer.php');
