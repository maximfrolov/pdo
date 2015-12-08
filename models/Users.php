<?php

require_once __DIR__ . '/Model.php';

class Users
    extends Model
{

    const TABLE = 'users';

    public $id;
    public $name;
    public $email;

}