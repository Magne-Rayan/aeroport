<?php

class Compagnie extends Utilisateur{

    private $nom;
public function __construct(array $donnee)
{
    parent::__construct($donnee);
}


    public function getNom()
{
    return $this->nom;
}
public function setNom($nom)
{
   $this->nom=$nom;
}
}