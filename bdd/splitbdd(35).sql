-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Ven 30 Mai 2014 à 03:29
-- Version du serveur :  5.6.15-log
-- Version de PHP :  5.4.24

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
  `active` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `page` (`page`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=51 ;

--
-- Contenu de la table `content`
--

INSERT INTO `content` (`id`, `position`, `title`, `tag`, `text_fr`, `text_en`, `page`, `connected`, `active`) VALUES
(1, 0, 'description', 'description', 'C''est la plate-form de jeux vidéo du future', 'This is the gamers platform of the furur', '', '0', 1),
(2, 1, 'action', 'menu', 'Action', 'Action', 'index', '0', 1),
(3, 2, 'adventure', 'menu', 'Aventure', 'Adventure', 'index', '0', 1),
(4, 3, 'strategy', 'menu', 'Strategie', 'Strategy', 'index', '0', 1),
(5, 4, 'roleplay', 'menu', 'Jeux de role', 'Role Play', 'index', '0', 1),
(6, 5, 'mmo', 'menu', 'MMO', 'MMO', 'index', '0', 1),
(7, 0, 'signup', 'text', 'se connecter / s''enregistrer ', 'log in / sign up', '', '0', 1),
(8, 19, 'mylibrary', 'menu', 'Mes jeux', 'My Library', '', '1', 1),
(9, 20, 'play', 'menu', 'Jouer !', 'Play !', '', '1', 1),
(10, 20, 'cart', 'menu', 'Mon Panier', 'My Cart', 'index', '1', 1),
(11, 0, 'signup', 'text', 'Bienvenue', 'Welcome', NULL, '1', 1),
(12, 0, 'logoff', 'text', 'Déconnexion', 'Log off', '', '1', 1),
(13, 0, 'price', 'text', 'Prix', 'Price', NULL, '0', 1),
(14, 0, 'editor', 'text', 'Editeur', 'Editor', NULL, '0', 1),
(15, 0, 'cartempty', 'text', 'Aucun article dans le parnier.', 'No item in your cart.', NULL, '0', 1),
(16, 0, 'total', 'text', 'Total', 'Total', NULL, '0', 1),
(17, 0, 'cartvalidate', 'text', 'Valider ma commande', 'Validate my order', NULL, '0', 1),
(18, 6, 'community', 'menu', 'Communauté', 'Community', 'index', '0', 1),
(19, 0, 'genre', 'text', 'Genre', 'Genre', NULL, '0', 1),
(20, 0, 'info bank', 'text', 'Informations bancaires', 'Banking information', NULL, '1', 0),
(21, 0, 'paiement', 'text', 'Numéro de carte', 'Cart Number', '', '1', 0),
(22, 0, 'facturation', 'text', 'Adresse de facturation', 'Billing Address', NULL, '1', 0),
(23, 0, 'phone', 'text', 'Téléphone', 'Phone', NULL, '1', 0),
(24, 0, 'compte', 'text', 'Compte', 'Account', NULL, '1', 0),
(25, 0, 'termes', 'text', 'J''accepte les termes de l''Accord de souscription.', 'I accept the terms of the Subscription Agreement.', NULL, '1', 0),
(26, 0, 'confirm', 'text', 'En cliquant sur "Acheter" vous acceptez que Split vous fournisse un accès immédiat à ce contenu digital et donc annule toute possibilité de rétraction de cet achat : l''achat est définitif.', 'By clicking "Buy" you agree that Split provides you immediate access to digital content and therefore cancels any possibility of retracting this purchase: the purchase is final.', NULL, '1', 0),
(27, 0, 'confirmation', 'text', 'Un message de confirmation vous sera envoyé par e-mail.', 'A confirmation message will be sent by e-mail.', NULL, '1', 0),
(28, 0, 'nom', 'text', 'Nom', 'Name', NULL, '1', 0),
(29, 0, 'prenom', 'text', 'Prénom', 'Firstname', NULL, '1', 0),
(30, 0, 'expiration', 'text', 'Date d''expiration', 'Expiration date', NULL, '1', 0),
(31, 0, 'tag', 'text', 'Tags', 'Tags', NULL, NULL, 0),
(32, 0, 'cvc', 'text', 'CVC', 'CVC', NULL, NULL, 0),
(33, 0, 'nokey', 'text', 'Nous sommes désolé, aucune clé restantes pour cet article', 'We are sorry, no keys remaining for this item', NULL, NULL, 0),
(34, 0, 'alreadybuy', 'text', 'Nous ne pouvons pas vous fournir une clé pour ce jeu car vous avez déjà acheter ce jeu', 'We cannot deliver you a key for this game because you have already buy this game', NULL, NULL, 0),
(35, 0, 'orderrecap', 'text', 'Récapitulatif de votre commande', 'Recap of your order', NULL, NULL, 0),
(36, 0, 'available', 'text', 'Disponible pour vous', 'Available for you', NULL, NULL, 0),
(37, 1, 'partenariat', 'menu2', 'Partenariat', 'Partnership', 'cummunity', '0', 1),
(38, 1, 'event', 'menu2', 'Evenements', 'Events', 'cummunity', '0', 1),
(39, 1, 'forum', 'menu2', 'Forum', 'Forum', 'cummunity', '0', 1),
(40, 0, 'subtotal', 'text', 'Sous total', 'Sub total', NULL, NULL, 0),
(41, 0, 'cgu', 'text', 'Le présent document a pour objet de définir les modalités et conditions dans lesquelles d’une part,  Split , ci-après dénommé le fournisseur, met à la disposition de ses utilisateurs le site, et les services disponibles sur le site et d’autre part, la manière par laquelle l’utilisateur accède au site et utilise ses services.<br><br>\n\nToute connexion au site est subordonnée au respect des présentes conditions.<br><br>\n\nPour l’utilisateur, le simple accès au site de l’EDITEUR à l’adresse URL suivante : www.split-game.fr  implique l’acceptation de l’ensemble des conditions décrites ci-après.', 'This document is intended to define the terms and conditions under which on the one hand, Split, hereinafter referred to as the supplier provides its users the site and the services available on the site and other the manner in which the user accesses the site and using its services. <br> \r\n\r\nAny connection to the site is subject to compliance with these conditions. <br> \r\n\r\nFor the user, simply accessing the site EDITOR at the following URL: www.split-game.fr implies acceptance of all conditions set forth below.', NULL, NULL, 0),
(42, 0, 'cgutext', 'text', 'Condition général d''utilisation', 'General Terms of Use', NULL, NULL, 0),
(43, 0, 'partnership', 'text', 'Partenariat', 'Partnership', NULL, NULL, 0),
(44, 0, 'email', 'text', 'Email', 'Email', NULL, NULL, 0),
(45, 0, 'password', 'text', 'Mot de passe', 'Password', NULL, NULL, 0),
(46, 0, 'date', 'text', 'Date', 'Date', NULL, NULL, 0),
(47, 0, 'avatar', 'text', 'Avatar', 'Avatar', NULL, NULL, 0),
(48, 0, 'sign', 'text', 'S''enregister', 'Sign up', NULL, NULL, 0),
(49, 0, 'login', 'text', 'Se connecter', 'Log in', NULL, NULL, 0),
(50, 0, 'submit', 'text', 'Valider', 'Submit', NULL, NULL, 0);

-- --------------------------------------------------------

--
-- Structure de la table `editor`
--

CREATE TABLE IF NOT EXISTS `editor` (
  `name` varchar(100) NOT NULL,
  `text_fr` varchar(1000) NOT NULL,
  `text_en` varchar(1000) NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `editor`
--

INSERT INTO `editor` (`name`, `text_fr`, `text_en`) VALUES
('Electronic Arts', 'Electronic Arts', 'Electronic Arts'),
('blizzard', 'Blizzard Entertainment', 'Blizzard Entertainment'),
('ubisoft', 'Ubisoft', 'Ubisoft'),
('activision', 'Activision', 'Activision'),
('easport', 'EA Sport', 'EA Sport'),
('rockstar', 'Rockstar Games', 'Rockstar Games'),
('quanticdream', 'Quantic Dream', 'Quantic Dream'),
('squareenix', 'Square Enix', 'Square Enix'),
('valve', 'Valve', 'Valve'),
('bohemia', 'Bohemia Interactive', 'Bohemia Interactive'),
('respawn', 'Respawn Entertainment', 'Respawn Entertainment'),
('warnerbros', 'Warner Bros', 'Warner Bros'),
('2kgames', '2K Games', '2K Games'),
('deepsilver', 'Deep Silver', 'Deep Silver'),
('sega', 'Sega', 'Sega'),
('Bethesda', 'Bethesda Softworks', 'Bethesda Softworks'),
('namcobandai', 'Namco Bandai', 'Namco Bandai'),
('capcom', 'Capcom', 'Capcom'),
('facepunch', 'Facepunch Studios', 'Facepunch Studios'),
('lucasarts', 'LucasArts', 'LucasArts'),
('telltale', 'Telltale Games', 'Telltale Games'),
('mojang', 'Mojang', 'Mojang'),
('klei entertainment ', 'Klei Entertainment ', 'Klei Entertainment '),
('zombie studios ', 'Zombie Studios ', 'Zombie Studios '),
('red barrels ', 'Red Barrels ', 'Red Barrels '),
('farsky interactive ', 'Farsky Interactive ', 'Farsky Interactive '),
('facepunch studios ', 'Facepunch Studios ', 'Facepunch Studios '),
('the fun pimps ', 'The Fun Pimps ', 'The Fun Pimps '),
('bohemia interactive ', 'Bohemia Interactive ', 'Bohemia Interactive '),
('ndemic creations ', 'Ndemic Creations ', 'Ndemic Creations '),
('coffee stain studios ', 'Coffee Stain Studios ', 'Coffee Stain Studios '),
('pathea games ', 'Pathea Games ', 'Pathea Games '),
('scs software ', 'SCS Software ', 'SCS Software '),
('monochrome llc ', 'Monochrome LLC ', 'Monochrome LLC '),
('hammerpoint interactive ', 'Hammerpoint Interactive ', 'Hammerpoint Interactive '),
('team meat ', 'Team Meat ', 'Team Meat '),
('cellar door games ', 'Cellar Door Games ', 'Cellar Door Games '),
('acid wizard studio', 'Acid Wizard Studio', 'Acid Wizard Studio'),
('bethesda softworks', 'Bethesda Softworks', 'Bethesda Softworks'),
('mastertronic', 'Mastertronic', 'Mastertronic'),
('darkforge games llc', 'darkForge Games LLC', 'darkForge Games LLC'),
('supervillain studios', 'SuperVillain Studios', 'SuperVillain Studios'),
('amplitude studios', 'AMPLITUDE Studios', 'AMPLITUDE Studios'),
('limasse five ', 'Limasse Five ', 'Limasse Five '),
('kiss ltd', 'KISS ltd', 'KISS ltd'),
('505 games', '505 Games', '506 Games'),
('number none', 'Number None', 'Number None'),
('frictional games', 'Frictional Games', 'Frictional Games'),
('chucklefish', 'Chucklefish', 'Chucklefish'),
('re-logic', 'Re-Logic', 'Re-Logic'),
('the indie stone', 'The Indie Stone', 'The Indie Stone'),
('snowbird games', 'Snowbird Games', 'Snowbird Games'),
('torn banner studios', 'Torn Banner Studios', 'Torn Banner Studios'),
('avatar creations', 'Avatar Creations', 'Avatar Creations'),
('3909', '3909', '3910'),
('galactic cafe', 'Galactic Cafe', 'Galactic Cafe'),
('new world interactive', 'New World Interactive', 'New World Interactive'),
('modulaatio games', 'Modulaatio Games', 'Modulaatio Games'),
('harebrained holdings	', 'Harebrained Holdings', 'Harebrained Holdings'),
('black maple games', 'Black Maple Games', 'Black Maple Games');

-- --------------------------------------------------------

--
-- Structure de la table `friend`
--

CREATE TABLE IF NOT EXISTS `friend` (
  `member` varchar(100) NOT NULL DEFAULT '',
  `friend` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`member`,`friend`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `game`
--

CREATE TABLE IF NOT EXISTS `game` (
  `position` int(100) NOT NULL,
  `tag` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `text_fr` varchar(1000) NOT NULL,
  `text_en` varchar(1000) NOT NULL,
  `textlongue_fr` varchar(1000) NOT NULL,
  `textlongue_en` varchar(1000) NOT NULL,
  `price` float NOT NULL,
  `ideditor` varchar(100) DEFAULT NULL,
  `pegi` int(10) DEFAULT NULL,
  `licence` varchar(1000) DEFAULT NULL,
  `active` int(100) DEFAULT NULL,
  `connected` int(100) DEFAULT NULL,
  `url` varchar(1000) NOT NULL,
  `video` varchar(1000) NOT NULL,
  PRIMARY KEY (`title`),
  KEY `ideditor` (`ideditor`),
  KEY `video` (`video`(333))
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `game`
--

INSERT INTO `game` (`position`, `tag`, `title`, `text_fr`, `text_en`, `textlongue_fr`, `textlongue_en`, `price`, `ideditor`, `pegi`, `licence`, `active`, `connected`, `url`, `video`) VALUES
(0, 'game', 'dontstave', 'Don''t Starve', 'Don''t Starve', 'Don''t Starve est un jeu de survie intransigeant en zone sauvage plein d''art et de magie. Vous incarnez Wilson, un scientifique intrpide qui a t pig par un dmon et transport dans un mystrieux monde sauvage.', 'Don''t Starve is an uncompromising wilderness survival game full of science and magic. You play as Wilson, an intrepid Gentleman Scientist who has been trapped by a demon and transported to a mysterious wilderness world. Wilson must learn to exploit his environment and its inhabitants if he ever hopes to escape and find his way back home.', 13.99, 'klei entertainment ', 16, NULL, 0, 0, 'gameImg/dontstave.jpg', ''),
(0, 'game', 'daylight', 'Daylight', 'Daylight', 'Vous vous rveillez prisonnier d''un hpital abandonn, votre tlphone pour seule source de lumire. Incapable d''avancer, vous tournez en rond tandis que derrire, vous percevez une prsence et des bruits tranges... Dcouvrez Daylight, un thriller psychologique par gnration automatique sur PC.', 'You awake, trapped in an abandoned hospital. Your only source of light is your phone. You hit a dead-end and must turn around, but behind you lurks an eerie presence and strange noises... Experience Daylight, a procedurally generated psychological thriller for your PC.', 13.99, 'zombie studios ', 16, NULL, 0, 0, 'gameImg/daylight.jpg', ''),
(0, 'game', 'outlast', 'Outlast', 'Outlast', 'Hell is an experiment you can''t survive in Outlast, a first-person survival horror game developed by veterans of some of the biggest game franchises in history. As investigative journalist Miles Upshur, explore Mount Massive Asylum and try to survive long enough to discover its terrible secret... if you dare.', 'Hell is an experiment you can''t survive in Outlast, a first-person survival horror game developed by veterans of some of the biggest game franchises in history. As investigative journalist Miles Upshur, explore Mount Massive Asylum and try to survive long enough to discover its terrible secret... if you dare.', 18.99, 'red barrels ', 18, NULL, 0, 0, 'gameImg/outlast.jpg', ''),
(0, 'game', 'farsky', 'FarSky', 'FarSky', 'Avec Farsky, vous prenez le rle de Nathan qui s''est perdu dans l''ocan aprs le crash du son sous-marin. Vous devez apprendre  survivre dans les profondeurs de l''ocan.', 'With FarSky, you take the role of Nathan who got lost in the Ocean after the crash of his submarine. You need to learn how to survive in the depths of the Ocean.', 14.99, 'farsky interactive ', 16, NULL, 0, 0, 'gameImg/farsky.jpg', ''),
(0, 'game', 'rust', 'Rust', 'Rust', 'Le seul but de Rust est de survivre. Pour ce faire, vous aurez besoin de surmonter les difficults telles que la faim, la soif et le froid. Construire un feu. Construire un abri. Tuer des animaux pour la viande. Protgez-vous contre d''autres joueurs. Crer des alliances avec d''autres acteurs et forment ensemble une ville. Tout ce qu''il faut pour survivre.', 'The only aim in Rust is to survive. To do this you will need to overcome struggles such as hunger, thirst and cold. Build a fire. Build a shelter. Kill animals for meat. Protect yourself from other players. Create alliances with other players and together form a town. Whatever it takes to survive.', 18.99, 'facepunch', 16, NULL, 0, 0, 'gameImg/rust.jpg', ''),
(0, 'game', '7daystodie', '7 Days to Die', '7 Days to Die', 'S''appuyant sur survivalistes et des thmes d''horreur, les joueurs de 7 jours  Die peuvent piger les villes abandonnes du monde de voxel constructible et destructible pour les fournitures ou explorer la nature  recueillir les matires premires pour construire leurs propres outils, des armes, des piges, des fortifications et des abris.', 'Building on survivalist and horror themes, players in 7 Days to Die can scavenge the abandoned cities of the buildable and destructable voxel world for supplies or explore the wilderness to gather raw materials to build their own tools, weapons, traps, fortifications and shelters.', 22.99, 'the fun pimps ', 18, NULL, 0, 0, 'gameImg/7daystodie.jpg', ''),
(0, 'game', 'minecraft', 'Minecraft', 'Minecraft', 'Minecraft est un jeu de casser et plaant des blocs. Au dbut, les gens ont construit des structures pour protger contre les monstres nocturnes, mais que le jeu a grandi joueurs ont travaill ensemble pour crer de merveilleux, des choses imaginatives.', 'Minecraft is a game about breaking and placing blocks. At first, people built structures to protect against nocturnal monsters, but as the game grew players worked together to create wonderful, imaginative things.', 19.95, 'mojang', 7, NULL, 0, 0, 'gameImg/minecraft.jpg', ''),
(0, 'game', 'dayz', 'DayZ', 'DayZ', 'ATTENTION : CE JEU EST UNE VERSION ALPHA EN ACC', 'WARNING: THIS GAME IS EARLY ACCESS ALPHA. PLEASE DO NOT PURCHASE IT UNLESS YOU WANT TO ACTIVELY SUPPORT DEVELOPMENT OF THE GAME AND ARE PREPARED TO HANDLE WITH SERIOUS ISSUES AND POSSIBLE INTERRUPTIONS OF GAME FUNCTIONING.', 23.99, 'bohemia interactive ', 18, NULL, 0, 0, 'gameImg/dayz.jpg', ''),
(0, 'game', 'evolved', 'Plague Inc: Evolved', 'Plague Inc: Evolved', 'Plague Inc: Evolved est un terrifiant mlange entre jeu de simulation raliste et hautement stratgique. Votre agent pathogne vient d''infecter le Patient Zero - vous devez dsormais mettre un terme  l''histoire de l''humanit en dveloppant une pidmie mortelle et globale, tout en vous adaptant contre chaque mesure prise par...', 'Plague Inc: Evolved is a unique mix of high strategy and terrifyingly realistic simulation. Your pathogen has just infected ''Patient Zero'' - now you must bring about the end of human history by evolving a deadly, global Plague whilst adapting against everything humanity can do to defend itself.', 13.99, 'ndemic creations ', 18, NULL, 0, 0, 'gameImg/evolved.jpg', ''),
(0, 'game', 'goat simulator', 'Goat Simulator', 'Goat Simulator', 'Goat Simulator est la dernire technologie de simulation de chvre, portant simulation de chvre next-gen pour VOUS. Vous n''avez plus  fantasmer sur d''tre une chvre, vos rves sont enfin devenu ralit! WASD pour crire l''histoire.', 'Goat Simulator is the latest in goat simulation technology, bringing next-gen goat simulation to YOU. You no longer have to fantasize about being a goat, your dreams have finally come true! WASD to write history.', 9.99, 'coffee stain studios ', 7, NULL, 0, 0, 'gameImg/goatsimulator.jpg', ''),
(0, 'game', 'planet explorers', 'Planet Explorers', 'Planet Explorers', 'Planète Explorers est un monde sandbox jeu d''aventure RPG ouvert sur ​​une planète lointaine. Le jeu utilise un nouveau système de voxel OpenCL calculée pour permettre aux joueurs de changer le terrain de toute façon, créer de nouveaux objets tels que des armes, des véhicules, des objets, et de le faire n''importe où.\r\n', 'Planet Explorers is an open world sandbox adventure RPG game set on a distant planet. The game uses a new OpenCL calculated voxel system to allow players to change the terrain in any way, create new objects such as weapons, vehicles, objects, and do it anywhere.', 22.99, 'pathea games ', 16, NULL, 0, 0, 'gameImg/planetexplorers.jpg', ''),
(0, 'game', 'e truck simulator2', 'Euro Truck Simulator 2', 'Euro Truck Simulator 2', 'Voyagez  travers l''Europe en tant que roi de la route, un chauffeur routier qui livre d''importantes cargaisons vers des destinations trs lointaines ! Avec des douzaines de villes  explorer du Royaume-Uni, de Belgique, d''Allemagne, d''Italie, des Pays-Bas, de Pologne et de bien d''autres pays, votre endurance, vos talents et votre...', 'Travel across Europe as king of the road, a trucker who delivers important cargo across impressive distances! With dozens of cities to explore from the UK, Belgium, Germany, Italy, the Netherlands, Poland, and many more, your endurance, skill and speed will all be pushed to their limits.', 19.99, 'scs software ', 12, NULL, 0, 0, 'gameImg/etrucksimulator2.jpg', ''),
(0, 'game', 'contagion', 'Contagion', 'Contagion', 'Contagion n''est pas votre moyenne Zombie Shooter mais prend place une approche plus raliste et diffrente dans le genre populaire avec des personnages uniques, environnements, armes, objets, et construit dans le systme qui fait de chaque tour totalement imprvisible avec des ressources, des objectifs et des chemins jamais volution.', 'Contagion isn''t your average Zombie Shooter but instead takes a more realistic and different approach to the popular genre with unique characters, environments, weapons, items, and a built in system that makes every round completely unpredictable with resources, objectives, and paths ever changing.', 18.99, 'monochrome llc ', 18, NULL, 0, 0, 'gameImg/contagion.jpg', ''),
(0, 'game', 'survivor stories', 'Infestation: Survivor Stories', 'Infestation: Survivor Stories', 'The War Z est un MMO de survie qui plonge les joueurs dans un monde post-apocalyptique infest de zombies dans lequel une pidmie virale a dcim la population humaine, en laissant dans son sillage un cauchemar de proportion pique.', 'Infestation is a Survival Horror MMO that immerses players in a zombie-infested, post-apocalyptic world in which a viral outbreak has decimated the human population leaving in its wake, a nightmare of epic proportion.', 4.99, 'hammerpoint interactive ', 18, NULL, 0, 0, 'gameImg/survivorstories.jpg', ''),
(0, 'game', 'craft the world', 'Craft The World', 'Craft The World', 'Craft The World est un jeu de stratgie sandbox unique, le mlange de Dungeon Keeper, Terraria et Dwarf Fortress. Explorez un monde gnr alatoirement peupl de cratures dangereuses, construire une forteresse naine, rassembler des ressources, et de l''artisanat de tous les objets, armes et armures dont vous avez besoin.', 'Craft The World is a unique sandbox strategy game, the mix of Dungeon Keeper, Terraria and Dwarf Fortress. Explore a random generated world populated by dangerous creatures, build a dwarf fortress, gather resources, and craft all the items, weapons, and armor you need.', 14.99, 'black maple games', 7, NULL, 0, 0, 'gameImg/crafttheworld.jpg', ''),
(0, 'game', 'shadowrun returns', 'Shadowrun Returns', 'Shadowrun Returns', 'MAN MEETS MAGIC & MACHINE. L''anne est 2054. Magie est de retour dans le monde, rveillant des cratures puissantes du mythe et de la lgende. Technologie fusionne avec la chair et de la conscience. Elfes, trolls, orcs et les nains se promnent parmi nous, tandis que les socits impitoyables saignent le monde sche.', 'MAN MEETS MAGIC & MACHINE. The year is 2054. Magic has returned to the world, awakening powerful creatures of myth and legend. Technology merges with flesh and consciousness. Elves, trolls, orks and dwarves walk among us, while ruthless corporations bleed the world dry.', 14.99, 'harebrained holdings	', 12, NULL, 0, 0, 'gameImg/shadowrunreturns.jpg', ''),
(0, 'game', 'super meat boy', 'Super Meat Boy', 'Super Meat Boy', 'Le fameux jeu de plateforme arrive sur Steam avec un Head Crab jouable', 'The infamous, tough-as-nails platformer comes to Steam with a playable Head Crab character', 13.99, 'team meat ', 7, NULL, 0, 0, 'gameImg/supermeatboy.jpg', ''),
(0, 'game', 'rogue legacy', 'Rogue Legacy', 'Rogue Legacy', 'Héritage Rogue est un faux-généalogique LITE où tout le monde peut être un héros. Chaque fois que vous mourrez, votre enfant vous réussir. Chaque enfant est unique. Un enfant peut être daltonien, un autre pourrait avoir le vertige - elles peuvent même être un nain. C''est OK, parce que personne n''est parfait, et vous n''avez pas à être parfait pour gagner ce match.\r\n', 'Rogue Legacy is a genealogical rogue-LITE where anyone can be a hero. Each time you die, your child will succeed you. Every child is unique. One child might be colorblind, another might have vertigo-- they could even be a dwarf. That''s OK, because no one is perfect, and you don''t have to be perfect to win this game.', 13.99, 'cellar door games ', 12, NULL, 0, 0, 'gameImg/roguelegacy.jpg', ''),
(0, 'game', 'darkwood', 'Darkwood', 'Darkwood', 'Darkwood est un jeu de survie, l''exploration et la peur situe dans les bois mystrieux, quelque part dans le territoire du Bloc sovitique. En mlangeant RPG, Rogue et lments d''aventure avec une difficult difficile, Darkwood vise  satisfaire les joueurs en manque de une exprience profonde et enrichissante.', 'Darkwood is a game about survival, exploration and fear set in mysterious woods somewhere in the territory of the Soviet Bloc. By blending RPG, roguelike and adventure elements together with a challenging difficulty, Darkwood aims to please players craving for a deep and rewarding experience.', 16.99, 'acid wizard studio', 16, NULL, 0, 0, 'gameImg/darkwood.jpg', ''),
(0, 'game', 'the new order', 'Wolfenstein: The New Order', 'Wolfenstein: The New Order', 'Wolfenstein: The New OrderTM remet au got du jour la srie qui a cr le genre du FPS. En cours de dveloppement chez Machine Games, un studio compos d''un collectif de dveloppeurs aguerris et reconnus pour leurs travaux sur des jeux au scnario palpitant, Wolfenstein propose une histoire passionnante remplie d''action, d''aventure et..', 'Wolfenstein: The New Order reignites the series that created the first-person shooter genre. Under development at Machine Games, a studio comprised of a seasoned group of developers recognized for their work creating story-driven games, Wolfenstein offers a deep game narrative packed with action, adventure and first-person combat.', 49.99, 'bethesda softworks', 18, NULL, 0, 0, 'gameImg/theneworder.jpg', ''),
(0, 'game', 'dream', 'Dream', 'Dream', 'Entrer dans l''esprit de Howard Phillips, un jeune homme qui a dvelopp une obsession de ses rves. Explorez des mondes uniques remplis de puzzles, des secrets et les horreurs de trouver un sens dans la vie veille sans direction de Howard.', 'Enter the mind of Howard Phillips, a young man who has developed an obsession with his dreams. Explore unique worlds filled with puzzles, secrets and horrors to find meaning in Howard?s directionless waking life.', 15.99, 'mastertronic', 12, NULL, 0, 0, 'gameImg/dream.jpg', ''),
(0, 'game', 'nekro', 'Nekro', 'Nekro', 'Levez dmons et frayer armes impies de la guerre comme un Ncromant puissant avec une insatiable soif de sang. Personnalisez vos serviteurs  votre got et parfaire votre idal monstre loadout. Dchirez vos ennemis membre par membre et rcolter leurs cadavres pour renforcer vos magie noire.', 'Raise demons and spawn unholy weapons of war as a powerful Necromancer with an insatiable blood lust. Customize your minions to your liking and perfect your ideal monster loadout. Tear your enemies limb from limb and harvest their corpses to strengthen your dark magics.', 19.99, 'darkforge games llc', 16, NULL, 0, 0, 'gameImg/nekro.jpg', ''),
(0, 'game', 'tower wars', 'Tower Wars', 'Tower Wars', 'Tower Wars combine des lments de tower defense, RTS, et tout- multi-joueurs chaos pour vous apporter une exprience tout  fait unique, livr avec un style amusant et drle qui n''est pas si vieux monde!', 'Tower Wars combines elements of tower defense, RTS, and all-out multi-player mayhem to bring you a completely unique experience, delivered with a fun and funny not-so-old world style!', 6.99, 'supervillain studios', 12, NULL, 0, 0, 'gameImg/towerwars.jpg', ''),
(0, 'game', 'endless legend', 'Endless Legend', 'Endless Legend', 'Endless Legend est un jeu de stratgie 4X fantastique au tour par tour par les crateurs d''Endless Space et de Dungeon of the Endless. Crez votre propre Lgende!', 'Endless Legend is a 4X turn-based fantasy strategy game by the creators of Endless Space and Dungeon of the Endless. Create your own Legend!', 22.49, 'amplitude studios', 16, NULL, 0, 0, 'gameImg/endlesslegend.jpg', ''),
(0, 'game', 'naissancee', 'NaissanceE', 'NaissanceE', 'NaissanceE est une premire exploration personne jeu PC dvelopp sur UDK par Limasse Cinq avec la participation de Pauline Oliveros, Patricia Dallio et Thierry Zaboitzeff. L''aventure se droule dans une mystrieuse structure primitive et le jeu consiste principalement  explorer et sentir l''ambiance profonde et forte de ce monde atemporel mais ...', 'NaissanceE is a first person exploration PC game developed on UDK by Limasse Five with the participation of Pauline Oliveros, Patricia Dallio and Thierry Zaboitzeff. The adventure takes place in a primitive mysterious structure and the game mainly consists to explore and feel the deep and strong ambiance of this atemporal world but...', 14.99, 'limasse five ', 18, NULL, 0, 0, 'gameImg/naissancee.jpg', ''),
(0, 'game', 'the 39 steps', 'The 39 Steps', 'The 39 Steps', 'Préparez-vous à découvrir le thriller homme-sur-la-course originale dans une toute nouvelle façon. Il s''agit d''une adaptation numérique de livre incroyable de John Buchan (de source d''inspiration pour de Ian Fleming James Bond!). Laissez-vous transporter de 1914 à Londres, où Richard Hannay se retrouve encadré pour une assassiner qu''il n''a pas commis.\r\n', 'Prepare to experience the original man-on-the-run thriller in a completely new way. This is a digital adaptation of John Buchan''s incredible book (inspiration to Ian Fleming''s James Bond!). Be transported back to 1914 London, where Richard Hannay finds himself framed for a murder he didn''t commit.', 9.99, 'kiss ltd', 16, NULL, 0, 0, 'gameImg/the39steps.jpg', ''),
(0, 'game', 'brothers', 'Brothers', 'Brothers', 'Menez deux frères à travers un voyage épique, par le réalisateur visionnaire suédois Josef Fares et le célèbre studio de développement Starbreeze Studios. Contrôlez les deux frères simultanément en mode solo, dans un mode coopératif totalement inédit.\r\n', 'Guide two brothers on an epic fairy tale journey from visionary Swedish film director, Josef Fares and top-tier developer Starbreeze Studios. Control both brothers at once as you experience co-op play in single player mode, like never before.', 13.99, '505 games', 16, NULL, 0, 0, 'gameImg/brothers.jpg', ''),
(0, 'game', 'braid', 'Braid', 'Braid', 'Braid est un jeu de plateforme et d''énigmes dans lequel vous contrôlez le temps de manière originale. Volez au secours d''une princesse et parcourez plusieurs mondes. Vous disposerez dans chaque monde de pouvoirs spécifiques.\r\n', 'Braid is a puzzle-platformer, drawn in a painterly style, where you can manipulate the flow of time in strange and unusual ways. From a house in the city, journey to a series of worlds and solve puzzles to rescue an abducted princess.', 8.99, 'number none', 12, NULL, 0, 0, 'gameImg/braid.jpg', ''),
(0, 'game', 'the dark descent', 'Amnesia: The Dark Descent', 'Amnesia: The Dark Descent', 'Votre dernier souvenir s''efface et disparaît dans les abysses. Il vous reste une impression : celle d''être traqué. Il faut fuir. Réveil... Amnesia: The Dark Descent un jeu d''horreur et de survie à la première personne. Une expérience qui va vous donner des sueurs froides. Un parcours cauchemardesque.\r\n', 'The last remaining memories fade away into darkness. Your mind is a mess and only a feeling of being hunted remains. You must escape. Awake... Amnesia: The Dark Descent, a first person survival horror. A game about immersion, discovery and living through a nightmare. An experience that will chill you to the core.', 16.49, 'frictional games', 18, NULL, 0, 0, 'gameImg/thedarkdescent.jpg', ''),
(0, 'game', 'a machine for pigs', 'Amnesia: A Machine for Pigs', 'Amnesia: A Machine for Pigs', 'Le monde est une machine. Une machine pour les porcs. Une machine réservée à l’abattage des porcs. Découvrez le nouveau jeu d’horreur à la première personne des auteurs d’Amnesia: The Dark Descent et de Dear Esther, et plongez dans les profondeurs de la cupidité, du pouvoir et de la folie.\r\n', 'This world is a Machine. A Machine for Pigs. Fit only for the slaughtering of Pigs. From the creators of Amnesia: The Dark Descent and Dear Esther comes a new first-person horrorgame that will drag you to the depths of greed, power and madness. It will bury its snout into your ribs and it will eat your heart.', 16.49, 'frictional games', 18, NULL, 0, 0, 'gameImg/amachineforpigs.jpg', ''),
(0, 'game', 'starbound', 'Starbound', 'Starbound', 'En Starbound, vous prenez le rôle d''un personnage qui vient fui leur planète, pour crash-terre sur l''autre. De là, vous vous lancerez dans une quête pour survivre, découvrir, explorer et se frayer un chemin à travers un univers infini.\r\n', 'In Starbound, you take on the role of a character whos just fled from their home planet, only to crash-land on another. From there youll embark on a quest to survive, discover, explore and fight your way across an infinite universe.', 13.99, 'chucklefish', 12, NULL, 0, 0, 'gameImg/starbound.jpg', ''),
(0, 'game', 'terraria', 'Terraria', 'Terraria', 'Creuser, survivre, explorer, construire ! Tout est possible dans ce jeu d''aventure bourr', 'Dig, fight, explore, build! Nothing is impossible in this action-packed adventure game. Four Pack also available!', 9.99, 're-logic', 12, NULL, 0, 0, 'gameImg/terraria.jpg', ''),
(0, 'game', 'project zomboid', 'Project Zomboid', 'Project Zomboid', 'Projet Zomboid est un bac à sable infesté de zombies ouverte qui demande une simple question - comment allez-vous mourir?\r\n', 'Project Zomboid is an open-ended zombie-infested sandbox that asks one simple question  how will you die?', 13.99, 'the indie stone', 18, NULL, 0, 0, 'gameImg/projectzomboid.jpg', ''),
(0, 'game', 'caribbean', 'Caribbean!', 'Caribbean!', 'Caraïbes! est un pirate sandbox RPG avec un accent plus important sur les batailles (à la fois sur terre et dans la mer) et de la gestion du caractère de joueur et son équipage.\r\n', 'Caribbean! is a sandbox pirate RPG with a larger focus on battles (both on land and in the sea) and management of player''s character and his crew.', 13.99, 'snowbird games', 18, NULL, 0, 0, 'gameImg/caribbean.jpg', ''),
(0, 'game', 'medieval warfare', 'Chivalry: Medieval Warfare', 'Chivalry: Medieval Warfare', 'Assiègez des châteaux et pillez des villages dans Chivalry: Medieval Warfare, un jeu de first person slasher médiéval au rythme rapide et axé sur des batailles en multijoueur\r\n', 'Besiege castles and raid villages in Chivalry: Medieval Warfare, a fast-paced medieval first person slasher with a focus on multiplayer battles', 22.99, 'torn banner studios', 18, NULL, 0, 0, 'gameImg/medievalwarfare.jpg', ''),
(0, 'game', 'perpetuum', 'Perpetuum', 'Perpetuum', 'Perpetuum est un bac à sable, serveur unique persistant, massivement multijoueur de science-fiction rpg (MMORPG). Contrôler d''énormes robots et mechs d''avoir accès à des ressources et des connaissances d''une planète alien, amasser énorme richesse, ou même réclamer une partie du monde pour vous-même en utilisant la terraformation et une infrastructure complexe.\r\n ', 'Perpetuum is a persistent, sandbox, single server, massively multiplayer sci-fi rpg (MMORPG). Control huge robots and mechs to gain access to an alien planet''s resources and knowledge, amass huge wealth, or even claim part of the world for yourself using terraforming and complex infrastructure.', 28.99, 'avatar creations', 16, NULL, 0, 0, 'gameImg/perpetuum.jpg', ''),
(0, 'game', 'papers, please', 'Papers, Please', 'Papers, Please', 'Félicitations. Le travail loterie Octobre est complet. Votre nom a été tiré. Pour le placement immédiat, rapport au Ministère de l''admission à la frontière Checkpoint Grestin. Un appartement sera fourni pour vous et votre famille dans l''Est Grestin. Attendez-vous à un logement de classe 8.\r\n', 'Congratulations. The October labor lottery is complete. Your name was pulled. For immediate placement, report to the The Ministry of Admission at Grestin Border Checkpoint. An apartment will be provided for you and your family in East Grestin. Expect a Class-8 dwelling.', 8.99, '3909', 16, NULL, 0, 0, 'gameImg/papers,please.jpg', ''),
(0, 'game', 'the stanley parable', 'The Stanley Parable', 'The Stanley Parable', 'Le Stanley parabole est un jeu d''exploration à la première personne. Vous jouerez le rôle de Stanley, et vous ne serez pas jouer comme Stanley. Vous allez suivre une histoire, vous ne serez pas suivre une histoire. Vous aurez le choix, vous n''aurez pas de choix. Le jeu se termine, le jeu ne finira jamais.\r\n', 'The Stanley Parable is a first person exploration game. You will play as Stanley, and you will not play as Stanley. You will follow a story, you will not follow a story. You will have a choice, you will have no choice. The game will end, the game will never end.', 11.99, 'galactic cafe', 18, NULL, 0, 0, 'gameImg/thestanleyparable.jpg', ''),
(0, 'game', 'insurgency', 'Insurgency', 'Insurgency', 'Descendre dans la rue pour intense combat rapproch', 'Take to the streets for intense close quarters combat, where a team''s survival depends upon securing crucial strongholds and destroying enemy supply in this multiplayer and cooperative Source Engine based experience.', 14.99, 'new world interactive', 18, NULL, 0, 0, 'gameImg/insurgency.jpg', ''),
(0, 'game', 'running with rifles', 'RUNNING WITH RIFLES', 'RUNNING WITH RIFLES', 'RUNNING WITH RIFLES est un jeu de tir tactique en vue de dessus incluant des éléments de RPG dans un monde ouvert. Dans RWR, vous rejoignez les rangs de l''armée en tant que soldat ordinaire, comme la plupart des milliers autour de vous.\r\n', 'RUNNING WITH RIFLES is a top-down tactical shooter with open world RPG elements. In RWR, you join the ranks of an army as a common soldier, just like the thousands around you.', 9.99, 'modulaatio games', 16, NULL, 0, 0, 'gameImg/runningwithrifles.jpg', '');

-- --------------------------------------------------------

--
-- Structure de la table `gamegenre`
--

CREATE TABLE IF NOT EXISTS `gamegenre` (
  `idgame` varchar(100) NOT NULL DEFAULT '0',
  `idgenre` varchar(100) CHARACTER SET latin1 NOT NULL DEFAULT '0',
  PRIMARY KEY (`idgenre`,`idgame`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `gamegenre`
--

INSERT INTO `gamegenre` (`idgame`, `idgenre`) VALUES
('7daystodie', 'action'),
('a machine for pigs', 'action'),
('brothers', 'action'),
('contagion', 'action'),
('darkwood', 'action'),
('daylight', 'action'),
('goat simulator', 'action'),
('insurgency', 'action'),
('medieval warfare', 'action'),
('nekro', 'action'),
('outlast', 'action'),
('planet explorers', 'action'),
('rogue legacy', 'action'),
('running with rifles', 'action'),
('super meat boy', 'action'),
('terraria', 'action'),
('the dark descent', 'action'),
('the new order', 'action'),
('7daystodie', 'adventure'),
('brothers', 'adventure'),
('daylight', 'adventure'),
('dontstave', 'adventure'),
('dream', 'adventure'),
('farsky', 'adventure'),
('minecraft', 'adventure'),
('naissancee', 'adventure'),
('outlast', 'adventure'),
('papers, please', 'adventure'),
('planet explorers', 'adventure'),
('rust', 'adventure'),
('shadowrun returns', 'adventure'),
('starbound', 'adventure'),
('terraria', 'adventure'),
('the 39 steps', 'adventure'),
('the dark descent', 'adventure'),
('the stanley parable', 'adventure'),
('caribbean', 'mmo'),
('dayz', 'mmo'),
('medieval warfare', 'mmo'),
('minecraft', 'mmo'),
('perpetuum', 'mmo'),
('rust', 'mmo'),
('survivor stories', 'mmo'),
('7daystodie', 'roleplay'),
('caribbean', 'roleplay'),
('contagion', 'roleplay'),
('darkwood', 'roleplay'),
('dayz', 'roleplay'),
('nekro', 'roleplay'),
('perpetuum', 'roleplay'),
('project zomboid', 'roleplay'),
('rogue legacy', 'roleplay'),
('shadowrun returns', 'roleplay'),
('braid', 'strategy'),
('craft the world', 'strategy'),
('e truck simulator2', 'strategy'),
('endless legend', 'strategy'),
('evolved', 'strategy'),
('insurgency', 'strategy'),
('tower wars', 'strategy');

-- --------------------------------------------------------

--
-- Structure de la table `genre`
--

CREATE TABLE IF NOT EXISTS `genre` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `genre` varchar(100) NOT NULL,
  `text_fr` varchar(100) NOT NULL,
  `text_en` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `genre` (`genre`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `genre`
--

INSERT INTO `genre` (`id`, `genre`, `text_fr`, `text_en`) VALUES
(1, 'action', 'Action', 'Action'),
(2, 'strategy', 'Strat&eacute;gie', 'Strategy'),
(3, 'adventure', 'Aventure', 'Adventure'),
(4, 'roleplay', 'Jeux de rôle', 'Role play'),
(5, 'mmo', 'MMO', 'MMO');

-- --------------------------------------------------------

--
-- Structure de la table `licence`
--

CREATE TABLE IF NOT EXISTS `licence` (
  `idgame` varchar(100) NOT NULL,
  `licencekey` varchar(100) NOT NULL,
  `member` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`licencekey`),
  UNIQUE KEY `licencekey` (`licencekey`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `licence`
--

INSERT INTO `licence` (`idgame`, `licencekey`, `member`) VALUES
('rust', '0000-000-000-00-0000', ''),
('rust', '1111-000-000-00-0000', 'pierre.barbon94@gmail.com'),
('brothers', '0000-111-000-00-0000', ''),
('brothers', '0000-222-000-00-0000', ''),
('7daystodie', '1111-333-000-00-0000', '');

-- --------------------------------------------------------

--
-- Structure de la table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `genre` text NOT NULL,
  `name` text NOT NULL,
  `firstname` text NOT NULL,
  `date` date NOT NULL,
  `pseudo` varchar(100) DEFAULT NULL,
  `avatar` varchar(100) DEFAULT NULL,
  `password` varchar(32) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `country` text NOT NULL,
  `registred` date NOT NULL,
  `friend` varchar(1000) DEFAULT NULL,
  `lent` varchar(100) DEFAULT NULL,
  UNIQUE KEY `pseudo` (`pseudo`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `member`
--

INSERT INTO `member` (`genre`, `name`, `firstname`, `date`, `pseudo`, `avatar`, `password`, `email`, `country`, `registred`, `friend`, `lent`) VALUES
('male', 'Barbon', 'Pierre', '1994-04-06', 'Pbarbon', 'userAvt/Pbarbon.jpg', 'fc6aa151663bc022d11d26a05b4a9488', 'pierre.barbon94@gmail.com', 'France', '0000-00-00', NULL, NULL),
('male', 'Tutuaku', 'Hervé', '1993-01-23', 'Syu93', 'userAvt/Syu93.jpg', '7ec2383e8d89775094999bd310ff3f65', 'herve.tutuaku@gmail.com', 'France', '2014-01-23', NULL, NULL),
('male', 'CampaorÃ©', 'StÃ©phane', '1995-06-02', 'LLINIX', 'userAvt/LLINIX.jpg', '9b659e81bfe8e1e5e5a80c9c98420d4c', 'lordlinix@live.com', 'France', '0000-00-00', NULL, NULL),
('male', 'Tutuaku', 'HervÃ©', '1993-01-23', 'plopman93', 'userAvt/default.jpg', 'e10adc3949ba59abbe56e057f20f883e', 'plopman@gmail.com', 'France', '2014-03-29', NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `id` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `idorder` varchar(100) NOT NULL,
  `idclient` varchar(100) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`),
  KEY `idclient` (`idclient`),
  KEY `idorder` (`idorder`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `orderdetails`
--

CREATE TABLE IF NOT EXISTS `orderdetails` (
  `idorder` varchar(100) NOT NULL DEFAULT '',
  `idgame` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`idorder`,`idgame`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `page`
--

CREATE TABLE IF NOT EXISTS `page` (
  `pagename` varchar(100) NOT NULL DEFAULT '',
  PRIMARY KEY (`pagename`),
  UNIQUE KEY `pagename` (`pagename`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `page`
--

INSERT INTO `page` (`pagename`) VALUES
('index'),
('user');

-- --------------------------------------------------------

--
-- Structure de la table `partner`
--

CREATE TABLE IF NOT EXISTS `partner` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(32) NOT NULL,
  `avatar` varchar(100) NOT NULL,
  `registred` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `rate`
--

CREATE TABLE IF NOT EXISTS `rate` (
  `idgame` int(100) NOT NULL,
  `member` varchar(100) CHARACTER SET utf8 NOT NULL,
  `rate` int(100) DEFAULT NULL,
  PRIMARY KEY (`idgame`,`member`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
