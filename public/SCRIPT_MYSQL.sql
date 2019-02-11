-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-02-2019 a las 06:02:08
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistema`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `cli_codigo` char(15) NOT NULL,
  `cli_nombres` varchar(100) NOT NULL,
  `cli_apellidos` varchar(150) NOT NULL,
  `cli_sexo` char(2) NOT NULL,
  `cli_telefono` varchar(20) DEFAULT NULL,
  `cli_correo` varchar(100) DEFAULT NULL,
  `cli_direccion` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id`, `cli_codigo`, `cli_nombres`, `cli_apellidos`, `cli_sexo`, `cli_telefono`, `cli_correo`, `cli_direccion`) VALUES
(1, '70017434', 'MIGUEL', 'SANCHEZ', '1', '963916671', 'miguelsanchez261092@gmail.com', 'urb vista hermosa mz G'),
(2, '70017435', 'JOSE', 'TERRONES', 'M', '987657456', 'jterrones@gmail.com', 'urb  huerta grande n 34'),
(3, '70017435', 'JOSE', 'TERRONES', 'M', '987657456', 'jterrones@gmail.com', 'urb  huerta grande n 34'),
(4, '18828607', 'MILAGRO', 'DIAZ', 'F', NULL, NULL, NULL),
(5, '98984344', 'PEPE', 'PEREZ GARCIA', 'M', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `id` int(11) NOT NULL,
  `emp_direccion` varchar(250) NOT NULL,
  `emp_ruc` char(11) NOT NULL,
  `emp_representante` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
