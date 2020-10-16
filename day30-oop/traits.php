<?php

require_once 'Animal.php';
require_once 'Domesticated.php';
require_once 'Dog.php';
require_once 'Sheep.php';
require_once 'Wolf.php';

$ben = new Dog;
$ben->eat();
$ben->beFed();

$shaun = new Sheep;
$shaun->eat();
$shaun->beFed();

$fang = new Wolf;
$fang->eat();
// ERROR:
// $fang->beFed(); 