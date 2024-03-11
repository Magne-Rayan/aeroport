<?php

namespace bdd;

class Bdd
{
    private $bdd;
    private $serveur = "localhost";
    private $nomBdd = "aeroport";
    private $username = "Aeroport";
    private $password = "97Y4]jj)q/YQ";

    public function __construct()
    {
        $this->bdd = new PDO('mysql:host=' . $this->serveur . ';dbname=' . $this->nomBdd, $this->username, $this->password);
    }

    public function getBdd()
    {
        return $this->bdd;
    }
}