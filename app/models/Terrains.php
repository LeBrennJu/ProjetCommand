<?php

namespace App\models;

use App\utils\Database;
use PDO;

class Terrains extends CoreModel
{
    

    public static function findAll()
    {
        $pdo = Database::getPDO();
        $sql = 'SELECT * FROM `lands`';
        $pdoStatement = $pdo->query($sql);
        $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'App\models\Terrains');

        return $results;
    }
    public function findSelect($id)
    {
        $sql='SELECT*FROM `lands`WHERE `id` = ' . $id;
        $pdo = Database::getPDO();
        $pdoStatement = $pdo->query($sql);

        $results = $pdoStatement->fetchObject(self::class);

        return $results;
    }
}