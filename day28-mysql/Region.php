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

    /**
     * updates this record in database if it was
     * alread saved there
     */
    public function update()
    {
        if (!$this->id) {
            return false;
        }

        $query = "
            UPDATE `regions`
            SET `name` = ?,
                `slug` = ?
            WHERE `id` = ?
        ";

        update($query, [$this->name, $this->slug, $this->id]);
    }
}