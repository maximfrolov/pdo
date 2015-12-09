<?php

namespace classes;

use \PDO;
use \PDOStatement;

class Statement
    extends PDOStatement

{

    // метод для возврата одной величины из запроса
    public function fetchOne()
    {
        $data = $this->fetch(PDO::FETCH_NUM);
        return $data[0];
    }

}