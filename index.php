<?php

try {
    $dbh = new PDO('mysql:dbname=yii2basic;host=127.0.0.1', 'root', '', [
    // данная константа используется в том случае, если не знаешь какая кодировка у данных в базе
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
    ]);
} catch (PDOException $e) {
    echo $e->getMessage();
}