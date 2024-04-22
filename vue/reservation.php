<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" href="../assets/css/connexion.css">
    <title>Inscription</title>
</head>
<body>
<section>
    <div class="form-box" >
        <div class="form-value">
            <form action="../src/controleur/TraitementUtilisateur.php" method="post">
                <h2>Reservation</h2>
                <div class="inputbox">
                    <p>Ville de depart</p>
                    <input class="form-control" placeholder=" Airport" type="text">
                </div>
                <div class="inputbox">
                    <p>Nombres de places</p>
                    <select class="form_1 form-control">
                        <option value="1"> 1 </option>
                        <option value="2"> 2 </option>
                        <option value="1"> 3 </option>
                        <option value="2"> 4 </option>
                        <option value="1"> 5 </option>
                    </select>
                </div>
                <div class="inputbox">
                    <p>Ville d'arrivée</p>
                    <input class="form-control" placeholder="Airport" type="text">
                </div>


                <button name ="Reserver"> Reserver</button>


            </form>
        </div>
    </div>
</section>
</body>
</html>


