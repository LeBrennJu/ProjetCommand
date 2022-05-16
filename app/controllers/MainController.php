<?php

namespace App\Controllers;

use App\Models\CoreModel;

class MainController extends CoreController
{
    /**
     * Méthode s'occupant de la page d'accueil
     *
     * @return void
     */
    public function home()
    {

        $this->show('main/home');
    }
    
}