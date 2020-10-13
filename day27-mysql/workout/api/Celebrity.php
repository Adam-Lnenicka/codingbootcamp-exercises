<?php

// 3.1
class Celebrity
{
    // 3.1.1
    public $name = null;
    public $photo = null;
    public $earnings = null;
    public $age = null;
    public $citizenship = null;
    public $events = [];

    // 3.1.2
    public function fill($array)
    {
        // foreach ($array as $key => $value) {
        //     $this->{$key} = $value;
        // }

        $this->name     = $array['name'];
        $this->photo    = $array['photo'];
        $this->earnings = $array['earnings'];
        $this->age      = $array['age'];
        $this->citizenship = $array['citizenship'];
        $this->events   = $array['events'];
    }
}