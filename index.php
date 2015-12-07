<?php

try {
    $dbh = new PDO('mysql:dbname=yii2basic;host=127.0.0.1', 'root', '', [
    // данная константа используется в том случае, если не знаешь какая кодировка у данных в базе
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
    ]);
    // установка атрибута: режим ошибок, со значением: выброса исключений
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // установка атрибута: режим выборки данных по умолчанию, со значением: объект класса stdClass
    $dbh->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);

    // подготовленный запрос (метод класса PDO)
    $sth = $dbh->prepare('SELECT * FROM country WHERE code=:code');
    // запуск подготовленного запроса (метод класса PDOStatement)
    $sth->execute([':code' => 'RU']);
    // возврат результата запроса (метод класса PDOStatement)
    $res = $sth->fetchAll();

    var_dump($res);

} catch (PDOException $e) {
    echo $e->getMessage();
}