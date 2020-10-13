<?php

include 'data.php';

require_once 'Celebrity.php';

// to test 3.1.2 :
// $taylor = new Celebrity;
// $taylor->fill($data[0]);
// var_dump($taylor);

// 3.2 - from array of arrays (what you have in data.php)
//       into array of Celebrity objects
$celebrities = [];

foreach ($data as $item) {
    $celebrity = new Celebrity;
    $celebrity->fill($item);

    $celebrities[] = $celebrity;
}

// send JSON headers
header('Content-type: application/json');

// output $celebrities encoded as a JSON string
echo json_encode($celebrities);