<?php
include '../bdd/Bdd.php';
include '../modele/Utilisateur.php';

if(array_key_exists("Connexion",$_POST)){
    $user = new Utilisateur([
        "email" =>$_POST['email'],
        "mdp" =>$_POST['mdp'],
    ]);
    $user->connexion();

}else if (array_key_exists('Inscription',$_POST)){
var_dump($_POST['mdp']);
    $user = new Utilisateur([
        "nom" =>$_POST['nom'],
        "prenom" =>$_POST['Prenom'],
        "age" =>$_POST['DateNaiss'],
        "email" =>$_POST['email'],
         "mdp" =>$_POST['mdp'],
    ]);

    $user->inscription();
}
