<?php

//include('header.php');

//a simple array
$fruits = array('apple', 'banana', 'pear');

//a demonstration of grabbing one value from an array and displaying it
//echo $fruits[2];

//this will not work, because our array does not have an item at index 3
//arrays always start the index at 0, so 2 is the last index value in this array
//echo $fruits[3];

//an example of an 'associate' array
//here we define our own keys instead of letting PHP assign numeric keys
//this is known as a 'key-value pair'
//the key is always on the left and the value on the right
$foods = array(
 'fruit' => array('apple', 'banana'), //**extra** an example of an embedded or 'multidimensional' array */
 'vegetable' => 'carrot',
 'grain' => 'bagel',
 'grain' => 'croissant'
);

//an example of how to grab a value from our associative array
//echo $foods['grain'].'<br/>';

//**extra** an example of how to grab a value from our multidimensional array */
//echo $foods['fruit'][1];

//another example array
$fruits = array('apple', 'banana', 'pear');

//an example of a foreach loop
//this loop will move through each item of our array and stop to perfrom the actions listed between the brackets
//we call that 'iterating', i.e. the loop will 'iterate' through the array
//the value after 'as' - $fruit in our example below - holds the value at each step of the loop
//in other words, $fruit will first equal 'apple', then 'banana', the 'pear'
foreach ($fruits as $fruit){
 //echo '<p>This fruit is ' . $fruit . '</p>';
}

//another associative array example
$foods = array(
 'fruit' => 'apple',
 'vegetable' => 'carrot',
 'grain' => 'bagel'
);

//looping through an associative array
//this is exactly like our first loop example, except now we have a placeholder variable for the key value as well
foreach ($foods as $type => $food) {
 echo '<p>The food ' . $food . ' is a ' . $type . '</p>';
}

//include('footer.php');
