-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3308
-- Généré le : jeu. 21 déc. 2023 à 08:35
-- Version du serveur : 8.0.31
-- Version de PHP : 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `deshabillez-moi`
--

-- --------------------------------------------------------

--
-- Structure de la table `categorie_e`
--

DROP TABLE IF EXISTS `categorie_e`;
CREATE TABLE IF NOT EXISTS `categorie_e` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom_categorie` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `categorie_e`
--

INSERT INTO `categorie_e` (`id`, `nom_categorie`) VALUES
(1, 'Filles'),
(2, 'Garcon'),
(3, 'Jouet'),
(4, 'Poussettes'),
(5, 'Chaises hautes et siège auto');

-- --------------------------------------------------------

--
-- Structure de la table `categorie_f`
--

DROP TABLE IF EXISTS `categorie_f`;
CREATE TABLE IF NOT EXISTS `categorie_f` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom_categorie` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `categorie_f`
--

INSERT INTO `categorie_f` (`id`, `nom_categorie`) VALUES
(1, 'Vetements'),
(2, 'Chaussures'),
(3, 'Sacs'),
(4, 'Accessoires'),
(5, 'Beauté');

-- --------------------------------------------------------

--
-- Structure de la table `categorie_h`
--

DROP TABLE IF EXISTS `categorie_h`;
CREATE TABLE IF NOT EXISTS `categorie_h` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom_categorie` varchar(50) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `categorie_h`
--

INSERT INTO `categorie_h` (`id`, `nom_categorie`) VALUES
(1, 'Vetements'),
(2, 'Chaussures'),
(3, 'Accessoires'),
(4, 'Soins');

-- --------------------------------------------------------

--
-- Structure de la table `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int DEFAULT NULL,
  `titre` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  `categorie_type` char(1) COLLATE utf8mb4_general_ci NOT NULL,
  `categorie_id` int DEFAULT NULL,
  `prix` decimal(10,2) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  KEY `categorie_id` (`categorie_id`)
) ;

--
-- Déchargement des données de la table `product`
--

INSERT INTO `product` (`id`, `user_id`, `titre`, `description`, `categorie_type`, `categorie_id`, `prix`) VALUES
(1, 10, 'Premier produit', 'Super produit de qualité', 'h', 3, '122.00'),
(2, 10, 'gggproduit', 'Super produit de qualité', 'e', 5, '253.00'),
(3, 10, 'gazon', 'gazon haute gammes', 'e', 5, '253.00');

-- --------------------------------------------------------

--
-- Structure de la table `product_photos`
--

DROP TABLE IF EXISTS `product_photos`;
CREATE TABLE IF NOT EXISTS `product_photos` (
  `id` int NOT NULL AUTO_INCREMENT,
  `product_id` int DEFAULT NULL,
  `chemin_photo` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `product_id` (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `product_photos`
--

INSERT INTO `product_photos` (`id`, `product_id`, `chemin_photo`) VALUES
(1, 1, 'uploads/6x4-camion.jpg'),
(2, 1, 'uploads/gazon.png'),
(3, 2, 'uploads/Euroméditerranée_EPA.png'),
(4, 3, 'uploads/fond.jpg'),
(5, 3, 'uploads/gazon.png');

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_general_ci NOT NULL,
  `profile_picture` varchar(255) COLLATE utf8mb4_general_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_general_ci,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `profile_picture`, `description`) VALUES
(1, 'User1234@', 'User1234@gmail.com', '$2y$10$xCWT73e4o1iL7/DyAjlOiew.5hw0F.BMGuuIh2jUftyX6zU9Ee/ny', NULL, NULL),
(2, 'User1234@1', 'User1234@1', '$2y$10$h3FCXiuvl2mauGMzAAv1..o/zW77NF2dyOclN0TyG1k6lXNa2Eaby', NULL, NULL),
(3, 'User1234@2', 'User1234@2', '$2y$10$MW/lGUyPeuDuI1aFzX72ne9Tu8KuLLPxZTOh/5qHTtftuNGmpxs4K', NULL, NULL),
(4, 'User1234@3', 'User1234@3', '$2y$10$QrRrYO/FHNQkSlhtp6rehesKcK5sfhLpRshE8hyOFJmY5V6LQgLXW', NULL, NULL),
(5, 'User1234@4', 'User1234@4', '$2y$10$jwY2ytEeEJwGK2jbGAMWAOpc4/6IAiQsKQ1imASWXIqcfeZR1QXfG', NULL, NULL),
(6, 'Augustin-Yvon', 'augustin.yvon@gmail.com', '$2y$10$3MzbPj7eM06Ri/0TEOjVK.HZAqqBJqf6JCv5r9oL0aJeosM8zYfd6', NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
