<?php

$array = [1, 2, 3];

var_dump($array);

$array = [
    'a' => 1, 
    'b' => 2,
    'c' => 3,
    4   => 4
];

var_dump($array);

$fruit = [];

$fruit[] = 'Apple';

$fruit[47] = 'Pear';

$fruit['yummy'] = 'Plum';

$fruit[] = 'Peach';

array_push($fruit, 'Apricot'); // JS: fruit.push('Apricot')

var_dump($fruit);

echo $fruit['yummy'];

$fruit['yummy'] = 'Strawberry';

var_dump($fruit);

echo $fruit['yummy'];

//unset($fruit['yummy']); // remove element from array

var_dump($fruit);

echo $fruit[49];

foreach ($fruit as $type) {
    echo 'In my bag I have ' . $type . '<br>';
}

foreach ($fruit as $some_number => $type_of_fruit) {
    echo $type_of_fruit . ' has an index of ' . $some_number . '<br>';
}

var_dump( count($fruit) );

var_dump( array_keys($fruit) );

var_dump( array_values($fruit) );