-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 27 nov. 2018 à 15:13
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
-- Base de données :  `projetfilm`
--

-- --------------------------------------------------------

--
-- Structure de la table `films`
--

DROP TABLE IF EXISTS `films`;
CREATE TABLE IF NOT EXISTS `films` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `url_img` text NOT NULL,
  `realisateur` varchar(255) NOT NULL,
  `annee_sortie` year(4) NOT NULL,
  `genre1` int(11) DEFAULT NULL,
  `genre2` int(11) DEFAULT NULL,
  `genre3` int(11) DEFAULT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `films_genres1` (`genre1`),
  KEY `films_genres2` (`genre2`),
  KEY `films_genres3` (`genre3`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `films`
--

INSERT INTO `films` (`id`, `titre`, `url_img`, `realisateur`, `annee_sortie`, `genre1`, `genre2`, `genre3`, `description`) VALUES
(4, 'Persona', '', 'Ingmar Bergman', 1966, 1, 7, NULL, 'En plein milieu d’une représentation, la comédienne Elisabet Vogler perd l’usage de la parole. Après un séjour dans une clinique, elle s’installe quelque temps sur l’île de Fårö avec son infirmière, Alma. Les deux jeunes femmes vont alors nouer une grande complicité qui va pousser Alma à se confier. Mais cette relation fusionnelle va très vite se détériorer…'),
(5, 'La 25ème Heure', '', 'Spike Lee', 2002, 1, NULL, NULL, 'La dernière nuit de liberté de Monty, un trafiquant de drogue, avant qu\'il ne purge une peine de prison de sept ans au pénitencier d\'Otisville. Autrefois l\'un des rois de Manhattan, il s\'apprête à dire adieu à une vie de faste et de plaisirs qui l\'avait également éloigné de ses proches.'),
(6, 'La Cité de la Peur', '', 'Alain Berberian', 1994, 3, NULL, NULL, 'Odile Deray, attachée de presse, vient au Festival de Cannes pour présenter le film \"Red is Dead\". Malheureusement, celui-ci est d\'une telle faiblesse que personne ne souhaite en faire l\'écho. Mais lorsque les projectionnistes du long-métrage en question meurent chacun leur tour dans d\'étranges circonstances, \"Red is dead\" bénéficie d\'une incroyable publicité. Serge Karamazov est alors chargé de protéger le nouveau projectionniste du film..'),
(7, 'Star Wars : Le réveille de la force', '', 'J.J. Abrams', 2015, 5, 6, 11, 'Dans une galaxie lointaine, très lointaine, un nouvel épisode de la saga \"Star Wars\", 30 ans après les événements du \"Retour du Jedi\".'),
(8, 'Interstellar', '', 'Christopher Nolan', 2014, 1, 6, 4, 'Le film raconte les aventures d’un groupe d’explorateurs qui utilisent une faille récemment découverte dans l’espace-temps afin de repousser les limites humaines et partir à la conquête des distances astronomiques dans un voyage interstellaire.'),
(9, 'The Fall', '', 'Tarsem Singh', 2006, 1, 6, 3, 'Los Angeles, années 1920. Alexandria, cinq ans, est hospitalisée à la suite d\'une chute. Elle se lie d\'amitié avec Roy, cascadeur à Hollywood, lui aussi victime d\'un accident. Le jeune homme se lance dans le récit d\'une histoire épique avec le gouverneur Odieux et les 5 fantastiques déterminés à le combattre. Très vite, la frontière entre la réalité et ce monde éblouissant de magie et de mythes commence à disparaître quand la petite Alexandra réalise qu\'il existe un véritable enjeu...'),
(10, 'Big Fish', '', 'Tim Burton', 2004, 6, 1, 3, 'Los Angeles, années 1920. Alexandria, cinq ans, est hospitalisée à la suite d\'une chute. Elle se lie d\'amitié avec Roy, cascadeur à Hollywood, lui aussi victime d\'un accident. Le jeune homme se lance dans le récit d\'une histoire épique avec le gouverneur Odieux et les 5 fantastiques déterminés à le combattre. Très vite, la frontière entre la réalité et ce monde éblouissant de magie et de mythes commence à disparaître quand la petite Alexandra réalise qu\'il existe un véritable enjeu...'),
(11, 'Les Bronzés font du ski', '', 'Patrice Leconte', 1979, 3, NULL, NULL, 'Après le Club méditerranée, la joyeuse troupe d\'amis (plus connu sous le nom Des Bronzés) se retrouvent aux sports d\'hiver. Ils vivront encore d\'autres problèmes sentimentaux, et mésaventures. L\'équipe ira même se perdre en montagne.'),
(12, 'Drive', '', 'Nicolas Winding Refn', 2011, 5, 7, NULL, 'Un jeune homme solitaire, \"\"The Driver\"\", conduit le jour à Hollywood pour le cinéma en tant que cascadeur et la nuit pour des truands. Ultra professionnel et peu bavard, il a son propre code de conduite. Jamais il n’a pris part aux crimes de ses employeurs autrement qu’en conduisant - et au volant, il est le meilleur !'),
(13, 'Fight Club', '', 'David Fincher', 1999, 1, 7, NULL, 'Le narrateur, sans identité précise, vit seul, travaille seul, dort seul, mange seul ses plateaux-repas pour une personne comme beaucoup d\'autres personnes seules qui connaissent la misère humaine, morale et sexuelle. C\'est pourquoi il va devenir membre du Fight club, un lieu clandestin ou il va pouvoir retrouver sa virilité, l\'échange et la communication. Ce club est dirigé par Tyler Durden, une sorte d\'anarchiste entre gourou et philosophe qui prêche l\'amour de son prochain.'),
(14, 'Danny The Dog', '', 'Louis Leterrier', 2005, 1, 5, 7, 'Bart a élevé Danny comme un chien, dressé pour tuer. A 30 ans, il ne connaît de la vie que son maître, la pièce dans laquelle il est resté reclus et les combats sanguinaires pour lesquels il est entraîné. Après un règlement de compte, Danny se retrouve seul, perdu. Sam, doux, humain, artiste, et sa belle fille mélomane le recueillent. A force d\'amour, de patience et de gentillesse, Sam et Victoria vont défaire le long apprentissage de la violence qu\'il a connue.'),
(15, 'Le Baiser Mortel Du Dragon', '', 'Chris Nahon', 2001, 7, 5, NULL, 'La police française avait besoin de son savoir-faire internationalement reconnu pour arrêter un haut dignitaire chinois corrompu. C\'est donc pour prêter main-forte à son collègue Jean-Pierre Richard que Liu Jian, un officier des services secrets de Hong-Kong, s\'est rendu à Paris...');

-- --------------------------------------------------------

--
-- Structure de la table `genres`
--

DROP TABLE IF EXISTS `genres`;
CREATE TABLE IF NOT EXISTS `genres` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `genre` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `genres`
--

INSERT INTO `genres` (`id`, `genre`) VALUES
(1, 'Drame'),
(2, 'Horreur'),
(3, 'Comédie'),
(4, 'Science Fiction'),
(5, 'Action'),
(6, 'Aventure'),
(7, 'Thriller'),
(8, 'Policier'),
(9, 'Documentaire'),
(10, 'Romantique'),
(11, 'Fantastique'),
(12, 'Arts Martiaux');

-- --------------------------------------------------------

--
-- Structure de la table `realisateurs`
--

DROP TABLE IF EXISTS `realisateurs`;
CREATE TABLE IF NOT EXISTS `realisateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `date_de_naissance` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `realisateurs`
--

INSERT INTO `realisateurs` (`id`, `nom`, `prenom`, `date_de_naissance`) VALUES
(1, 'David ', 'Fincher', '1962-08-28'),
(2, 'Christopher', 'Nahon', '1968-12-05'),
(3, 'Louis ', 'Leterrier', '1973-06-17'),
(4, 'Nicolas ', 'Winding Refn', '1970-09-29'),
(5, 'Patrice ', 'Leconte', '1947-11-12'),
(6, 'Tim ', 'Burton', '1958-08-25'),
(7, 'Christopher ', 'Nolan', '1970-07-30'),
(8, 'Tarsem ', 'Singh ', '1961-05-26'),
(9, 'J.J. ', 'Abrams ', '1966-06-27'),
(10, 'Ingmar \r\n', 'Bergman ', '1918-07-14'),
(11, 'Spike \r\n\r\n', 'Lee ', '1957-03-20'),
(12, 'Alain \r\n', 'Chabat ', '1958-11-24'),
(13, 'Alain ', 'Berbérian ', '1953-07-02');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `films`
--
ALTER TABLE `films`
  ADD CONSTRAINT `films_genres1` FOREIGN KEY (`genre1`) REFERENCES `genres` (`id`),
  ADD CONSTRAINT `films_genres2` FOREIGN KEY (`genre2`) REFERENCES `genres` (`id`),
  ADD CONSTRAINT `films_genres3` FOREIGN KEY (`genre3`) REFERENCES `genres` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
