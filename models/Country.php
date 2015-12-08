<?php

require_once __DIR__ . '/Model.php';

class Country
    extends Model
{

    const TABLE = 'country';

    public $code;
    public $name;
    public $population;

}