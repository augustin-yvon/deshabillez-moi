<?php
require_once '../Model/User.php';
require_once '../Model/SqlRequest.php';

$request = new SqlRequest();

$errors = array();

// Vérifie si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupére les données du formulaire
    $username = htmlspecialchars($_POST["signup-username"]);
    $email = htmlspecialchars($_POST["signup-email"]);
    $password = htmlspecialchars($_POST["signup-password"]);
    $acceptTerms = htmlspecialchars($_POST["accept-terms"]);

    // Vérifie si le login est déjà utilisé
    if ($request->validateUsername($username)) {
        $errors[] = "Ce nom d'utilisateur est déjà utilisé !";
    }

    // Vérifie si le mot de passe respecte les critères
    $passwordPattern = "/^(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$/";
    if (!preg_match($passwordPattern, $password)) {
        $errors[] = "Le mot de passe doit contenir au moins 8 caractères, une majuscule, un chiffre et un caractère spécial.";
    }

    // Insére les données dans la base de données si aucune erreur n'est survenue
    if (empty($errors)) {
        unset($_SESSION['errors']);
        if ($request->register($username, $email, $password)) {
            header("Location: ../View/login.php");
            exit();
        }
    } else {
        $_SESSION['errors'] = $errors;
        header("Location: ../View/register.php");
        exit();
    }
}
