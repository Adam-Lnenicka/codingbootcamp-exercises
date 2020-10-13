<?php

// require necessary libraries
require_once 'DB.php';
require_once 'DB_functions.php';
require_once 'Country.php';

// connect to the correct database
connect('127.0.0.1', 'world', 'root', '');

//         run a query
$results = select('SELECT * FROM `countries` WHERE `population` > 20000000', [], 'Country');

var_dump($results);