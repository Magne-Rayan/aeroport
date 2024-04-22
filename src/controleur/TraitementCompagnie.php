<?php
include '../bdd/Bdd.php';
include '../modele/Compagnie.php';
if(array_key_exists("valider",$_POST)){
    $pilote = new Pilote();
    $pilote->poserVacance($_POST["dateDebut"],$_POST["dateFin"]);


    if (array_key_exists("editer",$_POST)){
        $user = new Utilisateur([
            "id_utilisateur" =>$_POST['id_utilisateur'],
            "nom" =>$_POST['nom'],

        ]); $user->editer();}

    if(array_key_exists("Modifier",$_POST)){
        header("Location: ../vue/modificationCompagnie.php");
    }}
?>
