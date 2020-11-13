-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : mar. 10 nov. 2020 à 16:26
-- Version du serveur :  10.4.13-MariaDB
-- Version de PHP : 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `catnews`
--

-- --------------------------------------------------------

--
-- Structure de la table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `body`, `created_at`) VALUES
(14, 1, 'My kitten', 'My kitten comes from a shelter and is so sweet', '2020-11-06 16:22:09'),
(15, 3, 'Nice', 'It&#39; s movely to take Cat&#39;s from shelters. To many off them need attention and love and every cat has the right to have a good family', '2020-11-06 16:24:19'),
(16, 4, 'Always go to the vet', 'If we really love our pet&#39;s we take them to the vet like we going to thr dokter.\r\nHealth is important', '2020-11-06 16:25:55'),
(17, 3, 'I love this aricle', 'Always love your cat&#39;s', '2020-11-10 11:10:17');

-- --------------------------------------------------------

--
-- Structure de la table `pwd_Resset`
--

CREATE TABLE `pwd_Resset` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `pwd_Resset`
--

INSERT INTO `pwd_Resset` (`id`, `email`) VALUES
(3, 'julie@fee.com'),
(4, 'lala@lalalala.com'),
(5, 'julie@fee.com'),
(6, 'fee.33m@gmail.com'),
(7, 'lala@lalalala.com'),
(8, 'julie@fee.com'),
(9, 'lala@lalalala.com');

-- --------------------------------------------------------

--
-- Structure de la table `resetPasswords`
--

CREATE TABLE `resetPasswords` (
  `id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `created_at`) VALUES
(1, 'Julie', 'julie@fee.com', '$2y$10$ruLL9A5b/eBjAPvWPHuqpeZQ7Ds3pY4PgxIokkAvO0hkVjhEDHvli', '2020-10-26 16:38:54'),
(2, 'mel', 'mel@mel.com', '$2y$10$YjQvlNCupNEMgRYXNcjpKuAeI8i/0ulo95/Nl0fP84rw4iQATFArC', '2020-10-29 16:24:59'),
(3, 'lala', 'lala@lalalala.com', '$2y$10$FDsVCYdwkMLT4EbOGfXJ4e3W2psEZzZJE0WUShOhTaUti9cVqPRi.', '2020-11-02 14:32:13'),
(4, 'mel', 'fee.33m@gmail.com', '$2y$10$HRgCdbMSl.WbDLQVKL.fSOkKTVO/cx3kF5rxu2WZIZQ34Rea.uZMi', '2020-11-03 16:42:44');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `pwd_Resset`
--
ALTER TABLE `pwd_Resset`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `resetPasswords`
--
ALTER TABLE `resetPasswords`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT pour la table `pwd_Resset`
--
ALTER TABLE `pwd_Resset`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `resetPasswords`
--
ALTER TABLE `resetPasswords`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
