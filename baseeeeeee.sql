/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

CREATE DATABASE IF NOT EXISTS `bd_teatro` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci */;
USE `bd_teatro`;

CREATE TABLE IF NOT EXISTS `tb_admision` (
  `id_admision` int(10) NOT NULL AUTO_INCREMENT,
  `usuario` varchar(20) NOT NULL DEFAULT '0',
  `contrasena` varchar(20) NOT NULL DEFAULT '0',
  `estado` int(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id_admision`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `tb_admision` (`id_admision`, `usuario`, `contrasena`, `estado`) VALUES
	(1, 'kevin28@gmail.com', '2829', 1),
	(3, 'kean', '234', 1),
	(4, 'Admin', '12', 1),
	(5, 'kean', '22', 1),
	(6, 'kean', '11', 1),
	(7, 'de', '11', 1),
	(8, 'juan', '2829', 1),
	(9, 'kevin', '123', 1);

CREATE TABLE IF NOT EXISTS `tb_asientos` (
  `Id_Asientos` int(20) NOT NULL AUTO_INCREMENT,
  `Id_Salas` int(20) NOT NULL DEFAULT 0,
  `Numero_de_asientos` int(200) NOT NULL DEFAULT 0,
  `Fila` int(50) NOT NULL DEFAULT 0,
  `Estado` int(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`Id_Asientos`),
  KEY `Id_Salas` (`Id_Salas`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `tb_asientos` (`Id_Asientos`, `Id_Salas`, `Numero_de_asientos`, `Fila`, `Estado`) VALUES
	(1, 2, 150, 6, 0),
	(2, 1, 100, 433, 1),
	(3, 2, 222, 12, 1);

CREATE TABLE IF NOT EXISTS `tb_boletos` (
  `Id_boletos` int(10) NOT NULL AUTO_INCREMENT,
  `Id_funciones` int(10) NOT NULL DEFAULT 0,
  `Id_clientes` int(10) NOT NULL DEFAULT 0,
  `Id_categorias` int(10) NOT NULL DEFAULT 0,
  `Cantidad` int(20) NOT NULL DEFAULT 0,
  `estado` int(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`Id_boletos`),
  KEY `Id_funciones` (`Id_funciones`),
  KEY `Id_clientes` (`Id_clientes`),
  KEY `Id_categorias` (`Id_categorias`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `tb_boletos` (`Id_boletos`, `Id_funciones`, `Id_clientes`, `Id_categorias`, `Cantidad`, `estado`) VALUES
	(1, 1, 2, 1, 4, 1),
	(2, 1, 1, 2, 4, 1),
	(3, 1, 2, 2, 11, 0),
	(4, 1, 3, 1, 1, 0),
	(5, 2, 4, 2, 2, 0),
	(6, 3, 2, 3, 66, 1);

CREATE TABLE IF NOT EXISTS `tb_categorias` (
  `id_categorias` int(20) NOT NULL AUTO_INCREMENT,
  `tipo` varchar(30) NOT NULL DEFAULT '0',
  `Precio` decimal(2,0) NOT NULL DEFAULT 0,
  `estado` int(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`id_categorias`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `tb_categorias` (`id_categorias`, `tipo`, `Precio`, `estado`) VALUES
	(1, 'Comedia', 45, 1),
	(2, 'Drama', 35, 1),
	(3, 'Tragedia', 30, 1),
	(4, 'drama', 2, 1);

CREATE TABLE IF NOT EXISTS `tb_clientes` (
  `id_Clientes` int(10) NOT NULL AUTO_INCREMENT,
  `Id_Reservas` int(10) NOT NULL DEFAULT 0,
  `Id_usuarios` int(10) NOT NULL DEFAULT 0,
  `Estado` int(1) NOT NULL DEFAULT 1,
  `tipo` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id_Clientes`),
  KEY `Id_Reservas` (`Id_Reservas`),
  KEY `Id_usuarios` (`Id_usuarios`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `tb_clientes` (`id_Clientes`, `Id_Reservas`, `Id_usuarios`, `Estado`, `tipo`) VALUES
	(1, 1, 1, 1, 'regular'),
	(2, 2, 1, 1, 'turista'),
	(3, 3, 3, 0, 'turista'),
	(4, 4, 4, 1, ''),
	(5, 3, 1, 1, 'regular'),
	(6, 3, 3, 0, ''),
	(7, 3, 3, 0, 'regular'),
	(8, 2, 2, 1, 'turista'),
	(9, 1, 1, 1, 'turista'),
	(10, 3, 7, 1, 'regular');

CREATE TABLE IF NOT EXISTS `tb_descuento` (
  `Id_descuento` int(10) NOT NULL AUTO_INCREMENT,
  `Id_boletos` int(10) NOT NULL DEFAULT 0,
  `Porcentaje_de_descuento` varchar(30) NOT NULL DEFAULT '0',
  `Nombre` varchar(30) NOT NULL DEFAULT '0',
  `Estado` int(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`Id_descuento`),
  KEY `Id_boletos` (`Id_boletos`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `tb_descuento` (`Id_descuento`, `Id_boletos`, `Porcentaje_de_descuento`, `Nombre`, `Estado`) VALUES
	(1, 22, '225%', 'viernes loco', 1),
	(2, 1, '30%', 'Martes locos', 0),
	(3, 3, '1', 'el gato con botas', 1),
	(4, 2, '35%', 'blancanieves', 0),
	(5, 3, '54%', 'piratas del caribe', 0);

CREATE TABLE IF NOT EXISTS `tb_detalle_promociones` (
  `Id_detalle_promociones` int(10) NOT NULL AUTO_INCREMENT,
  `Id_promocion` int(10) NOT NULL DEFAULT 0,
  `Id_categorias` int(10) NOT NULL DEFAULT 0,
  `Id_descuento` int(10) NOT NULL DEFAULT 0,
  `Estado` int(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`Id_detalle_promociones`),
  KEY `Id_promocion` (`Id_promocion`),
  KEY `Id_categorias` (`Id_categorias`),
  KEY `Id_descuento` (`Id_descuento`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `tb_detalle_promociones` (`Id_detalle_promociones`, `Id_promocion`, `Id_categorias`, `Id_descuento`, `Estado`) VALUES
	(1, 2, 3, 2, 0),
	(2, 1, 3, 2, 1),
	(3, 3, 3, 3, 0),
	(4, 3, 3, 4, 1),
	(5, 2, 5, 2, 1),
	(6, 4, 4, 4, 1),
	(7, 1, 1, 2, 1),
	(8, 3, 3, 2, 0);

CREATE TABLE IF NOT EXISTS `tb_funciones` (
  `Id_funciones` int(20) NOT NULL AUTO_INCREMENT,
  `Id_obras` int(20) NOT NULL DEFAULT 0,
  `Fecha_y_Hora` datetime NOT NULL,
  `duracion` time NOT NULL DEFAULT '00:00:00',
  `Precio` decimal(30,6) NOT NULL DEFAULT 0.000000,
  `Id_sala` int(10) NOT NULL DEFAULT 0,
  `estado` int(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`Id_funciones`),
  KEY `Id_obras` (`Id_obras`),
  KEY `Id_sala` (`Id_sala`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `tb_funciones` (`Id_funciones`, `Id_obras`, `Fecha_y_Hora`, `duracion`, `Precio`, `Id_sala`, `estado`) VALUES
	(1, 1, '2024-02-14 20:30:00', '00:00:00', 30.000000, 2, 1),
	(2, 1, '2024-02-12 20:25:00', '00:00:00', 54.000000, 1, 0),
	(3, 2, '2024-02-08 10:05:00', '00:00:00', 300.000000, 3, 1),
	(4, 1, '2024-02-01 11:02:00', '00:00:12', 22.000000, 3, 1),
	(5, 1, '2024-02-01 14:55:00', '-00:00:11', 1.000000, 1, 0);

CREATE TABLE IF NOT EXISTS `tb_historial_de_acceso` (
  `Id_historial_de_acceso` int(10) NOT NULL AUTO_INCREMENT,
  `Id_usuarios` int(10) NOT NULL DEFAULT 0,
  `Fecha_de_acceso` date NOT NULL,
  `Hora_de_acceso` time(5) NOT NULL,
  `Estado` int(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`Id_historial_de_acceso`),
  KEY `Id_usuarios` (`Id_usuarios`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


CREATE TABLE IF NOT EXISTS `tb_obras` (
  `Id_obras` int(10) NOT NULL AUTO_INCREMENT,
  `Titulo` varchar(50) NOT NULL DEFAULT '0',
  `Genero` varchar(20) NOT NULL DEFAULT '0',
  `Tiempo_de_obra` time(5) NOT NULL,
  `Id_Actores` int(10) NOT NULL DEFAULT 0,
  `Estado` int(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`Id_obras`),
  KEY `Id_Actores` (`Id_Actores`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `tb_obras` (`Id_obras`, `Titulo`, `Genero`, `Tiempo_de_obra`, `Id_Actores`, `Estado`) VALUES
	(1, 'Un marido idea', 'comediaa', '14:11:00.00000', 1, 0),
	(2, 'la vella y la bestiaqq', 'romance', '16:14:00.00000', 0, 1);

CREATE TABLE IF NOT EXISTS `tb_pagos` (
  `Id_pagos` int(10) NOT NULL AUTO_INCREMENT,
  `Id_boleto` int(10) NOT NULL DEFAULT 0,
  `Monto` int(20) NOT NULL DEFAULT 0,
  `Fecha_de_pago` datetime NOT NULL,
  `Metodo_de_pago` varchar(30) NOT NULL DEFAULT '0',
  `Estado` int(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`Id_pagos`) USING BTREE,
  KEY `Id_boleto` (`Id_boleto`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;


CREATE TABLE IF NOT EXISTS `tb_promociones` (
  `Id_promociones` int(10) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(30) NOT NULL DEFAULT '0',
  `Fecha_inicio` date NOT NULL,
  `Fecha_fin` date NOT NULL,
  `Estado` int(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`Id_promociones`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `tb_promociones` (`Id_promociones`, `Nombre`, `Fecha_inicio`, `Fecha_fin`, `Estado`) VALUES
	(1, 'Domingos en el Teatro', '2024-02-10', '2024-05-05', 1),
	(2, 'kevin', '2024-02-10', '2024-03-31', 1),
	(3, 'Noche de Estreno', '2024-02-10', '2024-02-11', 0),
	(4, 'efee', '2024-02-25', '2024-02-16', 0),
	(5, 'efee', '2024-02-24', '2024-02-03', 1);

CREATE TABLE IF NOT EXISTS `tb_reservas` (
  `Id_Reservas` int(10) NOT NULL AUTO_INCREMENT,
  `numero_de_reservas` int(10) NOT NULL DEFAULT 0,
  `Id_funciones` int(10) NOT NULL DEFAULT 0,
  `Fecha_de_reserva` datetime(5) NOT NULL,
  `Estado` int(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`Id_Reservas`),
  KEY `Id_funcion` (`Id_funciones`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `tb_reservas` (`Id_Reservas`, `numero_de_reservas`, `Id_funciones`, `Fecha_de_reserva`, `Estado`) VALUES
	(1, 1, 3, '2024-02-11 12:50:00.00000', 1),
	(3, 2, 3, '2024-02-15 04:20:06.00000', 1),
	(5, 3, 1, '2024-02-02 01:07:00.00000', 0),
	(6, 0, 0, '2024-02-10 12:59:00.00000', 1);

CREATE TABLE IF NOT EXISTS `tb_salas` (
  `Id_sala` int(10) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(20) NOT NULL DEFAULT '0',
  `Capacidad` int(100) NOT NULL DEFAULT 0,
  `Tipo` varchar(30) NOT NULL DEFAULT '0',
  `Estado` int(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`Id_sala`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `tb_salas` (`Id_sala`, `Nombre`, `Capacidad`, `Tipo`, `Estado`) VALUES
	(1, 'Sala Auroraa', 50, 'Vip', 0),
	(2, 'Sala dorada', 150, 'Normal', 1),
	(3, 'Sala estrella', 15, 'Normal', 0),
	(5, 'Kevin', 12, 'vip3', 0);

CREATE TABLE IF NOT EXISTS `tb_usuarios` (
  `Id_Usuarios` int(10) NOT NULL AUTO_INCREMENT,
  `Nombre` varchar(30) NOT NULL DEFAULT '0',
  `Apellido` varchar(30) NOT NULL DEFAULT '0',
  `direccion` varchar(50) NOT NULL DEFAULT '0',
  `telefono` varchar(20) NOT NULL DEFAULT '0',
  `Contrasena` varchar(20) NOT NULL DEFAULT '0',
  `Nacionalidad` varchar(40) NOT NULL DEFAULT '0',
  `Genero` varchar(2) NOT NULL DEFAULT '2',
  `Rol` varchar(30) NOT NULL DEFAULT '0',
  `Estado` int(1) NOT NULL DEFAULT 1,
  PRIMARY KEY (`Id_Usuarios`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `tb_usuarios` (`Id_Usuarios`, `Nombre`, `Apellido`, `direccion`, `telefono`, `Contrasena`, `Nacionalidad`, `Genero`, `Rol`, `Estado`) VALUES
	(1, 'Adrian', 'Mero', 'Nueva prosperina ', '0988076206', '12345', 'Ecuaroriano', 'M', 'Usuario', 0),
	(2, '', '', '', '', '', '', '', '', 0),
	(3, 'Adrian', 'Sobenis', 'nueva prosperina', '0988076206', '123456', 'Ecuatoriano', 'M', 'Administrador', 0),
	(4, 'a', '0', '0', '0', '0', '0', 'M', '0', 0),
	(5, '', '0', '0', '0', '0', '0', '2', '0', 0),
	(6, '', '0', '0', '0', '0', '0', '2', '0', 0),
	(7, 'Anthony', '0', '0', '0', '0', '0', 'F', 'Usuario', 0),
	(8, 'Anthony', '0', '0', '0', '0', '0', '2', '0', 0),
	(9, 'er', '0', '0', '0', '0', '0', '2', '0', 0),
	(10, '', '0', '0', '0', '0', '0', '2', '0', 0),
	(11, '', '0', '0', '0', '0', '0', '2', '0', 0),
	(12, 'Anthony', 'Moran', 'guasmor', '0988061234', '02345', 'colombiano', 'M', 'Usuario', 0),
	(13, '', '', '0', '0', '0', '0', '2', '0', 0),
	(14, '', '', '0', '0', '0', '0', '2', '0', 0),
	(15, 'Adriann', 'Mero', 'nueva prosperina', '0988076206', '12345', 'Argentina', 'M', 'Usuario', 0),
	(16, 'adrianm', 'merro', 'tftt', '000988776', '456', 'Ecuatoriana', 'M', 'Usuario', 0),
	(17, 'Kevin', 'kevin', 'azoguez', '09927118293', '122', 'Colombia', 'M', 'Usuario', 1),
	(18, 'Kevin', 'kevin', 'azoguez', '0992711829', '34', 'Argentina', 'M', 'Usuario', 0),
	(19, 'Kevin', 'kevin', 'azoguez', '0992711829', '12', 'Argentina', 'M', 'Usuario', 1);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
