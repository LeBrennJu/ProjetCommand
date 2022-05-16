<?php

namespace App\models;

use App\utils\Database;
use PDO;



class Rituels extends CoreModel
{
    

    public static function findAll()
    {
        $pdo = Database::getPDO();
        $sql = 'SELECT * FROM `rituel`order by `color_id`,`manacost`';
        $pdoStatement = $pdo->query($sql);
        $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'App\models\Rituels');

        return $results;
    }
    public function findSelect($id)
    {
        $sql='SELECT*FROM `rituel`WHERE `id` = ' . $id;
        $pdo = Database::getPDO();
        $pdoStatement = $pdo->query($sql);

        $results = $pdoStatement->fetchObject(self::class);

        return $results;
    }
}