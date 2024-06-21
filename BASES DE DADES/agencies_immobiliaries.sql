-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-06-2024 a las 13:24:58
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
-- Base de datos: `agencies_immobiliaries`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agencia`
--

CREATE TABLE `agencia` (
  `id` int(11) NOT NULL,
  `adreça` varchar(50) NOT NULL,
  `zona` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pis`
--

CREATE TABLE `pis` (
  `id` int(11) NOT NULL,
  `id_propietari` int(11) NOT NULL,
  `m2` varchar(11) NOT NULL,
  `num_habitacions` varchar(11) NOT NULL,
  `num_lavabos` varchar(11) NOT NULL,
  `tipus_gas` varchar(25) NOT NULL,
  `orientacio` varchar(25) NOT NULL,
  `id_agencia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `telefon_agencia`
--

CREATE TABLE `telefon_agencia` (
  `id` int(11) NOT NULL,
  `descripcio` varchar(25) NOT NULL,
  `telefon` varchar(25) NOT NULL,
  `id_agencia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venedor`
--

CREATE TABLE `venedor` (
  `id` int(11) NOT NULL,
  `id_agencia` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `agencia`
--
ALTER TABLE `agencia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `pis`
--
ALTER TABLE `pis`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_agencia` (`id_agencia`),
  ADD KEY `pis_ibfk_1` (`id_propietari`);

--
-- Indices de la tabla `telefon_agencia`
--
ALTER TABLE `telefon_agencia`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_agencia` (`id_agencia`);

--
-- Indices de la tabla `venedor`
--
ALTER TABLE `venedor`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_agencia` (`id_agencia`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `agencia`
--
ALTER TABLE `agencia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pis`
--
ALTER TABLE `pis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `telefon_agencia`
--
ALTER TABLE `telefon_agencia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `venedor`
--
ALTER TABLE `venedor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pis`
--
ALTER TABLE `pis`
  ADD CONSTRAINT `pis_ibfk_1` FOREIGN KEY (`id_propietari`) REFERENCES `agencia` (`id`);

--
-- Filtros para la tabla `telefon_agencia`
--
ALTER TABLE `telefon_agencia`
  ADD CONSTRAINT `telefon_agencia_ibfk_1` FOREIGN KEY (`id_agencia`) REFERENCES `agencia` (`id`);

--
-- Filtros para la tabla `venedor`
--
ALTER TABLE `venedor`
  ADD CONSTRAINT `venedor_ibfk_1` FOREIGN KEY (`id_agencia`) REFERENCES `agencia` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
