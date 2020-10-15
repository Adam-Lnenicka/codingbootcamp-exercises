<?php

require_once 'DB.php';
require_once 'DB_functions.php';

connect('127.0.0.1', 'world', 'root', '');

$query = "
    DELETE
    FROM `regions`
    WHERE `id` = ?
";

// delete($query, [1]);

$query = "
    DELETE
    FROM `regions`
    WHERE `slug` LIKE ?
";

// delete($query, ['%america%']);

require_once 'Region.php';

$sahara = select_one("SELECT * FROM `regions` WHERE `slug` = ?", 'sahara', 'Region');

// $sahara->delete();

$all_regions = select("SELECT * FROM `regions`", [], 'Region');

foreach ($all_regions as $region) {
    $region->delete();
}
