<?php

require_once 'Warehouse.php';

$warehouse = new Warehouse;

$warehouse->name = 'Docks warehouse';

// $warehouse->nr_of_crates = 2;

// $warehouse->crates = [
//     'Arc of Covenant',
//     'Doomsday device',
//     'Box of contortionists'
// ];

$warehouse->addCrate('Arc of Covenant');
$warehouse->addCrate('Doomsday device');
$warehouse->addCrate('Box of contortionists');




var_dump($warehouse);