<?php

require_once 'DB.php';
require_once 'DB_functions.php';

connect('127.0.0.1', 'world', 'root', '');

$query = "
    SELECT *
    FROM `cities` 
    WHERE `population` > ? 
      AND `population` < ?
      AND `country_id` = ?
";

$cities = select($query, [1000000, 2000000, 56]);

var_dump($cities);