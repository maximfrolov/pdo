<?php

namespace models;

class Users
    extends Model
{

    const TABLE = 'users';

    public $id;
    public $name;
    public $email;

}