<?php

namespace models;

use \PDO;
use classes\Connection;

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