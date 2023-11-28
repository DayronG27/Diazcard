-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         8.0.30 - MySQL Community Server - GPL
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para diazcard
DROP DATABASE IF EXISTS `diazcard`;
CREATE DATABASE IF NOT EXISTS `diazcard` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `diazcard`;

-- Volcando estructura para tabla diazcard.colores
DROP TABLE IF EXISTS `colores`;
CREATE TABLE IF NOT EXISTS `colores` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(50) NOT NULL,
  `descripcion` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla diazcard.colores: ~0 rows (aproximadamente)
DELETE FROM `colores`;

-- Volcando estructura para tabla diazcard.estados
DROP TABLE IF EXISTS `estados`;
CREATE TABLE IF NOT EXISTS `estados` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `documento` varchar(50) DEFAULT NULL,
  `estado` bigint DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla diazcard.estados: ~0 rows (aproximadamente)
DELETE FROM `estados`;

-- Volcando estructura para tabla diazcard.marcas
DROP TABLE IF EXISTS `marcas`;
CREATE TABLE IF NOT EXISTS `marcas` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla diazcard.marcas: ~0 rows (aproximadamente)
DELETE FROM `marcas`;

-- Volcando estructura para tabla diazcard.materiales
DROP TABLE IF EXISTS `materiales`;
CREATE TABLE IF NOT EXISTS `materiales` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla diazcard.materiales: ~0 rows (aproximadamente)
DELETE FROM `materiales`;

-- Volcando estructura para tabla diazcard.pedidos
DROP TABLE IF EXISTS `pedidos`;
CREATE TABLE IF NOT EXISTS `pedidos` (
  `id` bigint unsigned NOT NULL,
  `usuarios` bigint unsigned NOT NULL,
  `vehiculos` bigint unsigned NOT NULL,
  `materiales` bigint unsigned NOT NULL,
  `colores` bigint unsigned NOT NULL,
  `Fecha pedido` timestamp NOT NULL,
  `estados` bigint unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Fk_materiales_idx` (`materiales`) USING BTREE,
  KEY `fk:colores_idx` (`colores`) USING BTREE,
  KEY `fk_persona_idx` (`usuarios`) USING BTREE,
  KEY `fk_Vehiculo_idx` (`vehiculos`) USING BTREE,
  KEY `FK_pedido_estado_id_idx` (`estados`) USING BTREE,
  CONSTRAINT `fk:colores` FOREIGN KEY (`colores`) REFERENCES `colores` (`id`),
  CONSTRAINT `Fk_materiales` FOREIGN KEY (`materiales`) REFERENCES `materiales` (`id`),
  CONSTRAINT `FK_pedido_estado_id` FOREIGN KEY (`estados`) REFERENCES `estados` (`id`),
  CONSTRAINT `fk_personas` FOREIGN KEY (`usuarios`) REFERENCES `usuarios` (`id`),
  CONSTRAINT `fk_Vehiculos` FOREIGN KEY (`vehiculos`) REFERENCES `vehiculos` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla diazcard.pedidos: ~0 rows (aproximadamente)
DELETE FROM `pedidos`;

-- Volcando estructura para tabla diazcard.referencias
DROP TABLE IF EXISTS `referencias`;
CREATE TABLE IF NOT EXISTS `referencias` (
  `id` bigint unsigned NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `descripcion` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla diazcard.referencias: ~0 rows (aproximadamente)
DELETE FROM `referencias`;

-- Volcando estructura para tabla diazcard.tipodocumentos
DROP TABLE IF EXISTS `tipodocumentos`;
CREATE TABLE IF NOT EXISTS `tipodocumentos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nombre_documento` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `numero_documento` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla diazcard.tipodocumentos: ~0 rows (aproximadamente)
DELETE FROM `tipodocumentos`;

-- Volcando estructura para tabla diazcard.usuarios
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tipodocumento` bigint NOT NULL,
  `documento` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `celular` varchar(10) NOT NULL,
  `correo` varchar(45) NOT NULL,
  `fecha_registro` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `num_documento_UNIQUE` (`documento`) USING BTREE,
  KEY `FK_personas_tdocs_id_idx` (`tipodocumento`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=38 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla diazcard.usuarios: ~4 rows (aproximadamente)
DELETE FROM `usuarios`;
INSERT INTO `usuarios` (`id`, `tipodocumento`, `documento`, `nombre`, `celular`, `correo`, `fecha_registro`) VALUES
	(28, 1, '1231231231', 'Paola', '232323', 'paola@hotmail.com', '2023-10-18 20:40:32'),
	(32, 2, '234234324', 'Juan lopez', '234234', 'josee@jhsjaskd.com', NULL),
	(34, 2, '0987977', 'juan jose', '090909', 'josee9@jhsjaskd.com', NULL),
	(36, 3, '7675858', 'PEPITA', '897458375', 'davidA@gmail.com', '2023-11-28 01:55:47');

-- Volcando estructura para tabla diazcard.vehiculos
DROP TABLE IF EXISTS `vehiculos`;
CREATE TABLE IF NOT EXISTS `vehiculos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `marca` bigint unsigned NOT NULL,
  `modelo` int NOT NULL,
  `referencias` bigint unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_vehiculo_marca_id_idx` (`marca`) USING BTREE,
  KEY `FK_vehiculo_linea_id_idx` (`referencias`) USING BTREE,
  CONSTRAINT `FK_vehiculo_linea_id` FOREIGN KEY (`referencias`) REFERENCES `referencias` (`id`),
  CONSTRAINT `FK_vehiculo_marca_id` FOREIGN KEY (`marca`) REFERENCES `marcas` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Volcando datos para la tabla diazcard.vehiculos: ~0 rows (aproximadamente)
DELETE FROM `vehiculos`;

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
