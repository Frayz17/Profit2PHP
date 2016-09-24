<?php


namespace App;


class Model {
    const TABLE = '';
    
    public static function findAll()
    {
        $db = new Db();
        return $db->query('Select * FROM ' . static::TABLE, static::class);
    }
}
