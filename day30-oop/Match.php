<?php

class Match
{
    public $begins_at = null;
    public $score = null;
    public $nr_of_players = null;
    public $length = null;

    /**
     * the construct method
     * 
     * @param string datetime string for the beginning of match
     */
    public function __construct($begins_at)
    {
        $this->begins_at = $begins_at;
    }

    /**
     * calculates the date and time of the match's end
     * using the begins_at property and the length property
     * 
     * @return datetime string
     */
    public function getEstimatedEnd()
    {
        // convert datetime string into seconds
        // e.g. '2020-10-16 11:50:00' into 1602841800
        $begins_at_timestamp = strtotime($this->begins_at);                                                  // 

        // add the length of the match in seconds to the beginning of the match
        $ends_at_timestamp = $begins_at_timestamp + (60 * $this->length);

        // convert the second the match ends into a datetime string
        $ends_at_string = date('Y-m-d H:i:s', $ends_at_timestamp);

        // return the datetime string
        return $ends_at_string;
    }
}