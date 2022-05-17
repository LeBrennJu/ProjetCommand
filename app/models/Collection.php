<?php

namespace App\models;
use App\utils\Database;
use PDO;
use App\Models\CoreModel;
use App\Models\Terrains;
use App\Models\Rituels;
use App\Models\Enchantements;
use App\Models\Artefacts;
use App\Models\Ephemeres;
use App\Models\Creatures;
use App\Models\Planeswalkers;
use App\Models\Decks;
use App\Models\Cards;

class Collection extends CoreModel
{
        
    //COLLECTION
    public function orderCollect($color,$id)
    {
        $pdo = Database::getPDO();
        $sql = "
        select * from `cards` where `color_id`='$color' and `manacost`='$id'
        
        
        "
        ;
        $pdoStatement = $pdo->query($sql);
        $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS,'App\models\Cards');

        return $results;
    }
    public function collectColor($color)
    {
        $pdo = Database::getPDO();
        $sql = "
        select * from `cards` where `color_id`='$color'
        
        order by `manacost`"
        ;
        $pdoStatement = $pdo->query($sql);
        $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS,'App\models\Cards');

        return $results;
    }
    public function collectCost($cout)
    {
        $pdo = Database::getPDO();
        $sql = "
        select * from `cards` where `manacost`= '$cout' 
         order by `color_id`       
        "
        ;
        $pdoStatement = $pdo->query($sql);
        $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS,'App\models\Cards');

        return $results;
    }
    public function collect6Plus()
    {
        $pdo = Database::getPDO();
        $sql = '
        select * from `cards` where `manacost` >=6 
        
        order by `color_id`,`manacost`'
        ;
        $pdoStatement = $pdo->query($sql);
        $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS,'App\models\Cards');

        return $results;
    }
    public function collect6PlusColor($color)
    {
        $pdo = Database::getPDO();
        $sql = "
        select * from `cards` where `manacost` >=6 AND `color_id` = '$color'
        
        order by `color_id`,`manacost`"
        ;
        $pdoStatement = $pdo->query($sql);
        $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS,'App\models\Cards');

        return $results;
    }
    public function findCollect()
    {
        $pdo = Database::getPDO();
        $sql = '
        select * from `cards`  
        
        order by `color_id`,`manacost`'
        ;
        $pdoStatement = $pdo->query($sql);
        $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS,'App\models\Cards');

        return $results;
    }
    
}