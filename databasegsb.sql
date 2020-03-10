-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 10 mars 2020 à 08:56
-- Version du serveur :  5.7.23
-- Version de PHP :  7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `gsb`
--

-- --------------------------------------------------------

--
-- Structure de la table `etat`
--

DROP TABLE IF EXISTS `etat`;
CREATE TABLE IF NOT EXISTS `etat` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `libelle` text CHARACTER SET utf8 NOT NULL,
  `ordre` text CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `fiche`
--

DROP TABLE IF EXISTS `fiche`;
CREATE TABLE IF NOT EXISTS `fiche` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `mois` int(2) NOT NULL,
  `annee` int(4) NOT NULL,
  `montant_validite` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `ligneff`
--

DROP TABLE IF EXISTS `ligneff`;
CREATE TABLE IF NOT EXISTS `ligneff` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `dateff` date DEFAULT NULL,
  `qte` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `lignehf`
--

DROP TABLE IF EXISTS `lignehf`;
CREATE TABLE IF NOT EXISTS `lignehf` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `date` date DEFAULT NULL,
  `libelle` text CHARACTER SET utf8 NOT NULL,
  `montant` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `typeff`
--

DROP TABLE IF EXISTS `typeff`;
CREATE TABLE IF NOT EXISTS `typeff` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `libelle` text CHARACTER SET utf8 NOT NULL,
  `montant_unitaire` int(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(250) NOT NULL AUTO_INCREMENT,
  `nom_utilisateur` varchar(100) NOT NULL,
  `mot_de_passe` varchar(100) NOT NULL,
  `nom` varchar(255) CHARACTER SET utf8 NOT NULL,
  `prenom` varchar(255) CHARACTER SET utf8 NOT NULL,
  `email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `pays` varchar(255) CHARACTER SET utf8 NOT NULL,
  `adresse` text CHARACTER SET utf8 NOT NULL,
  `ville` text CHARACTER SET utf8 NOT NULL,
  `codepost` int(255) NOT NULL,
  `mobile` int(255) NOT NULL,
  `poste` varchar(255) CHARACTER SET utf8 NOT NULL,
  `dateInscription` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `nom_utilisateur`, `mot_de_passe`, `nom`, `prenom`, `email`, `pays`, `adresse`, `ville`, `codepost`, `mobile`, `poste`, `dateInscription`) VALUES
(20, 'adminvisite', 'dc76e9f0c0006e8f919e0c515c66dbba3982f785', 'vivie', 'jeremy', 'jeremyvivie@hotmail.fr', 'france', 'rue du poulpe', 'lyon', 83470, 623410725, 'Visiteur', '2020-03-09'),
(21, 'admincompta', 'dc76e9f0c0006e8f919e0c515c66dbba3982f785', 'vivie', 'jeremy', 'jeremyvivie@hotmail.fr', 'France', 'rue du poulpe', 'lyon', 83470, 623410725, 'Comptable', '2020-03-09');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
