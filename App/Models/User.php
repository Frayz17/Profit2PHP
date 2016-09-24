<?php


namespace App\Models;

use App\Db;


class User {
    public $email;
    public $name;
    
    public static function findAll()
    {
        $db = new Db();
        return $db->query('Select * FROM users', 'App\Models\User');
    }
}
