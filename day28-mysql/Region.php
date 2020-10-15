<?php

class Region
{
    public $id = null;
    public $name = null;
    public $slug = null;

    /**
     * insert this object as a new record into
     * the table regions
     */
    public function insert()
    {
        $query = "
            INSERT
            INTO `regions`
            (`name`, `slug`)
            VALUES
            (?, ?)
        ";

        insert($query, [$this->name, $this->slug]);

        // update the value of property id 
        // with the value of `id` column that 
        // was assigned to it by the database
        $this->id = last_insert_id();
    }
}