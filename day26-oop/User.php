<?php

class User
{
    public $id = null;
    public $username = null;
    public $name = null;
    public $password = null;
    public $number_of_posts = 0;
    public $created_at = null;

    public function __construct($username, $posts = 0)
    {
        $this->username = $username;
        $this->number_of_posts = $posts;
        $this->created_at = date('Y-m-d H:i:s');
    }

    public function dump()
    {
        var_dump( $this );
    }
}