-- phpMyAdmin SQL Dump
-- version 4.1.4
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mer 07 Mai 2014 à 02:58
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Contenu de la table `content`
--

INSERT INTO `content` (`id`, `position`, `title`, `tag`, `text_fr`, `text_en`, `page`, `connected`, `active`) VALUES
(1, 0, 'description', 'description', 'C''est la plate-form de jeux vidéo du future', 'This is the gamers platform of the furur', '', '0', 1),
(2, 1, 'action', 'menu', 'Action', 'Action', 'index', '0', 1),
(3, 2, 'adventure', 'menu', 'Aventure', 'Adventure', 'index', '0', 1),
(4, 3, 'strategie', 'menu', 'Strategie', 'Strategy', 'index', '0', 1),
(5, 4, 'rpg', 'menu', 'Jeux de role', 'Role Play', 'index', '0', 1),
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
(19, 0, 'genre', 'text', 'Genre', 'Genre', NULL, '0', 1);

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
('mojang', 'Mojang', 'Mojang');

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
  `id` varchar(100) NOT NULL,
  `position` int(100) NOT NULL,
  `tag` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  `text_fr` varchar(100) NOT NULL,
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

INSERT INTO `game` (`id`, `position`, `tag`, `title`, `text_fr`, `text_en`, `textlongue_fr`, `textlongue_en`, `price`, `ideditor`, `pegi`, `licence`, `active`, `connected`, `url`, `video`) VALUES
('1', 0, 'game', 'TitanFall', 'Titan Fall', 'Titan Fall', 'le jeux de l''annee', 'The game of the years', 60, 'Electronic Arts', 0, 'a:1:{i:0;s:23:"TitanFall-5306740f74748";}', 0, 1, 'gameImg/TitanFall.jpg', ''),
('2', 0, 'game', 'battlefield3', 'Battlefield 3', 'Battlefield 3', 'Battlefield3', 'Battlefield3', 45, 'Electronic Arts', NULL, NULL, 0, 1, 'gameImg/battlefield3.jpg', ''),
('3', 0, 'game', '7daystodie', '7 DAYS TO DIE', '7 DAYS TO DIE', 'Se fondant sur des themes d''horreurs et post-apocalytiques, les joueurs de 7 DAYS TO DIE peuvent pieger les villes abandonnees du monde constructible et destructible de Voxel pour les fournitures ou explorer la nature, recueillir des matieres premieres pour construire leurs propres outils, des armes, des pieges, des fortifications et des abris.', 'Building on survivalist and horror themes, players in 7 Days to Die can scavenge the abandoned cities of the buildable and destructable Voxel world for supplies or explore the wilderness to gather raw materials to build their own tools, weapons, traps, fortifications and shelters.', 23, NULL, NULL, NULL, 0, 1, 'gameImg/7daystodie.jpg', ''),
('4', 0, 'game', 'anno2070', 'ANNO 2070', 'ANNO 2070', 'Construisez votre sociÃ©tÃ© du futur, colonisez des Ã®les et crÃ©ez des mÃ©galopoles tentaculaires grÃ¢ce Ã  une multitude de bÃ¢timents, de vÃ©hicules et de ressources Ã  gÃ©rer.', 'Build your society of the future, colonize islands and create sprawling megacities with a multitude of buildings, vehicles and resources to manage.', 30, NULL, NULL, NULL, 0, 1, 'gameImg/anno2070.jpg', ''),
('5', 0, 'game', 'assasinscreed4', 'Assasin''s Creed IV Black Flag', 'Assasin''s Creed IV Black Flag', '1715, les Pirates rÃ¨gnent sur les CaraÃ¯bes et viennent de fonder leur propre RÃ©publique oÃ¹ la corruption, lâ€™avarice et la cruautÃ© sont dÃ©sormais monnaie courante. Parmi ces hors-la-loi, un jeune capitaine impÃ©tueux du nom dâ€™Edward Kenway commence Ã  se forger une flatteuse rÃ©putation.', 'The year is 1715. Pirates rule the Caribbean and have established their own lawless Republic where corruption, greediness and cruelty are commonplace. Among these outlaws is a brash young captain named Edward Kenway.', 50, 'ubisoft', NULL, NULL, 0, 1, 'gameImg/assasinscreed4.jpg', '//www.youtube.com/embed/OwVe4ZNeQZk'),
('6', 0, 'game', 'batman', 'Batman: Arkham Origins', 'Batman: Arkham Origins', 'Batmanâ„¢: Arkham Origins est le nouvel opus de la franchise de jeux vidÃ©o Ã  succÃ¨s Batman: Arkham. DÃ©veloppÃ© par WB Games MontrÃ©al, le jeu nous plonge dans une Gotham City encore plus vaste et une histoire inÃ©dite se dÃ©roulant plusieurs annÃ©es avant les Ã©vÃ©nements de Batman: Arkham Asylum et de Batman: Arkham City, les deux premiers opus...', 'Batmanâ„¢: Arkham Origins is the next installment in the blockbuster Batman: Arkham videogame franchise. Developed by WB Games MontrÃ©al, the game features an expanded Gotham City and introduces an original prequel storyline set several years before the events of Batman: Arkham Asylum and Batman: Arkham City, the first two critically...', 30, NULL, NULL, NULL, 0, 1, 'gameImg/batman.jpg', ''),
('7', 0, 'game', 'bf2', 'Battlefield: Bad Company 2', 'Battlefield: Bad Company 2', 'Battlefield: Bad Company 2â„¢ vous apporte le meilleur de la jouabilitÃ© Battlefield sur PC et du combat de vÃ©hicules ainsi que les fameux moments"Battlefield." De nouveaux vÃ©hicules comme les ATV et le transport par hÃ©licoptÃ¨re permettent de nouvelles stratÃ©gies Avec le nouveau systÃ¨me de destruction 2.', 'Battlefield: Bad Company 2â„¢ brings the award-winning Battlefield gameplay to the forefront of PC gaming with best-in-class vehicular combat and unexpected "Battlefield moments." New vehicles like the ATV and a transport helicopter allow for all-new multiplayer tactics on the Battlefield. With the Frostbite-enabled Destruction 2.', 15, NULL, NULL, NULL, 0, 1, 'gameImg/bf2.jpg', ''),
('8', 0, 'game', 'bioshock', 'BioShock Infinite', 'BioShock Infinite', 'Redevable envers les mauvaises personnes, avec sa vie en jeu, vÃ©tÃ©ran de la cavalerie amÃ©ricaine et dÃ©sormais mercenaire, Booker DeWitt dispose d''une opportunitÃ© unique pour effacer son ardoise. Il doit secourir Elizabeth, une mystÃ©rieuse jeune femme emprisonnÃ©e depuis sa plus tendre enfance et enfermÃ©e dans la ville flottante de...', 'Indebted to the wrong people, with his life on the line, veteran of the U.S. Cavalry and now hired gun, Booker DeWitt has only one opportunity to wipe his slate clean. He must rescue Elizabeth, a mysterious girl imprisoned since childhood and locked up in the flying city of Columbia.', 30, '2kgames', NULL, NULL, 0, 1, 'gameImg/bioshock.jpg', ''),
('9', 0, 'game', 'borderlands2', 'Borderlands 2', 'Borderlands 2', 'The Ultimate Vault Hunterâ€™s Upgrade lets you get the most out of the Borderlands 2 experience.', 'The Ultimate Vault Hunterâ€™s Upgrade lets you get the most out of the Borderlands 2 experience.', 40, NULL, NULL, NULL, 0, 1, 'gameImg/borderlands2.jpg', ''),
('10', 0, 'game', 'cilivization5', 'Sid Meier''s Civilization V', 'Sid Meier''s Civilization V', 'CrÃ©ez, dÃ©couvrez et tÃ©lÃ©chargez des cartes, scenarios, interfaces, etc... conÃ§us par des joueurs !', 'Create, discover, and download new player-created maps, scenarios, interfaces, and more!', 30, 'Electronic Arts', NULL, NULL, 0, 1, 'gameImg/cilivization5.jpg', ''),
('11', 0, 'game', 'dawnofwar2', 'Dawn of War II', 'Dawn of War II', 'Warhammer 40.000 : Dawn of War II - Retribution est la seconde extension pour le jeu de stratÃ©gie de Relic Entertainement sur PC. Ne nÃ©cessitant pas le jeu de base pour fonctionner, cet add-on propose une campagne multirace permettant de prendre le commandement de hordes d''Orks, d''Eldars et de Tyranides.', 'Warhammer 40,000: Dawn of War II - Retribution is the second expansion for the strategy game Relic Entertainment PC. Does not require the base game to run this add-on offers multirace campaign to take command of hordes of Orks, Eldar and Tyranids to.', 10, NULL, NULL, NULL, 0, 1, 'gameImg/dawnofwar2.jpg', ''),
('12', 0, 'game', 'dayz', 'DayZ', 'DayZ', 'ATTENTION : CE JEU EST UNE VERSION ALPHA EN ACCÃˆS ANTICIPÃ‰. MERCI D''ACHETER CE JEU UNIQUEMENT SI VOUS SOUHAITEZ PARTICIPER ACTIVEMENT AU DÃ‰VELOPPEMENT DU JEU ET ÃŠTES PRÃŠT Ã€ SUBIR DES PROBLÃˆMES POUVANT ENTRAÃŽNER UN MAUVAIS FONCTIONNEMENT ET DES INTERRUPTIONS DANS LE JEU.', 'WARNING: THIS GAME IS EARLY ACCESS ALPHA. PLEASE DO NOT PURCHASE IT UNLESS YOU WANT TO ACTIVELY SUPPORT DEVELOPMENT OF THE GAME AND ARE PREPARED TO HANDLE WITH SERIOUS ISSUES AND POSSIBLE INTERRUPTIONS OF GAME FUNCTIONING.', 30, 'bohemia', NULL, NULL, 0, 1, 'gameImg/dayz.jpg', ''),
('13', 0, 'game', 'deadisland', 'Dead Island', 'Dead Island', 'Un lieu de villÃ©giature paradisiaque se transforme en enfer aprÃ¨s une invasion de zombies.', 'A holiday paradise gone mad. A tropical island turns into total chaos after a mysterious zombie outbreak.', 15, 'deepsilver', NULL, NULL, 0, 1, 'gameImg/deadisland.jpg', ''),
('14', 0, 'game', 'defiance', 'Defiance', 'Defiance', 'Rejoignez et affrontez des milliers dâ€™autres joueurs dans ce shooter en ligne futuriste en monde ouvert oÃ¹ vous Ã©cumez une Terre mÃ©tamorphosÃ©e Ã  la recherche de technologie extraterrestre. CrÃ©ez un personnage unique et configurez Ã  votre avantage les diverses options de personnalisation afin de gravir les niveaux.', 'Join a futuristic online open-world shooter where thousands of players scour a transformed Earth competing for alien technology. Create a unique character and level up with diverse customization options. Hunt alone or with others as you improve your skills and unlock powerful modern and alien weapons that will help you survive the...', 10, NULL, NULL, NULL, 0, 1, 'gameImg/defiance.jpg', ''),
('15', 0, 'game', 'dota2', 'Dota 2', 'Dota 2', 'Dota a tout d''abord Ã©tÃ© une modification faite par des joueurs de Warcraft 3 et a fini par Ãªtre un des jeux les plus jouÃ©s au monde. Suivant la tradition de Counter-Strike, Day of Defeat, Team Fortress, Portal et Alien Swarm, Dota 2 est le fruit du recrutement des dÃ©veloppeurs de la communautÃ© qui a construit cette modification et de...', 'Dota is a competitive game of action and strategy, played both professionally and casually by millions of passionate fans worldwide. Players pick from a pool of over a hundred heroes, forming two teams of five players.', 0, 'valve', NULL, NULL, 0, 1, 'gameImg/dota2.jpg', ''),
('16', 0, 'game', 'empiretotalwar', 'Empire: Total War', 'Empire: Total War', 'Prenez le contrÃ´le des mers, de la terre et construisez une nation pour partir Ã  la conquÃªte du globe.', 'Command the seas, control the land, forge a new nation, and conquer the globe.', 15, 'Electronic Arts', NULL, NULL, 0, 1, 'gameImg/empiretotalwar.jpg', ''),
('18', 0, 'game', 'eve', 'Eve', 'Eve', 'Une annÃ©e de tourmente a ouvert la voie Ã  une nouvelle Ã¨re. Une Ã¨re de nouveaux immortels, de grandes opportunitÃ©s et de rÃ©tribution lucrative.', 'Explore. Build. Conquer. EVE Online immerses you in a sci-fi experience where your every action can have rippling effects across a massive online universe. Team with and compete against over 500,000 players in epic starship battles or wage economic warfare on the galactic player-controlled market.', 19, NULL, NULL, NULL, 0, 1, 'gameImg/eve.jpg', ''),
('19', 0, 'game', 'fallout3', 'Fallout 3', 'Fallout 3', 'Les ingÃ©nieurs Vault-Tec ont travaillÃ© 24 heures sur 24 pour vous apporter cette simulation post-apocalyptique. Monde complet, simulation de combat et effets visuels impressionnants : vous pourrez choisir parmi des tonnes d''options.', 'Vault-Tec engineers have worked around the clock on an interactive reproduction of Wasteland life for you to enjoy from the comfort of your own vault. Included is an expansive world, unique combat, shockingly realistic visuals, tons of player choice, and an incredible cast of dynamic characters.', 10, 'Electronic Arts', NULL, NULL, 0, 1, 'gameImg/fallout3.jpg', ''),
('20', 0, 'game', 'falloutnewvegas', 'Fallout: New Vegas', 'Fallout: New Vegas', 'Bienvenue Ã  Vegas. Le nouveau Vegas. Amusez-vous bien !', 'Welcome to Vegas. New Vegas. Enjoy your stay!', 10, 'Bethesda', NULL, NULL, 0, 1, 'gameImg/falloutnewvegas.jpg', ''),
('21', 0, 'game', 'farcry3', 'Far Cry 3', 'Far Cry 3', 'DÃ©couvrez les secrets les plus sombres d''une ile sans foi ni loi oÃ¹ rÃ¨gne la violence. Il vous faudra bien plus que de la chance pour sortir vivant de cette ile.', 'Discover the dark secrets of a lawless island ruled by violence and take the fight to the enemy as you try to escape. Youâ€™ll need more than luck to escape alive!', 20, 'ubisoft', NULL, NULL, 0, 1, 'gameImg/farcry3.jpg', ''),
('22', 0, 'game', 'finalfantasy8', 'FINAL FANTASY VIII', 'FINAL FANTASY VIII', 'Câ€™est la guerre. La superpuissance Galbadia a dÃ©clarÃ© la guerre Ã  Dollet, un pays dont l''Ã©cole militaire abrite deux fortes personnalitÃ©s : Seifer le colÃ©rique, et Squall Leonhart, un grand solitaire. Ã€ lâ€™image de Galbadia et Dollet, ils sont en constante opposition.', 'It is a time of war. Galbadia, a Global Superpower, has declared war on Dollet, a country whose training academy is home to two personalities: the hot-headed Seifer and the ''lone wolf'', Squall Leonhart. Both are equally at conflict with each other as their country is with Galbadia; to others, Squall appears lacking in team spirit, while..', 13, 'squareenix', NULL, NULL, 0, 1, 'gameImg/finalfantasy8.jpg', ''),
('23', 0, 'game', 'gta4', 'Grand Theft Auto IV', 'Grand Theft Auto IV', 'Le rÃªve amÃ©ricain existe-t-il encore Ã  lâ€™heure actuelle ? Pour Niko Bellic, qui vient tout juste de dÃ©barquer dâ€™Europe, la rÃ©ponse est oui ; ce rÃªve reprÃ©sente lâ€™espoir de rÃ©ussir un jour Ã  Ã©chapper Ã  son passÃ©. Pour son cousin, Roman, câ€™est faire fortune Ã  Liberty City, la ville oÃ¹ tout devient possible.', 'What does the American dream mean today? For Niko Bellic fresh off the boat from Europe, it is the hope he can escape from his past. For his cousin, Roman, it is the vision that together they can find fortune in Liberty City, gateway to the land of opportunity.', 20, 'rockstar', NULL, NULL, 0, 1, 'gameImg/gta4.jpg', ''),
('24', 0, 'game', 'storm3', 'NARUTO SHIPPUDEN 3', 'NARUTO SHIPPUDEN 3', 'Vivez la quatriÃ¨me grande guerre des ninjas et ses batailles dantesques ou dÃ©fiez vos amis dans des combats de ninjas en ligne ou hors ligne ! Sorti Ã  l''origine en mars 2013 sur console et saluÃ© par la critique autant que par les fans, le jeu NARUTO le plus spectaculaire jamais publiÃ© a fait l''objet de copieuses amÃ©liorations pour son...', 'Live the 4th Great Ninja War and its overpowering boss fights or defy your friends in ultra dynamic online and offline ninja confrontations! Originally released in March 2013 for Xbox 360Â® and PlayStationÂ®3 to wide critical and fan acclaim, the most epic NARUTO game ever released has been given a thorough overhaul for its PC debut!', 24, 'capcom', NULL, NULL, 0, 1, 'gameImg/storm3.jpg', ''),
('25', 0, 'game', 'nether', 'Nether', 'Nether', 'Nether est un jeu Ã  la premiÃ¨re personne, l''expÃ©rience de jeu de survie urbaine ressemble Ã  aucun autre. Nether oblige les joueurs Ã  prendre des dÃ©cisions de sauvetage rapides dans un environnement impitoyable. Dans ce monde urbain post-apocalyptique, la mort attend Ã  chaque coin, en haut des bÃ¢timents de grande hauteur, et sous l''emprise de crÃ©atures de tÃ©lÃ©portation puissants connus sous le nom ...', 'Nether is a first-person urban survival gaming experience unlike any other. Nether forces players to make quick life-saving decisions in an unforgiving environment. In this post-apocalyptic urban world, death is waiting around every corner, at the top of high-rise buildings, and in the grasp of powerful teleporting creatures known as...', 19, NULL, NULL, NULL, 0, 1, 'gameImg/nether.jpg', ''),
('26', 0, 'game', 'oblivion', 'The Elder Scrolls IV: Oblivion', 'The Elder Scrolls IV: Oblivion', 'L''Ã©dition de l''annÃ©e d''Elder Scrolls IV: OblivionÂ® vous apporte un des meilleurs jeux de rÃ´le jamais conÃ§u. Entrez dans un monde vibrant et exceptionnel. Suivez la quÃªte principale ou prenez la libertÃ© d''explorer ce monde comme vous le souhaitez.', 'The Elder Scrolls IV: OblivionÂ® Game of the Year Edition presents one of the best RPGs of all time like never before. Step inside the most richly detailed and vibrant game-world ever created. With a powerful combination of freeform gameplay and unprecedented graphics, you can unravel the main quest at your own pace or explore the vast...', 20, '2kgames', NULL, NULL, 0, 1, 'gameImg/oblivion.jpg', ''),
('27', 0, 'game', 'plague', 'Plague Inc: Evolved', 'Plague Inc: Evolved', 'Peste Inc: Evolved est un mÃ©lange unique de haute stratÃ©gie et de simulation terriblement rÃ©aliste. Votre agent pathogÃ¨ne vient infectÃ©e Â»Patient ZeroÂ» - maintenant vous devez amener la fin de l''histoire humaine par l''Ã©volution d''une mortelle, la peste mondiale tout en s''adaptant contre l''humanitÃ© tout peut faire pour se dÃ©fendre.', 'Plague Inc: Evolved is a unique mix of high strategy and terrifyingly realistic simulation. Your pathogen has just infected ''Patient Zero'' - now you must bring about the end of human history by evolving a deadly, global Plague whilst adapting against everything humanity can do to defend itself.', 14, NULL, NULL, NULL, 0, 1, 'gameImg/plague.jpg', ''),
('28', 0, 'game', 'projectzomboid', 'Project Zomboid', 'Project Zomboid', 'Projet Zomboid est un bac Ã  sable infestÃ© de zombies ouverte qui demande une simple question - comment allez-vous mourir?', 'Project Zomboid is an open-ended zombie-infested sandbox that asks one simple question â€“ how will you die?', 14, NULL, NULL, NULL, 0, 1, 'gameImg/projectzomboid.jpg', ''),
('29', 0, 'game', 'racetomars', 'Race To Mars', 'Race To Mars', 'Race To Mars est une sociÃ©tÃ© de l''espace, jeu de simulation de tour par tour. Devenir le chef de la sociÃ©tÃ© nouvellement crÃ©Ã©e "New Space" dont le but serait d''Ã©tablir une colonie sur Mars. Vous commencez comme un dÃ©marrage - dÃ©velopper des technologies de l''aÃ©rospatiale et de les utiliser pour atteindre l''orbite et de voler au-delÃ  de voisinage de la Terre, ouvre la voie d''un espace...', 'Race To Mars is a turn-based, space company simulation game. Become the head of the newly established â€œNew Spaceâ€ company whose goal would be to establish a colony on Mars. You begin as a startup - develop cutting edge aerospace technologies and use them to achieve orbit and fly beyond Earth vicinity, blazing the trail of a space ', 38, NULL, NULL, NULL, 0, 1, 'gameImg/racetomars.jpg', ''),
('30', 0, 'game', 'residentevil4', 'Resident Evil 4', 'Resident Evil 4', 'dans Resident Evil 4, l''agent spÃ©cial Leon S. Kennedy reÃ§oit pour mission de tirer la fille du prÃ©sident des Ã‰tats-Unis des griffes de ses ravisseurs. EnvoyÃ© dans un petit village au plus profond de l''Europe, il doit faire face Ã  de nouvelles menaces qui ne sont pas sans rappeler les zombies pesants des Ã©pisodes prÃ©cÃ©dents de la sÃ©rie.', 'In Resident Evil 4, special agent Leon S. Kennedy is sent on a mission to rescue the U.S. Presidentâ€™s daughter who has been kidnapped. Finding his way to a rural village in Europe, he faces new threats that are a departure from the traditional lumbering zombie enemies of the earlier instalments in the series.', 20, 'capcom', NULL, NULL, 0, 1, 'gameImg/residentevil4.jpg', ''),
('31', 0, 'game', 'rome2', 'Total War: ROME II', 'Total War: ROME II', 'JUSQU''OÃ™ SEREZ-VOUS PRÃŠT Ã€ ALLER POUR ROME ? Devenez la premiÃ¨re superpuissance du monde et commandez la machine de guerre la plus importante et la plus incroyable de l''AntiquitÃ©. Dominez les ennemis de votre glorieux empire grÃ¢ce Ã  des moyens militaires, Ã©conomiques et politiques.', 'How far will you go for Rome? The award-winning Total War series returns to Rome, setting a brand new quality benchmark for Strategy gaming. Become the worldâ€™s first superpower and command the Ancient worldâ€™s most incredible war machine. Dominate your enemies by military, economic and political means.', 55, 'sega', NULL, NULL, 0, 1, 'gameImg/rome2.jpg', ''),
('32', 0, 'game', 'rust', 'Rust', 'Rust', 'Le seul but de Rust est de survivre. Pour ce faire, vous aurez besoin de surmonter les difficultÃ©s telles que la faim, la soif et le froid. Construire un feu. Construire un abri. Tuer des animaux pour la viande. ProtÃ©gez-vous contre d''autres joueurs. CrÃ©er des alliances avec d''autres acteurs et forment ensemble une ville. Tout ce qu''il faut pour survivre.', 'The only aim in Rust is to survive. To do this you will need to overcome struggles such as hunger, thirst and cold. Build a fire. Build a shelter. Kill animals for meat. Protect yourself from other players. Create alliances with other players and together form a town. Whatever it takes to survive.', 19, NULL, NULL, NULL, 0, 1, 'gameImg/rust.jpg', ''),
('33', 0, 'game', 'skyrim', 'The Elder Scrolls V: Skyrim', 'The Elder Scrolls V: Skyrim', 'LA RENAISSANCE DU FANTASTIQUE Le nouveau chapitre trÃ¨s attendu de la saga Elder Scrolls nous arrive des crÃ©ateurs du jeu de l''annÃ©e 2006 et 2008, Bethesda Game Studios. Skyrim rÃ©invente et rÃ©volutionne le monde ouvert, ramenant Ã  la vie un monde complet que vous pourrez librement explorer.', 'EPIC FANTASY REBORN The next chapter in the highly anticipated Elder Scrolls saga arrives from the makers of the 2006 and 2008 Games of the Year, Bethesda Game Studios. Skyrim reimagines and revolutionizes the open-world fantasy epic, bringing to life a complete virtual world open for you to explore any way you choose.', 30, NULL, NULL, NULL, 0, 1, 'gameImg/skyrim.jpg', ''),
('34', 0, 'game', 'southpark', 'South Park: The Stick of Truth', 'South Park: The Stick of Truth', 'Du dangereux champ de bataille quâ€™est la cour de rÃ©crÃ©ation des CM1, un jeune hÃ©ros sâ€™Ã©veillera. Son destin ? Devenir le sauveur de South Park. Avec le jeu vidÃ©o South Parkâ„¢ : Le BÃ¢ton de la VÃ©ritÃ© , embarque dans une quÃªte Ã©pique pour devenirâ€¦ cool. Depuis des milliers dâ€™annÃ©es, la guerre fait rage.', 'From the perilous battlefields of the fourth-grade playground, a young hero will rise, destined to be South Parkâ€™s savior. From the creators of South Park, Trey Parker and Matt Stone, comes an epic quest to becomeâ€¦ cool. Introducing South Parkâ„¢: The Stick of Truthâ„¢. For a thousand years, the battle has been waged.', 40, NULL, NULL, NULL, 0, 1, 'gameImg/southpark.jpg', ''),
('35', 0, 'game', 'starwars2', 'STAR WARS: Knights of the Old Republic II', 'STAR WARS: Knights of the Old Republic II', '5 annÃ©es aprÃ¨s les Ã©vÃ¨nements du jeu original rÃ©compensÃ© par la critique, les Sith sont sur le point d''Ã©craser l''Ancienne RÃ©publique. En tant que Jedi solitaire, suivrez-vous la lumiÃ¨re ou succomberez-vous pour le cÃ´tÃ© obscur ?', '5 years after the events of the award winning original, the Sith are on the verge of crushing the Old Republic. As a lone Jedi, will you follow the light side or succumb to the dark?', 10, NULL, NULL, NULL, 0, 1, 'gameImg/starwars2.jpg', ''),
('36', 0, 'game', 'thesecretworld', 'The Secret World', 'The Secret World', 'Payer une fois; jouer Ã  l''infini. Abonnement n''est plus nÃ©cessaire. CachÃ© dans notre propre monde moderne est un monde secret. Un monde oÃ¹ toutes les thÃ©ories mythe, la lÃ©gende, et la conspiration est vrai. Et maintenant, des forces obscures sont en mouvement et des secrets qui auraient dÃ» rester Ã  jamais enfoui ont finalement Ã©tÃ© dÃ©couvert.', 'Pay once; play forever. Subscription no longer required. Hidden within our own modern-day world is a secret world. A world where every myth, legend, and conspiracy theory is true. And now, dark forces are on the move and secrets that should have remained forever buried have finally been uncovered.', 30, NULL, NULL, NULL, 0, 1, 'gameImg/.jpg', ''),
('37', 0, 'game', 'walkingdead2', 'The Walking Dead: Season 2', 'The Walking Dead: Season 2', 'The Walking Dead: Season Two continue l''histoire de ClÃ©mentine, une jeune orpheline par l''apocalypse des morts-vivants. LivrÃ©s Ã  eux-mÃªme, elle a Ã©tÃ© forcÃ© d''apprendre Ã  survivre dans un monde devenu fou. Plusieurs mois se sont Ã©coulÃ©s depuis les Ã©vÃ©nements vus dans la Saison 1 de The Walking Dead, et ClÃ©mentine est en quÃªte de sÃ©curitÃ©.', 'The Walking Dead: Season Two continues the story of Clementine, a young girl orphaned by the undead apocalypse. Left to fend for herself, she has been forced to learn how to survive in a world gone mad. Many months have passed since the events seen in Season One of The Walking Dead, and Clementine is searching for safety.', 20, NULL, NULL, NULL, 0, 1, 'gameImg/.jpg', ''),
('38', 0, 'game', 'thief', 'Thief', 'Thief', 'Garrett, le MaÃ®tre Voleur, quitte lâ€™ombre pour la CitÃ©. Un flÃ©au mystÃ©rieux sâ€™est abattu sur cette citÃ© oÃ¹ la milice du Baron rÃ¨gne par la peur et lâ€™oppression. Sous la banniÃ¨re dâ€™Orion, la voix du peuple, les citoyens opprimÃ©s semblent prÃªts Ã  tout pour reprendre contrÃ´le de la CitÃ©.', 'Garrett, the Master Thief, steps out of the shadows into the City. In this treacherous place, where the Baronâ€™s Watch spreads a rising tide of fear and oppression, his skills are the only things he can trust. Even the most cautious citizens and their best-guarded possessions are not safe from his reach.', 50, NULL, NULL, NULL, 0, 1, 'gameImg/.jpg', ''),
('39', 0, 'game', 'uno', 'Uno', 'Uno', 'Uno est basÃ© sur les rÃ¨gles du 8 amÃ©ricain.\r\nPour gagner une manche, il faut Ãªtre le premier joueur Ã  n''avoir plus de cartes en mains. Sur plusieurs manches, le vainqueur est le joueur totalisant le moins de points lorsqu''un joueur atteint 500 points.', 'Uno is based on the rules of the U.S. 8. \r\nTo win a round, you must be the first player to have more cards in hand. Several rounds, the winner is the player with the lowest score when one player reaches 500 points.', 0, NULL, NULL, NULL, 0, 1, 'gameImg/uno.jpg', ''),
('40', 0, 'game', 'minecraft', 'Minecraft', 'Minecraft', 'Minecraft est un jeu de casser et plaÃ§ant des blocs. Au dÃ©but, les gens ont construit des structures pour protÃ©ger contre les monstres nocturnes, mais que le jeu a grandi joueurs ont travaillÃ© ensemble pour crÃ©er de merveilleux, des choses imaginatives.', 'Minecraft is a game about breaking and placing blocks. At first, people built structures to protect against nocturnal monsters, but as the game grew players worked together to create wonderful, imaginative things.', 25, NULL, NULL, NULL, 0, 1, 'gameImg/minecraft.jpg', '');

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
('anno2070', 'action'),
('assasinscreed4', 'action'),
('batman', 'action'),
('battlefield3', 'action'),
('bf2', 'action'),
('borderlands2', 'action'),
('dawnofwar2', 'action'),
('dayz', 'action'),
('fallout3', 'action'),
('falloutnewvegas', 'action'),
('farcry3', 'action'),
('finalfantasy8', 'action'),
('gta4', 'action'),
('TitanFall', 'action'),
('7daystodie', 'adventure'),
('assasinscreed4', 'adventure'),
('bioshock', 'adventure'),
('deadisland', 'adventure'),
('farcry3', 'adventure'),
('finalfantasy8', 'adventure'),
('minecraft', 'adventure'),
('skyrim', 'adventure'),
('dayz', 'mmo'),
('finalfantasy8', 'mmo'),
('skyrim', 'mmo'),
('finalfantasy8', 'roleplay'),
('skyrim', 'roleplay'),
('cilivization5', 'strategy'),
('dota2', 'strategy'),
('empiretotalwar', 'strategy');

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
-- Structure de la table `member`
--

CREATE TABLE IF NOT EXISTS `member` (
  `id` varchar(100) NOT NULL,
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
  `game` varchar(1000) DEFAULT NULL,
  `friend` varchar(1000) DEFAULT NULL,
  `lent` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `pseudo` (`pseudo`),
  UNIQUE KEY `email` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `member`
--

INSERT INTO `member` (`id`, `genre`, `name`, `firstname`, `date`, `pseudo`, `avatar`, `password`, `email`, `country`, `registred`, `game`, `friend`, `lent`) VALUES
('1', 'male', 'Barbon', 'Pierre', '1994-04-06', 'Pbarbon', 'userAvt/Pbarbon.jpg', 'fc6aa151663bc022d11d26a05b4a9488', 'pierre.barbon94@gmail.com', 'France', '0000-00-00', NULL, NULL, NULL),
('2', 'male', 'Tutuaku', 'HervÃ©', '1993-01-23', 'Syu93', 'userAvt/Syu93.jpg', '7ec2383e8d89775094999bd310ff3f65', 'herve.tutuaku@gmail.com', 'France', '0000-00-00', NULL, NULL, NULL),
('3', 'male', 'CampaorÃ©', 'StÃ©phane', '1995-06-02', 'LLINIX', 'userAvt/LLINIX.jpg', '9b659e81bfe8e1e5e5a80c9c98420d4c', 'lordlinix@live.com', 'France', '0000-00-00', NULL, NULL, NULL),
('e80417b8a7864dc0742f5ad726a58395', 'male', 'Tutuaku', 'HervÃ©', '1993-01-23', 'plopman93', 'userAvt/default.jpg', 'e10adc3949ba59abbe56e057f20f883e', 'plopman@gmail.com', 'France', '2014-03-29', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `idclient` int(100) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `orderdetails`
--

CREATE TABLE IF NOT EXISTS `orderdetails` (
  `idorder` int(100) NOT NULL,
  `idgame` int(100) NOT NULL,
  `quantity` int(100) NOT NULL,
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
