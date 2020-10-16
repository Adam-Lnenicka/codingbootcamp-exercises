<?php

class IcehockeyMatch extends Match
{
    public $nr_of_players = 12;
    public $length = 60;

    //                  0      1      2
    public $thirds = ['0:0', '0:0', '0:0'];

    public function getThirdScore($third_nr)
    {
        return $this->thirds[$third_nr - 1];
    }
}