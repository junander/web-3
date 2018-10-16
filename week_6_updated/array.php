<?php

include('header.php');

//$fruits = array('apple', 'banna', 'pear');

$fruits = array(
 0 => 'apple',
 1 => 'banana',
 2 => 'pear',
);

echo 'My second fruit is: '.$fruits[1];
?>

<br /><br />

<?php
$foods = array(
 'fruit' => 'apple',
 'vegetable' => 'carrot',
 'grain' => 'bagel'
);

echo 'My favorite fruit is: '. $foods['fruit'];

//real world example
$post = array(
 'title' => 'My First Post',
 'author' => 'Joe Schmo',
 'date' => '02/09/2017',
 'content' => 'This is my first post. It is a very exciting post',
);
?>

<h2><?php echo $post['title']; ?></h2>

<?php $post['title'] = 'My post title: '.$post['title']; ?>

<h2><?php echo $post['title']; ?></h2>
<p><em>--<?php echo $post['author']; ?></em></p>

<?php

echo '<hr />';
echo '<hr />';

/**
$fruits = array(
 0 => 'apple',
 1 => 'banana',
 2 => 'pear',
);
*/
foreach ($fruits as $fruit) {

    echo '<p>This fruit is ' . $fruit . '</p>';
}

echo '<hr />';
echo '<hr />';

foreach ($fruits as $key => $fruit) {

    echo '<p>The fruit ' . $fruit . ' has a key of ' . $key . '</p>';
}

echo '<hr />';

$foods = array(
    'fruit' => 'apple',
    'vegetable' => 'carrot',
    'grain' => 'bagel'
);

//for those who would like to challenge themselves
//try looping through this
$food_advanced = array(
    'fruits' => array(
        'red' => 'apple',
        'orange' => 'orange'
    ),
    'vegetables' => array(
        'green' => 'broccoli',
        'orange' => 'carrot'
    )
);

$type = 'blah blah';
$legacy = $type;

foreach ($foods as $type => $food) {

    echo '<p>The food ' . $food . ' is a ' . $type . '</p>';
}

$type = $legacy;
echo '<p>'.$type.'</p>';

echo '<hr />';

/*
$post = array(
 'title' => 'My First Post',
 'author' => 'Joe Schmo',
 'date' => '02/09/2017',
 'content' => 'This is my first post. It is a very exciting post',
);*/

foreach ($post as $field => $content){
    echo '<p>The ' .$field. ' value is: '.$content;
}

include('footer.php');
