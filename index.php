<?php

try {
    $dbh = new PDO('mysql:dbname=yii2basic;host=127.0.0.1', 'root', '', [
    // данная константа используется в том случае, если не знаешь какая кодировка у данных в базе
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
    ]);
    // установка атрибута: режим ошибок, со значением: выброса исключений
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // подготовленный запрос
    $sth = $dbh->prepare('SELECT * FROM country');
    // запуск подготовленного запроса
    $sth->execute();
    // возврат результата запроса
    $res = $sth->fetchAll();
    var_dump($res);
} catch (PDOException $e) {
    echo $e->getMessage();
}