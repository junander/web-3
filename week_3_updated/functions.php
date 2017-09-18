<?php include('header.php'); ?>

<?php

function my_simple_echo_function_no_vars() {

    echo 'This is my pretty darn simple function';
}

//my_simple_echo_function_no_vars();
//my_simple_echo_function_no_vars();
//my_simple_echo_function_no_vars();

/*function my_simple_echo_function($text = 'No echo') {

    echo $text.'<br />';
}

$statement = 'This is my simple echo function';

my_simple_echo_function();
my_simple_echo_function('Hey Man There is an Echo');
my_simple_echo_function($statement);*/

function my_simple_return_function($statement = 'Default message') {

    $text_out = 'My message is the massage: ' . $statement;

    return $text_out.'<br />';
}

$statement = 'This is my simple message';

$text = my_simple_return_function($statement);

echo '<p>' . $text . '</p>';

$new_statement = 'This is a totally new statement';

$new_text = my_simple_return_function($new_statement);

echo '<p>'.$new_text.'</p>';

?>

<?php

include('footer.php');
