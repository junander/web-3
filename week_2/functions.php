<?php include('header.php'); ?>

<?php

function my_simple_echo_function($text = 'No echo') {

    echo $text;
}

$statement = 'This is my simple echo function';

my_simple_echo_function($statement);



function my_simple_return_function($statement = 'No message') {

    $text_out = 'My message is: ' . $text_out;

    return $text_out;
}

$statement = 'This is my simple message';

$text = my_simple_return_function($statement);

echo $text;
?>

<?php

include('footer.php');
