-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 09 déc. 2021 à 17:19
-- Version du serveur :  10.1.38-MariaDB
-- Version de PHP :  7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `ceo`
--

-- --------------------------------------------------------

--
-- Structure de la table `billet`
--

CREATE TABLE `billet` (
  `idBillet` int(11) NOT NULL,
  `idMandataire` int(11) NOT NULL,
  `idUtilisateur` int(11) NOT NULL,
  `depart` date NOT NULL,
  `arrive` date NOT NULL,
  `destination` varchar(50) NOT NULL,
  `createdAt` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `billet`
--

INSERT INTO `billet` (`idBillet`, `idMandataire`, `idUtilisateur`, `depart`, `arrive`, `destination`, `createdAt`) VALUES
(92, 73, 19, '2021-11-01', '2021-12-01', 'FRANCE', '2021-11-29'),
(93, 74, 20, '2021-12-04', '2021-12-03', 'FRANCE', '2021-12-09'),
(94, 75, 20, '2021-12-14', '2021-12-30', 'FRANCE', '2021-12-09');

-- --------------------------------------------------------

--
-- Structure de la table `enregistrement`
--

CREATE TABLE `enregistrement` (
  `idEnregistrement` int(11) NOT NULL,
  `idUtilisateur` int(11) NOT NULL,
  `idMandataire` int(11) NOT NULL,
  `idSession` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `enregistrement`
--

INSERT INTO `enregistrement` (`idEnregistrement`, `idUtilisateur`, `idMandataire`, `idSession`) VALUES
(101, 19, 73, 10),
(102, 20, 74, 10),
(103, 20, 75, 10);

-- --------------------------------------------------------

--
-- Structure de la table `mandataire`
--

CREATE TABLE `mandataire` (
  `idMandataire` int(11) NOT NULL,
  `matricule` varchar(50) NOT NULL,
  `nomMandataire` varchar(50) NOT NULL,
  `profession` varchar(50) NOT NULL,
  `statut` varchar(50) NOT NULL,
  `dateEmission` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `mandataire`
--

INSERT INTO `mandataire` (`idMandataire`, `matricule`, `nomMandataire`, `profession`, `statut`, `dateEmission`) VALUES
(73, 'O', 'O', 'O', 'R', '2020-10-28'),
(74, 'I', 'OIU', 'SANS PROFESSION', 'R', '2020-11-09'),
(75, 'FDGFDGFDG', 'DTHFGF', 'FDGFDGFDG', 'R', '2021-12-14');

-- --------------------------------------------------------

--
-- Structure de la table `session`
--

CREATE TABLE `session` (
  `idSession` int(11) NOT NULL,
  `nomSession` varchar(50) NOT NULL,
  `createdAt` date NOT NULL,
  `limite` int(11) NOT NULL,
  `intitule` varchar(100) NOT NULL,
  `statut` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `session`
--

INSERT INTO `session` (`idSession`, `nomSession`, `createdAt`, `limite`, `intitule`, `statut`) VALUES
(10, 'session1', '2021-12-18', 4938465, 'EcoBanque', 1),
(11, 'session3', '2021-11-18', 0, '', 1),
(12, 'session2', '2021-11-17', 0, '', 1),
(23, 'session14', '2021-11-25', 0, '', 0),
(24, 'session5', '2021-11-27', 0, '', 0),
(25, 'session6', '2021-12-31', 5, 'eee', 0),
(26, 'session7', '2021-11-11', 5, 'zzz', 0);

-- --------------------------------------------------------

--
-- Structure de la table `transaction`
--

CREATE TABLE `transaction` (
  `idTransaction` int(11) NOT NULL,
  `idMandataire` int(11) NOT NULL,
  `idUtilisateur` int(11) NOT NULL,
  `montant` int(11) NOT NULL,
  `paysEmission` varchar(50) NOT NULL,
  `origineDesFonds` varchar(50) NOT NULL,
  `dateEmission` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `transaction`
--

INSERT INTO `transaction` (`idTransaction`, `idMandataire`, `idUtilisateur`, `montant`, `paysEmission`, `origineDesFonds`, `dateEmission`) VALUES
(90, 73, 19, 50000, 'O', 'Epargne', '2020-10-28'),
(91, 74, 20, 5000, 'I', 'Epargne', '2020-11-09'),
(92, 75, 20, 56535, 'FRANCE', 'Epargne', '2021-12-14');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `idUtilisateur` int(11) NOT NULL,
  `login` varchar(50) NOT NULL,
  `motDePasse` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  `createdAt` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `utilisateur`
--

INSERT INTO `utilisateur` (`idUtilisateur`, `login`, `motDePasse`, `role`, `createdAt`) VALUES
(17, 'admin', 'AAA', 'manager', '2021-11-24 09:44:49'),
(18, 'k', 'k', 'admin', '0000-00-00 00:00:00'),
(19, 'oumar', 'cisse', 'manager', '2021-11-24 10:01:44'),
(20, 'r', 'r', 'manager', '2021-11-01 00:00:00');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `billet`
--
ALTER TABLE `billet`
  ADD PRIMARY KEY (`idBillet`),
  ADD KEY `fk_billet_mandataire` (`idMandataire`);

--
-- Index pour la table `enregistrement`
--
ALTER TABLE `enregistrement`
  ADD PRIMARY KEY (`idEnregistrement`),
  ADD KEY `fk_enregistrement_mandataire` (`idMandataire`),
  ADD KEY `fk_session_enregistrement` (`idSession`);

--
-- Index pour la table `mandataire`
--
ALTER TABLE `mandataire`
  ADD PRIMARY KEY (`idMandataire`);

--
-- Index pour la table `session`
--
ALTER TABLE `session`
  ADD PRIMARY KEY (`idSession`);

--
-- Index pour la table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`idTransaction`),
  ADD KEY `fk_transaction_mandataire` (`idMandataire`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`idUtilisateur`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `billet`
--
ALTER TABLE `billet`
  MODIFY `idBillet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT pour la table `enregistrement`
--
ALTER TABLE `enregistrement`
  MODIFY `idEnregistrement` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT pour la table `mandataire`
--
ALTER TABLE `mandataire`
  MODIFY `idMandataire` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT pour la table `session`
--
ALTER TABLE `session`
  MODIFY `idSession` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT pour la table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `idTransaction` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `idUtilisateur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `billet`
--
ALTER TABLE `billet`
  ADD CONSTRAINT `fk_billet_mandataire` FOREIGN KEY (`idMandataire`) REFERENCES `mandataire` (`idMandataire`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `enregistrement`
--
ALTER TABLE `enregistrement`
  ADD CONSTRAINT `fk_enregistrement_mandataire` FOREIGN KEY (`idMandataire`) REFERENCES `mandataire` (`idMandataire`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_session_enregistrement` FOREIGN KEY (`idSession`) REFERENCES `session` (`idSession`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `fk_transaction_mandataire` FOREIGN KEY (`idMandataire`) REFERENCES `mandataire` (`idMandataire`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
