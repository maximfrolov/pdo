<?php

class Country
{
    const TABLE = 'country';

    public $code;
    public $name;
    public $population;

    public static function findAll()
    {
        $dbh = new Connection();
        $sth = $dbh->prepare('SELECT * FROM' . self::TABLE);
        return $sth->fetchAll(PDO::FETCH_CLASS, self::class);
    }

}