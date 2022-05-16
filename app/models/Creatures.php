<?php

namespace App\models;

use App\utils\Database;
use PDO;



class Creatures extends CoreModel
{ 
    public function findSelectTribut($tribut)
    {
        $pdo = Database::getPDO();
        $sql = "
        SELECT * FROM `cards` WHERE `tribut`= '$tribut'
        UNION
        SELECT * FROM `cards` WHERE `tribut2`= '$tribut'
        order by `color_id`,`manacost` "
        ;
        $pdoStatement = $pdo->query($sql);
        $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'App\models\Creatures');

        return $results;
    }
    public function allCommand()
    {
        $pdo = Database::getPDO();
        $sql = 'SELECT * FROM `commandant`order by `name`';
        $pdoStatement = $pdo->query($sql);
        $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'App\models\Creatures');

        return $results;
    }
    public function allBackground()
    {
        $pdo = Database::getPDO();
        $sql = 'SELECT * FROM `background`order by `name`';
        $pdoStatement = $pdo->query($sql);
        $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'App\models\Creatures');

        return $results;
    }
}