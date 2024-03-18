<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" href="">
    <title>Tableau Vol</title>
</head>
<body>
<table id="compagnie" style="width:100%" class="display">
    <thead>
    <tr>
        <th>ID COMPAGNIE</th>
        <th>NOM</th>
    </tr>
    </thead>
    <tbody>
    <?php
    include '../src/bdd/Bdd.php';
    $bdd = new Bdd();
    $req = $bdd->getBdd()->prepare("SELECT * FROM VOL ");
    $req->execute();
    $result = $req->fetchAll( PDO::FETCH_ASSOC);
    foreach ($result as $item){
        ?>

        <tr>
            <td><?php  echo $item['id_vol']; ?></td>
            <td><?php  echo $item['numero_vol']; ?></td>
            <td><?php  echo $item['heureDepp']; ?></td>
            <td><?php  echo $item['heureArr']; ?></td>
            <td><?php  echo $item['ref_ville']; ?></td>
            <td><?php  echo $item['ref_avion']; ?></td>
            <td><input class="button_1" type="submit" name="Modifier" value="Modifier"></td>
            <td><input class="button_1" type="submit" name="Supprimer" value="Supprimer"></td>
        </tr>

        <?php
    }?>
    </tbody>
    <tfoot>
    <tr>
        <th>ID VOL</th>
        <th>NUMERO VOL</th>
        <th>HEURE DEPART</th>
        <th>HEURE ARRIVE</th>
        <th>REF VILLE</th>
        <th>REF AVION</th>
    </tr>
    </tfoot>
</table>
</body>