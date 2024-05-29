-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 29 mai 2024 à 18:24
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `records4sale`
--

-- --------------------------------------------------------

--
-- Structure de la table `artist`
--

CREATE TABLE `artist` (
  `id` int(11) NOT NULL,
  `label` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `artist`
--

INSERT INTO `artist` (`id`, `label`) VALUES
(1, 'Metallica'),
(2, 'Obscura'),
(3, 'Plini'),
(4, 'Soil of Fear'),
(5, 'Opeth'),
(7, 'Sleep Token'),
(8, 'Steven Wilson'),
(9, 'Fall Out Boy'),
(10, 'Dream Theater'),
(11, 'Meshuggah'),
(13, 'PinkPantheress'),
(14, 'Jean-Michel Jarre'),
(15, 'Off Limits'),
(16, 'Hilight Tribe'),
(17, 'CASIOPEA'),
(24, 'Igorrr');

-- --------------------------------------------------------

--
-- Structure de la table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `label` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `category`
--

INSERT INTO `category` (`id`, `label`) VALUES
(1, 'Album'),
(2, 'Technical Death Metal'),
(3, 'Single'),
(6, 'Mixtape'),
(7, 'Live Album');

-- --------------------------------------------------------

--
-- Structure de la table `favorite`
--

CREATE TABLE `favorite` (
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Structure de la table `genre`
--

CREATE TABLE `genre` (
  `id` int(11) NOT NULL,
  `label` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `genre`
--

INSERT INTO `genre` (`id`, `label`) VALUES
(1, 'Thrash Metal'),
(2, 'Technical Death Metal'),
(3, 'Metal'),
(4, 'Progressive Rock'),
(5, 'Progressive Metal'),
(6, 'Dance Pop'),
(7, 'Electronic'),
(8, 'Ambient'),
(9, 'Psy-Trance'),
(10, 'Jazz Fusion'),
(11, 'Jazz'),
(13, 'Pop'),
(14, 'Black Metal'),
(15, 'Hard Rock'),
(16, 'Heavy Metal'),
(17, 'Dance');

-- --------------------------------------------------------

--
-- Structure de la table `item`
--

CREATE TABLE `item` (
  `id` int(11) NOT NULL,
  `label` varchar(255) NOT NULL,
  `tracklist_id` int(11) DEFAULT NULL,
  `price` decimal(10,2) NOT NULL DEFAULT 0.00,
  `release` year(4) DEFAULT NULL,
  `runtime` int(11) NOT NULL DEFAULT 0 COMMENT 'minutes',
  `artist_id` int(11) DEFAULT NULL,
  `genre_id` int(11) DEFAULT NULL,
  `category_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `item`
--

INSERT INTO `item` (`id`, `label`, `tracklist_id`, `price`, `release`, `runtime`, `artist_id`, `genre_id`, `category_id`) VALUES
(1, 'Master of Puppets', 0, 14.99, '1986', 0, 1, 1, 1),
(2, 'A Valediction', 0, 14.99, '2021', 52, 2, 2, 1),
(3, 'Sweet Nothings', 0, 4.99, '2013', 17, 3, 3, 2),
(4, 'Revival', 0, 2.99, '2024', 0, 4, 3, 3),
(5, 'Ghost Reveries', 0, 9.99, '2005', 0, 5, NULL, 1),
(6, 'The Summoning', 0, 2.99, '2023', 0, 7, NULL, NULL),
(7, 'Hand Cannot Erase', 0, 5.99, '2015', 0, 8, NULL, 1),
(8, 'Folie à Deux', NULL, 5.99, '2008', 0, 9, NULL, 1),
(9, 'Diluvium', NULL, 5.99, '2018', 54, 2, 2, 1),
(10, 'Omnivium', NULL, 5.99, '2011', 54, 2, 2, 1),
(11, 'ObZen', NULL, 5.99, '2008', 52, 11, 5, 1),
(12, 'Octavarium', NULL, 5.99, '2005', 75, 10, 5, 1),
(13, 'Metropolis, Pt. 2: Scenes from a Memory', NULL, 5.99, '1999', 77, 10, 5, 1),
(17, 'to hell with it', NULL, 0.00, '2021', 18, 13, 6, 6),
(18, 'Oxygène', NULL, 0.00, '1976', 39, 14, 7, 1),
(19, 'Eargasm', NULL, 0.00, '2017', 68, 15, 9, 1),
(20, 'Temple of Light', NULL, 0.00, '2016', 68, 16, 9, 1),
(21, 'Train of Thought', NULL, 0.00, '2003', 69, 10, 5, 1),
(22, 'Six Degrees of Inner Turbulence', NULL, 0.00, '2002', 96, 10, 5, 1),
(23, 'Awake', NULL, 0.00, '1994', 75, 10, 5, 1),
(24, 'Images and Words', NULL, 0.00, '1992', 57, 10, 5, 1),
(25, 'CASIOPEA', NULL, 0.00, '1979', 36, 17, 10, 1),
(26, 'Mint Jams', NULL, 0.00, '1982', 36, 17, 10, 7),
(30, 'Savage Sinusoid', NULL, 10.50, '2021', 56, 24, 14, 1);

-- --------------------------------------------------------

--
-- Structure de la table `item_genre`
--

CREATE TABLE `item_genre` (
  `item_id` int(11) NOT NULL,
  `genre_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `item_genre`
--

INSERT INTO `item_genre` (`item_id`, `genre_id`) VALUES
(3, 8),
(3, 3),
(3, 5),
(3, 4),
(5, 14),
(5, 3),
(5, 5),
(5, 4),
(2, 14),
(2, 3),
(2, 5),
(2, 2),
(25, 11),
(25, 10);

-- --------------------------------------------------------

--
-- Structure de la table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `comment` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `review`
--

INSERT INTO `review` (`id`, `user_id`, `item_id`, `rating`, `comment`) VALUES
(1, 1, 2, 5, 'lorem lorem lorem lorem lorem lorem lorem lorem lorem '),
(2, 1, 13, 1, 'lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem lorem ');

-- --------------------------------------------------------

--
-- Structure de la table `song`
--

CREATE TABLE `song` (
  `id` int(11) NOT NULL,
  `label` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `song`
--

INSERT INTO `song` (`id`, `label`) VALUES
(1, 'Master of Puppets'),
(2, 'Battery'),
(3, 'The Thing That Should Not Be'),
(4, 'Disposable Heroes'),
(5, 'Damage, Inc.'),
(6, 'Forsaken'),
(7, 'Solaris'),
(8, 'A Valediction'),
(9, 'When Stars Collide'),
(10, 'In Unity'),
(11, 'Devoured Usurper'),
(12, 'The Beyond'),
(13, 'Orbital Elements II'),
(14, 'The Neuromancer'),
(15, 'In Adversity'),
(16, 'Heritage'),
(17, 'Revival'),
(18, 'Opening'),
(19, 'Tarred & Feathered'),
(20, 'Away'),
(21, 'Sweet Nothings'),
(22, 'Ghost of Perdition'),
(23, 'The Baying of the Hounds'),
(24, 'Beneath the Mire'),
(25, 'Atonement'),
(26, 'Reverie / Harlequin Forest'),
(27, 'Hours of Wealth'),
(28, 'The Grand Conjuration'),
(29, 'Isolation Years'),
(30, 'The Summoning'),
(31, 'First Regret / 3 Years Older'),
(32, 'Hand Cannot Erase'),
(33, 'Perfect Life'),
(34, 'Routine'),
(35, 'Home Invasion / Regret #9'),
(36, 'Transience'),
(37, 'Ancestral'),
(38, 'Happy Returns / Ascendant Here on...');

-- --------------------------------------------------------

--
-- Structure de la table `tracklist`
--

CREATE TABLE `tracklist` (
  `item_id` int(11) NOT NULL,
  `song_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `tracklist`
--

INSERT INTO `tracklist` (`item_id`, `song_id`) VALUES
(2, 6),
(2, 7),
(2, 8),
(2, 9),
(2, 10),
(2, 11),
(2, 12),
(2, 13),
(2, 14),
(2, 15),
(2, 16);

-- --------------------------------------------------------

--
-- Structure de la table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `user`
--

INSERT INTO `user` (`id`, `name`, `surname`, `email`, `password`) VALUES
(1, 'Guillaume', 'Verlaeken', 'gverlaeken@gmail.com', '1234'),
(2, 'jean', 'jean', 'jean@jeanmail.com', 'jean'),
(3, 'john', 'john', 'john@johnmail.com', 'john'),
(4, 'jane', 'jane', 'jane@janemail.com', 'jane'),
(5, 'walter', 'white', 'wwhite@bbmail.com', 'blue'),
(6, 'ben', 'ben', 'ben@benmail.com', 'ben');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `artist`
--
ALTER TABLE `artist`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`),
  ADD KEY `artist_id` (`artist_id`),
  ADD KEY `category_id` (`category_id`),
  ADD KEY `genre_id` (`genre_id`);

--
-- Index pour la table `item_genre`
--
ALTER TABLE `item_genre`
  ADD KEY `item_id` (`item_id`),
  ADD KEY `genre_id` (`genre_id`);

--
-- Index pour la table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `item_id` (`item_id`);

--
-- Index pour la table `song`
--
ALTER TABLE `song`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `tracklist`
--
ALTER TABLE `tracklist`
  ADD KEY `item_id` (`item_id`),
  ADD KEY `song_id` (`song_id`);

--
-- Index pour la table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `artist`
--
ALTER TABLE `artist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT pour la table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `genre`
--
ALTER TABLE `genre`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT pour la table `item`
--
ALTER TABLE `item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT pour la table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `song`
--
ALTER TABLE `song`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT pour la table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `item`
--
ALTER TABLE `item`
  ADD CONSTRAINT `item_ibfk_1` FOREIGN KEY (`artist_id`) REFERENCES `artist` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `item_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `item_ibfk_3` FOREIGN KEY (`genre_id`) REFERENCES `genre` (`id`) ON DELETE SET NULL;

--
-- Contraintes pour la table `item_genre`
--
ALTER TABLE `item_genre`
  ADD CONSTRAINT `item_genre_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `item` (`id`),
  ADD CONSTRAINT `item_genre_ibfk_2` FOREIGN KEY (`genre_id`) REFERENCES `genre` (`id`);

--
-- Contraintes pour la table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `review_ibfk_2` FOREIGN KEY (`item_id`) REFERENCES `item` (`id`);

--
-- Contraintes pour la table `tracklist`
--
ALTER TABLE `tracklist`
  ADD CONSTRAINT `tracklist_ibfk_1` FOREIGN KEY (`item_id`) REFERENCES `item` (`id`),
  ADD CONSTRAINT `tracklist_ibfk_2` FOREIGN KEY (`song_id`) REFERENCES `song` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
