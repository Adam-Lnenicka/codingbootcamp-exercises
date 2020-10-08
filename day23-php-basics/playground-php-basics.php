<?php

$first_name = 'Bruce';
$surname = 'Wayne';

// echo 'First name: ' . $first_name . '<br>' . PHP_EOL;
// echo 'Surname: ' . $surname;

?>
First name: <?= $first_name ?><br>
Surname: <?= $surname ?>

<?php

$year_of_birth = 1939;
$height = 185;

?>
Year of birth: <?= $year_of_birth ?><br>
Height: <?= $height ?>

<?php

define('SERVER_SOFTWARE', 'Apache');

echo 'This server is running on ' . SERVER_SOFTWARE;

define('MY_OS', 'W10');

?>

My operating system is <?= MY_OS ?>

<?php

function greet_world() 
{
    echo 'Hello, world!';
}

greet_world();

function greet($whom)
{
    // echo "Hello, {$whom}?";

    echo greeting($whom);
}

greet('Prague');

function greeting($whom)
{
    // return 'Hello, ' . $whom . '!';

    return "Hello, {$whom}!";
}

echo greeting('Class');