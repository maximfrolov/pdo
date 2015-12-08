<?php

require_once __DIR__ . '/models/Country.php';
require_once __DIR__ . '/classes/Connection.php';

try {
    $dbh = new Connection(include 'config.php');

    // подготовленный запрос (метод класса PDO)
    $sth = $dbh->prepare('SELECT * FROM country WHERE code=:code');
    // запуск подготовленного запроса (метод класса PDOStatement)
    $sth->execute([':code' => 'RU']);
    // возврат результата запроса (метод класса PDOStatement)
    $res = $sth->fetchAll(PDO::FETCH_CLASS, Country::class);

    $sth = $dbh->prepare('SELECT COUNT(*) FROM country');
    $sth->execute();
    $res = $sth->fetchOne();

    var_dump($res);

} catch (PDOException $e) {
    echo 'Подключение не удалось: ' . $e->getMessage();
}