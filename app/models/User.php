<?php

namespace App\models;

use App\utils\Database;
use PDO;
use App\Models\CoreModel;

class User extends CoreModel
{
    public $identifiant;
    public $password;
    public $status;
    public $role;
    

    /**
     * Get the value of identifiant
     */ 
    public function getIdentifiant()
    {
        return $this->identifiant;
    }

    /**
     * Set the value of identifiant
     *
     * @return  self
     */ 
    public function setIdentifiant($identifiant)
    {
        $this->identifiant = $identifiant;

        return $this;
    }

    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get the value of status
     */ 
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set the value of status
     *
     * @return  self
     */ 
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }
    /**
     * Get the value of role
     */ 
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Set the value of role
     *
     * @return  self
     */ 
    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    } 


    public static function findByIdentifiant(string $identifiant)
    {
        // se connecter à la BDD
        $pdo = Database::getPDO();

        // écrire notre requête
        $sql = 'SELECT * FROM `user` WHERE `identifiant` = :identifiant';

        // exécuter notre requête
        $pdoStatement = $pdo->prepare($sql);

        // On bind chaque jeton/token/placeholder
        $pdoStatement->bindValue(':identifiant', $identifiant, PDO::PARAM_STR);

        // On exécute la requête préparée
        $pdoStatement->execute();

        // un seul résultat => fetchObject
        // self::class ça tue! ça fournit automatiquement le FQCN de la classe dans laquelle on utilise le mot-clé "self"
        $item = $pdoStatement->fetchObject(self::class);

        // retourner le résultat
        return $item;
    }
    public function setNewPassword(string $clearPassword)
    {
        // On hash le mot de passe désiré avant sauvegarde en DB
        $this->password = password_hash($clearPassword, PASSWORD_DEFAULT);
    }
    public function insert()
    {
        // Récupération de l'objet PDO représentant la connexion à la DB
        $pdo = Database::getPDO();

        // Ecriture de la requête INSERT INTO
        $sql = '
            INSERT INTO `user` (identifiant, password, role, status)
            VALUES (:identifiant, :password, :role, :status)
        ';

        // Préparation de la requête d'insertion (pas exec, pas query)
        $pdoStatement = $pdo->prepare($sql);

        // On bind chaque jeton/token/placeholder
        $pdoStatement->bindValue(':identifiant', $this->identifiant, PDO::PARAM_STR);
        $pdoStatement->bindValue(':password', $this->password, PDO::PARAM_STR);
        $pdoStatement->bindValue(':role', $this->role, PDO::PARAM_STR);
        $pdoStatement->bindValue(':status', $this->status, PDO::PARAM_INT);

        // On exécute la requête préparée
        $ok = $pdoStatement->execute();

        // Si au moins une ligne ajoutée
        if ($pdoStatement->rowCount() > 0) {
            // Alors on récupère l'id auto-incrémenté généré par MySQL
            $this->id = $pdo->lastInsertId();

            // On retourne VRAI car l'ajout a parfaitement fonctionné
            return true;
            // => l'interpréteur PHP sort de cette fonction car on a retourné une donnée
        }

        // Si on arrive ici, c'est que quelque chose n'a pas bien fonctionné => FAUX
        return false;
    }
    
}