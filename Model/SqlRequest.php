<?php
require_once '../Model/Database.php';

session_start();

/**
 * Étend la classe Database et gère les requêtes SQL pour la gestion des utilisateurs dans la base de données.
 */
class SqlRequest extends Database
{

    /**
     * Vérifie si un nom d'utilisateur existe déjà dans la base de données.
     *
     * @param string $login Le nom d'utilisateur à vérifier.
     * @return bool True si le nom d'utilisateur existe déjà, sinon false.
     */
    public function validateUsername(string $username): bool
    {
        $checkLoginQuery = "SELECT id FROM user WHERE username = :username";
        $stmt = $this->pdo->prepare($checkLoginQuery);
        $stmt->bindValue(':username', $username, PDO::PARAM_STR);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Enregistre un nouvel utilisateur dans la base de données.
     *
     * @param string $username Le nom d'utilisateur
     * @param string $email L'adresse email
     * @param string $password Le mot de passe
     * @return bool True si l'enregistrement réussit, sinon false.
     */
    public function register(string $username, string $email, string $password): bool
    {
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $registerQuery = "INSERT INTO user (username, email, password) VALUES (:username, :email, :password)";

        $stmt = $this->pdo->prepare($registerQuery);

        $stmt->bindValue(':username', $username, PDO::PARAM_STR);
        $stmt->bindValue(':email', $email, PDO::PARAM_STR);
        $stmt->bindValue(':password', $hashedPassword, PDO::PARAM_STR);

        if ($stmt->execute()) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Obtient l'identifiant d'un utilisateur par son login.
     *
     * @param string $login Le nom d'utilisateur
     * @return int|false L'identifiant de l'utilisateur s'il existe, sinon false.
     */
    public function getId(string $username): int|false
    {
        $selectIdQuery = "SELECT `id` FROM `user` WHERE `username` = :username";

        $stmt = $this->pdo->prepare($selectIdQuery);
        $stmt->bindValue(':username', $username, PDO::PARAM_STR);
        $stmt->execute();

        $result = $stmt->fetchColumn();

        return $result;
    }

    /**
     * Obtient l'username d'un utilisateur par son email.
     *
     * @param string $login Le nom d'utilisateur
     * @return int|false L'identifiant de l'utilisateur s'il existe, sinon false.
     */
    public function getEmail(string $username): string|false
    {
        $selectIdQuery = "SELECT `email` FROM `user` WHERE `username` = :username";

        $stmt = $this->pdo->prepare($selectIdQuery);
        $stmt->bindValue(':username', $username, PDO::PARAM_STR);
        $stmt->execute();

        $result = $stmt->fetchColumn();

        return $result;
    }

    /**
     * Vérifie si un nom d'utilisateur et un mot de passe correspondent dans la base de données.
     *
     * @param string $username Le nom d'utilisateur à vérifier.
     * @param string $password Le mot de passe à vérifier.
     * @return bool True si les identifiants correspondent, sinon false.
     */
    public function checkInfo(string $username, string $password): bool
    {
        $checkPasswdQuery = "SELECT password FROM user WHERE username = :username";

        $stmt = $this->pdo->prepare($checkPasswdQuery);
        $stmt->bindValue(':username', $username, PDO::PARAM_STR);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $hashedPassword = $result['password'];

        return password_verify($password, $hashedPassword);
    }

    /**
     * Met à jour le nom d'utilisateur et le mot de passe d'un utilisateur.
     *
     * @param string $newLogin Le nouveau nom d'utilisateur.
     * @param string $newPassword Le nouveau mot de passe.
     * @param int $userID L'identifiant de l'utilisateur à mettre à jour.
     * @return void
     */
    public function updateLogin(string $newUsername, string $newPassword, int $userID): void
    {
        $hashedNewPassword = password_hash($newPassword, PASSWORD_DEFAULT);

        $updateQuery = "UPDATE user SET username = :username, password = :password WHERE id = :id";

        $stmt = $this->pdo->prepare($updateQuery);

        $stmt->bindValue(':username', $newUsername, PDO::PARAM_STR);
        $stmt->bindValue(':password', $hashedNewPassword, PDO::PARAM_STR);
        $stmt->bindValue(':id', $userID, PDO::PARAM_INT);
        $stmt->execute();
    }

    /**
     * Obtient le nom d'utilisateur et le mot de passe d'un utilisateur par son identifiant.
     *
     * @param int $id L'identifiant de l'utilisateur.
     * @return array|false Un tableau associatif contenant le nom d'utilisateur et le mot de passe s'ils existent, sinon false.
     */
    public function getLoginById(int $id): array|false
    {
        $getLoginByIdQuery = "SELECT username, password FROM user WHERE id = :id";
        $stmt = $this->pdo->prepare($getLoginByIdQuery);
        $stmt->bindValue(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($result) {
            return $result;
        } else {
            return false;
        }
    }

    /**
     * Récupère tous les utilisateurs de la base de données.
     *
     * @return array|false Un tableau contenant tous les utilisateurs de la base de données, ou false en cas d'échec.
     */
    public function findAllStudent(): array|false
    {
        $findStudentQuery = "SELECT * FROM user";
        $stmt = $this->pdo->prepare($findStudentQuery);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if ($result) {
            return $result;
        } else {
            return false;
        }
    }

    /**
     * Insère les données d'un produit dans la table product.
     *
     * @param string $titre Le titre du produit
     * @param string $description La description du produit
     * @param string $categorie_type Le type de catégorie ('h', 'f', 'e')
     * @param int $categorie_id L'ID de la sous-catégorie
     * @param float $prix Le prix du produit
     * @param int $user_id L'ID de l'utilisateur qui ajoute le produit
     * @return PDOStatement L'objet de requête préparée.
     */
    public function insertProduct(string $titre, string $description, string $categorie_type, int $categorie_id, float $prix, int $user_id): PDOStatement
    {
        $insertQuery = "INSERT INTO product (titre, description, categorie_type, categorie_id, prix, user_id) 
                        VALUES (:titre, :description, :categorie_type, :categorie_id, :prix, :user_id)";

        $stmt = $this->pdo->prepare($insertQuery);

        $stmt->bindValue(':titre', $titre, PDO::PARAM_STR);
        $stmt->bindValue(':description', $description, PDO::PARAM_STR);
        $stmt->bindValue(':categorie_type', $categorie_type, PDO::PARAM_STR);
        $stmt->bindValue(':categorie_id', $categorie_id, PDO::PARAM_INT);
        $stmt->bindValue(':prix', $prix, PDO::PARAM_STR);
        $stmt->bindValue(':user_id', $user_id, PDO::PARAM_INT);

        return $stmt;
    }

    /**
     * Récupère l'ID d'un produit dans la table product en utilisant le user ID et le titre.
     *
     * @param int $user_id L'ID de l'utilisateur associé au produit
     * @param string $titre Le titre du produit
     * @return int|null L'ID du produit s'il existe, sinon null.
     */
    public function getProductId(int $user_id, string $titre): ?int
    {
        $selectQuery = "SELECT id FROM product WHERE user_id = :user_id AND titre = :titre";

        $stmt = $this->pdo->prepare($selectQuery);
        $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
        $stmt->bindParam(':titre', $titre, PDO::PARAM_STR);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        return $result ? (int)$result['id'] : null;
    }

    /**
     * Insère le chemin d'une photo dans la table product_photos.
     *
     * @param int $product_id L'ID du produit auquel la photo est associée
     * @param string $photo_path Le chemin de la photo
     * @return PDOStatement L'objet de requête préparée.
     */
    public function insertProductPhoto(int $product_id, string $photo_path): PDOStatement
    {
        $insertQuery = "INSERT INTO product_photos (product_id, chemin_photo) VALUES (:product_id, :chemin_photo)";

        $stmt = $this->pdo->prepare($insertQuery);

        $stmt->bindValue(':product_id', $product_id, PDO::PARAM_INT);
        $stmt->bindValue(':chemin_photo', $photo_path, PDO::PARAM_STR);

        return $stmt;
    }
}
