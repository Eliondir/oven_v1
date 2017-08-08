-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Mar 08 Août 2017 à 18:11
-- Version du serveur :  10.1.19-MariaDB
-- Version de PHP :  5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `oven`
--

-- --------------------------------------------------------

--
-- Structure de la table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `nom` varchar(25) DEFAULT NULL,
  `contenu` text,
  `dateDebut` date DEFAULT NULL,
  `dateFin` date DEFAULT NULL,
  `heureDebut` time DEFAULT NULL,
  `heureFin` time DEFAULT NULL,
  `id_jeux` int(11) DEFAULT NULL,
  `id_membre` int(11) DEFAULT NULL,
  `note` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `event`
--

INSERT INTO `event` (`id`, `nom`, `contenu`, `dateDebut`, `dateFin`, `heureDebut`, `heureFin`, `id_jeux`, `id_membre`, `note`) VALUES
(1, 'TEST', 'Soirée test du site :)', '2017-06-29', '2017-06-30', '15:00:00', '13:30:00', 2, 1, NULL),
(2, 'TEST2', 'zezazzaze', '2017-06-29', '2017-06-30', '14:30:00', '19:56:00', 1, 1, NULL),
(3, 'TEST3', 'bonjour bonjour', '2017-06-30', '2017-06-30', '09:00:00', '14:00:00', 1, 1, NULL),
(4, 'test4', 'yo yo', '2017-06-28', '2017-06-28', '14:00:00', '18:00:00', 2, 1, NULL),
(6, 'Test Site', ' Ceci est un test site', '2017-06-27', '2017-06-27', '12:30:00', '12:45:00', 1, 1, ' Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vestibulum sem eu lobortis interdum. Nullam eu ornare orci, quis accumsan sem. Nulla in leo ac lorem tempor egestas. Nulla imperdiet sit amet odio blandit lacinia. Morbi vel urna eget felis sodales posuere. Quisque vel tempus elit. Nulla scelerisque faucibus metus ac rhoncus. Vestibulum vulputate, ex eget euismod faucibus, nisi sapien lobortis orci, eu consectetur sem enim eu nulla. Mauris et facilisis libero. In ut ultrices urna. Sed sollicitudin velit sed tellus pulvinar, ac bibendum ipsum euismod. Morbi sed ultricies mi.<br />\n<br />\nVestibulum feugiat ante quam, lobortis feugiat justo posuere pharetra. Suspendisse potenti. In non tincidunt tortor, at accumsan nibh. Suspendisse nec scelerisque quam, eget dapibus nunc. Nulla eget felis ipsum. Aenean cursus quam neque, nec vestibulum diam accumsan at. Pellentesque porta sed sem sit amet rutrum. Suspendisse non lacinia nibh. Donec consequat mattis erat id tempor.<br />\n<br />\nMorbi ultrices molestie elit, ac rutrum risus lacinia interdum. Vestibulum iaculis scelerisque egestas. Vivamus convallis semper sem. Donec tristique neque turpis, nec hendrerit nulla fermentum vel. Mauris maximus nisl vel eleifend fringilla. Cras quis tincidunt quam. Proin maximus fringilla urna vel tempor. Nullam eu arcu et odio molestie suscipit ac ac velit. Nunc porta tempor sapien a congue.<br />\n<br />\nProin sed tortor et odio tincidunt fringilla. Aliquam sollicitudin sit amet ante vitae aliquet. Cras et viverra libero. Donec et iaculis purus. In ligula ex, feugiat vel nulla ac, pulvinar consectetur lorem. Sed nec urna et est suscipit convallis. Pellentesque arcu felis, consectetur eget blandit a, euismod in nisi. Praesent sed augue diam. Phasellus et felis ac libero malesuada viverra. In faucibus augue a hendrerit elementum. Nullam consequat interdum diam, ac auctor nisl cursus ut. Mauris interdum a nisi vitae imperdiet. In dapibus felis dolor, a bibendum dolor tincidunt ac. Nam eu placerat nunc.<br />\n<br />\nVivamus quis ultrices mauris. Donec quis facilisis neque. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce nec augue massa. Sed id ligula quis odio egestas varius. Vivamus convallis consectetur massa non varius. Sed et eros eros. Aenean ex magna, lobortis vel pellentesque vel, pulvinar ut ex. Curabitur sed est vitae erat pellentesque pellentesque. Praesent vulputate non lorem ut congue. Fusce maximus tortor in viverra sagittis. Integer eu porttitor tortor. Proin pretium porta neque, quis sodales arcu laoreet eu. Sed quis feugiat risus. Nunc aliquam, risus in ultrices euismod, odio velit ultrices tortor, ut posuere lectus sem id elit. Donec placerat sem vulputate diam pretium ullamcorper.');

-- --------------------------------------------------------

--
-- Structure de la table `event_membre`
--

CREATE TABLE `event_membre` (
  `id` int(11) NOT NULL,
  `id_membre` int(11) NOT NULL,
  `info` text,
  `heureInscri` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `presence` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `event_membre`
--

INSERT INTO `event_membre` (`id`, `id_membre`, `info`, `heureInscri`, `presence`) VALUES
(1, 1, 'Beaucoup d''info !!!!ejjejek,zazjezlazejzejeza ljeazjjzeakljnjfjkfqjkb sqfbkfbksbqjkfjkfsjqfjjs qjjqskjsqfkjfjfqjfjjf qskjsjkqsjkqjfjfqkjqjqkfjjkqfjkqf djfqdjjfqjqfdjkfqdkjfjqfkjfqjfqjqfjk', '2017-06-27 15:20:48', 0),
(2, 1, ' test', '2017-06-27 13:53:51', 0),
(6, 1, ' je m''inscrit :p', '2017-06-27 16:04:12', 0),
(6, 2, ' test', '2017-06-27 15:50:51', 1);

-- --------------------------------------------------------

--
-- Structure de la table `grade`
--

CREATE TABLE `grade` (
  `id` int(11) NOT NULL,
  `nom` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `grade`
--

INSERT INTO `grade` (`id`, `nom`) VALUES
(6, 'Ame du Cercle'),
(3, 'Cercle Initié'),
(5, 'Maitre Ombre'),
(2, 'Ombre Naissante'),
(4, 'Ombrevent'),
(7, 'Vent Equilibre'),
(1, 'Visiteur');

-- --------------------------------------------------------

--
-- Structure de la table `grade_jeux`
--

CREATE TABLE `grade_jeux` (
  `id` int(11) NOT NULL,
  `nom` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `grade_jeux`
--

INSERT INTO `grade_jeux` (`id`, `nom`) VALUES
(1, 'Joueur'),
(3, 'Leader'),
(2, 'Membre');

-- --------------------------------------------------------

--
-- Structure de la table `guide`
--

CREATE TABLE `guide` (
  `id` int(11) NOT NULL,
  `titre` varchar(100) DEFAULT NULL,
  `contenu` text,
  `dateP` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_membre` int(11) DEFAULT NULL,
  `id_jeux` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `guide`
--

INSERT INTO `guide` (`id`, `titre`, `contenu`, `dateP`, `id_membre`, `id_jeux`) VALUES
(1, 'Bienvenue sur le site des Ovens', 'Bienvenue sur le site des ovens!!!<br />\r\n<br />\r\nCe message est un test pour vérifier si les guides fonctionnent bien.', '2017-06-26 11:58:05', 1, 1),
(2, 'Test Site', ' Ceci est un test', '2017-06-27 10:16:00', 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `jeux`
--

CREATE TABLE `jeux` (
  `id` int(11) NOT NULL,
  `nom` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `jeux`
--

INSERT INTO `jeux` (`id`, `nom`) VALUES
(2, 'GW2'),
(3, 'Overwatch'),
(1, 'Site');

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE `membre` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(32) DEFAULT NULL,
  `mdp` varchar(100) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `dateNaissance` date DEFAULT NULL,
  `inscription` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `image` varchar(2083) DEFAULT 'dist/img/pray_by_wlop.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `membre`
--

INSERT INTO `membre` (`id`, `pseudo`, `mdp`, `email`, `dateNaissance`, `inscription`, `image`) VALUES
(1, 'Eliondir', '41be99802077b057be643f9801339411', 'maxalex1@hotmail.fr', '1997-07-03', '2017-06-23 13:14:36', 'https://i.ytimg.com/vi/93vmIVzWb-M/0.jpg'),
(2, 'test', '1a1dc91c907325c69271ddf0c944bc72', 'test@test.fr', '2017-06-22', '2017-06-27 14:21:34', 'dist/img/pray_by_wlop.jpg'),
(3, 'test2', '1a1dc91c907325c69271ddf0c944bc72', 'test2@test.fr', '2000-06-24', '2017-06-27 20:28:37', 'dist/img/pray_by_wlop.jpg'),
(4, 'test555566', '78d1a0fddcd80f7e2f430fafae076cae', 'test@test51456.fr', '2017-07-14', '2017-07-03 06:37:46', 'dist/img/pray_by_wlop.jpg');

--
-- Déclencheurs `membre`
--
DELIMITER $$
CREATE TRIGGER `insert_membre_grade` AFTER INSERT ON `membre` FOR EACH ROW INSERT INTO membre_grade (id)
select Max(id) from membre
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Structure de la table `membre_grade`
--

CREATE TABLE `membre_grade` (
  `id` int(11) NOT NULL,
  `id_grade` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `membre_grade`
--

INSERT INTO `membre_grade` (`id`, `id_grade`) VALUES
(1, 7),
(2, 1),
(3, 1),
(4, 1);

-- --------------------------------------------------------

--
-- Structure de la table `membre_jeux`
--

CREATE TABLE `membre_jeux` (
  `tag` varchar(25) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `id_jeux` int(11) NOT NULL,
  `id_grade_jeux` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `membre_jeux`
--

INSERT INTO `membre_jeux` (`tag`, `id`, `id_jeux`, `id_grade_jeux`) VALUES
('Eliondir#21404', 1, 3, 1);

-- --------------------------------------------------------

--
-- Structure de la table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `nom` varchar(25) DEFAULT NULL,
  `contenu` text,
  `id_membre` int(11) DEFAULT NULL,
  `id_jeux` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_event_id_jeux` (`id_jeux`),
  ADD KEY `FK_event_id_membre` (`id_membre`);

--
-- Index pour la table `event_membre`
--
ALTER TABLE `event_membre`
  ADD PRIMARY KEY (`id`,`id_membre`),
  ADD KEY `FK_event_membre_id_membre` (`id_membre`);

--
-- Index pour la table `grade`
--
ALTER TABLE `grade`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nom` (`nom`);

--
-- Index pour la table `grade_jeux`
--
ALTER TABLE `grade_jeux`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nom` (`nom`);

--
-- Index pour la table `guide`
--
ALTER TABLE `guide`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_Guide_id_membre` (`id_membre`),
  ADD KEY `FK_Guide_id_jeux` (`id_jeux`);

--
-- Index pour la table `jeux`
--
ALTER TABLE `jeux`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nom` (`nom`);

--
-- Index pour la table `membre`
--
ALTER TABLE `membre`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `pseudo` (`pseudo`,`email`);

--
-- Index pour la table `membre_grade`
--
ALTER TABLE `membre_grade`
  ADD PRIMARY KEY (`id`,`id_grade`),
  ADD KEY `FK_membre_grade_id_grade` (`id_grade`);

--
-- Index pour la table `membre_jeux`
--
ALTER TABLE `membre_jeux`
  ADD PRIMARY KEY (`id`,`id_jeux`,`id_grade_jeux`),
  ADD KEY `FK_membre_jeux_id_jeux` (`id_jeux`),
  ADD KEY `FK_membre_jeux_id_grade_jeux` (`id_grade_jeux`);

--
-- Index pour la table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_news_id_membre` (`id_membre`),
  ADD KEY `FK_news_id_jeux` (`id_jeux`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT pour la table `grade`
--
ALTER TABLE `grade`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `grade_jeux`
--
ALTER TABLE `grade_jeux`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `guide`
--
ALTER TABLE `guide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `jeux`
--
ALTER TABLE `jeux`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `membre`
--
ALTER TABLE `membre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `event`
--
ALTER TABLE `event`
  ADD CONSTRAINT `FK_event_id_jeux` FOREIGN KEY (`id_jeux`) REFERENCES `jeux` (`id`),
  ADD CONSTRAINT `FK_event_id_membre` FOREIGN KEY (`id_membre`) REFERENCES `membre` (`id`);

--
-- Contraintes pour la table `event_membre`
--
ALTER TABLE `event_membre`
  ADD CONSTRAINT `FK_event_membre_id` FOREIGN KEY (`id`) REFERENCES `event` (`id`),
  ADD CONSTRAINT `FK_event_membre_id_membre` FOREIGN KEY (`id_membre`) REFERENCES `membre` (`id`);

--
-- Contraintes pour la table `guide`
--
ALTER TABLE `guide`
  ADD CONSTRAINT `FK_Guide_id_jeux` FOREIGN KEY (`id_jeux`) REFERENCES `jeux` (`id`),
  ADD CONSTRAINT `FK_Guide_id_membre` FOREIGN KEY (`id_membre`) REFERENCES `membre` (`id`);

--
-- Contraintes pour la table `membre_grade`
--
ALTER TABLE `membre_grade`
  ADD CONSTRAINT `FK_membre_grade_id` FOREIGN KEY (`id`) REFERENCES `membre` (`id`),
  ADD CONSTRAINT `FK_membre_grade_id_grade` FOREIGN KEY (`id_grade`) REFERENCES `grade` (`id`);

--
-- Contraintes pour la table `membre_jeux`
--
ALTER TABLE `membre_jeux`
  ADD CONSTRAINT `FK_membre_jeux_id` FOREIGN KEY (`id`) REFERENCES `membre` (`id`),
  ADD CONSTRAINT `FK_membre_jeux_id_grade_jeux` FOREIGN KEY (`id_grade_jeux`) REFERENCES `grade_jeux` (`id`),
  ADD CONSTRAINT `FK_membre_jeux_id_jeux` FOREIGN KEY (`id_jeux`) REFERENCES `jeux` (`id`);

--
-- Contraintes pour la table `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `FK_news_id_jeux` FOREIGN KEY (`id_jeux`) REFERENCES `jeux` (`id`),
  ADD CONSTRAINT `FK_news_id_membre` FOREIGN KEY (`id_membre`) REFERENCES `membre` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
