<?php

/* 
 * Homework for Web 3: Week 2
 */

/**
 * Assignment 1: take the file called header.php and include it in both the includes.php and more_includes.php files. Then change something or add something in header.php, and see how that shows up on both pages.
 * Next create a new file called footer.php - and add some things to it (hint: I would recommend at least a closing body tag and closing html tag). Then include that footer.php in both includes.php and more_includes.php.
 * 
 */
?>

<li><a href="includes.php">Includes</a></li>
<li><a href="includes.php">More Includes</a></li>

<?php
/**
 * Assignment 2: go to conditionals.php. There you will find a basic condition that compares a numeric value to a condition. In this case, the numeric value is 2, and the condition asks if the value is greater than 3 - so right now this condition evaluates to false.
 * Do three things here: 1) add a condition to check if the value equals 2, and add an appropriate echo statement (i.e. "This value equals 2").
 * 2) add a condition to check if the value is *less than* 2, and add an appropriate echo statement
 * 3) Test your conditions by changing the numeric value to different numbers
 */
?>

<li><a href="conditionals.php">Conditionals</a></li>

<?php
/**
 * Assignment 3: go to arrays.php, create an associative array (i.e. where you set the indices, like array('mykey' => 'myvalue')), and then loop through it, printing out both the key and value
 * This array will be made up of address values
 * Hint: 'Street' => '123 Street'
 * After you create the values, loop through the array and print out each key and value so that it looks like you are printing out
 * the full address
 */
?>

<li><a href="arrays.php">Arrays</a></li>

<?php
/**
 * ***THIS ASSIGNMENT IS OPTIONAL***
 * Assignment 4: taking your array from Assignment 3, create a function that prints out a given address value based on the key
 * Hint: this will involve passing a variable to the function declaration
 * For example, I want to be able to ask my function for the street, and get '123 Street' back
 */
?>

<li><a href="functions.php">Function</a></li>