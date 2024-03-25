
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<h1> Data Table </h1>
<table>
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
<?php
include '../src/bdd/Bdd.php';
$bdd= new bdd();
$req=$bdd->getBdd()->prepare('SELECT * FROM adminReservation');
$req->execute();
$res=$req->fetchAll();
foreach ($res as $item){
?>

    <td><?php echo  $item['nom']?></td>
    <td><?php echo  $item['prenom']?></td>
    <td><?php echo  $item['numeroReservation']?></td>
    <td><?php echo  $item['numero_vol']?></td>
    <td><?php echo  $item['heureDepp']?></td>
    <td><?php echo  $item['heureArr']?></td>
<?php
}
?>
</table>
</body>
</html>
