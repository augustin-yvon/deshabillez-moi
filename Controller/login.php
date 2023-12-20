<?php
require_once '../Model/User.php';
require_once '../Model/Database.php';
require_once '../Model/SqlRequest.php';

session_start();

$request = new SqlRequest();

// Vérifie si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupére les données du formulaire
    $login = htmlspecialchars($_POST["login"]);
    $password = htmlspecialchars($_POST["password"]);

    if ($request->checkInfo($login, $password)) {
        // Crée l'objet utilisateur
        $user = new User($login, $password);

        $id = $request->getId($login);

        // Ajoute l'id à l'objet utilisateur
        if ($id !== false) {
            $user->setId($id);
        }

        // Met l'utilisateur à l'état connecté
        $user->logIn();

        $_SESSION["user"] = $user;

        if ($user->getLogin() == 'admiN1337$') {
            header("Location: ../View/admin.php");
            exit();
        }else {
            header("Location: ../View/profile.php");
            exit();
        }
    } else {
        $error = "Login ou mot de passe incorrect.";
        $_SESSION['error'] = $error;
        header("Location: ../View/login.php");
        exit();
    }
}