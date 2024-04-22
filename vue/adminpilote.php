<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tour & Travel</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/family.css" rel="stylesheet">
    <head>
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


    <body  onload="doOnLoad();">
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
                                <a href="#" class="dropdown-toggle active_tab tag_menu" data-toggle="dropdown">Home <span class="badge indent0">7</span> <b class="caret"></b></a>

                                <ul class="dropdown-menu dropdown-menu-large row drop_menu_1">
                                    <li class="col-sm-4 border_right_1">
                                        <ul>
                                            <li class="dropdown-header">Mainpages</li>
                                            <li><a href="../offers.html">Offers</a></li>
                                            <li><a href="../full_search.html">Search full page</a></li>
                                            <li><a href="../presentation.html"> Presentation</a></li>
                                            <li><a href="../footer_2.html">New footer page</a></li>
                                            <li><a href="../full_page.html">All contents</a></li>
                                            <li><a href="../homepage_2.html">Second homepage</a></li>
                                            <li><a href="../new_homepage.html">Another homepage</a></li>
                                        </ul>
                                    </li>
                                    <li class="col-sm-4 border_right_1">
                                        <ul>
                                            <li class="dropdown-header">Inner pages</li>
                                            <li><a href="">Inner 1</a></li>
                                            <li><a href="">Inner 2 </a></li>
                                            <li><a href="">Inner 3 </a></li>
                                        </ul>
                                    </li>
                                    <li class="col-sm-4 border_right_1">
                                        <ul>
                                            <li class="dropdown-header">Themes</li>
                                            <li><a href="">Dark</a></li>
                                            <li><a href="">Light</a></li>
                                            <li><a href="">Catchy</a></li>
                                            <li><a href="">Attractive</a></li>
                                            <li class="dropdown-header">Trending Pages</li>
                                        </ul>
                                    </li>

                                </ul>

                            </li>

                            <li class="dropdown dropdown-large">
                                <a href="#" class="dropdown-toggle tag_menu" data-toggle="dropdown">All Pages <span class="badge indent0">8</span><b class="caret"></b></a>

                                <ul class="dropdown-menu dropdown-menu-large row drop_menu_1">
                                    <li class="col-sm-4 border_right_1">
                                        <ul>
                                            <li class="dropdown-header">Internal pages</li>
                                            <li><a href="list.php">Listing</a></li>
                                            <li><a href="detail.php">Listing Details</a></li>
                                            <li><a href="blog.php">Blog</a></li>
                                            <li><a href="blog_detail.php">Blog details</a></li>
                                            <li><a href="about.php">About us</a></li>
                                            <li><a href="payment.php">Payment type</a></li>
                                            <li><a href="contact.php">Contact us</a></li>
                                        </ul>
                                    </li>
                                    <li class="col-sm-4 border_right_1">
                                        <ul>
                                            <li class="dropdown-header">Trending</li>
                                            <li><a href=""> Homepage </a></li>
                                            <li><a href=""> List </a></li>
                                            <li><a href=""> Payment</a></li>
                                            <li><a href="">Another list</a></li>
                                            <li><a href="">Another payment</a></li>

                                            <li><a href="">Another list</a></li>
                                            <li><a href="">List details</a></li>
                                            <li><a href="">Next payment</a></li>
                                            <li><a href="">Another list</a></li>
                                            <li><a href="">Another payment</a></li>
                                            <li><a href="">Another list</a></li>
                                            <li><a href="">Blog details</a></li>
                                            <li><a href="">Another payment</a></li>
                                            <li><a href="">Another page</a></li>
                                        </ul>
                                    </li>
                                    <li class="col-sm-4 border_right_1">
                                        <ul>
                                            <li class="dropdown-header">Html Coading</li>
                                            <li><a href="">Products</a></li>
                                            <li><a href="">Language</a></li>
                                            <li><a href="">Styles</a></li>
                                            <li class="dropdown-header">Upcoming</li>

                                            <li><a href="">Many Home pages</a></li>
                                            <li><a href="">Details</a></li>
                                            <li class="dropdown-header">Trending Pages</li>
                                        </ul>
                                    </li>

                                </ul>

                            </li>

                            <li>
                                <a class="tag_menu" href="list.php">List</a>                    </li>

                            <li>
                                <a class="tag_menu" href="blog.php">Blog</a>                    </li>

                            <li>
                                <a class="tag_menu" href="offers.php">Offers</a>                    </li>

                            <li>
                                <a class="tag_menu" href="detail.php">Detail</a>                    </li>

                            <li>
                                <a class="tag_menu" href="payment.php">Payment</a>                    </li>

                            <li>
                                <a class="tag_menu" href="contact.php">Contact</a>                    </li>

                            <li class="dropdown">
                                <a class="tag_menu" href="#" data-toggle="dropdown" role="button" aria-expanded="false">Offers<span class="caret"></span></a>
                                <ul class="dropdown-menu drop_1" role="menu">
                                    <li class="dropdown-header"> Dropdown 1</li>
                                    <li><a href="#">Dropdown Inner</a></li>
                                    <li><a href="#">Dropdown Inner 1</a></li>
                                </ul>
                            </li>
                            <li>
                                <a class="tag_menu" href="connexion.php">Conexion</a>
                            </li>
                            <li>
                                <a class="tag_menu" href="inscription.php">Inscription</a>
                            </li>

                        </ul>

                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container-fluid -->
            </nav>
        </section>
<div id="toTop" class="btn btn-info" style="display: block; background:none; color:#999; border-color:#999;"><span class="fa fa-chevron-up"></span></div>



   <div>
       <form method="post" action="../src/controleur/TraitementUtilisateur.php">
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

<script>
    new DataTable('#pilote');
</script>

<?php
