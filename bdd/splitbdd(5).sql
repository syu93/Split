-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 28 Février 2014 à 02:38
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
-- Structure de la table `content`
--

CREATE TABLE IF NOT EXISTS `content` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `position` int(10) NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `tag` varchar(100) DEFAULT NULL,
  `text_fr` varchar(1000) DEFAULT NULL,
  `text_en` varchar(1000) DEFAULT NULL,
  `page` varchar(100) DEFAULT NULL,
  `connected` varchar(10) DEFAULT NULL,
  `active` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Contenu de la table `content`
--

INSERT INTO `content` (`id`, `position`, `title`, `tag`, `text_fr`, `text_en`, `page`, `connected`, `active`) VALUES
(1, 0, 'description', 'description', 'C''est la plate-form de jeux vidéo du future', 'This is the gamers platform of the furur', '', 'no', 'yes'),
(2, 0, 'battlefield3', 'menu', 'battlefield3', 'battlefield3', NULL, 'no', 'yes'),
(3, 1, 'adventure', 'menu', 'Aventure', 'Adventure', NULL, 'no', 'yes'),
(4, 0, 'strategie', 'menu', 'Strategie', 'Strategy', '', 'no', 'yes'),
(5, 3, 'rpg', 'menu', 'Jeux de role', 'Role Play', NULL, 'no', 'yes'),
(6, 4, 'mmo', 'menu', 'MMO', 'MMO', '', 'no', 'yes'),
(7, 0, 'signup', 'text', 's''enregistrer / se connecter', 'Sign In / Log In', NULL, 'no', 'yes'),
(8, 0, 'mylibrary', 'menu', 'Mes jeux', 'My Library', '', 'yes', 'yes'),
(9, 0, 'play', 'menu', 'Jouer !', 'Play !', NULL, 'yes', 'yes');

-- --------------------------------------------------------

--
-- Structure de la table `game`
--

CREATE TABLE IF NOT EXISTS `game` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `position` int(100) NOT NULL,
  `tag` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `text_fr` varchar(100) NOT NULL,
  `text_en` varchar(1000) NOT NULL,
  `textlongue_fr` varchar(1000) NOT NULL,
  `textlongue_en` varchar(1000) DEFAULT NULL,
  `price` int(100) NOT NULL,
  `genre` varchar(100) NOT NULL,
  `pegi` int(10) DEFAULT NULL,
  `licence` varchar(100) DEFAULT NULL,
  `active` varchar(10) NOT NULL,
  `connected` varchar(10) DEFAULT NULL,
  `url` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Contenu de la table `game`
--

INSERT INTO `game` (`id`, `position`, `tag`, `title`, `text_fr`, `text_en`, `textlongue_fr`, `textlongue_en`, `price`, `genre`, `pegi`, `licence`, `active`, `connected`, `url`) VALUES
(1, 0, 'game', 'TitanFall', 'le jeux de l''annee', 'The game of the years', 'le jeux de l''annee', 'The game of the years', 60, 'action', 0, 'a:1:{i:0;s:23:"TitanFall-5306740f74748";}', 'yes', 'no', 'gameImg/TitanFall.jpg'),
(2, 0, 'game', 'battlefield3', 'Battlefield3', 'Battlefield3', 'Battlefield3', 'Battlefield3', 45, 'action', NULL, NULL, 'yes', 'no', 'gameImg/battlefield3.jpg');

-- --------------------------------------------------------

--
-- Structure de la table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `genre` text NOT NULL,
  `name` text NOT NULL,
  `firstname` text NOT NULL,
  `date` date NOT NULL,
  `pseudo` varchar(100) DEFAULT NULL,
  `avatar` varchar(100) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `country` text NOT NULL,
  `game` varchar(1000) DEFAULT NULL,
  `friend` varchar(1000) DEFAULT NULL,
  `lent` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pseudo` (`pseudo`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=40 ;

--
-- Contenu de la table `member`
--

INSERT INTO `member` (`id`, `genre`, `name`, `firstname`, `date`, `pseudo`, `avatar`, `password`, `email`, `country`, `game`, `friend`, `lent`) VALUES
(1, '', 'Tutuaku', 'Hervé', '0000-00-00', 'Syu93', NULL, 'e10adc3949ba59abbe56e057f20f883e', 'herve.tutuaku@gmail.com', 'France', 'a:1:{i:0;a:1:{s:6:"action";a:1:{s:23:"TitanFall-5306740f74748";s:9:"TitanFall";}}}', NULL, NULL),
(2, '', 'Barbon', 'Pierre', '0000-00-00', 'Pbarbon', NULL, 'ab4f63f9ac65152575886860dde480a1', 'pierre.barbon@gmail.com', 'France', NULL, NULL, NULL),
(39, 'male', 'Tutuaku', 'HervÃ©', '1993-01-23', 'plopman93', '../userAvt/plopman93.jpg', 'e10adc3949ba59abbe56e057f20f883e', 'plopman@gmail.com', 'France', NULL, NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
