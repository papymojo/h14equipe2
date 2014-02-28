-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Client: localhost:3306
-- Généré le : Ven 28 Février 2014 à 08:30
-- Version du serveur: 5.5.35
-- Version de PHP: 5.3.10-1ubuntu3.9

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `h14equipe2`
--

-- --------------------------------------------------------

--
-- Structure de la table `offres`
--

CREATE TABLE IF NOT EXISTS `offres` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fkutilisateurs` int(11) NOT NULL,
  `fkproduit` int(11) NOT NULL,
  `date` date NOT NULL,
  `montant` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `produit`
--

CREATE TABLE IF NOT EXISTS `produit` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `proprietaire` int(11) NOT NULL,
  `nom` varchar(25) NOT NULL,
  `prixdedepart` float NOT NULL,
  `date` date NOT NULL,
  `duree` int(11) NOT NULL,
  `vendu` tinyint(1) NOT NULL,
  `description` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `image` varchar(200) NOT NULL,
  `etat` text CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Contenu de la table `produit`
--

INSERT INTO `produit` (`id`, `proprietaire`, `nom`, `prixdedepart`, `date`, `duree`, `vendu`, `description`, `image`, `etat`) VALUES
(1, 0, 'Hubble', 42, '2014-02-25', 4, 0, '<p>T&eacute;l&eacute;scope spatial historique</p>\r\n', './images/produits/-1640480530/Hubble.jpg', '<p>en mauvai &eacute;tat gyro HS et optique &agrave; corriger avec des lunettes</p>\r\n'),
(2, 0, 'Planet Express', 1, '2014-02-25', 1000, 1, '<p>En bon &eacute;tat&nbsp;</p>\r\n', './images/produits/-1590100532/Planet Express.jpg', '<p>yolo</p>\r\n'),
(3, 0, 'Planet Express', 1, '2014-02-25', 1000, 1, '<p>En bon &eacute;tat&nbsp;</p>\r\n', './images/produits/-1590100532/Planet Express.jpg', '<p>yolo</p>\r\n');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pseudo` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `email` varchar(50) NOT NULL,
  `adresse` varchar(200) NOT NULL,
  `codepostal` char(7) NOT NULL,
  `telephone` varchar(16) NOT NULL,
  `portemonaie` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Contenu de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `pseudo`, `password`, `email`, `adresse`, `codepostal`, `telephone`, `portemonaie`) VALUES
(1, 'admin', 'admin', 'benjamin.bercy@orange.fr', '9,Impasse des peupliers', '12450', '0565694979', 7520.9),
(2, 'Benjamin', 'papymojo12', 'benjamin.bercy@orange.fr', '9, Impasse des Peupliers\r\nLuc La Primaube', 'C1C3F3', '0565694979', 0),
(3, 'Emilie', 'totototo', 'a.b@c.de', 'zrezafrezvrez', 'L0L0L0', '0000000000', 0),
(4, 'JimThiberiusKirk', 'Enterprise', 'Jim.kirk@starfleet.fu', 'san francisco terre', 'V4V 4V4', '0000000000', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
