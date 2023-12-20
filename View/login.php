<?php
require_once '../Model/User.php';
require_once '../Model/Database.php';
require_once '../html-element/logState.php';

session_start();
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="icon" type="image/png" href="../assets/img/gestionnaire-fichier.png" />
        <link rel="stylesheet" href="../assets/css/login.css">

        <script src="../assets/js/main.js"></script>

        <title>Gestionnaire de fichier</title>
    </head>

    <body>
        <?php include '../html-element/header.php' ?>

        <section class="main-container">

            <?php echo generateLogState(); ?>

            <div class="container">

                <form method="post" action="../Controller/login.php">
                    <div class="input-box">
                        <img src="../assets/img/login.png" alt="login icon" title="login">
                        <input type="text" name="login" placeholder="Login" required>
                    </div>

                    <div class="input-box">
                        <img src="../assets/img/password.png" alt="password icon" title="password">
                        <input type="password" name="password" placeholder="Password" required>
                    </div>

                    <input type="submit" value="Log in">

                    <?php if (isset($_SESSION['error'])) : ?>
                        <p class="error"><?php echo $_SESSION['error']; ?></p>
                    <?php endif; unset($_SESSION['error']); ?>

                    <p>Pas encore inscrit ? <a href="register.php">Inscrivez-vous</a></p>
                </form>
            </div>
        </section>

        <?php include '../html-element/footer.php' ?>
    </body>
</html>