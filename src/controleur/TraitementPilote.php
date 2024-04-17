<?php
include '../bdd/Bdd.php';
include '../modele/Utilisateur.php';
include '../modele/Pilote.php';
if(array_key_exists("valider",$_POST)){
$pilote = new Pilote();
$pilote->poserVacance($_POST["dateDebut"],$_POST["dateFin"]);
}
