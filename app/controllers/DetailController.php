<?php

namespace App\Controllers;
use App\Models\Terrains;
use App\Models\Rituels;
use App\Models\Enchantements;
use App\Models\Artefacts;
use App\Models\Ephemeres;
use App\Models\Creatures;
use App\Models\Planeswalkers;
use App\Models\Decks;
use App\utils\Database;
use PDO;

class DetailController extends CoreController
{
    public function deckDetail($deck,$id)
    {
        $card=new Decks();
        $selectCard=$card->selectCard($deck,$id);
        $listeDeck=$card->allDeck();
        $this->show('details/detailCard',['selectCard'=>$selectCard,'listeDeck'=>$listeDeck]);
    }
    //COLLECTION->DETAIL
    public function deckCollect($id)
    {
        $collec=new Decks;
        $listeDeck=$collec->allDeck();
        $selectCard=$collec->selectCollect($id);
        $this->show('details/detailCard',['selectCard'=>$selectCard,'listeDeck'=>$listeDeck]);
    }
    //COLLECTION FORM
    public function selectCollectPost($type,$id)
    {
        
        global $router;
        $select=new Decks();
        $selectCard=$select->findCard($type,$id);        
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

        
        $deckName=$_POST['name'];
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