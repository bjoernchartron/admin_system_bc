-- --------------------------------------------------------
-- Host:                         192.168.99.100
-- Server Version:               10.3.6-MariaDB-1:10.3.6+maria~jessie - mariadb.org binary distribution
-- Server Betriebssystem:        debian-linux-gnu
-- HeidiSQL Version:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Exportiere Struktur von Tabelle db.category
CREATE TABLE IF NOT EXISTS `category` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) CHARACTER SET utf8 DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- Exportiere Daten aus Tabelle db.category: ~4 rows (ungefähr)
/*!40000 ALTER TABLE `category` DISABLE KEYS */;
INSERT INTO `category` (`id`, `name`) VALUES
	(1, 'Design'),
	(2, 'Mode'),
	(3, 'Tourismus'),
	(4, 'Gastronomie'),
	(5, 'Chemie');
/*!40000 ALTER TABLE `category` ENABLE KEYS */;

-- Exportiere Struktur von Tabelle db.name
CREATE TABLE IF NOT EXISTS `name` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) CHARACTER SET utf8 DEFAULT NULL,
  `rechtsform` varchar(20) CHARACTER SET utf8 DEFAULT NULL,
  `unterzeile` varchar(60) CHARACTER SET utf8 DEFAULT NULL,
  `kurztext` varchar(60) CHARACTER SET utf8 DEFAULT NULL,
  `profil` text CHARACTER SET utf8 DEFAULT NULL,
  `status` tinyint(4) NOT NULL,
  `kategorie` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

-- Exportiere Daten aus Tabelle db.name: ~2 rows (ungefähr)
/*!40000 ALTER TABLE `name` DISABLE KEYS */;
INSERT INTO `name` (`id`, `name`, `rechtsform`, `unterzeile`, `kurztext`, `profil`, `status`, `kategorie`) VALUES
	(1, 'BASF', 'GmbH', 'The Chemical Company', 'Chemie-Konzern und Global Player', 'BASF ist der nach Umsatz und Marktkapitalisierung derzeit weltweit größte Chemiekonzern', 1, 5),
	(3, 'BAC Designs', 'Einzelunternehmen', 'The Design Agency', 'größter Local Player in Berlin', '...', 1, 1),
	(4, 'An einem Sonntag im August', 'Einzelunternehmen', 'Caffee/ Bar', '...', '...', 1, 4);
/*!40000 ALTER TABLE `name` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
