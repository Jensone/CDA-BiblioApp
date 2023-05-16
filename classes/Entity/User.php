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
    private $username;
    private $password;
    private $email;

    // Constructeur (méthode magique)
    public function __construct(string $username, string $password, string $email)
    {
        $this->username = $username;
        $this->password = password_hash($password, PASSWORD_DEFAULT);
        $this->email = $email;
    }

    /**
     * Getters (accesseurs)
     */
    public function getUsername(): string
    {
        return $this->username;
    }
    public function getPassword(): string
    {
        return $this->password;
    }
    public function getEmail(): int
    {
        return $this->email;
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
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

}