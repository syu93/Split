-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 09 Février 2014 à 03:56
-- Version du serveur :  5.6.15-log
-- Version de PHP :  5.5.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `splitbdd`
--

-- --------------------------------------------------------

--
-- Structure de la table `game`
--

CREATE TABLE IF NOT EXISTS `game` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tag` varchar(100) NOT NULL,
  `text` varchar(100) NOT NULL,
  `textlongue` text NOT NULL,
  `genre` varchar(100) NOT NULL,
  `licence` varchar(100) DEFAULT NULL,
  `url` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `firstname` text NOT NULL,
  `pseudo` varchar(100) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `country` text NOT NULL,
  `language` text NOT NULL,
  `game` varchar(1000) DEFAULT NULL,
  `friend` varchar(1000) DEFAULT NULL,
  `lent` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pseudo` (`pseudo`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `member`
--

INSERT INTO `member` (`id`, `name`, `firstname`, `pseudo`, `password`, `email`, `country`, `language`, `game`, `friend`, `lent`) VALUES
(1, 'Tutuaku', 'Hervé', 'Syu93', 'e10adc3949ba59abbe56e057f20f883e', 'herve.tutuaku@gmail.com', 'France', 'French', NULL, NULL, NULL),
(2, 'Barbon', 'Pierre', 'Pbarbon', 'ab4f63f9ac65152575886860dde480a1', 'pierre.barbon@gmail.com', 'France', 'French', NULL, NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
