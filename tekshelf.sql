-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : dim. 25 juin 2023 à 16:40
-- Version du serveur : 10.4.27-MariaDB
-- Version de PHP : 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `tekshelf`
--

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `marque` varchar(50) NOT NULL,
  `code_bar` varchar(13) NOT NULL,
  `rayon` varchar(50) NOT NULL,
  `stock` int(2) NOT NULL,
  `image` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`id`, `nom`, `marque`, `code_bar`, `rayon`, `stock`, `image`) VALUES
(1, 'Saumon Atlantique élevé en Norvège fumé 120g', 'Petit Navire', '3760253430623', 'Poissonerie', 16, 'saumon.png'),
(2, 'Confiture allégée de fraises 340g', 'Auchan', '3596710475971', 'Petit déjeuner', 38, 'confiture.png'),
(3, 'Briochettes rangées 12 pièces 480g', 'Pasquier', '3256549999870', 'Petit déjeuner', 25, 'brioche.png'),
(4, 'Chips saveur barbecue 135g', 'Lays', '3168930164661', 'Apéritif', 14, 'chips.png'),
(5, 'Glace à l\'eau parfums fous 24 pièces 1,170g', 'Yeti', '3332792000072', 'Glaces', 22, 'glace.png');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
