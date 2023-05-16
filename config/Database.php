<?php
/**
 * Classe Database
 * 
 * Cette classe représente la connexion à la base de données
 * 
 * @package BiblioApp
 * @subpackage Database
 */

namespace BiblioApp;

class Database
{
    // Propriétés (variables, attributs)
    private $host = 'localhost';
    private $dbname = 'biblioapp';
    private $user = 'root';
    private $password = 'root';

    // Méthodes (fonctions)
    public function connect(): \PDO
    {
        try {
            $pdo = new \PDO('mysql:host=' . $this->host . ';dbname=' . $this->dbname,$this->user,$this->password,
                // parametre d'origine
                // 'mysql:host=localhost;dbname=biblioapp;root;root',
            );
            $pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            echo 'Connexion réussie !';
            return $pdo;
        } catch (\PDOException $e) {
            echo 'Erreur de connexion : ' . $e->getMessage();
        }
    }
}
