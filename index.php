<?php

require_once __DIR__ . '/models/Country.php';
require_once __DIR__ . '/models/Users.php';

try {

    $data = Country::findAll();
    var_dump($data);
    $data = Users::findAll();
    var_dump($data);

} catch (PDOException $e) {
    echo 'Подключение не удалось: ' . $e->getMessage();
}