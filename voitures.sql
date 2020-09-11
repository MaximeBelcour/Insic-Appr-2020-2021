-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : ven. 11 sep. 2020 à 08:40
-- Version du serveur :  5.7.31
-- Version de PHP : 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `voitures`
--

-- --------------------------------------------------------

--
-- Structure de la table `marques`
--

DROP TABLE IF EXISTS `marques`;
CREATE TABLE IF NOT EXISTS `marques` (
  `IDMarque` int(11) NOT NULL AUTO_INCREMENT,
  `NomMarque` varchar(30) NOT NULL,
  `AdrMarque` varchar(40) NOT NULL,
  PRIMARY KEY (`IDMarque`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `marques`
--

INSERT INTO `marques` (`IDMarque`, `NomMarque`, `AdrMarque`) VALUES
(1, 'Renault', '92100 Boulogne-Billancourt cedex-France'),
(2, 'Peugeot', '75 avenue de la Grande Armée 75116 PARIS'),
(3, 'Jaguar', 'Londres'),
(4, 'Audi', 'Franfort'),
(5, 'BMW', 'Stutgart'),
(6, 'Ferrari', 'Turin');

-- --------------------------------------------------------

--
-- Structure de la table `voiture`
--

DROP TABLE IF EXISTS `voiture`;
CREATE TABLE IF NOT EXISTS `voiture` (
  `IDVoiture` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(30) NOT NULL,
  `Vitesse` float NOT NULL,
  `Puissance` int(11) NOT NULL,
  `Prix` float NOT NULL,
  `Marque` int(11) NOT NULL,
  PRIMARY KEY (`IDVoiture`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `voiture`
--

INSERT INTO `voiture` (`IDVoiture`, `Nom`, `Vitesse`, `Puissance`, `Prix`, `Marque`) VALUES
(1, 'Clio', 160, 90, 13000, 1),
(2, '406', 190, 110, 19000, 2),
(3, '308', 200, 130, 28000, 2),
(4, 'Captur', 180, 110, 15000, 1),
(5, 'A1', 200, 150, 30000, 4),
(6, 'A3', 210, 180, 35000, 4),
(7, 'A5', 250, 340, 54000, 4),
(8, 'M3', 250, 380, 64000, 5),
(9, '320i', 240, 250, 36000, 5),
(10, 'California', 290, 530, 200000, 6),
(11, '458', 280, 540, 190000, 6),
(12, 'XE', 250, 400, 150000, 3);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
