<?php
/**
 * Classe User
 * 
 * Cette classe représente un utilisateur
 * 
 * @package BiblioApp
 * @subpackage User
 */

namespace BiblioApp; // On indique que la classe User est dans le namespace BiblioApp

class User
{
    // Propriétés (variables, attributs)
    private $id;
    private $username;
    private $password;

    // Constructeur (méthode magique)
    public function __construct(int $id, string $username, string $password)
    {
        $this->id = $id;
        $this->username = $username;
        $this->password = password_hash($password, PASSWORD_DEFAULT);
    }

    // TODO : Méthodes (fonctions)

    /**
     * Getters (accesseurs)
     */
    public function getId(): int
    {
        return $this->id;
    }
    public function getUsername(): string
    {
        return $this->username;
    }
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * Setters (mutateurs)
     */
    public function setUsername(string $username): void
    {
        $this->username = $username;
    }
    public function setPassword(string $password): void
    {
        $this->password = password_hash($password, PASSWORD_DEFAULT);
    }

}