<?php include('header.php'); ?>

<?php

function my_simple_echo_function($text = 'No echo') {

    echo $text;
}

$statement = 'This is my simple echo function';

my_simple_echo_function($statement);

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
