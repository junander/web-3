<?php

include('header.php');

$fruits = array('apple', 'banana', 'pear');

/*
$fruits = array(
 0 => 'apple',
 1 => 'banana',
 2 => 'pear',
);
*/

//echo '<pre>'.print_r($fruits, true).'</pre>';

/*echo '<p>'.$fruits[0].'</p>';
echo '<p>'.$fruits[1].'</p>';

echo '<hr/>';

$foods = array(
 'fruit' => 'apple',
 'vegetable' => 'carrot',
 'grain' => 'bagel',
);

echo '<p>'.$foods['grain'].'</p>';*/

/*echo '<hr />';

foreach ($fruits as $fruit) {

    echo '<p>This fruit is a ' . $fruit . '</p>';
}*/

echo '<hr />';

$foods = array(
    'fruit' => 'apple',
    'vegetable' => 'carrot',
    'grain' => 'bagel'
);

foreach ($foods as $type => $food) {

    echo '<p>The food ' . $food . ' is a ' . $type . '</p>';
}

include('footer.php');
