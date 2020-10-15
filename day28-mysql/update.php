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

// update($query, [
//     'Donald J. Trump',
//     'George W. Bush'
// ]);


$query = "
    UPDATE `countries`
    SET `population` = ?,
        `gnp` = ?
    WHERE `name` = ?
";

// update($query, [300, 13.91, 'United States Minor Outlying Islands']);


require_once 'Region.php';

// $region = new Region;
// $region->id = 3;
// $region->name = 'CHANGED';
// $region->slug = 'changed';

// $region->update();

$region = select_one("
    SELECT *
    FROM `regions`
    WHERE `id` = ?
", [4], 'Region');

// // var_dump($region);

// $region->name = 'My region!!';

// $region->update();


// insert
$sahara = new Region;
$sahara->name = 'Sahara';
$sahara->slug = 'sahara';
$sahara->save();


// update
$sahara = select_one("SELECT * FROM `regions` WHERE `slug` = ?", 'sahara', 'Region');

if ($sahara) { // record with `slug` = 'sahara' was found
    $sahara->name = 'La Sahara';
    $sahara->update();
}