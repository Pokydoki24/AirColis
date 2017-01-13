-- --------------------------------------------------------
-- Hôte :                        127.0.0.1
-- Version du serveur:           5.5.46-0ubuntu0.14.04.2 - (Ubuntu)
-- SE du serveur:                debian-linux-gnu
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Export de la structure de la table aircolis. colis
CREATE TABLE IF NOT EXISTS `colis` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nom` varchar(50) NOT NULL,
  `montant` int(11) NOT NULL,
  `poids` tinyint(3) unsigned NOT NULL,
  `photo` varchar(200) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- Export de données de la table aircolis.colis : ~3 rows (environ)
/*!40000 ALTER TABLE `colis` DISABLE KEYS */;
INSERT INTO `colis` (`id`, `nom`, `montant`, `poids`, `photo`) VALUES
	(1, 'caisse de vin', 50, 6, ''),
	(2, 'piece auto', 30, 4, ''),
	(3, 'meches', 20, 3, '');
/*!40000 ALTER TABLE `colis` ENABLE KEYS */;

-- Export de la structure de la table aircolis. expediteurs
CREATE TABLE IF NOT EXISTS `expediteurs` (
  `idUtilisateur` int(10) unsigned NOT NULL,
  `civiliteContact` enum('M.','Mme','Mlle') NOT NULL,
  `prenomContact` varchar(50) NOT NULL,
  `nomContact` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Export de données de la table aircolis.expediteurs : ~2 rows (environ)
/*!40000 ALTER TABLE `expediteurs` DISABLE KEYS */;
INSERT INTO `expediteurs` (`idUtilisateur`, `civiliteContact`, `prenomContact`, `nomContact`) VALUES
	(2, 'M.', 'Karim', 'Mohamed'),
	(6, 'M.', 'Oualid', 'Diop');
/*!40000 ALTER TABLE `expediteurs` ENABLE KEYS */;

-- Export de la structure de la table aircolis. trajets
CREATE TABLE IF NOT EXISTS `trajets` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `villeDepart` varchar(3) NOT NULL,
  `villeArrivee` varchar(3) NOT NULL,
  `dateTrajet` datetime NOT NULL,
  `poidsPropose` tinyint(3) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- Export de données de la table aircolis.trajets : ~2 rows (environ)
/*!40000 ALTER TABLE `trajets` DISABLE KEYS */;
INSERT INTO `trajets` (`id`, `villeDepart`, `villeArrivee`, `dateTrajet`, `poidsPropose`) VALUES
	(1, 'cdg', 'oua', '2017-01-18 09:28:00', 10),
	(2, 'cdg', 'dkr', '2017-01-20 14:00:57', 4);
/*!40000 ALTER TABLE `trajets` ENABLE KEYS */;

-- Export de la structure de la table aircolis. trajet_voyageur_colis_expediteur
CREATE TABLE IF NOT EXISTS `trajet_voyageur_colis_expediteur` (
  `idTrajet` int(10) unsigned NOT NULL,
  `idVoyageur` int(10) unsigned NOT NULL,
  `idColis` int(10) unsigned NOT NULL,
  `idExpediteur` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Export de données de la table aircolis.trajet_voyageur_colis_expediteur : ~2 rows (environ)
/*!40000 ALTER TABLE `trajet_voyageur_colis_expediteur` DISABLE KEYS */;
INSERT INTO `trajet_voyageur_colis_expediteur` (`idTrajet`, `idVoyageur`, `idColis`, `idExpediteur`) VALUES
	(1, 1, 1, 2),
	(2, 7, 2, 6);
/*!40000 ALTER TABLE `trajet_voyageur_colis_expediteur` ENABLE KEYS */;

-- Export de la structure de la table aircolis. utilisateurs
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `civilite` enum('M.','Mme','Mlle') NOT NULL,
  `nom` varchar(50) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `telephone` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `login` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Export de données de la table aircolis.utilisateurs : ~6 rows (environ)
/*!40000 ALTER TABLE `utilisateurs` DISABLE KEYS */;
INSERT INTO `utilisateurs` (`id`, `civilite`, `nom`, `prenom`, `telephone`, `email`, `login`, `password`) VALUES
	(1, 'M.', 'Notta', 'Aymeric', '0630457050', 'laurent@hotmail.com', 'gosbou', '27061978'),
	(2, 'M.', 'Noha', 'Zachary', '0650324568', 'zac@gmail.com', 'zacnoh', 'zac'),
	(4, 'M.', 'Martin', 'Rene', '', '', 'martin', 'rene'),
	(5, 'M.', 'Dupond', 'Rene', '0654875462', 'rene@hotmail.com', 'dupond', 'rene'),
	(6, 'Mme', 'Dupond', 'Camille', '0654213256', 'camille@hotmail.com', 'dupond', 'camille'),
	(7, 'Mlle', 'Martin', 'Lucette', '0654213258', 'lucette@hotmail.com', 'martin', 'lucette');
/*!40000 ALTER TABLE `utilisateurs` ENABLE KEYS */;

-- Export de la structure de la table aircolis. voyageurs
CREATE TABLE IF NOT EXISTS `voyageurs` (
  `idUtilisateur` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Export de données de la table aircolis.voyageurs : ~2 rows (environ)
/*!40000 ALTER TABLE `voyageurs` DISABLE KEYS */;
INSERT INTO `voyageurs` (`idUtilisateur`) VALUES
	(1),
	(7);
/*!40000 ALTER TABLE `voyageurs` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
