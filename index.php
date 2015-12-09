<?php

namespace controllers;

use models\Country;
use models\Users;
use \PDOException;

require __DIR__ . '/autoload.php';

try {

    $data = Country::findAll();
    var_dump($data);
    $data = Users::findAll();
    var_dump($data);

} catch (PDOException $e) {
    echo 'Подключение не удалось: ' . $e->getMessage();
}