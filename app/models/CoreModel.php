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



class CoreModel
{
    public $id;
    public $name;
    public $type_id;
    public $picture;
    public $author;
    public $extension;
    public $color_id;
    public $manacost;
    public $rarity;
    public $texte;
    public $key_comp;
    public $flavor;
    public $picturemana;
    public $picturemana2;
    public $picturemana3;
    public $picturemana4;
    public $picturemana5;
    public $convertmanacost;
    public $deck;
    public $type;
    public $ninjacount;
    public $tribut;
    public $tribut2;
    public $texte2;
    public $texte3;
    public $loyaute;
    public $legendary;
    public $detail_id;
    public $image;    
    public $color1;
    public $color2;
    public $color3;
    public $color4;
    public $color5;
    public $commandant;
    public $commandant2;
    

    

    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of type_id
     */ 
    public function getType_id()
    {
        return $this->type_id;
    }

    /**
     * Set the value of type_id
     *
     * @return  self
     */ 
    public function setType_id($type_id)
    {
        $this->type_id = $type_id;

        return $this;
    }

    /**
     * Get the value of picture
     */ 
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Set the value of picture
     *
     * @return  self
     */ 
    public function setPicture($picture)
    {
        $this->picture = $picture;

        return $this;
    }

    /**
     * Get the value of author
     */ 
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set the value of author
     *
     * @return  self
     */ 
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get the value of extension
     */ 
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * Set the value of extension
     *
     * @return  self
     */ 
    public function setExtension($extension)
    {
        $this->extension = $extension;

        return $this;
    }

    /**
     * Get the value of color_id
     */ 
    public function getColor_id()
    {
        return $this->color_id;
    }

    /**
     * Set the value of color_id
     *
     * @return  self
     */ 
    public function setColor_id($color_id)
    {
        $this->color_id = $color_id;

        return $this;
    }

    /**
     * Get the value of manacost
     */ 
    public function getManacost()
    {
        return $this->manacost;
    }

    /**
     * Set the value of manacost
     *
     * @return  self
     */ 
    public function setManacost($manacost)
    {
        $this->manacost = $manacost;

        return $this;
    }

    /**
     * Get the value of rarity
     */ 
    public function getRarity()
    {
        return $this->rarity;
    }

    /**
     * Set the value of rarity
     *
     * @return  self
     */ 
    public function setRarity($rarity)
    {
        $this->rarity = $rarity;

        return $this;
    }

    /**
     * Get the value of texte
     */ 
    public function getTexte()
    {
        return $this->texte;
    }

    /**
     * Set the value of texte
     *
     * @return  self
     */ 
    public function setTexte($texte)
    {
        $this->texte = $texte;

        return $this;
    }

    /**
     * Get the value of key_comp
     */ 
    public function getKey_comp()
    {
        return $this->key_comp;
    }

    /**
     * Set the value of key_comp
     *
     * @return  self
     */ 
    public function setKey_comp($key_comp)
    {
        $this->key_comp = $key_comp;

        return $this;
    }

    /**
     * Get the value of flavor
     */ 
    public function getFlavor()
    {
        return $this->flavor;
    }

    /**
     * Set the value of flavor
     *
     * @return  self
     */ 
    public function setFlavor($flavor)
    {
        $this->flavor = $flavor;

        return $this;
    }

    /**
     * Get the value of picturemana
     */ 
    public function getPicturemana()
    {
        return $this->picturemana;
    }

    /**
     * Set the value of picturemana
     *
     * @return  self
     */ 
    public function setPicturemana($picturemana)
    {
        $this->picturemana = $picturemana;

        return $this;
    }

    /**
     * Get the value of picturemana2
     */ 
    public function getPicturemana2()
    {
        return $this->picturemana2;
    }

    /**
     * Set the value of picturemana2
     *
     * @return  self
     */ 
    public function setPicturemana2($picturemana2)
    {
        $this->picturemana2 = $picturemana2;

        return $this;
    }

    /**
     * Get the value of picturemana3
     */ 
    public function getPicturemana3()
    {
        return $this->picturemana3;
    }

    /**
     * Set the value of picturemana3
     *
     * @return  self
     */ 
    public function setPicturemana3($picturemana3)
    {
        $this->picturemana3 = $picturemana3;

        return $this;
    }

    /**
     * Get the value of picturemana4
     */ 
    public function getPicturemana4()
    {
        return $this->picturemana4;
    }

    /**
     * Set the value of picturemana4
     *
     * @return  self
     */ 
    public function setPicturemana4($picturemana4)
    {
        $this->picturemana4 = $picturemana4;

        return $this;
    }

    /**
     * Get the value of picturemana5
     */ 
    public function getPicturemana5()
    {
        return $this->picturemana5;
    }

    /**
     * Set the value of picturemana5
     *
     * @return  self
     */ 
    public function setPicturemana5($picturemana5)
    {
        $this->picturemana5 = $picturemana5;

        return $this;
    }

    /**
     * Get the value of convertmanacost
     */ 
    public function getConvertmanacost()
    {
        return $this->convertmanacost;
    }

    /**
     * Set the value of convertmanacost
     *
     * @return  self
     */ 
    public function setConvertmanacost($convertmanacost)
    {
        $this->convertmanacost = $convertmanacost;

        return $this;
    }

    /**
     * Get the value of deck
     */ 
    public function getDeck()
    {
        return $this->deck;
    }

    /**
     * Set the value of deck
     *
     * @return  self
     */ 
    public function setDeck($deck)
    {
        $this->deck = $deck;

        return $this;
    }

    /**
     * Get the value of type
     */ 
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @return  self
     */ 
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }
    /**
     * Get the value of ninjacount
     */ 
    public function getNinjacount()
    {
        return $this->ninjacount;
    }

    /**
     * Set the value of ninjacount
     *
     * @return  self
     */ 
    public function setNinjacount($ninjacount)
    {
        $this->ninjacount = $ninjacount;

        return $this;
    }

    //NAV DECK
    public function navDecks()
    {
        $user=$_SESSION['connectedUser']->getIdentifiant()."decks";
        $pdo = Database::getPDO();
        $sql = "
        select * from $user 
        ";
        $pdoStatement = $pdo->query($sql);
        $results = $pdoStatement->fetchAll(PDO::FETCH_CLASS,self::class);

        return $results; 
    }

    

    /**
     * Get the value of tribut
     */ 
    public function getTribut()
    {
        return $this->tribut;
    }

    /**
     * Set the value of tribut
     *
     * @return  self
     */ 
    public function setTribut($tribut)
    {
        $this->tribut = $tribut;

        return $this;
    }

    /**
     * Get the value of tribut2
     */ 
    public function getTribut2()
    {
        return $this->tribut2;
    }

    /**
     * Set the value of tribut2
     *
     * @return  self
     */ 
    public function setTribut2($tribut2)
    {
        $this->tribut2 = $tribut2;

        return $this;
    }


    /**
     * Get the value of legendary
     */ 
    public function getLegendary()
    {
        return $this->legendary;
    }

    /**
     * Set the value of legendary
     *
     * @return  self
     */ 
    public function setLegendary($legendary)
    {
        $this->legendary = $legendary;

        return $this;
    }

    /**
     * Get the value of detail_id
     */ 
    public function getDetail_id()
    {
        return $this->detail_id;
    }

    /**
     * Set the value of detail_id
     *
     * @return  self
     */ 
    public function setDetail_id($detail_id)
    {
        $this->detail_id = $detail_id;

        return $this;
    }

    /**
     * Get the value of image
     */ 
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set the value of image
     *
     * @return  self
     */ 
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }
    
    /**
     * Get the value of color1
     */ 
    public function getColor1()
    {
        return $this->color1;
    }

    /**
     * Set the value of color1
     *
     * @return  self
     */ 
    public function setColor1($color1)
    {
        $this->color1 = $color1;

        return $this;
    }

    /**
     * Get the value of color2
     */ 
    public function getColor2()
    {
        return $this->color2;
    }

    /**
     * Set the value of color2
     *
     * @return  self
     */ 
    public function setColor2($color2)
    {
        $this->color2 = $color2;

        return $this;
    }

    /**
     * Get the value of color3
     */ 
    public function getColor3()
    {
        return $this->color3;
    }

    /**
     * Set the value of color3
     *
     * @return  self
     */ 
    public function setColor3($color3)
    {
        $this->color3 = $color3;

        return $this;
    }

    /**
     * Get the value of color4
     */ 
    public function getColor4()
    {
        return $this->color4;
    }

    /**
     * Set the value of color4
     *
     * @return  self
     */ 
    public function setColor4($color4)
    {
        $this->color4 = $color4;

        return $this;
    }

    /**
     * Get the value of color5
     */ 
    public function getColor5()
    {
        return $this->color5;
    }

    /**
     * Set the value of color5
     *
     * @return  self
     */ 
    public function setColor5($color5)
    {
        $this->color5 = $color5;

        return $this;
    }

    /**
     * Get the value of commandant
     */ 
    public function getCommandant()
    {
        return $this->commandant;
    }

    /**
     * Set the value of commandant
     *
     * @return  self
     */ 
    public function setCommandant($commandant)
    {
        $this->commandant = $commandant;

        return $this;
    }

   

    /**
     * Get the value of commandant2
     */ 
    public function getCommandant2()
    {
        return $this->commandant2;
    }

    /**
     * Set the value of commandant2
     *
     * @return  self
     */ 
    public function setCommandant2($commandant2)
    {
        $this->commandant2 = $commandant2;

        return $this;
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