<?php

// require libraries
// == files that only contain declarations
require_once 'fellowship.php'; // 3rd party functions
require_once 'functions.php';  // our own functions

// include the code that actually does something
// == performs operations on the $party
include 'journey.php';

// visualize the data, display some output
present_party($party);