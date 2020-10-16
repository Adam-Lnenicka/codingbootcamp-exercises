<?php

require_once 'Match.php';
require_once 'FootballMatch.php';
require_once 'IcehockeyMatch.php';

// $match = new Match('2020-10-16 12:00:00');
// $match->length = 60;

// var_dump( $match->getEstimatedEnd() );


$football_match = new FootballMatch('2020-10-16 12:00:00');

echo 'Football match ends at '.$football_match->getEstimatedEnd();

var_dump($football_match);

$icehockey_match = new IcehockeyMatch('2020-10-16 12:00:00');

echo 'The score of the second third is ' 
    . $icehockey_match->getThirdScore(2);

// ERROR:
// echo $football_match->getThirdScore(2);