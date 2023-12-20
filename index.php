<?php
require_once './Model/user.php';
require_once './html-element/logState.php';

session_start();
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/png" href="./assets/img/gestionnaire-fichier.png" />
    <link rel="stylesheet" href="./assets/css/index.css">

    <script src="assets/js/main.js"></script>

    <title>Module de Connexion B2</title>
</head>

<body>
    <header>
        <div class="header-content">
            <a href="./View/register.php" id="register-page" class="original-color"><img src="./assets/img/inscription.png" alt="S'incrire" title="S'incrire"></a>
            <a href="./View/register.php" class="hover-color"><img src="./assets/img/inscription-orange.png" alt="S'incrire" title="S'incrire"></a>

            <a href="./index.php" id="home-page" class="original-color"><img src="./assets/img/accueil.png" alt="Accueil" title="Accueil"></a>
            <a href="./index.php" class="hover-color"><img src="./assets/img/accueil-orange.png" alt="Accueil" title="Accueil"></a>

            <a href="./View/login.php" id="log-page" class="original-color"><img src="./assets/img/connexion.png" alt="Se Connecter" title="Se Connecter"></a>
            <a href="./View/login.php" class="hover-color"><img src="./assets/img/connexion-orange.png" alt="Se Connecter" title="Se Connecter"></a>

            <a href="./View/profile.php" id="profile-page" class="original-color"><img src="./assets/img/profil.png" alt="Profil" title="Profil"></a>
            <a href="./View/profile.php" class="hover-color"><img src="./assets/img/profil-orange.png" alt="Profil" title="Profil"></a>
        </div>
    </header>

    <section class="main-container">

        <?php echo generateLogStateIndex(); ?>

        <h1>Bienvenue sur le Module de Connexion</h1>

        <div class="buttons">
            <a href="View/register.php" class="button">Inscription</a>

            <a href="View/login.php" class="button">Connexion</a>

            <a href="pages/register.php" class="button">S'incrire</a>
        </div>

    </section>

    <?php include './html-element/footer.php' ?>
</body>

</html>