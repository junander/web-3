<?php

include('header.php');

$fruits = array('apple', 'banna', 'pear');

foreach ($fruits as $fruit) {

    echo '<p>This fruit is ' . $fruit . '</p>';
}

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

foreach ($foods as $type => $food) {

    echo '<p>The food ' . $food . ' is a ' . $type . '</p>';
}

include('footer.php');
