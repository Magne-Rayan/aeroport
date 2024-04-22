<?php

include '../bdd/Bdd.php';
include '../modele/Reservation.php';
if (array_key_exists("valider", $_POST)) {
    $reservation = new Reservation();
    $reservation->resrvation($_POST["dateDebut"], $_POST["dateFin"]);


    if (array_key_exists("editer", $_POST)) {
        $reservation = new Reservation([
            "id_utilisateur" => $_POST['id_utilisateur'],
            "nom" => $_POST['nom'],
            "prenom" => $_POST['prenom'],
            "numeroReservation" => $_POST['numeroReservation'],
            "ref_vol" => $_POST['ref_vol'],
            "heure_depp"=>$_POST['heure_depp'],
            "heure_arr"=>$_POST['heure_arr']
        ]);
        $reservation->editer();
    }

    if (array_key_exists("Modifier", $_POST)) {
        header("Location: ../vue/modificationReservation.php");
    }
}
?>