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
    if(isset($_POST["pilote"])){
        $user = new Utilisateur([
            "nom" =>$_POST['nom'],
            "prenom" =>$_POST['prenom'],
            "date" =>$_POST['dateNaissance'],
            "email" =>$_POST['email'],
            "mdp" =>$_POST['mdp'],
            "role" =>1,
        ]);
        $user->inscription();
    }if(isset($_POST["client"])){
        $user = new Utilisateur([
            "nom" =>$_POST['nom'],
            "prenom" =>$_POST['prenom'],
            "date" =>$_POST['dateNaissance'],
            "email" =>$_POST['email'],
            "mdp" =>$_POST['mdp'],
            "role" =>2,
        ]);
        $user->inscription();
    }


}
