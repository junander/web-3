<?php //include('header.php'); ?>

<?php
function my_simple_echo_function(){
   echo 'This is my simple echo function';
}
//my_simple_echo_function();

function my_simple_echo_function_with_arg($text = '<p>No Message</p>'){ 

    echo $text; 

} 

$statement = 'This is my simple echo function'; 

//my_simple_echo_function_with_arg($statement);

$statement = '<br />This is my simple echo function with *a twist*';

//my_simple_echo_function_with_arg($statement);

$my_text = '<br />Okay, now this works.';

//my_simple_echo_function_with_arg($my_text);

//my_simple_echo_function_with_arg();

function my_simple_return_function($text_in = 'No message')
{ 
    $text_out = 'My message is: '.$text_in; 
    return $text_out;
} 

$statement = 'This is my simple message'; 

$text = my_simple_return_function(); 

echo $text;

echo my_simple_return_function($statement);


?>

<?php

//include('footer.php');
