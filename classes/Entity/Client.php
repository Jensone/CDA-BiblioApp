<?php
/**
 * Classe Client
 * 
 * Cette classe représente un client
 * 
 * @package BiblioApp
 * @subpackage Client
 */

namespace BiblioApp; // On indique que la classe Client est dans le namespace BiblioApp

class Client
{
    // Propriétés (variables, attributs)
    private $lastname;
    private $firstname;
    private $email;
    private $phone;
    private $address;
    private $city;
    private $deposit;

    // Constructeur (méthode magique)
    public function __construct(
        string $lastname, 
        string $firstname, 
        string $email, 
        string $phone, 
        string $address, 
        string $city, 
        bool $deposit
        )
    {
        $this->lastname = $lastname;
        $this->firstname = $firstname;
        $this->email = $email;
        $this->phone = $phone;
        $this->address = $address;
        $this->city = $city;
        $this->deposit = $deposit;
    }

    /**
     * Getters (accesseurs)
     */
    public function getName(): string
    {
        return $this->lastname;
    }
    public function getFirstname(): string
    {
        return $this->firstname;
    }
    public function getEmail(): string
    {
        return $this->email;
    }
    public function getPhone(): string
    {
        return $this->phone;
    }
    public function getAddress(): string
    {
        return $this->address;
    }
    public function getCity(): string
    {
        return $this->city;
    }
    public function getDeposit(): bool
    {
        return $this->deposit;
    }

    /**
     * Setters (mutateurs)
     */
    public function setName(
        string $lastname): void
    {
        $this->lastname = $lastname;
    }
    public function setFirstname(
        string $firstname): void
    {
        $this->firstname = $firstname;
    }
    public function setEmail(
        string $email): void
    {
        $this->email = $email;
    }
    public function setPhone(
        string $phone): void
    {
        $this->phone = $phone;
    }
    public function setAddress(
        string $address): void
    {
        $this->address = $address;
    }
    public function setCity(
        string $city): void
    {
        $this->city = $city;
    }
    public function setDeposit(
        string $deposit): void
    {
        $this->deposit = $deposit;
    }

}
