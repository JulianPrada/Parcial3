-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.6.17 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             11.2.0.6213
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para prog3_parcial
CREATE DATABASE IF NOT EXISTS `prog3_parcial` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci */;
USE `prog3_parcial`;

-- Volcando estructura para tabla prog3_parcial.paises
CREATE TABLE IF NOT EXISTS `paises` (
  `codigo_dane` char(50) COLLATE utf8_spanish_ci NOT NULL DEFAULT '',
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `tipo_gobierno` varchar(250) COLLATE utf8_spanish_ci NOT NULL DEFAULT '',
  `num_poblacio` int(11) NOT NULL DEFAULT '0',
  `moneda` varchar(250) COLLATE utf8_spanish_ci NOT NULL DEFAULT '0',
  `num_departamentos` int(11) NOT NULL DEFAULT '0',
  `sector_economico` varchar(250) COLLATE utf8_spanish_ci NOT NULL DEFAULT '0',
  PRIMARY KEY (`codigo_dane`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- La exportación de datos fue deseleccionada.

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
