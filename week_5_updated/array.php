<?php

include('header.php');

$fruits = array('apple', 'banana', 'pear');

//echo 'The fruit I want is: '.$fruits[0];

$foods = array(
 'fruit' => 'apple',
 'vegetable' => 'carrot',
 'grain' => 'bagel',
 'fruit' => 'banana',
);

//echo 'The fruit I want is: '.$foods['fruit'];
//echo '<br />';
//echo 'The vegetable I want is: '.$foods['vegetable']; 

$post = array(
 'title' => 'My First Post',
 'author' => 'Joe Schmo',
 'date' => '02/09/2017',
 'content' => 'This is my first post. It is a very exciting post',
);

//echo '<h2>'.$post['title'].'</h2>';
//echo '<em>'.$post['author'].'</em>';
//echo '<p>'.$post['content'].'</p>';

$fruits = array('apple', 'banana', 'pear', 'apricot');

//echo '<pre>'.print_r($fruits, true).'</pre>';

foreach ($fruits as $yummy_thing){
 //echo '<p>This fruit is ' . $yummy_thing . '</p>';
}

//echo '<pre>'.print_r($fruits, true).'</pre>';

foreach ($fruits as $key => $fruit) {
 //echo '<p>The fruit ' . $fruit . ' has a key of ' . $key . '</p>';
}

$foods = array(
 'fruit' => 'apple',
 'vegetable' => 'carrot',
 'grain' => 'bagel'
);

foreach ($foods as $type => $food) {
 //echo '<p>The food ' . $food . ' is a ' . $type . '</p>';
}

foreach ($post as $type => $post_data){
	echo '<p class="data-'.$type.'">'.$post_data.'</p>';
}

include('footer.php');
