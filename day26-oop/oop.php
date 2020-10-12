<?php

require_once 'User.php';


$steve = new User('steve');

var_dump($steve);

$steve->id = 1;
$steve->username = 'steve';
$steve->name = 'Stephen';

echo 'The name of user ' . $steve->id . ' is ' . $steve->name;

$bob = new User('bob', 10);

$steve->dump();

$bob->dump();