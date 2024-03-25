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
            "prenom" =>$_POST['prenom'],
            "date" =>$_POST['dateNaissance'],
            "email" =>$_POST['email'],
            "mdp" =>$_POST['mdp'],
            "role" =>2,
        ]);
        $user->inscription();

if(array_key_exists("ajouter",$_POST)){
    $user = new Utilisateur([
        "nom" =>$_POST['nom'],
        "prenom" =>$_POST['prenom'],
        "date" =>$_POST['dateNaissance'],
        "email" =>$_POST['email'],
        "mdp" =>$_POST['mdp'],
        "role" =>1,
    ]);
    $user->inscription();
}

}
