-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3307
-- Généré le : mar. 16 mars 2021 à 15:31
-- Version du serveur :  10.4.13-MariaDB
-- Version de PHP : 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `attestation`
--

-- --------------------------------------------------------

--
-- Structure de la table `motif`
--

DROP TABLE IF EXISTS `motif`;
CREATE TABLE IF NOT EXISTS `motif` (
  `idMotif` int(1) NOT NULL AUTO_INCREMENT,
  `Motif` varchar(10) NOT NULL,
  PRIMARY KEY (`idMotif`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `motif`
--

INSERT INTO `motif` (`idMotif`, `Motif`) VALUES
(1, 'travail'),
(2, 'hadicap'),
(3, 'convocatio'),
(4, 'missions'),
(5, 'voyage'),
(6, 'animaux');

-- --------------------------------------------------------

--
-- Structure de la table `sortie`
--

DROP TABLE IF EXISTS `sortie`;
CREATE TABLE IF NOT EXISTS `sortie` (
  `IdUser` int(11) NOT NULL,
  `idMotif` int(1) NOT NULL,
  `dateTime` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `IdUser` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(100) NOT NULL,
  `Prenom` varchar(100) NOT NULL,
  `DateNaissance` date NOT NULL,
  `LieuNaissance` int(50) NOT NULL,
  `Adresse` varchar(100) NOT NULL,
  `Ville` varchar(50) NOT NULL,
  `CodePostal` int(5) NOT NULL,
  PRIMARY KEY (`IdUser`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
