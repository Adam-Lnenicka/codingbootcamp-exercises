<?php

// require libraries needed for "database" access
require_once 'DBBlackbox.php';

// start the session to have the possibility
// to flash data
session_start();

// validation
// coming soon...

// is this creating a new puppy or editing and existing puppy
if (isset($_GET['puppy_id'])) {
    // this is editing a puppy with id $_GET['puppy_id']
} else {
    // this is creating a new puppy

    // prepare empty data
    $puppy = [
        'name' => null,
        'breed' => null,
        'cuteness' => 9
    ];
}

// fill data with request data:

// long version for explanation
// if (isset($_POST['name'])) {
//     $puppy['name'] = $_POST['name'];
// } else {
//     $puppy['name'] = $puppy['name']; // i.e. "keep the value"
// }

// short version
$puppy['name']      = $_POST['name']     ?? $puppy['name'];
$puppy['breed']     = $_POST['breed']    ?? $puppy['breed'];
$puppy['cuteness']  = $_POST['cuteness'] ?? $puppy['cuteness'];

// save the data
if (isset($_GET['puppy_id'])) {
    // this is editing a puppy with id $_GET['puppy_id']
    
    // get puppy_id from the URL
    $puppy_id = $_GET['puppy_id'];

    // find the correct puppy in the database
    $puppy = find($_GET['puppy_id']);

} else {
    // this is creating a new puppy
    $puppy_id = insert($puppy);
}

// flash success message(s)
$_SESSION['flashed_messages'] = ['Puppy successfully saved!'];

// redirect (to the display form, with the inserted puppy's id)
header('Location: display-form.php?puppy_id=' . $puppy_id);