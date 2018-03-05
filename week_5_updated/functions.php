<?php //include('header.php'); ?>

<?php

function my_simple_echo_function($number, $statement = 'This is my default echo statement') {
	
	if(empty($number)){
		echo 'You lose<br />';
	}

    echo $statement.'<br />';
}

//my_simple_echo_function(4,'This is a cool argument for my echo');
//my_simple_echo_function(5,'This is a totally different thing');
//my_simple_echo_function(2);

function my_simple_return_function($statement = 'No message'){

 $text_out = 'My message is: '.$statement;

 //My message is: This is my title message
 return $text_out;
 
}

$title = 'This is my title message';

$title_text = my_simple_return_function($title);

echo '<h2>'.$title_text.'</h2>';

$content = 'This is my content message';

$content_text = my_simple_return_function($content);

echo '<p>'.$content_text.'</p>';

?>

<?php

include('footer.php');
