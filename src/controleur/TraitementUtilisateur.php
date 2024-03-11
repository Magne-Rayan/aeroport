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
    $user = new Utilisateur([
        "nom" =>$_POST['nom'],
        "prenom" =>$_POST['Prenom'],
        "date_naissance" =>$_POST['date_naissance'],
        "email" =>$_POST['email'],
        "mdp" =>$_POST['mdp'],
    ]);
    $user->inscription();
}
