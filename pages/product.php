<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter un produit</title>

    <script defer src="../assets/js/product.js"></script>

</head>

<body>
    <h2>Ajouter un produit</h2>
    <form action="../Controller/traitement_formulaire.php" method="post" enctype="multipart/form-data">
        <!-- Titre du produit -->
        <label for="titre">Titre :</label>
        <input type="text" id="titre" name="titre" required>
        <br>

        <!-- Description du produit -->
        <label for="description">Description :</label>
        <textarea id="description" name="description" required></textarea>
        <br>

        <!-- Catégorie -->
        <label for="categorie_type">Catégorie :</label>
        <select id="categorie_type" name="categorie_type" required>
            <option value="h">Hommes</option>
            <option value="f">Femmes</option>
            <option value="e">Enfants</option>
        </select>
        <br>

        <!-- Sous-catégorie (choisie dynamiquement avec JavaScript) -->
        <label for="categorie_id">Sous-catégorie :</label>
        <select id="categorie_id" name="categorie_id" required>
            <!-- Les options seront ajoutées dynamiquement par JavaScript -->
        </select>
        <br>

        <!-- Prix du produit -->
        <label for="prix">Prix :</label>
        <input type="number" id="prix" name="prix" step="0.01" required>
        <br>

        <!-- Photos du produit -->
        <label for="photos">Photos :</label>
        <input type="file" id="photos" name="photos[]" multiple accept="image/jpeg, image/jpg, image/png" required>
        <br>

        <!-- Bouton de soumission -->
        <input type="submit" value="Ajouter le produit">
    </form>

    <!-- Script JavaScript pour gérer la mise à jour dynamique de la sous-catégorie -->
</body>

</html>