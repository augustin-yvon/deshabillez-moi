<?php
require_once '../Model/User.php';
require_once '../Model/Database.php';
require_once '../Model/SqlRequest.php';

session_start();

$request = new SqlRequest();

if (isset($_SESSION['user'])) {
    $user = $_SESSION['user'];
    $userID = $user->getId($user->getLogin());
}

// Traitement de la requête de modification du profil
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupére les données envoyées par le formulaire
    $newLogin = htmlspecialchars($_POST['login']);
    $newPassword = htmlspecialchars($_POST['password']);

    // Met à jour les données dans la base de données
    $request->updateLogin($newLogin, $newPassword, $userID);
}
header("Location: ../View/profile.php");
exit();
