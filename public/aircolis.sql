-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Dim 08 Janvier 2017 à 21:43
-- Version du serveur :  10.1.19-MariaDB
-- Version de PHP :  5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `aircolis`
--

-- --------------------------------------------------------

--
-- Structure de la table `colis`
--

CREATE TABLE `colis` (
  `id` int(10) UNSIGNED NOT NULL,
  `nom` varchar(50) NOT NULL,
  `montant` int(11) NOT NULL,
  `poids` tinyint(3) UNSIGNED NOT NULL,
  `photo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `colis`
--

INSERT INTO `colis` (`id`, `nom`, `montant`, `poids`, `photo`) VALUES
(1, 'caisse de vin', 50, 6, '');

-- --------------------------------------------------------

--
-- Structure de la table `expediteurs`
--

CREATE TABLE `expediteurs` (
  `idUtilisateur` int(10) UNSIGNED NOT NULL,
  `civiliteContact` enum('M.','Mme','Mlle') NOT NULL,
  `prenomContact` varchar(50) NOT NULL,
  `nomContact` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `expediteurs`
--

INSERT INTO `expediteurs` (`idUtilisateur`, `civiliteContact`, `prenomContact`, `nomContact`) VALUES
(2, 'M.', 'Karim', 'Mohamed');

-- --------------------------------------------------------

--
-- Structure de la table `trajets`
--

CREATE TABLE `trajets` (
  `id` int(10) UNSIGNED NOT NULL,
  `villeDepart` varchar(3) NOT NULL,
  `villeArrivee` varchar(3) NOT NULL,
  `dateTrajet` datetime NOT NULL,
  `poidsPropose` tinyint(3) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `trajets`
--

INSERT INTO `trajets` (`id`, `villeDepart`, `villeArrivee`, `dateTrajet`, `poidsPropose`) VALUES
(1, 'cdg', 'oua', '2017-01-18 09:28:00', 10);

-- --------------------------------------------------------

--
-- Structure de la table `trajet_voyageur_colis_expediteur`
--

CREATE TABLE `trajet_voyageur_colis_expediteur` (
  `idTrajet` int(10) UNSIGNED NOT NULL,
  `idVoyageur` int(10) UNSIGNED NOT NULL,
  `idColis` int(10) UNSIGNED NOT NULL,
  `idExpediteur` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `trajet_voyageur_colis_expediteur`
--

INSERT INTO `trajet_voyageur_colis_expediteur` (`idTrajet`, `idVoyageur`, `idColis`, `idExpediteur`) VALUES
(1, 1, 1, 2);

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

CREATE TABLE `utilisateurs` (
  `id` int(10) UNSIGNED NOT NULL,
  `login` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `civilite` enum('M.','Mme','Mlle') NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `login`, `password`, `civilite`, `nom`, `prenom`, `telephone`, `email`) VALUES
(1, 'gosbou', '27061978', 'M.', 'Notta', 'Aymeric', '0630457050', 'laurent@hotmail.com'),
(2, 'zacnoh', 'zac', 'M.', 'Noha', 'Zachary', '0650324568', 'zac@gmail.com');

-- --------------------------------------------------------

--
-- Structure de la table `voyageurs`
--

CREATE TABLE `voyageurs` (
  `idUtilisateur` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Contenu de la table `voyageurs`
--

INSERT INTO `voyageurs` (`idUtilisateur`) VALUES
(1);

--
-- Index pour les tables exportées
--

--
-- Index pour la table `colis`
--
ALTER TABLE `colis`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `trajets`
--
ALTER TABLE `trajets`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `colis`
--
ALTER TABLE `colis`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `trajets`
--
ALTER TABLE `trajets`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `utilisateurs`
--
ALTER TABLE `utilisateurs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
