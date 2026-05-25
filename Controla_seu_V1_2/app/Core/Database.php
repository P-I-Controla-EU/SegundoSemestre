<?php

namespace App\Core;

use PDO;
use PDOException;

final class Database
{
    public function __construct(protected $db = null)
    {
        $parametros = 'mysql:host=localhost;dbname=Loja;charset=utf8mb4';

        try {
            $this->db = new PDO($parametros, 'root', '');
        } catch (PDOException $e) {
            echo $e->getCode();
            echo $e->getMessage();
            die('Tente mais tarde!!!');
        }
    }

    public static function getConnection(): PDO
    {
        return (new self())->db;
    }
}
