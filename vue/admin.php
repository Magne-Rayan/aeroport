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
    <nav class="navbar navbar-default navbar-fixed-top">
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
                        <a class="tag_menu" href="adminCompagnie.php">Compagnie</a>                    </li>

                    <li>
                        <a class="tag_menu" href="blog.php">Pilotes</a>                    </li>

                    <li>
                        <a class="tag_menu" href="offers.php">Vols</a>                    </li>

                    <li>
                        <a class="tag_menu" href="detail.php">Avions</a>                    </li>


                </ul>

            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
</section>



<div id="toTop" class="btn btn-info" style="display: block; background:none; color:#999; border-color:#999;"><span class="fa fa-chevron-up"></span></div>

<script type="text/javascript">
    $(document).ready(function(){
        $('body').append('<div id="toTop" class="btn btn-info"><span class="glyphicon glyphicon-chevron-up"></span> Back to Top</div>');
        $(window).scroll(function () {
            if ($(this).scrollTop() != 0) {
                $('#toTop').fadeIn();
            } else {
                $('#toTop').fadeOut();
            }
        });
        $('#toTop').click(function(){
            $("html, body").animate({ scrollTop: 0 }, 600);
            return false;
        });
    });

</script>


<script src="../assets/js/classie.js"></script>
<script src="../assets/js/cbpAnimatedHeader.js"></script>

</body>

</html>
