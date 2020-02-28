-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 28 fév. 2020 à 13:25
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `portfolio`
--

-- --------------------------------------------------------

--
-- Structure de la table `post`
--

DROP TABLE IF EXISTS `post`;
CREATE TABLE IF NOT EXISTS `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `prenom` varchar(50) COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `entreprise` varchar(50) COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `message` varchar(2000) COLLATE utf8mb4_unicode_nopad_ci NOT NULL,
  `date` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=44 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_nopad_ci;

--
-- Déchargement des données de la table `post`
--

INSERT INTO `post` (`id`, `nom`, `prenom`, `email`, `entreprise`, `message`, `date`) VALUES
(4, 'Fidouchet', 'Jean', 'bulle@gmail.com', 'Lact\'ose', 'Camille est très investie dans son travail. Très bon élément. ', '2020-02-13 18:00:13'),
(35, 'Doe', 'John', 'jo.doe@adress.fr', 'pie x\'aile', 'Camille a un très bon esprit d\'équipe, curieuse et enjouée elle promet de devenir une très bonne développeuse web.', '2020-02-27 11:49:36');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
