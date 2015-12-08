<?php

require_once __DIR__ . '/models/Country.php';

try {
    /*$dbh = new Connection();

    // подготовленный запрос (метод класса PDO)
    $sth = $dbh->prepare('SELECT * FROM country WHERE code=:code');
    // привязка параметра к заданному значению, с явно заданным типом данных этого значения
    $sth->bindValue(':code', 'RU', PDO::PARAM_STR);
    // запуск подготовленного запроса (метод класса PDOStatement)
    $sth->execute();
    // возврат результата запроса (метод класса PDOStatement)
    $res = $sth->fetchAll(PDO::FETCH_CLASS, Country::class);*/
    $data = Country::findAll();
    var_dump($data);

} catch (PDOException $e) {
    echo 'Подключение не удалось: ' . $e->getMessage();
}