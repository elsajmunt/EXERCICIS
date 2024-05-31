-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 31-05-2024 a las 12:36:01
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
-- Base de datos: `xarxa_social`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `missatges`
--

CREATE TABLE `missatges` (
  `id` tinyint(4) NOT NULL,
  `id_usuari` tinyint(4) NOT NULL,
  `Missatge` varchar(250) NOT NULL,
  `Data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `missatges`
--

INSERT INTO `missatges` (`id`, `id_usuari`, `Missatge`, `Data`) VALUES
(1, 0, 'Hola, proba envia missatge!', '0000-00-00'),
(2, 0, 'Bon dia! Segon missatge', '0000-00-00'),
(3, 3, 'Prova missatge: surt id usuari i data???', '0000-00-00'),
(4, 4, 'Prova si surt data auto Números', '2024-05-31'),
(5, 3, 'Usuari 3 envia un nou missatge', '2024-05-31'),
(6, 3, 'Input tuype text', '2024-05-31'),
(7, 3, 'Prova desde input type text', '2024-05-31'),
(8, 3, 'Text Area Escriu aquí els teus comentaris...', '2024-05-31'),
(9, 3, 'Comentari text area final :)\r\nJaja', '2024-05-31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuaris`
--

CREATE TABLE `usuaris` (
  `id` tinyint(4) NOT NULL,
  `Nom` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuaris`
--

INSERT INTO `usuaris` (`id`, `Nom`, `Email`, `Password`) VALUES
(1, 'Lola', '0', '0'),
(2, 'Carles', '0', '6789'),
(3, 'Elsa', '0', '12345'),
(4, 'Eva', 'eva@mail.com', 'eva'),
(5, 'Ricard', 'ricard@hotmail.com', 'rikkki'),
(6, 'Toni', 'toni@gmail.com', 'toni'),
(7, 'Anna', 'anna@mail.com', 'anna'),
(8, 'Eric', 'eric@mail.com', 'eric'),
(9, 'Mark', 'mark@mail.com', 'mark');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `missatges`
--
ALTER TABLE `missatges`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuaris`
--
ALTER TABLE `usuaris`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `missatges`
--
ALTER TABLE `missatges`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `usuaris`
--
ALTER TABLE `usuaris`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
