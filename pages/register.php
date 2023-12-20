<?php
require_once '../Model/User.php';
require_once '../html-element/logState.php';

session_start();

if (isset($_SESSION['errors'])) {
    $errors = $_SESSION['errors'];
}
unset($_SESSION['errors']);
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
    <div class="container">
        <form id="form" class="form" method="post" action="../Controller/register.php">
            <h2>Inscription</h2>
            <div class="form-control">
                <label for="username">Nom d'utilisateur</label>
                <input type="text" id="username" name="username" placeholder="">
            </div>
            <div class="form-control">
                <label for="email">Email</label>
                <input type="text" id="email" name="email" placeholder="">
            </div>
            <div class="form-control">
                <label for="password">Mot de passe</label>
                <input type="password" id="password" name="password" placeholder="">
            </div>
            <div class="form-control">
                <label for="password2">Confirmer le mot de passe</label>
                <input type="password" id="password2" name="confirm-password" placeholder="">
            </div>

            <?php if (!empty($errors)) : ?>
                <div class="error">
                    <?php foreach ($errors as $error) : ?>
                        <p><?php echo $error; ?></p>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

            <button>Submit</button>

            <p class="link">Déjà inscrit ? <a href="./login.php">Connectez-vous !</a></p>
        </form>
    </div>
</body>

</html>