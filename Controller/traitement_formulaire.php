<?php
require_once '../Model/User.php';
require_once '../Model/SqlRequest.php';

$request = new SqlRequest();

$errors = array();

// Vérifie si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupère les données du formulaire
    $titre = htmlspecialchars($_POST["titre"]);
    $description = htmlspecialchars($_POST["description"]);
    $categorie_type = htmlspecialchars($_POST["categorie_type"]);
    $categorie_id = htmlspecialchars($_POST["categorie_id"]);
    $prix = htmlspecialchars($_POST["prix"]);

    // Traitement des photos
    $photos = $_FILES["photos"];
    $photoPaths = [];

    // Assurez-vous que le dossier de téléchargement existe (ajustez le chemin selon votre configuration)
    $uploadDirectory = "uploads/";
    if (!is_dir($uploadDirectory)) {
        mkdir($uploadDirectory, 0777, true);
    }

    // Téléchargez chaque photo dans le dossier de téléchargement
    foreach ($photos["tmp_name"] as $key => $tmp_name) {
        $photoName = basename($photos["name"][$key]);
        $photoPath = $uploadDirectory . $photoName;

        move_uploaded_file($tmp_name, $photoPath);
        $photoPaths[] = $photoPath;
    }

    // Insérez les données du produit dans la base de données si aucune erreur n'est survenue
    if (empty($errors)) {
        try {
            $user_id = $_SESSION['user']->getId(); // Récupérez l'ID de l'utilisateur actuel

            // Insérez les données du produit dans la table product
            $stmt = $request->insertProduct($titre, $description, $categorie_type, $categorie_id, $prix, $user_id);
            $stmt->execute();

            // Récupérez l'ID du produit que vous venez d'insérer en utilisant le user ID et le titre
            $productId = $request->getProductId($user_id, $titre);

            // Insérez les chemins des photos dans la table product_photos
            foreach ($photoPaths as $photoPath) {
                $stmt = $request->insertProductPhoto($productId, $photoPath);
                $stmt->execute();
            }

            echo "Le produit a été ajouté avec succès.";
        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
        }
    } else {
        echo "Erreur : " . implode(", ", $errors);
    }
}
