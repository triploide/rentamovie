-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         5.6.17 - MySQL Community Server (GPL)
-- SO del servidor:              Win64
-- HeidiSQL Versión:             9.3.0.4984
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Volcando estructura de base de datos para rentamovie
CREATE DATABASE IF NOT EXISTS `rentamovie` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `rentamovie`;


-- Volcando estructura para tabla rentamovie.generos
CREATE TABLE IF NOT EXISTS `generos` (
  `id` tinyint(2) unsigned NOT NULL AUTO_INCREMENT,
  `value` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla rentamovie.generos: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `generos` DISABLE KEYS */;
INSERT INTO `generos` (`id`, `value`) VALUES
	(1, 'Acción'),
	(2, 'Ciencia Ficción'),
	(3, 'Comedia');
/*!40000 ALTER TABLE `generos` ENABLE KEYS */;


-- Volcando estructura para tabla rentamovie.peliculas
CREATE TABLE IF NOT EXISTS `peliculas` (
  `id` smallint(5) unsigned NOT NULL AUTO_INCREMENT,
  `titulo` varchar(127) DEFAULT NULL,
  `estreno` date DEFAULT NULL,
  `genero_id` tinyint(2) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `genero_id` (`genero_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla rentamovie.peliculas: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `peliculas` DISABLE KEYS */;
INSERT INTO `peliculas` (`id`, `titulo`, `estreno`, `genero_id`) VALUES
	(1, 'Nueva PelÃ­cula', '2017-06-09', 2),
	(5, 'Avatar', '2017-06-07', 2);
/*!40000 ALTER TABLE `peliculas` ENABLE KEYS */;


-- Volcando estructura para tabla rentamovie.usuarios
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(80) DEFAULT NULL,
  `email` varchar(80) DEFAULT NULL,
  `password` varchar(120) DEFAULT NULL,
  `edad` tinyint(3) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- Volcando datos para la tabla rentamovie.usuarios: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `usuarios` DISABLE KEYS */;
INSERT INTO `usuarios` (`id`, `nombre`, `email`, `password`, `edad`) VALUES
	(1, 'Anton Lubchenko', 'alubchenko@mail.com', '$2y$10$Ufloa7oJXTDGya9Jd.GfJeBavrfbSsIXtZqNPW15bNoruSb/x4Swi', 24),
	(2, 'Lurleen Lumpkin', 'capitanhomero@mail.com', '$2y$10$OjxyuiNklYsXSTUxaW0aWe3LDDdN5Ei4cQT.Z30Jtdr3KkU8Ok22u', 26),
	(3, 'Ruth Polines', 'rpoline@mail.com', '$2y$10$nVnIK1L8BnbE4vVOTvfD7eW4LeEKeL8MXrJFCoc4kFcboc3QDcIWC', 30);
/*!40000 ALTER TABLE `usuarios` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
