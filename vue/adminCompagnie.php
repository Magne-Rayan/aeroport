<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Tableau compagnie</title>
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
    $req = $bdd->getBdd()->prepare("SELECT * FROM COMPAGNIE ");
    $req->execute();
    $result = $req->fetchAll( PDO::FETCH_ASSOC);
    foreach ($result as $item){
        ?>

        <tr>
            <td><?php  echo $item['id_compagnie']; ?></td>
            <td><?php  echo $item['nom']; ?></td>
            <td><input class="button_1" type="submit" name="Modifier" value="Modifier"></td>
            <td><input class="button_1" type="submit" name="Supprimer" value="Supprimer"></td>
        </tr>

        <?php
    }?>
    </tbody>
    <tfoot>
    <tr>
        <th>ID COMPAGNIE</th>
        <th>NOM</th>
    </tr>
    </tfoot>
</table>
</body>
<script>
    new DataTable('#compagnie');
</script>