-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 02 Mars 2014 à 23:23
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Contenu de la table `content`
--

INSERT INTO `content` (`id`, `position`, `title`, `tag`, `text_fr`, `text_en`, `page`, `connected`, `active`) VALUES
(1, 0, 'description', 'description', 'C''est la plate-form de jeux vidéo du future', 'This is the gamers platform of the furur', '', '0', 'yes'),
(2, 0, 'Action', 'menu', 'Action', 'Action', '', '0', 'yes'),
(3, 3, 'adventure', 'menu', 'Aventure', 'Adventure', '', '0', 'yes'),
(4, 2, 'strategie', 'menu', 'Strategie', 'Strategy', '', '0', 'yes'),
(5, 3, 'rpg', 'menu', 'Jeux de role', 'Role Play', NULL, '0', 'yes'),
(6, 4, 'mmo', 'menu', 'MMO', 'MMO', '', '0', 'yes'),
(7, 0, 'signup', 'text', 'se connecter / s''enregistrer ', 'log in / sign up', '', '0', 'yes'),
(8, 19, 'mylibrary', 'menu', 'Mes jeux', 'My Library', '', '1', 'yes'),
(9, 20, 'play', 'menu', 'Jouer !', 'Play !', '', '1', 'yes'),
(10, 20, 'cart', 'menu', 'Mon Panier', 'My Cart', NULL, '1', 'yes'),
(11, 0, 'signup', 'text', 'Bienvenue', 'Welcome', NULL, '1', 'yes'),
(12, 0, 'logoff', 'text', 'DÃ©connexion', 'Log off', '', '1', 'yes');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- Contenu de la table `game`
--

INSERT INTO `game` (`id`, `position`, `tag`, `title`, `text_fr`, `text_en`, `textlongue_fr`, `textlongue_en`, `price`, `genre`, `pegi`, `licence`, `active`, `connected`, `url`) VALUES
(1, 0, 'game', 'TitanFall', 'le jeux de l''annee', 'The game of the years', 'le jeux de l''annee', 'The game of the years', 60, 'action', 0, 'a:1:{i:0;s:23:"TitanFall-5306740f74748";}', 'yes', '1', 'gameImg/TitanFall.jpg'),
(2, 0, 'game', 'battlefield3', 'Battlefield3', 'Battlefield3', 'Battlefield3', 'Battlefield3', 45, 'action', NULL, NULL, 'yes', '1', 'gameImg/battlefield3.jpg'),
(3, 0, 'game', '7daystodie', '7 DAYS TO DIE', '7 DAYS TO DIE', 'Se fondant sur des themes d''horreurs et post-apocalytiques, les joueurs de 7 DAYS TO DIE peuvent pieger les villes abandonnees du monde constructible et destructible de Voxel pour les fournitures ou explorer la nature, recueillir des matieres premieres pour construire leurs propres outils, des armes, des pieges, des fortifications et des abris.', 'Building on survivalist and horror themes, players in 7 Days to Die can scavenge the abandoned cities of the buildable and destructable Voxel world for supplies or explore the wilderness to gather raw materials to build their own tools, weapons, traps, fortifications and shelters.', 0, 'action', NULL, NULL, 'yes', '1', 'gameImg/7daystodie.jpg'),
(4, 0, 'game', 'anno2070', 'ANNO 2070', 'ANNO 2070', 'Construisez votre sociÃ©tÃ© du futur, colonisez des Ã®les et crÃ©ez des mÃ©galopoles tentaculaires grÃ¢ce Ã  une multitude de bÃ¢timents, de vÃ©hicules et de ressources Ã  gÃ©rer.', 'Build your society of the future, colonize islands and create sprawling megacities with a multitude of buildings, vehicles and resources to manage.', 0, '30', NULL, NULL, 'yes', '1', 'gameImg/anno2070.jpg'),
(5, 0, 'game', 'assasinscreed4', 'Assasin''s Creed IV Black Flag', 'Assasin''s Creed IV Black Flag', '1715, les Pirates rÃ¨gnent sur les CaraÃ¯bes et viennent de fonder leur propre RÃ©publique oÃ¹ la corruption, lâ€™avarice et la cruautÃ© sont dÃ©sormais monnaie courante. Parmi ces hors-la-loi, un jeune capitaine impÃ©tueux du nom dâ€™Edward Kenway commence Ã  se forger une flatteuse rÃ©putation.', 'The year is 1715. Pirates rule the Caribbean and have established their own lawless Republic where corruption, greediness and cruelty are commonplace. Among these outlaws is a brash young captain named Edward Kenway.', 0, '50', NULL, NULL, 'yes', '1', 'gameImg/assasinscreed4.jpg'),
(6, 0, 'game', 'batman', 'Batman: Arkham Origins', 'Batman: Arkham Origins', 'Batmanâ„¢: Arkham Origins est le nouvel opus de la franchise de jeux vidÃ©o Ã  succÃ¨s Batman: Arkham. DÃ©veloppÃ© par WB Games MontrÃ©al, le jeu nous plonge dans une Gotham City encore plus vaste et une histoire inÃ©dite se dÃ©roulant plusieurs annÃ©es avant les Ã©vÃ©nements de Batman: Arkham Asylum et de Batman: Arkham City, les deux premiers opus...', 'Batmanâ„¢: Arkham Origins is the next installment in the blockbuster Batman: Arkham videogame franchise. Developed by WB Games MontrÃ©al, the game features an expanded Gotham City and introduces an original prequel storyline set several years before the events of Batman: Arkham Asylum and Batman: Arkham City, the first two critically...', 0, '40', NULL, NULL, 'yes', '1', 'gameImg/batman.jpg'),
(7, 0, 'game', 'bf2', 'Battlefield: Bad Company 2', 'Battlefield: Bad Company 2', 'Battlefield: Bad Company 2â„¢ vous apporte le meilleur de la jouabilitÃ© Battlefield sur PC et du combat de vÃ©hicules ainsi que les fameux moments"Battlefield." De nouveaux vÃ©hicules comme les ATV et le transport par hÃ©licoptÃ¨re permettent de nouvelles stratÃ©gies Avec le nouveau systÃ¨me de destruction 2.', 'Battlefield: Bad Company 2â„¢ brings the award-winning Battlefield gameplay to the forefront of PC gaming with best-in-class vehicular combat and unexpected "Battlefield moments." New vehicles like the ATV and a transport helicopter allow for all-new multiplayer tactics on the Battlefield. With the Frostbite-enabled Destruction 2.', 0, '16', NULL, NULL, 'yes', '1', 'gameImg/bf2.jpg'),
(8, 0, 'game', 'bioshock', 'BioShock Infinite', 'BioShock Infinite', 'Redevable envers les mauvaises personnes, avec sa vie en jeu, vÃ©tÃ©ran de la cavalerie amÃ©ricaine et dÃ©sormais mercenaire, Booker DeWitt dispose d''une opportunitÃ© unique pour effacer son ardoise. Il doit secourir Elizabeth, une mystÃ©rieuse jeune femme emprisonnÃ©e depuis sa plus tendre enfance et enfermÃ©e dans la ville flottante de...', 'Indebted to the wrong people, with his life on the line, veteran of the U.S. Cavalry and now hired gun, Booker DeWitt has only one opportunity to wipe his slate clean. He must rescue Elizabeth, a mysterious girl imprisoned since childhood and locked up in the flying city of Columbia.', 0, '30', NULL, NULL, 'yes', '1', 'gameImg/bioshock.jpg'),
(9, 0, 'game', 'borderlands2', 'Borderlands 2', 'Borderlands 2', 'The Ultimate Vault Hunterâ€™s Upgrade lets you get the most out of the Borderlands 2 experience.', 'The Ultimate Vault Hunterâ€™s Upgrade lets you get the most out of the Borderlands 2 experience.', 0, '30', NULL, NULL, 'yes', '1', 'gameImg/borderlands2.jpg'),
(10, 0, 'game', 'cilivization5', 'Sid Meier''s Civilization V', 'Sid Meier''s Civilization V', 'CrÃ©ez, dÃ©couvrez et tÃ©lÃ©chargez des cartes, scenarios, interfaces, etc... conÃ§us par des joueurs !', 'Create, discover, and download new player-created maps, scenarios, interfaces, and more!', 0, '35', NULL, NULL, 'yes', '1', 'gameImg/cilivization5.jpg'),
(11, 0, 'game', 'dawnofwar2', 'Warhammer 40,000: Dawn of War II: Retribution', 'Warhammer 40,000: Dawn of War II: Retribution', 'Warhammer 40.000 : Dawn of War II - Retribution est la seconde extension pour le jeu de stratÃ©gie de Relic Entertainement sur PC. Ne nÃ©cessitant pas le jeu de base pour fonctionner, cet add-on propose une campagne multirace permettant de prendre le commandement de hordes d''Orks, d''Eldars et de Tyranides.', 'Warhammer 40,000: Dawn of War II - Retribution is the second expansion for the strategy game Relic Entertainment PC. Does not require the base game to run this add-on offers multirace campaign to take command of hordes of Orks, Eldar and Tyranids to.', 0, '10', NULL, NULL, 'yes', '1', 'gameImg/dawnofwar2.jpg'),
(12, 0, 'game', 'dayz', 'DayZ', 'DayZ', 'ATTENTION : CE JEU EST UNE VERSION ALPHA EN ACCÃˆS ANTICIPÃ‰. MERCI D''ACHETER CE JEU UNIQUEMENT SI VOUS SOUHAITEZ PARTICIPER ACTIVEMENT AU DÃ‰VELOPPEMENT DU JEU ET ÃŠTES PRÃŠT Ã€ SUBIR DES PROBLÃˆMES POUVANT ENTRAÃŽNER UN MAUVAIS FONCTIONNEMENT ET DES INTERRUPTIONS DANS LE JEU.', 'WARNING: THIS GAME IS EARLY ACCESS ALPHA. PLEASE DO NOT PURCHASE IT UNLESS YOU WANT TO ACTIVELY SUPPORT DEVELOPMENT OF THE GAME AND ARE PREPARED TO HANDLE WITH SERIOUS ISSUES AND POSSIBLE INTERRUPTIONS OF GAME FUNCTIONING.', 0, '', NULL, NULL, 'yes', '1', 'gameImg/dayz.jpg'),
(13, 0, 'game', 'deadisland', 'Dead Island', 'Dead Island', 'Un lieu de villÃ©giature paradisiaque se transforme en enfer aprÃ¨s une invasion de zombies.', 'A holiday paradise gone mad. A tropical island turns into total chaos after a mysterious zombie outbreak.', 0, '18', NULL, NULL, 'yes', '1', 'gameImg/deadisland.jpg'),
(14, 0, 'game', 'defiance', 'Defiance', 'Defiance', 'Rejoignez et affrontez des milliers dâ€™autres joueurs dans ce shooter en ligne futuriste en monde ouvert oÃ¹ vous Ã©cumez une Terre mÃ©tamorphosÃ©e Ã  la recherche de technologie extraterrestre. CrÃ©ez un personnage unique et configurez Ã  votre avantage les diverses options de personnalisation afin de gravir les niveaux.', 'Join a futuristic online open-world shooter where thousands of players scour a transformed Earth competing for alien technology. Create a unique character and level up with diverse customization options. Hunt alone or with others as you improve your skills and unlock powerful modern and alien weapons that will help you survive the...', 0, '10', NULL, NULL, 'yes', '1', 'gameImg/defiance.jpg'),
(15, 0, 'game', 'dota2', 'Dota 2', 'Dota 2', 'Dota a tout d''abord Ã©tÃ© une modification faite par des joueurs de Warcraft 3 et a fini par Ãªtre un des jeux les plus jouÃ©s au monde. Suivant la tradition de Counter-Strike, Day of Defeat, Team Fortress, Portal et Alien Swarm, Dota 2 est le fruit du recrutement des dÃ©veloppeurs de la communautÃ© qui a construit cette modification et de...', 'Dota is a competitive game of action and strategy, played both professionally and casually by millions of passionate fans worldwide. Players pick from a pool of over a hundred heroes, forming two teams of five players.', 0, '0', NULL, NULL, 'yes', '1', 'gameImg/dota2.jpg'),
(16, 0, 'game', 'empiretotalwar', 'Empire: Total War', 'Empire: Total War', 'Prenez le contrÃ´le des mers, de la terre et construisez une nation pour partir Ã  la conquÃªte du globe.', 'Command the seas, control the land, forge a new nation, and conquer the globe.', 0, '14', NULL, NULL, 'yes', '1', 'gameImg/empiretotalwar.jpg');

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
(1, '', 'Tutuaku', 'Hervé', '0000-00-00', 'Syu93', 'userAvt/plopman93.jpg', 'e10adc3949ba59abbe56e057f20f883e', 'herve.tutuaku@gmail.com', 'France', 'a:1:{i:0;a:1:{s:6:"action";a:1:{s:23:"TitanFall-5306740f74748";s:9:"TitanFall";}}}', NULL, NULL),
(2, '', 'Barbon', 'Pierre', '0000-00-00', 'Pbarbon', NULL, 'ab4f63f9ac65152575886860dde480a1', 'pierre.barbon@gmail.com', 'France', NULL, NULL, NULL),
(39, 'male', 'Tutuaku', 'HervÃ©', '1993-01-23', 'plopman93', 'userAvt/plopman93.jpg', 'e10adc3949ba59abbe56e057f20f883e', 'plopman@gmail.com', 'France', NULL, NULL, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
