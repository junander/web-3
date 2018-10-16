<?php include('header.php'); ?>

<?php

function my_simple_echo_function(){

   echo 'This is my simple echo function';

}

//my_simple_echo_function();

function my_simple_echo_function_with_params($text = 'No echo') {

    echo $text;
}

$statement = 'This is my simple echo function';

my_simple_echo_function_with_params($statement);

function my_simple_echo_with_lots_of_params($one, $two, $three, $four = 'four'){
    echo '<p>'.$one.' '. $two. ' '.$three.' '.$four.'</p>';
}

my_simple_echo_with_lots_of_params('one', 'two', 'three');


function my_simple_return_function($statement = 'No message') {

    $text_out = 'My message is: ' . $statement;

    return $text_out;
}

$statement = 'This is my simple message';

$text = my_simple_return_function($statement);

echo '<p>' . $text . '</p>';
?>

<?php

include('footer.php');
