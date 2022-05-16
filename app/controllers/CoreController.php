<?php

namespace App\Controllers;

use App\Models\CoreModel;

class CoreController
{
    protected function show(string $viewName, $viewData = [])
    {
        global $router;

        $viewData['currentPage'] = $viewName;
        $viewData['assetsBaseUri'] = $_SERVER['BASE_URI'] . 'assets/';
        
        
        $decks=new CoreModel();
        $viewData['navDecks']=$decks->navDecks();
        
        $viewData['baseUri'] = $_SERVER['BASE_URI'];
        extract($viewData);
        require_once __DIR__ . '/../views/layout/header.tpl.php';
        require_once __DIR__ . '/../views/' . $viewName . '.tpl.php';
        require_once __DIR__ . '/../views/layout/footer.tpl.php';
    }
    protected static function redirect(string $routeId)
    {
        global $router;
        header('Location: ' . $router->generate($routeId));
        exit();
    }
}
