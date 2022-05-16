<?php

namespace App\models;
use App\utils\Database;
use PDO;
use App\Models\CoreModel;
use App\Models\Creatures;
use App\Models\Planeswalkers;
use App\Models\Decks;


class Cards extends CoreModel
{
    public static function findAll()
    {
        $pdo = Database::getPDO();
        $sql = 'SELECT * FROM `cards`order by `manacost`';
        $pdoStatement = $pdo->query($sql);
        $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'App\models\Cards');

        return $results;
    }
}