-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  lun. 06 mai 2019 à 13:58
-- Version du serveur :  10.1.36-MariaDB
-- Version de PHP :  5.6.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `portfolio`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin_user`
--

CREATE TABLE `admin_user` (
  `id_admin` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `job` varchar(50) NOT NULL,
  `age` int(11) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `adress` varchar(250) DEFAULT NULL,
  `ville` varchar(30) DEFAULT NULL,
  `ecole` varchar(30) DEFAULT NULL,
  `description` varchar(350) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `admin_user`
--

INSERT INTO `admin_user` (`id_admin`, `nom`, `prenom`, `job`, `age`, `email`, `adress`, `ville`, `ecole`, `description`, `phone`) VALUES
(1, 'OUHNA', 'Abderrahmane', 'full stack developer', 30, 'abderrahmane.ouhna@gmail.com', '356 AV DAKHLA JAMILA 05 C D CASA MAROC', 'casablanca', 'YOUCODE', 'Abderrahmane OUHNA, i am 20 years old, i live in casablanca, i have a bachelor degree in 2016 mathematical science A, and i have a specialized technician diploma in computer development at the specialized institute of applied technology ntic sidi maarouf casablanca, with certificates of programming languages.', '+212 677-87-38-19');

-- --------------------------------------------------------

--
-- Structure de la table `categorie`
--

CREATE TABLE `categorie` (
  `id_cat` int(11) NOT NULL,
  `labille` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categorie`
--

INSERT INTO `categorie` (`id_cat`, `labille`) VALUES
(1, 'web-sites'),
(2, 'mobile apps'),
(3, 'landing-pages');

-- --------------------------------------------------------

--
-- Structure de la table `contact`
--

CREATE TABLE `contact` (
  `id_contact` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message_send` varchar(150) DEFAULT NULL,
  `date_curr` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `contact`
--

INSERT INTO `contact` (`id_contact`, `nom`, `email`, `message_send`, `date_curr`) VALUES
(9, 'abderrahmane ouhna', 'dsdssne.ouhna@gmail.com', 'Message 19', '2019-05-03 01:31:24pm');

-- --------------------------------------------------------

--
-- Structure de la table `detailprojet`
--

CREATE TABLE `detailprojet` (
  `id_detail` int(11) NOT NULL,
  `context` varchar(100) DEFAULT NULL,
  `id_work` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `detailprojet`
--

INSERT INTO `detailprojet` (`id_detail`, `context`, `id_work`) VALUES
(2, 'Economiser de salaire', 2),
(3, 'Paiement QRCode', 2),
(4, 'Localisation des banques', 2),
(5, 'Réservation', 2);

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `username` varchar(25) DEFAULT NULL,
  `psw` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id_user`, `username`, `psw`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Structure de la table `usingstack`
--

CREATE TABLE `usingstack` (
  `id_stack` int(11) NOT NULL,
  `context` varchar(50) DEFAULT NULL,
  `id_work` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `usingstack`
--

INSERT INTO `usingstack` (`id_stack`, `context`, `id_work`) VALUES
(2, 'html5', 2),
(3, 'css3', 2),
(4, 'JavaScript', 2),
(5, 'TypeScript', 2),
(6, 'angular 4', 2),
(7, 'Ionic 3', 2),
(8, 'html5', 3),
(9, 'css3', 3),
(10, 'JavaScript', 3),
(11, 'IONIC 3', 3),
(12, 'angular 4', 3),
(13, 'raspberry pi 3', 3),
(14, 'html5', 5),
(15, 'css3', 5),
(16, 'JavaScript', 5),
(17, 'IONIC 3', 5),
(18, 'angular 4', 5),
(19, 'Java Desktop', 4),
(20, 'Client server', 4),
(21, 'SGBD (oracle/MySql)', 4),
(22, 'UML/Merise', 4),
(23, 'Java Mobile (Android Studio)', 6),
(24, 'FireBase', 6),
(25, 'kotlin', 6),
(26, 'html5', 7),
(27, 'css3', 7),
(28, 'JavaScript', 7),
(29, 'bootstrap 4', 7),
(30, 'jquery', 7);

-- --------------------------------------------------------

--
-- Structure de la table `works`
--

CREATE TABLE `works` (
  `id_work` int(11) NOT NULL,
  `name` varchar(25) DEFAULT NULL,
  `description` varchar(350) DEFAULT NULL,
  `id_cat` int(11) DEFAULT NULL,
  `src_image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `works`
--

INSERT INTO `works` (`id_work`, `name`, `description`, `id_cat`, `src_image`) VALUES
(2, 'EPOCKETS Capgemini', 'EPOCKETS est une application qui permet au utilisateur de planifier leur budget mensuel en fonction de leurs besoins personnels, ca permet au clients de mieux gérer leur argent ainsi que le contrôle et le suivi de leur dépenses mensuelles, et effecuer des paiement avec QRcode sans utiliser la carte banquaire.', 2, 'ProjetPrinc.png'),
(3, 'You-ZH', 'The project is a box with raspberry pi 3 that allows to manage and organize the medication times for Alzheimer\'s patients, and a mobile application owned by the person who always takes care of him, then a bracelet with a GPS controlled map and manage through the mobile app, to track the patient, and make sure he is not lost.', 2, 'projectOne.png'),
(4, 'Human Resource Management', '...........................................................................................\r\n\r\n', 3, 'project4.png'),
(5, 'Blood Donation', 'In Morocco, there are many accidents there is a lot of lack of blood and I was a friend in this drama that needs blood a quick way, we found a lack in storage of blood banks, So the project an application of commonality for ease blood donation and for hospitals to manage their management of blood donation.', 2, 'projectTwo.png'),
(6, 'Find Your Phone', '.................................................................................................................\r\n\r\n', 2, 'projectThri.png'),
(7, 'Website Youcode', '.................................................................................................................\r\n\r\n', 1, 'adult-computer-developer.png');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin_user`
--
ALTER TABLE `admin_user`
  ADD PRIMARY KEY (`id_admin`);

--
-- Index pour la table `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id_cat`);

--
-- Index pour la table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id_contact`);

--
-- Index pour la table `detailprojet`
--
ALTER TABLE `detailprojet`
  ADD PRIMARY KEY (`id_detail`),
  ADD KEY `fk_DetailP_Work` (`id_work`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- Index pour la table `usingstack`
--
ALTER TABLE `usingstack`
  ADD PRIMARY KEY (`id_stack`),
  ADD KEY `fk_UsingS` (`id_work`);

--
-- Index pour la table `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`id_work`),
  ADD KEY `fk_Work_Cat` (`id_cat`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin_user`
--
ALTER TABLE `admin_user`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id_cat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `contact`
--
ALTER TABLE `contact`
  MODIFY `id_contact` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `detailprojet`
--
ALTER TABLE `detailprojet`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `usingstack`
--
ALTER TABLE `usingstack`
  MODIFY `id_stack` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT pour la table `works`
--
ALTER TABLE `works`
  MODIFY `id_work` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `detailprojet`
--
ALTER TABLE `detailprojet`
  ADD CONSTRAINT `fk_DetailP_Work` FOREIGN KEY (`id_work`) REFERENCES `works` (`id_work`) ON DELETE CASCADE;

--
-- Contraintes pour la table `usingstack`
--
ALTER TABLE `usingstack`
  ADD CONSTRAINT `fk_UsingS` FOREIGN KEY (`id_work`) REFERENCES `works` (`id_work`) ON DELETE CASCADE;

--
-- Contraintes pour la table `works`
--
ALTER TABLE `works`
  ADD CONSTRAINT `fk_Work_Cat` FOREIGN KEY (`id_cat`) REFERENCES `categorie` (`id_cat`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
