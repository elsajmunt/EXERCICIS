-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 29-05-2024 a las 13:42:20
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `ciutats`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `localitats`
--

CREATE TABLE `localitats` (
  `id` int(11) NOT NULL,
  `Codi_Postal` int(11) NOT NULL,
  `Localitat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `localitats`
--

INSERT INTO `localitats` (`id`, `Codi_Postal`, `Localitat`) VALUES
(1, 8390, 'Montgat'),
(2, 8915, 'Badalona'),
(5, 8915, 'Badalona');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personas`
--

CREATE TABLE `personas` (
  `id` int(11) NOT NULL,
  `dni` varchar(50) DEFAULT NULL,
  `nom` varchar(100) DEFAULT NULL,
  `cognoms` varchar(100) DEFAULT NULL,
  `telefon` varchar(50) DEFAULT NULL,
  `direccio` varchar(100) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `empresa` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Volcado de datos para la tabla `personas`
--

INSERT INTO `personas` (`id`, `dni`, `nom`, `cognoms`, `telefon`, `direccio`, `email`, `empresa`) VALUES
(1, '123456789A', 'Toni', 'Oller', '67567567', NULL, NULL, NULL),
(4, '34025669F', 'Manel\r\n', 'Borras Toledo', '93 2453269', 'C/ Provença, 54, Bcn', 'manel@hotmail.com', 'UPC Vilanova'),
(5, '36412445H', 'Ramón', 'Alonso Martín', '93 2354768', 'Avda. Mistral, 34, Bcn', 'ramon@gmail.com', 'Dupons SA'),
(10, '0789686', NULL, NULL, NULL, NULL, NULL, NULL),
(11, '383883', 'Juan', NULL, NULL, NULL, NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `localitats`
--
ALTER TABLE `localitats`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `localitats`
--
ALTER TABLE `localitats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `personas`
--
ALTER TABLE `personas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
