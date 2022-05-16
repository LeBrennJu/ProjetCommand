<?php

namespace App\models;

use App\utils\Database;
use PDO;



class Planeswalkers extends CoreModel
{
    public $texte2;
    public $texte3;
    public static function findAll()
    {
        $pdo = Database::getPDO();
        $sql = 'SELECT * FROM `planeswalkers`order by `color_id`,`manacost`';
        $pdoStatement = $pdo->query($sql);
        $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS, 'App\models\Planeswalkers');

        return $results;
    }
    public function findSelect($id)
    {
        $sql='SELECT*FROM `planeswalkers` WHERE `id` = ' . $id;
        $pdo = Database::getPDO();
        $pdoStatement = $pdo->query($sql);

        $results = $pdoStatement->fetchObject(self::class);

        return $results;
    }

    /**
     * Get the value of texte2
     */ 
    public function getTexte2()
    {
        return $this->texte2;
    }

    /**
     * Set the value of texte2
     *
     * @return  self
     */ 
    public function setTexte2($texte2)
    {
        $this->texte2 = $texte2;

        return $this;
    }

    /**
     * Get the value of texte3
     */ 
    public function getTexte3()
    {
        return $this->texte3;
    }

    /**
     * Set the value of texte3
     *
     * @return  self
     */ 
    public function setTexte3($texte3)
    {
        $this->texte3 = $texte3;

        return $this;
    }
}