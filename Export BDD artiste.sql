-- --------------------------------------------------------
-- Hôte :                        127.0.0.1
-- Version du serveur:           5.7.19 - MySQL Community Server (GPL)
-- SE du serveur:                Win64
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Export de la structure de la base pour artiste
CREATE DATABASE IF NOT EXISTS `artiste` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `artiste`;

-- Export de la structure de la table artiste. artiste
CREATE TABLE IF NOT EXISTS `artiste` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Nom` varchar(50) DEFAULT NULL,
  `Prenom` varchar(50) DEFAULT NULL,
  `Age` int(11) DEFAULT NULL,
  `Groupe` varchar(50) DEFAULT NULL,
  `Agence` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Export de données de la table artiste.artiste : ~4 rows (environ)
/*!40000 ALTER TABLE `artiste` DISABLE KEYS */;
INSERT INTO `artiste` (`id`, `Nom`, `Prenom`, `Age`, `Groupe`, `Agence`) VALUES
	(1, 'Kwon', 'Eun Bi', 24, 'IZ*ONE', 'Off The Record Entertainment'),
	(2, 'Leeeeeeee', 'Tae Min', 26, 'SHINee', 'SM Entertainment'),
	(3, 'Han', 'Seung Woo', 25, 'X1', 'Swing Entertainment'),
	(4, 'Jang', 'Jung Heun', 20, 'CLC', 'Cube Entertainment');
/*!40000 ALTER TABLE `artiste` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
