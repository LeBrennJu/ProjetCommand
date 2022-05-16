<?php

namespace App\Controllers;
use App\Models\Artefacts;
use App\Models\Ephemeres;
use App\Models\Creatures;
use App\Models\Planeswalkers;
use App\Models\Cards;

class TypesController extends CoreController
{
    public function types()
    {
        $cards=new Cards();
        $allCards=$cards->findAll();

        $this->show('types/types',['allCards'=>$allCards]);
    }
    public function typesTribal($tribut)
    {
        $tributCreature=new Creatures();
        $tributSelect=$tributCreature->findSelectTribut($tribut);
        
        $this->show('types/tribal',['tribut'=>$tributSelect,'tributName'=>$tribut]);
    }


}