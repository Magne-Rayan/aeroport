
<!DOCTYPE html>
<html lang="en">
<head>



    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.3/css/dataTables.dataTables.css" />
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>

    <script src="https://cdn.datatables.net/2.0.3/js/dataTables.js"></script>


</head>

<body>
<form method="post" action="../src/controleur/TraitementReservation.php">
<h1> Réservations </h1>

<table id="reservation">

    <thead>

  <tr>

    <th> Nom</th>
    <th> Prénom</th>
     <th>Numéro de reservation</th>
      <th>Numéro de vol</th>
    <th>Heure de départ</th>
    <th>Heure d'arriver</th>



  </tr>
    </thead>
    <tbody>
<?php
include '../src/bdd/Bdd.php';
$bdd= new bdd();
$req=$bdd->getBdd()->prepare('SELECT * FROM adminReservation');
$req->execute();
$res=$req->fetchAll();
foreach ($res as $item){
?>
<tr>
    <td><?php echo  $item['nom']?></td>
    <td><?php echo  $item['prenom']?></td>
    <td><?php echo  $item['numeroReservation']?></td>
    <td><?php echo  $item['numero_vol']?></td>
    <td><?php echo  $item['heureDepp']?></td>
    <td><?php echo  $item['heureArr']?></td>

    <input class="button_1" type="submit" name="Modifier" value="Modifier">

</tr>
<?php
}

?>
    </tbody>
</table>
</form>
<script>
    $(document).ready( function () {
        $('#reservation').DataTable();
    } );
</script>
</body>
</html>
