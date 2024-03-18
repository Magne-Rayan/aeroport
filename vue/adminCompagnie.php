<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Tableau compagnie</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tour & Travel</title>
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
    <link href="../assets/css/element.css" rel="stylesheet">
    <link href="css/ken-burns.css" rel="stylesheet" type="text/css" media="all" />
    <link type="text/css" rel="stylesheet" href="../assets/css/animate.css">
    <script src="../assets/js/jquery-2.1.1.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="js/codebase/dhtmlxcalendar.css"/>
    <script src="../assets/js/codebase/dhtmlxcalendar.js"></script>
    <script>
        var myCalendar;
        function doOnLoad() {
            myCalendar = new dhtmlXCalendarObject(["cal_1","cal_2", "cal_3", "cal_4", "cal_5", "cal_6", "cal_7", "cal_8"]);
        }
    </script>
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