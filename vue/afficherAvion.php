<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Compagnie</title>
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
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.3/css/dataTables.dataTables.css" />
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.datatables.net/2.0.3/js/dataTables.js"></script>

</head>
<body>
<section id="header">
    <nav class="navbar navbar-default">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand heading_tag" href="../vue/index.php"><i class="fa fa-tree"></i> TOUR & TRAVEL </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown dropdown-large">

                    <li>
                        <a class="tag_menu" href="index.php">Acceuil</a>                    </li>

                    <li>
                        <a class="tag_menu" href="ajoutPilote.php">Ajouter Pilotes</a>                    </li>

                    <li>
                        <a class="tag_menu" href="afficherAvion.php">Avions</a>                    </li>


                </ul>

            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
</section>
<div id="toTop" class="btn btn-info" style="display: block; background:none; color:#999; border-color:#999;"><span class="fa fa-chevron-up"></span></div>
<div>
    <table id="avion" style="width:100%" class="display">
        <thead>
        <tr>
            <th>ID AVION</th>
            <th>MODELE</th>
            <th>NOMBRES DE PLACES</th>
            <th>REF COMPAGNIE</th>


        </tr>
        </thead>
        <tbody>
        <?php
        include '../src/bdd/Bdd.php';
        $bdd = new Bdd();
        $req = $bdd->getBdd()->prepare("SELECT * FROM avion   ");
        $req->execute();
        $result = $req->fetchAll( PDO::FETCH_ASSOC);
        foreach ($result as $item){
            ?>

            <tr>
                <td><?php  echo $item['id_avion']; ?></td>
                <td><?php  echo $item['modele']; ?></td>
                <td><?php  echo $item['nb_place']; ?></td>
                <td><?php  echo $item['ref_compagnie']; ?></td>



                <td><input class="button_1" type="submit" name="Modifier" value="Modifier"></td>
                <td><input class="button_1" type="submit" name="Supprimer" value="Supprimer"></td>
            </tr>

            <?php
        }
        ?>
        </tbody>
        <tfoot>
        <tr>
            <th>ID AVION</th>
            <th>MODELE</th>
            <th>NOMBRES DE PLACES</th>
            <th>REF COMPAGNIE</th>
        </tr>
        </tfoot>
    </table>
</body>
<script>
    new DataTable('#avion');
</script>
</html>