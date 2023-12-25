<?php
require_once '../Model/User.php';
require_once '../html-element/logState.php';

session_start();

if (isset($_SESSION['error'])) {
    $error = $_SESSION['error'];
}
unset($_SESSION['error']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="../assets/css/log.css">
    <!-- <script defer src="../assets/js/notConnected.js"></script> -->
</head>

<body>
    <main class="register-main">
        <a href="#" class="header-logo">
            <img src="../assets/images/logo/logo-deshabillez.PNG" alt="Anon's logo" width="120" height="36">
        </a>

        <div class="container">
            <form id="form" class="form" method="post" action="../Controller/login.php">
                <h2>Connexion</h2>
                <div class="form-control">
                    <label for="username">Nom d'utilisateur</label>
                    <input type="text" id="username" name="username" placeholder="">
                </div>

                <div class="form-control">
                    <label for="password">Mot de passe</label>
                    <input type="password" id="password" name="password" placeholder="">
                </div>

                <?php if (!empty($error)) : ?>
                    <div class="error">
                        <p><?php echo $error; ?></p>
                    </div>
                <?php endif; ?>

                <button>Se connecter</button>

                <p class="link">Pas de compte ? <a href="./register.php">Inscrivez-vous !</a></p>
            </form>
        </div>
    </main>
</body>

</html>