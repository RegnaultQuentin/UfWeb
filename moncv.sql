-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mer. 05 juin 2019 à 07:56
-- Version du serveur :  5.7.26
-- Version de PHP :  7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `moncv`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `user` varchar(255) NOT NULL,
  `psw` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`user`, `psw`) VALUES
('Quentin', '63a9f0ea7bb98050796b649e85481845');

-- --------------------------------------------------------

--
-- Structure de la table `competences`
--

DROP TABLE IF EXISTS `competences`;
CREATE TABLE IF NOT EXISTS `competences` (
  `competences` varchar(255) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `valeur` varchar(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `competences`
--

INSERT INTO `competences` (`competences`, `id`, `valeur`) VALUES
('javascript', 1, '65'),
('python', 2, '55'),
('premiere pro', 3, '85'),
('html/css', 4, '75'),
('sql', 5, '65'),
('linux', 6, '50');

-- --------------------------------------------------------

--
-- Structure de la table `emploi`
--

DROP TABLE IF EXISTS `emploi`;
CREATE TABLE IF NOT EXISTS `emploi` (
  `nom` varchar(255) NOT NULL,
  `entreprise` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `emploi`
--

INSERT INTO `emploi` (`nom`, `entreprise`, `description`, `date`) VALUES
('Emploi saisonier', 'Communauté de Salins Les Bains/Espace vert', 'Ce travail saisonnier avait pour but de me faire travailler entre mon année de premiere et terminal', 'Juillet 2015'),
('Salarié Interim', 'Ds smith(Marnoz)/Naturalim(Port Lesney)', 'Le travail en intérim demande une certaine autonomie, cela ma donc permis d\'être plus autonome et aussi d\'acquérir des compétences dans le monde du travail.', 'Novembre 2016/ Juillet 2018');

-- --------------------------------------------------------

--
-- Structure de la table `etudes`
--

DROP TABLE IF EXISTS `etudes`;
CREATE TABLE IF NOT EXISTS `etudes` (
  `niveau` varchar(255) NOT NULL,
  `lieux` varchar(255) NOT NULL,
  `duree` varchar(255) NOT NULL,
  `obtention` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `etudes`
--

INSERT INTO `etudes` (`niveau`, `lieux`, `duree`, `obtention`) VALUES
('B.E.P agricole et travaux paysager', 'Montmorot JURA', 'Durant ma formation de bac professionnel', 'Obtenu en 2015'),
('Bac professionnel', 'Montmorot JURA', '3 ans de formation', 'Obtenu en 2016'),
('Bachelor', 'Ynov Bordeaux ', '', 'Commencé en 2018');

-- --------------------------------------------------------

--
-- Structure de la table `moi`
--

DROP TABLE IF EXISTS `moi`;
CREATE TABLE IF NOT EXISTS `moi` (
  `description` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
