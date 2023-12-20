<?php
require_once '../Model/User.php';
require_once '../Model/SqlRequest.php';

$request = new SqlRequest();

// Vérifie si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupére les données du formulaire
    $username = htmlspecialchars($_POST["username"]);
    $password = htmlspecialchars($_POST["password"]);

    if ($request->checkInfo($username, $password)) {
        $email = $request->getEmail($username);

        // Crée l'objet User
        $user = new User($username, $email, $password);

        $id = $request->getId($username);

        // Ajoute l'id à l'objet utilisateur
        if ($id !== false) {
            $user->setId($id);
        }

        // Met l'utilisateur à l'état connecté
        $user->logIn();

        $_SESSION["user"] = $user;

        header("Location: ../index.php");
        exit();
    } else {
        $error = "Login ou mot de passe incorrect.";
        $_SESSION['error'] = $error;
        header("Location: ../pages/login.php");
        exit();
    }
}
