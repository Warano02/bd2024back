-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 26 déc. 2024 à 19:03
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
-- Base de données : `projet`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `un_id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `pp` varchar(255) NOT NULL,
  `pwd` text NOT NULL,
  `is_o` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `un_id`, `email`, `nom`, `pp`, `pwd`, `is_o`) VALUES
(1, 0, 'carineteoi@gmail.com', 'Warano', 'admin.pp', '$2y$10$i37rc1JwDjQI5SXXyclAiOhymStUoJAcgXnuDSgyI2KdJ.snSIjGC', 0);

-- --------------------------------------------------------

--
-- Structure de la table `his`
--

CREATE TABLE `his` (
  `id` int(11) NOT NULL,
  `mat` varchar(255) NOT NULL,
  `date` varchar(200) NOT NULL,
  `app` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='Hstorique de connexion';

-- --------------------------------------------------------

--
-- Structure de la table `requete`
--

CREATE TABLE `requete` (
  `id` int(11) NOT NULL,
  `un_id` int(11) NOT NULL,
  `code_ue` varchar(55) NOT NULL,
  `objet` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `date` varchar(255) NOT NULL,
  `statut` varchar(10) NOT NULL DEFAULT 'e',
  `msg` text NOT NULL,
  `mat` varchar(11) NOT NULL,
  `ans` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `requete`
--

INSERT INTO `requete` (`id`, `un_id`, `code_ue`, `objet`, `text`, `date`, `statut`, `msg`, `mat`, `ans`) VALUES
(21, 254726753, 'fjbfd', 'Admission au rattrapage', 'sduhfhusfdnjsdfsknjdnjjsosp', '4/11/2024', 'e', '', '23A816FS', ''),
(25, 474582317, '225inf', 'Demande de transfert', 'je suis heureux de faire ma requete \n', '26/12/2024', 'r', 'monsieur, va te faire foudre', '23A816FS', '26/12/2024'),
(23, 1097571371, 'fjbfd', 'Demande de transfert', 'je souhai\nhho', '4/11/2024', 't', 'opopojpjodg', '23A816FS', '4/11/2024'),
(24, 1423206574, 'fjbfd', 'Suspension de matricule', 'iiosfjoif fjgj epoppjg', '4/11/2024', 't', 'hhzzeb fjbhg v  gjk   b jdfnfnbnodhoierjhi', '23A816FS', '26/12/2024'),
(20, 1556288394, 'fjbfd', 'Admission au rattrapage', 'sdfnsjs fskjf sfsj hdf sbsdfn sbd hsd hfhooiqds hjb fjfffffffffff kl sdflklk frmjelknrakrehjioerjfglk  \n', '4/11/2024', 'e', '', '23A816FS', ''),
(22, 1686999900, 'fjbfd', 'Demande de transfert', 'je souhai\n', '4/11/2024', 't', 'uyfuhhuhujghhgguigui l nhjvj jbj bnhj j j jhhj hj uivjgui\n\n', '23A816FS', '4/11/2024');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `mat` varchar(255) NOT NULL,
  `niv` int(3) NOT NULL,
  `fil` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pwd` text NOT NULL,
  `code` varchar(255) NOT NULL,
  `pp` text NOT NULL,
  `es` tinyint(1) NOT NULL,
  `nom` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=big5 COLLATE=big5_bin COMMENT='Cette table qui va contenir les informations des utilisateur';

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `mat`, `niv`, `fil`, `email`, `pwd`, `code`, `pp`, `es`, `nom`) VALUES
(14, '19A305FS', 4, 'MATHEMATIQUE', 'tchoupsiabaigaemile@gmail.com', '$2y$10$a7smwnkdmEMP34HW64dGv.W0r.h0YjRTBXbdCa21cmbiWG5Mb1yXK', '', 'admin.png', 0, 'TCHOUPSIA BAIGA'),
(12, '23A099FS', 2, 'INF', 'hisseinousman35@gmail.com', '$2y$10$8UEFxpX.7ycmHKTGtbnLHOxzN3ipcwFyAEC8CvKTxxA2YnC8N7KIG', '', 'admin.png', 0, 'Kazma Ousman'),
(8, '23A552FS', 2, 'INF?RMATIQUE', 'carineteoi@gmail.com', '$2y$10$i37rc1JwDjQI5SXXyclAiOhymStUoJAcgXnuDSgyI2KdJ.snSIjGC', '', 'admin.png', 0, 'samuel precieuix ernest  ivora moukea'),
(6, '23A556FS', 1, 'P', 'carineteoi@gmail.com', '$2y$10$gx7uRpFZsnPUlnjriwokIOeAY08t.yP8SoJHhLZN2hnrcSjT7smq6', '', 'admin.png', 0, 'ze_uy'),
(10, '23A557FS', 2, 'INF', 'carineteoi@gmail.com', '$2y$10$TKhwl4WYo5NTomKSdYRh/OroHDESXt/AKDirRJfLHjq08OwFizEqq', '', 'admin.png', 0, 'John Doe'),
(15, '23A816FS', 2, 'iNFORMATIQUE', 'carineteoi@gmail.com', '$2y$10$QY3FzuRNYc80rTgXwD2TXu.ajrKz9Tox1D.fdkczLgugaiDBl3B9O', '', 'https://i.ibb.co/k40YVTZ/b59648874c9e.jpg', 0, 'Warano'),
(13, '23B276FS', 2, 'inf', 'soudaysabbo304@gmail.com', '$2y$10$tRg3QM6IZpjpnlisV9zBE.cFvqgUl5/z.dryW6Z/mW2/lJJa5ZUXa', '', 'admin.png', 0, 'Soudays Abbo'),
(7, '23b120FS', 2, 'INF?RMATIQUE', 'samuelernestivoramukeba@gmail.com', '$2y$10$ayaVZWCz.IrBqWuwW7iBqunjGhO53rKsqAC9LegpbxAjuOopQpg7e', '', 'https://ibb.co/gg8mt64', 0, 'samuel precieuix ernest  ivora moukea'),
(11, '23l222FS', 2, 'inf', 'carineteoi@gmail.com', '$2y$10$wHDp//9SZQZb6NcvEnvsTeiQn3jQLv54Y/daWmps9.weQnUDhDr3O', '', 'admin.png', 0, 'John Doe');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`un_id`),
  ADD UNIQUE KEY `un` (`id`),
  ADD KEY `un_id` (`un_id`,`id`);

--
-- Index pour la table `his`
--
ALTER TABLE `his`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `requete`
--
ALTER TABLE `requete`
  ADD PRIMARY KEY (`un_id`),
  ADD KEY `index` (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`mat`),
  ADD KEY `index` (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `his`
--
ALTER TABLE `his`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `requete`
--
ALTER TABLE `requete`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
