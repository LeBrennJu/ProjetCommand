<?php

namespace App\models;

use App\utils\Database;
use PDO;



class Ephemeres extends CoreModel
{
    public static function findAll()
    {
        $pdo = Database::getPDO();
        $sql = 'SELECT * FROM `ephemere`order by `color_id`,`manacost` ';
        $pdoStatement = $pdo->query($sql);
        $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'App\models\Ephemeres');

        return $results;
    }
    public function findSelect($id)
    {
        $sql='SELECT*FROM `ephemere`WHERE `id` = ' . $id;
        $pdo = Database::getPDO();
        $pdoStatement = $pdo->query($sql);

        $results = $pdoStatement->fetchObject(self::class);

        return $results;
    }
}