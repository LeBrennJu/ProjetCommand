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

class Decks extends CoreModel
{

    public function selectCard($deck,$id)
    {
        $pdo = Database::getPDO();
        $sql = "
        select * from $deck where `id`='$id'
        ";
        $pdoStatement = $pdo->query($sql);
        $results = $pdoStatement->fetchObject(self::class);
        return $results;
    }
    public function selectCollect($id)
    {
        $pdo = Database::getPDO();
        $sql = "
        select * from `cards` where `id`='$id'
        ";
        $pdoStatement = $pdo->query($sql);
        $results = $pdoStatement->fetchObject(self::class);

        return $results;
    }
    public function selectDeck($deck)
    {
        
        $pdo = Database::getPDO();
        $sql = "
        select * from `cards` where `deck`='$deck'
        
        
        order by `color_id`,`manacost`,`id`"
        ;
        
        $pdoStatement = $pdo->query($sql);
        $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS,'App\models\Cards');

        return $results;
    }
    public function selectedDeck($userDeck,$deck)
    {
        $pdo = Database::getPDO();
        $sql = "
        select * from $userDeck where `name`='$deck'
        ";
        $pdoStatement = $pdo->query($sql);
        $results = $pdoStatement->fetchObject(self::class);

        return $results;
    }
    public function allDeck()
    {
        if(isset($_SESSION['connectedUser'])):
        $user=$_SESSION['connectedUser']->getIdentifiant()."decks";
        endif;
        $pdo = Database::getPDO();
        $sql = "
        select * from $user 
        ";
        $pdoStatement = $pdo->query($sql);
        $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS,'App\models\Decks');

        return $results;
    }
    public function findDeck($deck)
    {
        $sql="SELECT * FROM  $deck
        ORDER BY manacost, color_id
        ";
        $pdo = Database::getPDO();
        $pdoStatement = $pdo->query($sql);
        $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS,'App\models\Decks');
        return $results;
    }
    public function findCard($id)
    {
        $sql="SELECT*FROM `cards` WHERE `id` = " . $id;
        $pdo = Database::getPDO();
        $pdoStatement = $pdo->query($sql);
        $results = $pdoStatement->fetchObject(self::class);

        return $results;
    }
    public function findCardById($id)
    {
        $sql="SELECT*FROM `cards` WHERE `id` = " . $id;
        $pdo = Database::getPDO();
        $pdoStatement = $pdo->query($sql);
        $results = $pdoStatement->fetchObject(self::class);

        return $results;
    }
    public function findCommand($deck)
    {
        $sql=" SELECT*FROM `decks` WHERE `name` = '$deck' " ;
        $pdo = Database::getPDO();
        $pdoStatement = $pdo->query($sql);
        $results = $pdoStatement->fetchObject(self::class);
        
        return $results;
    }
    //DECK
    //DECK NINJA
    public function findNinja($deck)
    {
        $pdo = Database::getPDO();
        $sql = "
        select * from $deck
        order by `color_id`,`manacost`,`id`
        ";
        $pdoStatement = $pdo->query($sql);
        $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS,'App\models\Cards');

        return $results;
    }
    //COUNT COULEURS
    public function countNinjaBlack($deck)
    {
        $pdo = Database::getPDO();
        $sql = "
        select * from $deck where color_id='1'
        union
        select * from $deck where color_id='7'
        "
        ;
        $pdoStatement = $pdo->query($sql);
        $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS,'App\models\Cards');

        return $results; 
    }
    //COUNT TYPES
    public function countNinjaArtefact($deck)
    {
        $pdo = Database::getPDO();
        $sql = "
        select * from `cards` where `deck`='$deck' and color_id='6'
        "
        ;
        $pdoStatement = $pdo->query($sql);
        $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS,'App\models\Cards');

        return $results; 
    }
    public function countNinjaEphemere($deck)
    {
        $pdo = Database::getPDO();
        $sql = "
        select * from  $deck where `type`='ephemere'
        "
        ;
        $pdoStatement = $pdo->query($sql);
        $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS,'App\models\Cards');

        return $results; 
    }
    public function countNinjaRituel($deck)
    {
        $pdo = Database::getPDO();
        $sql = "
        select * from  $deck where `type`='rituel'
        "
        ;
        $pdoStatement = $pdo->query($sql);
        $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS,'App\models\Cards');

        return $results; 
    }
    public function countNinjaEnchant($deck)
    {
        $pdo = Database::getPDO();
        $sql = "
        select * from  $deck where `type`='enchantements'
        "
        ;
        $pdoStatement = $pdo->query($sql);
        $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS,'App\models\Cards');

        return $results; 
    }
    public function countNinjaCreature($deck)
    {
        $pdo = Database::getPDO();
        $sql = "
        select * from  $deck where `type`='creature'
        "
        ;
        $pdoStatement = $pdo->query($sql);
        $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS,'App\models\Cards');

        return $results; 
    }
    public function countPlaneswalkers($deck)
    {
        $pdo = Database::getPDO();
        $sql = "
        select * from  $deck where `type`='planeswalkers'
        "
        ;
        $pdoStatement = $pdo->query($sql);
        $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS,'App\models\Cards');

        return $results; 
    }
    //COUNT VALEURS
    public function countOne($deck)
    {
        $pdo = Database::getPDO();
        $sql = $sql = "
        select * from {$deck} where `manacost`='1'
        "
        ;
        $pdoStatement = $pdo->query($sql);
        $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS,'App\models\Cards');
        
        return $results; 
    }
    public function countTwo($deck)
    {
        $pdo = Database::getPDO();
        $sql = "
        select * from {$deck} where `manacost`='2'
        "
        ;
        $pdoStatement = $pdo->query($sql);
        $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS,'App\models\Cards');

        return $results; 
    }
    public function countThree($deck)
    {
        $pdo = Database::getPDO();
        $sql = "
        select * from {$deck} where `manacost`='3'
        "
        ;
        $pdoStatement = $pdo->query($sql);
        $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS,'App\models\Cards');

        return $results; 
    }
    public function countFourth($deck)
    {
        $pdo = Database::getPDO();
        $sql = $sql = "
        select * from {$deck} where `manacost`='4'
        "
        ;
        $pdoStatement = $pdo->query($sql);
        $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS,'App\models\Cards');

        return $results; 
    }
    public function countFive($deck)
    {
        $pdo = Database::getPDO();
        $sql = $sql = "
        select * from {$deck} where `manacost`='5'
        "
        ;
        $pdoStatement = $pdo->query($sql);
        $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS,'App\models\Cards');

        return $results; 
    }
    public function countSixPlus($deck)
    {
        $pdo = Database::getPDO();
        $sql = $sql = "
        select * from {$deck} where `manacost`>='6'
        "
        ;
        $pdoStatement = $pdo->query($sql);
        $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS,'App\models\Cards');

        return $results; 
    }
}