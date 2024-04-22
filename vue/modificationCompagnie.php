<?php
include '../src/bdd/Bdd.php';

$bdd = new bdd();
$req = $bdd->getBdd()->prepare('SELECT * FROM `utilisateur` WHERE id_utilisateur=:id_utilisateur');
$req->execute(array(
    "id_utilisateur" => $_GET["id_utilisateur"]
));
$res = $req->fetch();

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Edition d'un profil</title>
</head>
<body>
<form action="../src/controleur/TraitementCompagnie.php" method="post">-

    Nom :
    <input type="text" name="nom" value="<?= $res["nom"] ?>"/><br>



    <input type="hidden" name="id_utilisateur" value="<?= $res["id_utilisateur"] ?>"/><br>
    <input type="submit" name="editer"/><br>

</form>

</body>
</html>

