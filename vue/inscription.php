<!DOCTYPE html>
<html lang="fr">
<head>
    <link rel="stylesheet" href="../assets/css/connexion.css">
    <title>Connexion</title>
</head>
<body>
<section>
    <div class="form-box" >
        <div class="form-value">
            <form action="">
                <h2>Connexion</h2>
                <div class="inputbox">
                    <ion-icon name="mail-outline"></ion-icon>
                    <input type="text" name="nom" required>
                    <label for="">Nom</label>
                </div>
                <div class="inputbox">
                    <ion-icon name="lock-closed-outline"></ion-icon>
                    <input type="text" name="Prenom" required>
                    <label for="">Prenom</label>
                </div>
                <div class="inputbox">
                    <ion-icon name="mail-outline"></ion-icon>
                    <input type="date" name="DateNaiss" required>
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
                    <label for=""><input type="checkbox"><a href="#">Mot De Passe Oublié</a></label>
                </div>
                <boutton>Inscrption</boutton>
                <div class="register">
                    <p>Je possède deja un compte <a href="../connexion.php">Connexion</a></p>
                </div>

            </form>
        </div>
    </div>
</section>
</body>
</html>
