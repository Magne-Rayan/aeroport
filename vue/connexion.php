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
            <form action="../src/controleur/TraitementUtilisateur.php" method="post">
                <h2>Connexion</h2>
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
                    <label for=""><a href="mdpoublier.php">Mot De Passe Oublié</a></label>
                </div>

                <button name="Connexion">Connexion</button>
                <div class="register">
                    <p>Je n'ai pas de compte <a href="inscription.php">Inscription</a></p>
                </div>

            </form>
        </div>
    </div>
</section>
</body>
</html>

