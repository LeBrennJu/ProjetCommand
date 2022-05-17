<?php

namespace App\Controllers;
use App\Models\User;
use App\Models\CoreModel;

class UserController extends CoreController
{
    /**
     * Méthode s'occupant de la page d'accueil
     *
     * @return void
     */
    public function log()
    {
        $this->show('user/log',
        [
            // Pour ne pas afficher la navigation (car user pas connecté)
            'hideNav' => true,
            // On pré-remplit les input avec du vide
            'email' => '',
            'password' => '',
            // Et le token anti-CSRF
            'token' => $this->generateToken()
        ]);
    }
    

   public function logPost()
    {  
        global $router;
            // On récupère les 2 données
            $identifiant = filter_input(INPUT_POST, 'identifiant');
            $password = filter_input(INPUT_POST, 'password');

        // On valide ces données
        $errorList = [];

        if (empty($identifiant)) {
            $errorList[] = 'L\'adresse email saisie est vide ou incorrecte';
        }
        if (empty($password)) {
            $errorList[] = 'Le mot de passe saisi est vide';
        }
        // S'il n'y a aucune erreur dans les données
        if (empty($errorList)) {
            // On récupère l'objet AppUser pour l'email fourni
            $appUser = User::findByIdentifiant($identifiant);

            // Si on n'a pas trouvé de user pour cet email
            if (empty($appUser)) {
                // On ajoute un message d'erreur
                $errorList[] = 'Les identifiants ne sont pas reconnus';
            } else { // Sinon, on a bien trouvé un user
               
                // Alors on peut tester la correspondance du mot de passe avec le mot de passe hashé en DB
                // Si c'est le bon mot de passe
                if (password_verify($password , $appUser->getPassword())) {
                    // Si l'utilisateur est bien "actif"
                    if ($appUser->getStatus() == 1) {
                        // Alors on connecte l'utilisateur
                        $_SESSION['connectedUser'] = $appUser;
                        $_SESSION['connectedUserId'] = $appUser->getId();
                        
                        // Puis on redirige vers l'accueil
                        header('Location: ' . $router->generate('collection-collection')); 
                    } else { // sinon, l'utilisateur est désactivé
                        // On ajoute un message d'erreur
                        $errorList[] = 'Cet utilisateur n\'est pas autorisé à se connecter';
                    }
                } else {
                    // Alors on ajoute un message d'erreur
                    $errorList[] = 'Les identifiants ne sont pas reconnus';
                }
            }
        }

        // S'il y a des erreurs
        if (!empty($errorList)) {
            // On réaffiche le formulaire
            // En pré-remplissant les données
            $this->show(
                'user/log',
                [
                    // Pour ne pas afficher la navigation (car user pas connecté)
                    'hideNav' => true,
                    // On pré-remplit les input avec les données BRUTES en POST
                    'email' => filter_input(INPUT_POST, 'email'),
                    'password' => filter_input(INPUT_POST, 'password'),
                    // On transmet aussi le tableau d'erreurs
                    'errorList' => $errorList,
                    // Et le token anti-CSRF
                    'token' => $this->generateToken()
                ]
            );
        }
                        
    }
    public function logout()
    {
        global $router;
        // On supprime les données en session
        unset($_SESSION['connectedUser']);
        unset($_SESSION['connectedUserId']);

        // On redirige vers la page de connexion
        header('Location: ' . $router->generate('log-log')); 
    }
    //------------------------------------CREATION NOUVEL UTILISATEUR --------------------------------------->
    public function add()
    {
        $this->show('user/add',[
            // Pour pré-remplir, on doit fournir un Model appuser, avec des valeurs vides
            'appuser' => new User(),
            // Et le token anti-CSRF
            'token' => $this->generateToken()
        ]);
    }
    public function addPost()
    {
        global $router;
        // On récupère les 2 données
        $identifiant = filter_input(INPUT_POST, 'id');
        $password = filter_input(INPUT_POST, 'password');
        $role ="user";
        $status =1;

        // On valide ces données
        $errorList = [];

        if (empty($identifiant)) {
            $errorList[] = 'L\'adresse email est vide ou incorrecte';
        }
        if (empty($password)) {
            $errorList[] = 'Le mot de passe est vide';
        }
        if ($role != 'admin' && $role != 'user') {
            $errorList[] = 'Le role sélectionné est incorrect';
        }
        if ($status < 0 && $status > 2) {
            $errorList[] = 'Le statut sélectionné est incorrect';
        }
       
        // S'il n'y a aucune erreur dans les données
        if (empty($errorList)) {
            // On crée un nouveau Model
            $appuser = new User();

            // On met à jour les propriétés
            $appuser->setIdentifiant($identifiant);
            $appuser->setNewPassword($password);
            $appuser->setRole($role);
            $appuser->setStatus($status);

            // On sauvergarde en DB
            if ($appuser->insert()) {
                // Si la sauvegarde a fonctionné, on redirige
                header('Location: ' . $router->generate('collection-collection'));
            } else {
                // On ajoute un message d'erreurs
                $errorList[] = 'La sauvegarde a échoué';
            }
        }

        // S'il y a des erreurs
        if (!empty($errorList)) {
            // On réaffiche le formulaire
            // On a besoin de renseigner un Model AppUser pour pré-remplir le formulaire
            $appuser = new User();
            $appuser->setIdentifiant($identifiant);
            $appuser->setNewPassword($password);
            $appuser->setRole($role);
            $appuser->setStatus($status);

            // En pré-remplissant les données
            $this->show(
                'user/add',
                [
                    // On pré-remplit les input avec les données BRUTES en POST, stockées dans le Model
                    'appuser' => $appuser,
                    // On transmet aussi le tableau d'erreurs
                    'errorList' => $errorList,
                    // Et le token anti-CSRF
                    'token' => $this->generateToken()
                ]
            );
        }
    }


}