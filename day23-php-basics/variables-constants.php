<?php

// variable scope A

$foo = 'Hello, world!'; // defined in variable scope A

echo $foo;

function bar($foo)
{
    // variable scope B
    echo $foo;
}

// variable scope A

bar($foo);

// variable scope A

echo $foo;

define('PROJECT_TYPE', 'exercise'); // creates a constant PROJECT_TYPE

echo 'This is an ' . PROJECT_TYPE;

$bax = 'Hello ' . $foo;

$quz = "Hello {$foo}xx";

$quz = "Hello $foo";
