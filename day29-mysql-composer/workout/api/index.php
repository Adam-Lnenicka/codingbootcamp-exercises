<?php

// require necessary libraries
require_once 'DB.php';
require_once 'DB_functions.php';

// connect to the database
connect('127.0.0.1', 'games', 'root', '');

if (isset($_GET['orderby'])) {
    $orderby = $_GET['orderby'];
} else {
    $orderby = 'name';
}

$orderby = $_GET['orderby'] ?? 'name'; // exactly the same as above
$orderway = $_GET['way'] ?? 'asc';

// validation of user input in URL parameters
if (!in_array($orderby, [
    'name',
    'rating',
    'id',
    'released_at'
])) {
    // if ($orderby != 'name' && $orderby != 'rating') {
    exit('No, this is not right!');
}

if (!in_array($orderway, ['asc', 'desc'])) {
    exit('No, this is not right!');
}

// select games data
$query = "
    SELECT *
    FROM `games`
    ORDER BY `{$orderby}` {$orderway}
";

$games = select($query);

// output games data as JSON
header('Content-type: application/json');

echo json_encode($games);
