<?php

namespace models;

class Country
    extends Model
{

    const TABLE = 'country';

    public $code;
    public $name;
    public $population;

}