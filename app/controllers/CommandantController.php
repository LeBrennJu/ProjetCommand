<?php

namespace App\Controllers;
use App\Models\Terrains;
use App\Models\Rituels;
use App\Models\Enchantements;
use App\Models\Artefacts;
use App\Models\Ephemeres;
use App\Models\CoreModel;
use App\Models\Creatures;
use App\Models\Decks;
use App\utils\Database;
use PDO;

class CommandantController extends CoreController
{
    public function commandant()
    {
        $deckCommand=new Decks();
        $listeDeck=$deckCommand->allDeck();

        $this->show(
            'commandants/commandant',['listeDeck'=>$listeDeck
        ]);
    }
    public function commandDelPost()
    {
        $user=$_SESSION['connectedUser']->getIdentifiant()."decks";
        $deck=$_POST['deck'];
        $id=$_POST['id'];
        global $router;
        $sql=" DELETE FROM $user WHERE `id` = '$id' " ;
        $pdo = Database::getPDO();
        if ($pdo->query($sql)){
            $sql=" DROP TABLE $deck ";
            $pdo = Database::getPDO();
            $pdo->exec($sql);
            header('Location: ' . $router->generate('commandants-commandant')); 
        }

    }
}