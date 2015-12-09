<?php

namespace App\models;

use \PDO;
use App\classes\Connection;

require_once __DIR__ . '/../classes/Connection.php';

abstract class Model
{

    public static function findAll()
    {
        $dbh = new Connection();
        $sth = $dbh->prepare('SELECT * FROM ' . static::TABLE);
        $sth->execute();
        return $sth->fetchAll(PDO::FETCH_CLASS, static::class);
    }

}