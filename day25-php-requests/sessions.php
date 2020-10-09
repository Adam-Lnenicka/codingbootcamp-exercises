<?php

session_start();

var_dump( $_SESSION );

// $_SESSION['name'] = 'Jan';

// $_SESSION['start'] = date('H:i:s');

unset($_SESSION['start']);