<?php

require_once 'DB.php';
require_once 'DB_functions.php';

connect('127.0.0.1', 'world', 'root', '');

$query = "
    INSERT
    INTO `regions`
    (`name`, `slug`)
    VALUES
    (?, ?)
";

// insert($query, ['Eastern Europe', 'eastern-europe']);

$query = "
    INSERT
    INTO `regions`
    (`name`, `slug`)
    VALUES
    (?, ?)
";

// if ($nr_inserted = insert($query, ['Western Europe', 'western-europe'])) {
//     echo $nr_inserted . ' rows were inserted';
// }

$query = "
    INSERT 
    INTO `regions`
    (`name`, `slug`)
    VALUES
    (?, ?),
    (?, ?),
    (?, ?)
";

// if ($nr_inserted = insert($query, [
//     'North America', 
//     'north-america',
//     'Central America', 
//     'central-america',
//     'South America', 
//     'south-america',
// ])) {
//     echo $nr_inserted . ' rows were inserted';
// }

require_once 'Region.php';

$region = new Region;
$region->name = 'Central Africa';
$region->slug = 'central-africa';
$region->insert();

var_dump($region);

echo 'A region was inserted into database, id is ' . $region->id;