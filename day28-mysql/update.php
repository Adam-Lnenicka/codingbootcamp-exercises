<?php

require_once 'DB.php';
require_once 'DB_functions.php';

connect('127.0.0.1', 'world', 'root', '');

$query = "
    UPDATE `cities`
    SET `name` = ?
    WHERE `id` = ?
";

update($query, [
    'Prague',
    3339
]);


$query = "
    UPDATE `cities`
    SET `population` = ?
    WHERE `id` = ?
";

update($query, [
    1294513,
    3339
]);

// $prague = select_one("
//     SELECT *
//     FROM `cities`
//     WHERE `id` = ?
// ", [3339]);


// var_dump($prague);

$query = "
    UPDATE `countries`
    SET `head_of_state` = ?
    WHERE `name` = ?
";

update($query, [
    'Xavier Espot Zamora',
    'Andorra'
]);

$query = "
    UPDATE `countries`
    SET `head_of_state` = ?
    WHERE `head_of_state` = ?
";

update($query, [
    'Donald J. Trump',
    'George W. Bush'
]);