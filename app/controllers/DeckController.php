<?php

namespace App\Controllers;
use App\Models\Terrains;
use App\Models\Rituels;
use App\Models\Enchantements;
use App\Models\Artefacts;
use App\Models\Ephemeres;
use App\Models\Decks;
use App\Models\Planeswalkers;
use App\Models\Creatures;
use App\Models\CoreModel;
use App\utils\Database;
use PDO;

class DeckController extends CoreController
{
    public function deck($deck)
    {
        $user=$_SESSION['connectedUser']->getIdentifiant();
        $userDeck=$user."decks";
        $decks=new Decks();
        $selectDecks=$decks->selectDeck($user,$deck);
        $paramDeck=$decks->selectedDeck($userDeck,$deck);
        $findDeck=$decks->findDeck($deck);
        $allNinja=$decks->findNinja($deck);
        //Couleur
        $black=$decks->countNinjaBlack($deck);
        //TYPES
        $artefact=$decks->countNinjaArtefact($deck);
        $ephemeres=$decks->countNinjaEphemere($deck);
        $rituels=$decks->countNinjaRituel($deck);
        $enchantements=$decks->countNinjaEnchant($deck);
        $creatures=$decks->countNinjaCreature($deck);
        $planeswalkers=$decks->countPlaneswalkers($deck);
        //Valeurs
        $one=$decks->countOne($deck);
        $two=$decks->countTwo($deck);
        $three=$decks->countThree($deck);
        $fourth=$decks->countFourth($deck);
        $five=$decks->countFive($deck);
        $sixPlus=$decks->countSixPlus($deck);

        $this->show(
            'decks/deck',['allNinja'=>$allNinja,'black'=>$black,'artefact'=>$artefact,
            'one'=>$one,'two'=>$two,'three'=>$three,'fourth'=>$fourth,'five'=>$five,'sixPlus'=>$sixPlus,
            'ephemeres'=>$ephemeres,'rituels'=>$rituels,'enchantements'=>$enchantements,
            'creatures'=>$creatures,'deck'=>$selectDecks,'currentDeck'=>$deck,'paramDeck'=>$paramDeck,
            'planeswalkers'=>$planeswalkers,'findDeck'=>$findDeck
        ]);
    }
    public function deckPost($deck)
    {
        $id=$_POST['id'];
        global $router;
        $sql=" DELETE FROM $deck WHERE `id` = '$id' " ;
        $pdo = Database::getPDO();
        if ($pdo->query($sql)){
            header('Location: ' . $router->generate('decks-deck',['deck'=>$deck])); 
        }
    }
    public function deckAdd()
    {
        $liste=new Creatures();
        $background=$liste->allBackground();
        $commandList=$liste->allCommand();
        $this->show('decks/add',['commandList'=>$commandList,'background'=>$background]);
    }
    public function deckAddPost()
    {
        $deckName=$_POST["deckName"];
        $deckName=str_replace(' ', '', $deckName);

        global $router;
        $color1=$_POST["color1"];
        $color3=$_POST["color3"];
        $color4=$_POST["color4"];
        if($_POST["color2"]==NULL){
            $color2="";
        }
        else{
            $color2=$_POST["color2"];
        }
        if($color3==NULL){
            $color3="";
        }
        if($color4==NULL){
            $color4="";
        } 
        $commandant=$_POST['commandant'];
        $commandant2=$_POST['commandant2'];
        $image=$_POST['image'];
        $pdo = Database::getPDO();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "CREATE TABLE {$deckName}(
            `id` INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            `name` varchar(64) NOT NULL,
            `color_id` int(11) NOT NULL,
            `picture` varchar(64) NOT NULL,
            `legendary` varchar(64) DEFAULT NULL,
            `texte` text NOT NULL,
            `key_comp` varchar(64) DEFAULT NULL,
            `author` varchar(64) NOT NULL,
            `extension` text NOT NULL,
            `flavor` text DEFAULT NULL,
            `manacost` text NOT NULL,
            `rarity` varchar(64) NOT NULL,
            `picturemana` varchar(64) DEFAULT NULL,
            `picturemana2` varchar(64) DEFAULT NULL,
            `picturemana3` varchar(64) DEFAULT NULL,
            `picturemana4` varchar(64) DEFAULT NULL,
            `picturemana5` varchar(64) DEFAULT NULL,
            `convertmanacost` text NOT NULL,            
            `deck` varchar(64) NOT NULL,
            `type` varchar(64) NOT NULL,
            `ninjacount` text DEFAULT NULL,
            `type_id` text DEFAULT NULL,            
            `tribut` varchar(64) NOT NULL,
            `tribut2` varchar(64) DEFAULT NULL,
            `texte2` text DEFAULT NULL,
            `texte3` text DEFAULT NULL,
            `detail_id` int(11) NOT NULL
            )";
        $decks=$_SESSION['connectedUser']->getIdentifiant()."decks";
        $pdo->exec($sql);
        $sql="INSERT INTO {$decks} (name, color1, color2, color3, color4, commandant, commandant2, image)
        VALUES ('$deckName', '$color1', '$color2', '$color3', '$color4', '$commandant', '$commandant2', '$image')";
        $pdoStatement = $pdo->prepare($sql);
        if ($pdoStatement->execute()){
            header('Location: ' . $router->generate('commandants-commandant')); 
        }       

    }
    
    public function deckUpdate($type,$id)
    {
        $select=new Decks();
        $selectCard=$select->findCard($type,$id);
        $listeDeck=$select->allDeck();
        $this->show('decks/update',['selectCard'=>$selectCard,'listeDeck'=>$listeDeck]);
    }
    public function deckUpdatePost($id)
    {
        
        global $router;
        $select=new Decks();
        $selectCard=$select->findCard($id);
        
        $name=addslashes($selectCard->getName());
        $color_id=$selectCard->getColor_id();
        $picture=$selectCard->getPicture();
        $legendary=$selectCard->getLegendary();
        $texte=addslashes($selectCard->getTexte());
        $key_comp=$selectCard->getKey_comp();
        $author=$selectCard->getAuthor();
        $extension=addslashes($selectCard->getExtension());
        $flavor=addslashes($selectCard->getFlavor());
        $manacost=$selectCard->getManacost();
        $rarity=$selectCard->getRarity();
        $picturemana=$selectCard->getPicturemana();
        $picturemana2=$selectCard->getPicturemana2();
        $picturemana3=$selectCard->getPicturemana3();
        $picturemana4=$selectCard->getPicturemana4();
        $picturemana5=$selectCard->getPicturemana5();
        $tribut=$selectCard->getTribut();
        $tribut2=$selectCard->getTribut2();
        $convertmanacost=$selectCard->getConvertmanacost();
        $deck=$selectCard->getDeck();
        $type=$selectCard->getType();
        $type_id=$selectCard->getType_id();
        $detail_id=$selectCard->getId();
        $ninjacount=$selectCard->getNinjacount();
        $texte2=addslashes($selectCard->getTexte2());
        $texte3=addslashes($selectCard->getTexte3());

        
        $deckName=$_POST['deck'];
        $pdo = Database::getPDO();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "INSERT INTO $deckName (
                name, color_id, picture,
                legendary, texte, key_comp, author,
                extension, flavor, manacost,
                rarity, picturemana, picturemana2,
                picturemana3, picturemana4, picturemana5, 
                convertmanacost, deck, type, ninjacount, 
                type_id, tribut, tribut2, texte2, texte3, detail_id)
        VALUES ('$name',
                '$color_id',
                '$picture',
                '$legendary',
                '$texte',
                '$key_comp',
                '$author',
                '$extension',
                '$flavor',
                '$manacost',
                '$rarity',
                '$picturemana',
                '$picturemana2',
                '$picturemana3',
                '$picturemana4',
                '$picturemana5',
                '$convertmanacost',
                '$deck',
                '$type',
                '$ninjacount',
                '$type_id',
                '$tribut',
                '$tribut2',
                '$texte2',
                '$texte3',
                '$detail_id')";
        if($pdo->exec($sql)){

            header('Location: ' . $router->generate('decks-deck',['deck'=>$deckName]));
        };
    }
    public function deckDelete($deck,$id)
    {
        
        $select=new Decks();
        $selectCard=$select->findCard($deck,$id);
        $commandant=$select->findCommand($deck);
        $this->show('decks/delete',['selectCard'=>$selectCard,'commandant'=>$commandant]);  
    }
    public function deckDeletePost($deck,$id){
        global $router;
        
        $sql=" DELETE FROM $deck WHERE `id` = '$id' " ;
        $pdo = Database::getPDO();
        if ($pdo->query($sql)){
            header('Location: ' . $router->generate('decks-deck',['deck'=>$deck])); 
        }
        
    }
    
    
}