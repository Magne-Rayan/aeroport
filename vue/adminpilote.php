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
    <link href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css">
    <link href="https://cdn.datatables.net/1.13.7/css/dataTables.bootstrap5.min.css">
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <link rel="stylesheet" type ="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.tadatables.css">

    <script>
        var myCalendar;
        function doOnLoad() {
            myCalendar = new dhtmlXCalendarObject(["cal_1","cal_2", "cal_3", "cal_4", "cal_5", "cal_6", "cal_7", "cal_8"]);
        }
    </script>
    <script src="https://cdn.datatables.net/1.13.7/js/dataTables.bootstrap5.min.js"></script>    <link rel="stylesheet" type ="text/css" href="https://cdn.datatables.net/1.11.5/css/jquery.tadatables.css">

    <style>
        table{
            border-collapse: collapse;
            width: 100% ;
        }

        th,td{
            border: 1px solid #dddddd;
            padding: 8px;
            text-align: left;
        }
        th{
            background-color: #f2f2f2;
        }
    </style>

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
                        <a class="tag_menu" href="../adminCompagnie.php">Compagnie</a>                    </li>

                    <li>
                        <a class="tag_menu" href="../blog.php">Pilotes</a>                    </li>

                    <li>
                        <a class="tag_menu" href="../offers.php">Vols</a>                    </li>

                    <li>
                        <a class="tag_menu" href="../detail.php">Avions</a>                    </li>


                </ul>

            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
</section>
<div id="toTop" class="btn btn-info" style="display: block; background:none; color:#999; border-color:#999;"><span class="fa fa-chevron-up"></span></div>



   <div>
       <form method="post" action="../src/controleur/TraitementPilote.php">
<table id="pilote" style="width:100%" class="display">
    <thead>
    <tr>
        <th>ID Pilote</th>
        <th>NOM</th>
        <th>PRENOM</th>
        <th>DATE DE NAISSANCE</th>
        <th>MAIL</th>
        <th>REF_ROLE</th>
        <th>Modifier</th>
        <th>Supprimer</th>


    </tr>
    </thead>
    <tbody>
    <?php
    include '../src/bdd/Bdd.php';
    $bdd = new Bdd();
    $req = $bdd->getBdd()->prepare("SELECT * FROM Utilisateur WHERE ref_role = 1 ");
    $req->execute();
    $result = $req->fetchAll( PDO::FETCH_ASSOC);
    foreach ($result as $item){
        ?>

        <tr>
            <td><?php  echo $item['id_utilisateur']; ?></td>
            <td><?php  echo $item['nom']; ?></td>
            <td><?php  echo $item['prenom']; ?></td>
            <td><?php  echo $item['date_naissance']; ?></td>
            <td><?php  echo $item['mail']; ?></td>
            <td><?php  echo $item['ref_role']; ?></td>


            <td><input class="button_1" type="submit" name="Modifier" value="Modifier"></td>
            <td><input class="button_1" type="submit" name="Supprimer" value="Supprimer"></td>
        </tr>

        <?php
    }
    ?>

    </tbody>
    <tfoot>
    <tr>
        <th>ID PILOTE</th>
        <th>NOM</th>
        <th>PRENOM</th>
        <th>DATE DE NAISSANCE</th>
        <th>MAIL</th>
        <th>REF_ROLE</th>
        <th>Modifier</th>
        <th>Supprimer</th>
    </tr>
    </tfoot>
</table>
       </form>
</body>
<<<<<<< HEAD
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="//cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
=======

>>>>>>> 865d62a5bf82d98ea700407e2d9d2f1538e43685
<script>
    $(document).ready(function(){
        $('#datatable').DataTable();
    });
</script>

<?php
