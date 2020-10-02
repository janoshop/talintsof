-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-09-2020 a las 04:17:37
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `baselogin`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientenuevo`
--

CREATE TABLE `clientenuevo` (
  `rut` int(12) NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `apellido` varchar(20) NOT NULL,
  `direccion` varchar(30) NOT NULL,
  `email` varchar(20) NOT NULL,
  `celular` int(11) NOT NULL,
  `nombremas` varchar(20) NOT NULL,
  `tipomas` varchar(20) NOT NULL,
  `especiemas` varchar(20) NOT NULL,
  `razamas` varchar(20) NOT NULL,
  `numerochipmas` int(20) NOT NULL,
  `edadmas` int(3) NOT NULL,
  `colormas` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `clientenuevo`
--

INSERT INTO `clientenuevo` (`rut`, `nombre`, `apellido`, `direccion`, `email`, `celular`, `nombremas`, `tipomas`, `especiemas`, `razamas`, `numerochipmas`, `edadmas`, `colormas`) VALUES
(0, 'aaa', 'eee', 'iii', 'ooo', 111, 'uuu', 'aaa', 'eee', 'iii', 222, 333, 'ooo'),
(99, 'oo', 'oo', 'oo', 'oo', 99, 'oo', 'oo', 'oo', 'oo', 99, 99, 'oo'),
(223334445, 'PR', 'AP', 'SA', 'EN', 55556666, 'DE', 'MA', 'AC', 'AU', 123123, 3, 'PO');

--
-- Disparadores `clientenuevo`
--
DELIMITER $$
CREATE TRIGGER `BITA_INSERT` AFTER INSERT ON `clientenuevo` FOR EACH ROW INSERT INTO BITACORA (DIRECCION, EMAIL, CELULAR, USUARIO, FECHA_REGISTRO) VALUES (NEW.DIRECCION, NEW.EMAIL, NEW.CELULAR, CURRENT_USER, NOW())
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `BITA_UPDATE` AFTER UPDATE ON `clientenuevo` FOR EACH ROW INSERT INTO BITACORA (DIRECCION, EMAIL, CELULAR, USUARIO, FECHA_REGISTRO) VALUES (NEW.DIRECCION, NEW.EMAIL, NEW.CELULAR, CURRENT_USER, NOW())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `Id` int(255) NOT NULL,
  `nombre` varchar(255) DEFAULT NULL,
  `clave` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`Id`, `nombre`, `clave`) VALUES
(1, 'ale@gmail.com', '$2y$10$wedBCYC3xlVVTFIjQrXYQOKIDO3B4B6HNZLVNT3ZZ9HHIhUI6sYoW'),
(2, 'kathy@gmail.com', '$2y$10$6wOUSxgNpE4YTHzswOQdWuO4uem11Ze6XJWPlaDdAMThDcs1k4S/q');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `Id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
