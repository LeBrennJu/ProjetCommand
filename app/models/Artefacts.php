<?php

namespace App\models;

use App\utils\Database;
use PDO;



class Artefacts extends CoreModel
{
    

    public static function findAll()
    {
        $pdo = Database::getPDO();
        $sql = 'SELECT * FROM `artefact`order by `color_id`,`manacost`';
        $pdoStatement = $pdo->query($sql);
        $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'App\models\Artefacts');

        return $results;
    }
    public function findSelect($id)
    {
        $sql='SELECT*FROM `artefact` WHERE `id` = ' . $id;
        $pdo = Database::getPDO();
        $pdoStatement = $pdo->query($sql);

        $results = $pdoStatement->fetchObject(self::class);

        return $results;
    }
}