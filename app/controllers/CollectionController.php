<?php

namespace App\Controllers;
use App\Models\CoreModel;
use App\Models\Terrains;
use App\Models\Rituels;
use App\Models\Enchantements;
use App\Models\Artefacts;
use App\Models\Ephemeres;
use App\Models\Planeswalkers;
use App\Models\Collection;
use App\Models\Decks;
use App\utils\Database;
use PDO;

class CollectionController extends CoreController
{
    public function collectionOrder($color,$id)
    {
        
        $collect=new Collection();
        $orderCollect=$collect->orderCollect($color,$id);
        $collectColor=$collect->collectColor($color);
        $collectCost6Plus=$collect->collect6PlusColor($color);
        if(isset($_SESSION['connectedUser'])):
            $select=new Decks();
            $listeDeck=$select->allDeck();
        else:
            $listeDeck="";
        endif;
        $this->show('collection/collectionOrder',['orderCollect'=>$orderCollect,'$color'=>$color,'collectColor'=>$collectColor,'$cout'=>$id,'listeDeck'=>$listeDeck,'collectCost6Plus'=>$collectCost6Plus]);
    }
    public function collection()
    {
        $collect=new Collection();
        $allCollect=$collect->findCollect();
         if(isset($_SESSION['connectedUser'])):
        $select=new Decks();
        $listeDeck=$select->allDeck();
         else:
            $listeDeck="";
        endif;
        $this->show('collection/collection',["allCollect"=>$allCollect,'listeDeck'=>$listeDeck]);
    }
    public function collectionColor($color)
    {
        $collect= new Collection();
        $collectColor=$collect->collectColor($color);
        if(isset($_SESSION['connectedUser'])):
        $select=new Decks();
        $listeDeck=$select->allDeck();
        else:
        $listeDeck="";
        endif;
        $this->show('collection/collectionColor',['collectColor'=>$collectColor,'color'=>$color,'listeDeck'=>$listeDeck]);
    }
    public function collectionCost($cout)
    {
        $collect=new Collection();
        $collectCost=$collect->collectCost($cout);
        //NEW NEW 
        $collectCost6Plus=$collect->collect6Plus();
        if(isset($_SESSION['connectedUser'])):
        $select=new Decks();
        $listeDeck=$select->allDeck();
        else:
        $listeDeck="";
        endif;
        $this->show('collection/collectionCost',['collectCost'=>$collectCost,'id'=>$cout,'listeDeck'=>$listeDeck,'collectCost6Plus'=>$collectCost6Plus]);
    }
    public function collectionPost()
    {
        
        $id=$_POST["id"];
        $deckName =$_POST["deck"];
        global $router;
        $select=new Decks();
        $selectCard=$select->findCardById($id);
        
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
}