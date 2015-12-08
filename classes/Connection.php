<?php

require __DIR__ . '/Statement.php';

class Connection
    extends PDO
{

    public function __construct()
    {
        $config = include __DIR__ . '/../config.php';
        $dsn = $config['driver'] . ':dbname=' . $config['dbname'] . ';host=' . $config['host'];
        parent::__construct(
            $dsn,
            $config['user'],
            $config['password'],
            // данная константа используется в том случае, если не знаешь какая кодировка у данных в базе
            [PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',]
        );
        // установка атрибута: режим ошибок, со значением: выброса исключений
        $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // установка атрибута: режим выборки данных по умолчанию, со значением: объект класса stdClass
        $this->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        // установка пользовательского класса Statement, который заменит PDOStatement
        $this->setAttribute(PDO::ATTR_STATEMENT_CLASS, [Statement::class]);
    }

}