-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  ven. 30 nov. 2018 à 10:00
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
-- Base de données :  `projetmerise`
--

-- --------------------------------------------------------

--
-- Structure de la table `acteurs`
--

DROP TABLE IF EXISTS `acteurs`;
CREATE TABLE IF NOT EXISTS `acteurs` (
  `id_acteur` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `date_de_naissance` date NOT NULL,
  PRIMARY KEY (`id_acteur`)
) ENGINE=InnoDB AUTO_INCREMENT=75 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `acteurs`
--

INSERT INTO `acteurs` (`id_acteur`, `nom`, `prenom`, `date_de_naissance`) VALUES
(40, 'BLANC', 'Michel', '1952-04-16'),
(41, 'CHAZEL', 'Marie-Anne', '1951-09-19'),
(42, 'CLAVIER', 'Christian ', '1952-05-06'),
(43, 'LHERMITTE', 'Thierry ', '1952-11-24'),
(44, 'GOSLING', 'Ryan ', '1980-11-12'),
(45, 'MULLIGAN', 'Carey ', '1985-05-28'),
(46, 'CRANSTON', 'Bryan ', '1956-03-07'),
(47, 'MCGREGOR', 'Ewan ', '1971-03-31'),
(48, 'FINNEY', 'Albert', '1936-05-09'),
(49, 'LANGE', 'Jessica', '1949-04-20'),
(50, 'BONHAM CARTER', 'Helena', '1966-05-26'),
(51, 'ANDERSON', 'Bibi', '1935-11-11'),
(52, 'ULLMAN', 'Liv', '1939-12-16'),
(53, 'NORTON', 'Edward', '1969-08-18'),
(54, 'SEYMOUR HOFFMAN', 'Philip', '1967-07-23'),
(55, 'LAUBY', 'Chantal', '1948-03-23'),
(56, 'CHABAT', 'Alain', '1958-11-24'),
(57, 'FARRUGIA', 'Dominique', '1962-09-02'),
(58, 'RIDLEY', 'Daisy', '1992-04-10'),
(59, 'BOYEGA', 'John', '1992-03-17'),
(60, 'DRIVER', 'Adam', '1983-11-19'),
(61, 'MCCONAUGHEY', 'Matthew', '1969-11-04'),
(62, 'HATHAWAY', 'Anne', '1982-11-12'),
(63, 'CAINE', 'Michael', '1933-03-14'),
(64, 'PACE', 'Lee', '1979-03-25'),
(65, 'UNTARU', 'Catinca', '1997-03-21'),
(66, 'WADDELL', 'Justine', '1976-11-04'),
(67, 'PITT', 'Brad', '1963-12-18'),
(69, 'LI', 'Jet', '1963-04-26'),
(70, 'HOSKINS', 'Bob', '1942-10-26'),
(71, 'FREEMAN', 'Morgan', '1937-06-01'),
(72, 'KWOUK', 'Burt', '1930-07-18'),
(73, 'BERTHILLOT', 'Ludovic', '1969-04-24'),
(74, 'FONDA', 'Bridget', '1964-01-27');

-- --------------------------------------------------------

--
-- Structure de la table `films`
--

DROP TABLE IF EXISTS `films`;
CREATE TABLE IF NOT EXISTS `films` (
  `id_film` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `url_img` text NOT NULL,
  `annee_sortie` year(4) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id_film`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `films`
--

INSERT INTO `films` (`id_film`, `titre`, `url_img`, `annee_sortie`, `description`) VALUES
(1, 'Fight club', 'immagesprojet/fightclub.png', 1999, 'Le narrateur, sans identité précise, vit seul, travaille seul, dort seul, mange seul ses plateaux-repas pour une personne comme beaucoup d\'autres personnes seules qui connaissent la misère humaine, morale et sexuelle. C\'est pourquoi il va devenir membre du Fight club, un lieu clandestin ou il va pouvoir retrouver sa virilité, l\'échange et la communication. Ce club est dirigé par Tyler Durden, une sorte d\'anarchiste entre gourou et philosophe qui prêche l\'amour de son prochain.'),
(2, 'Le Baiser mortel du dragon\r\n', 'immagesprojet/lebaisermorteldudragon.png', 2001, 'La police française avait besoin de son savoir-faire internationalement reconnu pour arrêter un haut dignitaire chinois corrompu. C\'est donc pour prêter main-forte à son collègue Jean-Pierre Richard que Liu Jian, un officier des services secrets de Hong-Kong, s\'est rendu à Paris.\r\nTout était prévu pour une arrestation sans histoire dans la suite du gros bonnet. Mais Liu s\'est trompé. L\'homme qu\'il devait mettre derrière les barreaux vient d\'être assassiné sous ses yeux. Et on tente de lui faire porter le chapeau. La seule personne présente sur les lieux du crime et qui pourrait, l\'espère-t-il, prouver son innocence est une prostituée américaine.\r\nDerrière ce meurtre se cache en fait un complot international dont Liu est loin de deviner l\'ampleur et la gravité. Le voilà maintenant traqué par celui qu\'il était venu aider, et ce, dans une ville qui lui est totalement inconnue. '),
(3, 'Danny the Dog', 'immagesprojet/dannythedog.png', 2005, 'Bart a élevé Danny comme un chien, dressé pour tuer. A 30 ans, il ne connaît de la vie que son maître, la pièce dans laquelle il est resté reclus et les combats sanguinaires pour lesquels il est entraîné. Après un règlement de compte, Danny se retrouve seul, perdu. Sam, doux, humain, artiste, et sa belle fille mélomane le recueillent. A force d\'amour, de patience et de gentillesse, Sam et Victoria vont défaire le long apprentissage de la violence qu\'il a connue. '),
(4, 'Big Fish\r\n', 'immagesprojet/bigfish.png', 2003, 'L\'histoire à la fois drôle et poignante d\'Edward Bloom, un père débordant d\'imagination, et de son fils William. Ce dernier retourne au domicile familial après l\'avoir quitté longtemps auparavant, pour être au chevet de son père, atteint d\'un cancer. Il souhaite mieux le connaître et découvrir ses secrets avant qu\'il ne soit trop tard. L\'aventure débutera lorsque William tentera de discerner le vrai du faux dans les propos de son père mourant. '),
(5, 'Les Bronzés font du ski', 'immagesprojet/lesbronzesfontduski.png', 1979, 'Après le Club méditerranée, la joyeuse troupe d\'amis (plus connu sous le nom Des Bronzés) se retrouvent aux sports d\'hiver. Ils vivront encore d\'autres problèmes sentimentaux, et mésaventures. L\'équipe ira même se perdre en montagne.'),
(6, 'Drive', 'immagesprojet/drive.png', 2011, 'Un jeune homme solitaire, \"The Driver\", conduit le jour à Hollywood pour le cinéma en tant que cascadeur et la nuit pour des truands. Ultra professionnel et peu bavard, il a son propre code de conduite. Jamais il n’a pris part aux crimes de ses employeurs autrement qu’en conduisant - et au volant, il est le meilleur !\r\nShannon, le manager qui lui décroche tous ses contrats, propose à Bernie Rose, un malfrat notoire, d’investir dans un véhicule pour que son poulain puisse affronter les circuits de stock-car professionnels. Celui-ci accepte mais impose son associé, Nino, dans le projet.\r\nC’est alors que la route du pilote croise celle d’Irene et de son jeune fils. Pour la première fois de sa vie, il n’est plus seul.\r\nLorsque le mari d’Irene sort de prison et se retrouve enrôlé de force dans un braquage pour s’acquitter d’une dette, il décide pourtant de lui venir en aide. L’expédition tourne mal…\r\nDoublé par ses commanditaires, et obsédé par les risques qui pèsent sur Irene, il n’a dès lors pas d’autre alternative que de les traquer un à un… '),
(7, 'Persona', 'immagesprojet/persona.png', 1967, 'En plein milieu d’une représentation, la comédienne Elisabet Vogler perd l’usage de la parole. Après un séjour dans une clinique, elle s’installe quelque temps sur l’île de Fårö avec son infirmière, Alma. Les deux jeunes femmes vont alors nouer une grande complicité qui va pousser Alma à se confier. Mais cette relation fusionnelle va très vite se détériorer… '),
(8, 'La 25ème heure', 'immagesprojet/la25emeheure.png', 2002, 'La dernière nuit de liberté de Monty, un trafiquant de drogue, avant qu\'il ne purge une peine de prison de sept ans au pénitencier d\'Otisville. Autrefois l\'un des rois de Manhattan, il s\'apprête à dire adieu à une vie de faste et de plaisirs qui l\'avait également éloigné de ses proches.\r\nUne soirée est organisée à cette occasion dans un night-club tenu par Oncle Nikolai, un mafieux russe. Tout son entourage y est réuni : son père, avec il va tenter de renouer des liens, ses deux anciens potes Jakob et Slattery, Kostya, un ami et complice russe, et Naturelle, sa compagne... Monty pense d\'ailleurs que c\'est elle qui l\'a dénoncé aux agents fédéraux. Mais l\'heure tourne et celui-ci doit faire des choix. '),
(9, 'La Cité de la peur', 'immagesprojet/lacitedelapeur.png', 1994, 'Odile Deray, attachée de presse, vient au Festival de Cannes pour présenter le film \"Red is Dead\". Malheureusement, celui-ci est d\'une telle faiblesse que personne ne souhaite en faire l\'écho. Mais lorsque les projectionnistes du long-métrage en question meurent chacun leur tour dans d\'étranges circonstances, \"Red is dead\" bénéficie d\'une incroyable publicité. Serge Karamazov est alors chargé de protéger le nouveau projectionniste du film... '),
(10, 'Star Wars : Le réveil de la force', 'immagesprojet/starwars.png', 2015, 'Dans une galaxie lointaine, très lointaine, un nouvel épisode de la saga \"Star Wars\", 30 ans après les événements du \"Retour du Jedi\". '),
(11, 'Interstellar', 'immagesprojet/interstellar.png', 2014, 'Le film raconte les aventures d’un groupe d’explorateurs qui utilisent une faille récemment découverte dans l’espace-temps afin de repousser les limites humaines et partir à la conquête des distances astronomiques dans un voyage interstellaire.'),
(12, 'The Fall', 'immagesprojet/thefall.png', 2009, 'Los Angeles, années 1920. Alexandria, cinq ans, est hospitalisée à la suite d\'une chute. Elle se lie d\'amitié avec Roy, cascadeur à Hollywood, lui aussi victime d\'un accident. Le jeune homme se lance dans le récit d\'une histoire épique avec le gouverneur Odieux et les 5 fantastiques déterminés à le combattre. Très vite, la frontière entre la réalité et ce monde éblouissant de magie et de mythes commence à disparaître quand la petite Alexandra réalise qu\'il existe un véritable enjeu...');

-- --------------------------------------------------------

--
-- Structure de la table `films_acteurs`
--

DROP TABLE IF EXISTS `films_acteurs`;
CREATE TABLE IF NOT EXISTS `films_acteurs` (
  `id_acteur` int(11) NOT NULL,
  `id_film` int(11) NOT NULL,
  PRIMARY KEY (`id_acteur`,`id_film`),
  KEY `films_acteurs_Films0_FK` (`id_film`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `films_acteurs`
--

INSERT INTO `films_acteurs` (`id_acteur`, `id_film`) VALUES
(50, 1),
(53, 1),
(67, 1),
(69, 2),
(72, 2),
(73, 2),
(74, 2),
(69, 3),
(70, 3),
(71, 3),
(47, 4),
(48, 4),
(49, 4),
(50, 4),
(40, 5),
(41, 5),
(42, 5),
(43, 5),
(44, 6),
(45, 6),
(46, 6),
(51, 7),
(52, 7),
(53, 8),
(54, 8),
(55, 9),
(56, 9),
(57, 9),
(58, 10),
(59, 10),
(60, 10),
(61, 11),
(62, 11),
(63, 11),
(64, 12),
(65, 12),
(66, 12);

-- --------------------------------------------------------

--
-- Structure de la table `films_realisateurs`
--

DROP TABLE IF EXISTS `films_realisateurs`;
CREATE TABLE IF NOT EXISTS `films_realisateurs` (
  `id_realisateur` int(11) NOT NULL,
  `id_film` int(11) NOT NULL,
  PRIMARY KEY (`id_realisateur`,`id_film`),
  UNIQUE KEY `id_realisateur` (`id_realisateur`),
  KEY `films_realisateurs_IDF` (`id_film`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `films_realisateurs`
--

INSERT INTO `films_realisateurs` (`id_realisateur`, `id_film`) VALUES
(27, 1),
(28, 2),
(29, 3),
(30, 6),
(31, 5),
(32, 4),
(33, 11),
(34, 12),
(35, 10),
(36, 7),
(37, 8),
(38, 9),
(39, 9);

-- --------------------------------------------------------

--
-- Structure de la table `genres`
--

DROP TABLE IF EXISTS `genres`;
CREATE TABLE IF NOT EXISTS `genres` (
  `id_genre` int(11) NOT NULL AUTO_INCREMENT,
  `genre` varchar(255) NOT NULL,
  PRIMARY KEY (`id_genre`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `genres`
--

INSERT INTO `genres` (`id_genre`, `genre`) VALUES
(1, 'Drame'),
(2, 'Comédie'),
(3, 'Horreur'),
(4, 'Science Fiction'),
(5, 'Action'),
(6, 'Aventure'),
(7, 'Thriller'),
(8, 'Policier'),
(9, 'Documentaire'),
(10, 'Romantique'),
(11, 'Fantastique'),
(12, 'Arts Martiaux'),
(13, 'Fantaisie');

-- --------------------------------------------------------

--
-- Structure de la table `genres_films`
--

DROP TABLE IF EXISTS `genres_films`;
CREATE TABLE IF NOT EXISTS `genres_films` (
  `id_genre` int(11) NOT NULL,
  `id_film` int(11) NOT NULL,
  PRIMARY KEY (`id_genre`,`id_film`),
  KEY `genres_films_Films0_FK` (`id_film`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `genres_films`
--

INSERT INTO `genres_films` (`id_genre`, `id_film`) VALUES
(1, 1),
(7, 1),
(5, 2),
(7, 2),
(12, 2),
(1, 3),
(5, 3),
(7, 3),
(1, 4),
(2, 4),
(6, 4),
(2, 5),
(5, 6),
(7, 6),
(1, 7),
(7, 7),
(1, 8),
(2, 9),
(4, 10),
(5, 10),
(6, 10),
(1, 11),
(4, 11),
(1, 12);

-- --------------------------------------------------------

--
-- Structure de la table `realisateurs`
--

DROP TABLE IF EXISTS `realisateurs`;
CREATE TABLE IF NOT EXISTS `realisateurs` (
  `id_realisateur` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `date_de_naissance` date NOT NULL,
  PRIMARY KEY (`id_realisateur`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `realisateurs`
--

INSERT INTO `realisateurs` (`id_realisateur`, `nom`, `prenom`, `date_de_naissance`) VALUES
(27, 'Fincher', 'David ', '1962-08-28'),
(28, 'Nahon', 'Christopher', '1968-12-05'),
(29, 'Leterrier', 'Louis ', '1973-06-17'),
(30, 'Winding Refn', 'Nicolas ', '1970-09-29'),
(31, 'Leconte', 'Patrice ', '1947-11-12'),
(32, 'Burton', 'Tim ', '1958-08-25'),
(33, 'Nolan', 'Christopher ', '1970-07-30'),
(34, 'Singh ', 'Tarsem ', '1961-05-26'),
(35, 'Abrams ', 'J.J. ', '1966-06-27'),
(36, 'Bergman ', 'Ingmar ', '1918-07-14'),
(37, 'Lee ', 'Spike \r\n', '1957-03-20'),
(38, 'Chabat ', 'Alain \r\n', '1958-11-24'),
(39, 'Berbérian ', 'Alain ', '1953-07-02');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `films_acteurs`
--
ALTER TABLE `films_acteurs`
  ADD CONSTRAINT `films_acteurs_Acteurs_FK` FOREIGN KEY (`id_acteur`) REFERENCES `acteurs` (`id_acteur`),
  ADD CONSTRAINT `films_acteurs_Films0_FK` FOREIGN KEY (`id_film`) REFERENCES `films` (`id_film`);

--
-- Contraintes pour la table `films_realisateurs`
--
ALTER TABLE `films_realisateurs`
  ADD CONSTRAINT `films_realisateurs_IDF` FOREIGN KEY (`id_film`) REFERENCES `films` (`id_film`);

--
-- Contraintes pour la table `genres_films`
--
ALTER TABLE `genres_films`
  ADD CONSTRAINT `genres_films_Films0_FK` FOREIGN KEY (`id_film`) REFERENCES `films` (`id_film`),
  ADD CONSTRAINT `genres_films_Genres_FK` FOREIGN KEY (`id_genre`) REFERENCES `genres` (`id_genre`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
