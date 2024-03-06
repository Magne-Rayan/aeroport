<?php
include '../bdd/Bdd.php';
include '../model/Utilisateur.php';

if(array_key_exists("Connexion",$_POST)){
    $user = new Utilisateur([
        "email" =>$_POST['email'],
        "mdp" =>$_POST['mdp'],
    ]);
    $user->connexion();
}elseif (array_key_exists("inscription",$_POST)){
    $user = new Utilisateur([
        "nom" =>$_POST['nom'],
        "prenom" =>$_POST['prenom'],
        "age" =>$_POST['age'],
        "email" =>$_POST['email'],
        "mdp" =>$_POST['mdp'],
    ]);
    $user->inscription();
}
