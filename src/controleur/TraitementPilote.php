<?php
include '../bdd/Bdd.php';
include '../modele/Pilote.php';
if(array_key_exists("valider",$_POST)){
$pilote = new Pilote();
$pilote->poserVacance($_POST["dateDebut"],$_POST["dateFin"]);


if (array_key_exists("editer",$_POST)){
    $user = new Utilisateur([
        "id_utilisateur" =>$_POST['id_utilisateur'],
        "nom" =>$_POST['nom'],
        "prenom" =>$_POST['prenom'],
        "date" =>$_POST['age'],
        "email" =>$_POST['email'],
    ]);
    $user->editer();
}}
