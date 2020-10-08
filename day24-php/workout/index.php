<?php

$name = 'Jan';
$birth_month = '06';
$birth_day = '05';
$birth_date = $birth_month . '-' . $birth_day;

var_dump($birth_date);

define('DATE_OF_BIRTH_FORMAT', 'm-d');

$today = date(DATE_OF_BIRTH_FORMAT);

var_dump($today);

$birth_year = 1982;

$this_year = date('Y');

// for ($ord = 0; $ord < 255; $ord++) {
//     var_dump(chr($ord));    
// }
// var_dump(ord('Y'));
// var_dump(ord('a'));
// var_dump(ord('b'));

if ($birth_date > $today) {
    echo "${name} will turn " . ($this_year - $birth_year) . " this year";
} else {
    echo "${name} turned " . ($this_year - $birth_year) . " this year";
}

function getBirthdaySentence($name, $birth_year, $year)
{
    return "In the year {$year} {$name} turned " . ($year - $birth_year) . ".";
}

for ($year = $birth_year; $year <= $this_year; $year++) {

    echo getBirthdaySentence($name, $birth_year, $year) . '<br>';

}