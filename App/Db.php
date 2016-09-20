<?php


namespace App;


class Db {
    
    
    public function __construct()
    {
        $dbh = new \PDO('mysql:host=127.0.0.1; dbname=profit2php', 'root', '');
    }
}