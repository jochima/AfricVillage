-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 25 nov. 2021 à 23:45
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
(85, 66, 1, '2021-05-22', '2021-06-22', 'Italy', '2021-11-16'),
(86, 67, 2, '2021-05-22', '2021-06-22', 'Italy', '2021-11-16'),
(87, 68, 2, '2021-11-14', '2021-11-12', 'FRANCE', '2021-11-23');

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
(94, 1, 66, 10),
(95, 2, 67, 10),
(96, 2, 68, 10);

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
(66, '558962', 'KAMEN', 'etudiant', 'RN', '2021-07-22'),
(67, '5558962', 'KAMEN', 'etudiant', 'RN', '2021-07-22'),
(68, 'FFFF', 'FFF', 'FFFF', 'R', '2021-11-10');

-- --------------------------------------------------------

--
-- Structure de la table `session`
--

CREATE TABLE `session` (
  `idSession` int(11) NOT NULL,
  `nomSession` varchar(50) NOT NULL,
  `createdAt` date NOT NULL,
  `limite` int(11) NOT NULL,
  `intitule` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `session`
--

INSERT INTO `session` (`idSession`, `nomSession`, `createdAt`, `limite`, `intitule`) VALUES
(10, 'session1', '2021-12-18', 0, 'EcoBanque'),
(11, 'session3', '2021-11-18', 0, ''),
(12, 'session2', '2021-11-17', 0, ''),
(23, 'session14', '2021-11-25', 0, ''),
(24, 'session5', '2021-11-27', 0, ''),
(25, 'session6', '2021-12-31', 5, 'eee'),
(26, 'session7', '2021-11-11', 5, 'zzz');

-- --------------------------------------------------------

--
-- Structure de la table `transaction`
--

CREATE TABLE `transaction` (
  `idTransaction` int(11) NOT NULL,
  `idMandataire` int(11) NOT NULL,
  `idUtilisateur` int(11) NOT NULL,
  `paysEmission` varchar(50) NOT NULL,
  `origineDesFonds` varchar(50) NOT NULL,
  `dateEmission` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `transaction`
--

INSERT INTO `transaction` (`idTransaction`, `idMandataire`, `idUtilisateur`, `paysEmission`, `origineDesFonds`, `dateEmission`) VALUES
(83, 66, 1, 'belgique', 'epargne', '2021-07-22'),
(84, 67, 2, 'belgique', 'epargne', '2021-07-22'),
(85, 68, 2, 'FFFF', 'Epargne', '2021-11-10');

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
(18, 'kingni', 'boris', 'admin', '0000-00-00 00:00:00'),
(19, 'oumar', 'cisse', 'manager', '2021-11-24 10:01:44'),
(20, 'r', 'r', 'admin', '2021-11-01 00:00:00');

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
  MODIFY `idBillet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT pour la table `enregistrement`
--
ALTER TABLE `enregistrement`
  MODIFY `idEnregistrement` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT pour la table `mandataire`
--
ALTER TABLE `mandataire`
  MODIFY `idMandataire` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT pour la table `session`
--
ALTER TABLE `session`
  MODIFY `idSession` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT pour la table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `idTransaction` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

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
