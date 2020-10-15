<?php

require_once 'DB.php';
require_once 'DB_functions.php';

connect('127.0.0.1', 'world', 'root', '');


$query = "
    SELECT *
    FROM `cities`
    WHERE `district` LIKE ?
";

// var_dump( select($query, ['%Holland']) );


$query = "
    SELECT *
    FROM `cities`
    WHERE `name` LIKE ?
";

// var_dump( select($query, ['%ville%']) );

$query = "
    SELECT *
    FROM `cities`
    WHERE `country_id` IN (?, ?, ?, ?)
    ORDER BY `population` DESC
    LIMIT 10
";

var_dump( select($query, [56, 199, 172, 98]) );