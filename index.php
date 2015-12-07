<?php

try {
    $dbh = new PDO(
        'mysql:dbname=yii2basic;host=127.0.0.1',
        'root',
        ''
    );
} catch (PDOException $e) {
    echo $e->getMessage();
}