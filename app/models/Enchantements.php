<?php

namespace App\models;
use App\Models\CoreModel;
use App\Models\Terrains;
use App\Models\Rituels;
use App\Models\Artefacts;
use App\Models\Ephemeres;

use App\utils\Database;
use PDO;



class Enchantements extends CoreModel
{
    

    public static function findAll()
    {
        $pdo = Database::getPDO();
        $sql = 'SELECT * FROM `enchantement`order by `color_id`,`manacost`';
        $pdoStatement = $pdo->query($sql);
        $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'App\models\Enchantements');

        return $results;
    }
    public function findSelect($id)
    {
        $sql='SELECT*FROM `enchantement`WHERE `id` = ' . $id;
        $pdo = Database::getPDO();
        $pdoStatement = $pdo->query($sql);

        $results = $pdoStatement->fetchObject(self::class);

        return $results;
    }
    public static function findAllNinja()
    {
        $pdo = Database::getPDO();
        $sql = 'SELECT * FROM `enchantement` WHERE `deck`="ninja" ORDER BY `manacost`';
        $pdoStatement = $pdo->query($sql);
        $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'App\models\Enchantements');

        return $results;
    }
    
}