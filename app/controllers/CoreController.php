<?php

namespace App\Controllers;

use App\Models\CoreModel;

class CoreController
{
    
    //UTILISATEURS
    public function __construct()
    {
        global $match;

        $routeId = $match['name'];

        $accessControlList = [
            // 'id-route' => liste des rôles autorisés
            // 'log-log' => ['admin', 'user'],
            // 'log-logPost' => ['admin','user'],
            'collection-orderPost' => ['admin', 'user'],
            'collection-collectionPost' => ['admin','user'],
            'collection-colorPost' => ['admin','user'],
            'collection-costPost' => ['admin','user'],
            'decks-deck' => ['admin','user'],
            'decks-deckPost' => ['admin','user'],
            'decks-add' => ['admin', 'user'],
            'decks-addPost' => ['admin','user'],
            'decks-update' => ['admin','user'],
            'decks-updatePost' => ['admin', 'user'],
            'decks-delete' => ['admin','user'],
            'decks-deletePost' => ['admin','user'],
            'commandants-commandant' => ['admin', 'user'],
            'commandants-commandantPost' => ['admin','user'],
            'details-detail' => ['admin','user'],
            
            // etc...
        ];
        if (array_key_exists($routeId, $accessControlList)) {
            // Alors on récupère le tableau des rôles autorisés
            $authorizedRoles = $accessControlList[$routeId];
            // Puis on vérifie les autorisations
            $this->checkAuthorization($authorizedRoles);
        }
    }

    protected function checkAuthorization(array $authorizedRoles): bool
    {
       
        // Si l'utilisateur est connecté ?
        if (isset($_SESSION['connectedUserId'])) {
 
            // Alors on récupère l'utilisateur en question (à partir de la session)
            $user = $_SESSION['connectedUser'];
            // dump($user);

            // Puis on récupère son rôle
            $role = $user->getRole();
            // dd() permet de faire un dump et d'arrêter le script immédiatement
            // => dump and die
            // dd($role);
            
            // Si le rôle de l'utilisateur fait partie des rôles autorisés (fournis en paramètre dans $autorizedRoles) ?
            if (in_array($role, $authorizedRoles)) {
                // Alors on retourne vrai
                return true;
            } else {;
                $this->err404();
            }

        } else {
            self::redirect('log-log');
        }
    }
    protected function show(string $viewName, $viewData = [])
    {
        global $router;

        $viewData['currentPage'] = $viewName;
        $viewData['assetsBaseUri'] = $_SERVER['BASE_URI'] . 'assets/';
        
        if(count($_SESSION)>=3):
        $decks=new CoreModel();
        $viewData['navDecks']=$decks->navDecks();
        
        $viewData['user']=$_SESSION['connectedUser']->getIdentifiant();
        endif;
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


    protected function generateToken()
    {
        // génération d'un token aléatoire
        $_SESSION['token'] = md5(getmypid() . '-skouleCSRF*' . time() . 'toto' . mt_rand(1000, 10000000));

        return $_SESSION['token'];
    }
}
