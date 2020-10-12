<?php

// pretending to access database...
// (coming soon)

// ...from which we got this:
$movies = [
    'The Shawshank redemption',
    'The Godfather',
    'The Godfather II',
    'Dark Knight', 
    '12 angry men', 
    'Schindler\'s list',
    'Pulp fiction',
    'Lord of the Rings: Return of the King',
    'The good, the bad and the ugly',
    'Fight club'
];

if ($_GET['sort'] ?? 'default' == 'alphabetical') {
    sort($movies);
}

// send JSON header, telling any consumer that
// this response is JSON
header('Content-type: application/json');

// encode the $movies as JSON and output them
echo json_encode($movies);