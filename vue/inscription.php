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
                <h2>Inscription</h2>
                <div class="inputbox">
                    <ion-icon name="mail-outline"></ion-icon>
                    <input type="text" name="nom" required>
                    <label for="">Nom</label>
                </div>
                <div class="inputbox">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                    <input type="text" name="prenom" required>
                    <label for="">Prenom</label>
                </div>
                <div class="inputbox">
                    <ion-icon name="mail-outline"></ion-icon>
                    <input type="date" name="date_naissance" required>
                    <label for=""> </label>
                </div>
                <div class="inputbox">
                    <ion-icon name="mail-outline"></ion-icon>
                    <input type="email" name="email" required>
                    <label for="">Email</label>
                </div>
                <div class="inputbox">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                    <input type="password" name="mdp" required>
                    <label for="">Mot De Passe</label>
                </div>
                <div class="forget">
                    <label for=""><a href="#">Mot De Passe Oublié</a></label>
                </div>
                <button name ="inscription" >Inscription</button>
                <div class="register">
                    <p>Je possède deja un compte <a href="../connexion.php">Connexion</a></p>
                </div>

            </form>
        </div>
    </div>
</section>
</body>
</html>

