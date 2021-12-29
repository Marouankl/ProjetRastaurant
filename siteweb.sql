-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : Dim 03 jan. 2021 à 21:15
-- Version du serveur :  8.0.21
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `siteweb`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(60) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'admin@admin.com', 'administrateur');

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

DROP TABLE IF EXISTS `categorie`;
CREATE TABLE IF NOT EXISTS `categorie` (
  `id_categorie` int NOT NULL,
  `nom` varchar(255) NOT NULL,
  PRIMARY KEY (`id_categorie`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id_categorie`, `nom`) VALUES
(1, 'LesPlats'),
(2, 'Desserts');

-- --------------------------------------------------------

--
-- Structure de la table `clients`
--

DROP TABLE IF EXISTS `clients`;
CREATE TABLE IF NOT EXISTS `clients` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `sexe` char(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `date_naissance` date NOT NULL,
  `adresse` varchar(255) NOT NULL,
  `num_tel` int NOT NULL,
  `email` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(60) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE IF NOT EXISTS `commande` (
  `id_commande` int NOT NULL AUTO_INCREMENT,
  `id_membre` int DEFAULT NULL,
  `montant` int NOT NULL,
  `date_enregistrement` datetime NOT NULL,
  `etat` enum('en cours de traitement','envoyé','livré') NOT NULL,
  PRIMARY KEY (`id_commande`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

DROP TABLE IF EXISTS `produit`;
CREATE TABLE IF NOT EXISTS `produit` (
  `id_produit` int NOT NULL AUTO_INCREMENT,
  `categorie` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `nom` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `prix` int NOT NULL,
  `img` varchar(64) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id_produit`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Déchargement des données de la table `produit`
--

INSERT INTO `produit` (`id_produit`, `categorie`, `nom`, `description`, `prix`, `img`) VALUES
(3, '1', 'Flaming Pudding', '0', 6, 'r1.jpg'),
(4, '2', 'Crescent Ring', '0', 9, 'd9.jpg'),
(6, '2', 'Café gourmand', '0', 5, 'd1.jpg'),
(7, '2', 'Chistmas Carols', '0', 5, 'd5.jpg'),
(8, '2', 'Cheese Cake MEUH!', '0', 5, 'd3.jpg'),
(9, '2', 'Turron', '0', 7, 'd8.jpg'),
(10, '1', 'Tartare De Boeuf', '0', 21, 'r9.jpg'),
(11, '1', 'Bavette XXL', '0', 20, 'r5.jpg'),
(12, '1', 'Calamars a Larmoricaine', '0', 13, 'r6.jpg'),
(13, '1', 'crazy Pakora', '0', 14, 'r8.jpg'),
(14, '1', 'Planche de Charcuterie', '0', 19, 'r1.jpg'),
(15, '1', 'Brushetta', '0', 20, 'r2.jpg'),
(16, '1', 'Cote de Boeuf', '0', 15, 'r3.jpg'),
(17, '1', 'Assiette Cote Poitrine', '0', 20, 'r4.jpg'),
(18, '1', 'Cuisse de poulet', '0', 24, 'r7.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `reservations`
--

DROP TABLE IF EXISTS `reservations`;
CREATE TABLE IF NOT EXISTS `reservations` (
  `res_id` int NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `email` char(60) NOT NULL,
  `num_tel` int NOT NULL,
  `date` date NOT NULL,
  `time` time(6) NOT NULL,
  `personne` varchar(255) NOT NULL,
  PRIMARY KEY (`res_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `reservations`
--

INSERT INTO `reservations` (`res_id`, `nom`, `email`, `num_tel`, `date`, `time`, `personne`) VALUES
(6, ',o,jikk,go', 'iiinerfz@edf', 2020, '2020-05-12', '00:00:00.000000', '3'),
(7, 'hjhj', 'HJHYUJBHJ', 2002, '2002-01-12', '12:14:00.000000', '2'),
(8, 'regfrtgeert', 'klkdjkzhiu@hyudy', 1995, '1995-04-12', '12:02:00.000000', '3'),
(9, 'zerdfer', 'ererfgre@ergfre', 2020, '2020-04-12', '12:05:00.000000', '4'),
(10, 'zerdfer', 'ererfgre@ergfre', 2020, '2020-04-12', '12:05:00.000000', '4');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
