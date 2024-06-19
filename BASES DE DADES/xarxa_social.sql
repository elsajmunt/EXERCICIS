-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 19-06-2024 a las 13:10:38
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
-- Estructura de tabla para la tabla `enquesta`
--

CREATE TABLE `enquesta` (
  `id` int(11) NOT NULL,
  `titol` varchar(50) NOT NULL,
  `opcio1` varchar(25) NOT NULL,
  `opcio2` varchar(25) NOT NULL,
  `idUsuari` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `enquesta`
--

INSERT INTO `enquesta` (`id`, `titol`, `opcio1`, `opcio2`, `idUsuari`) VALUES
(1, 'menjar', '', '', 3),
(2, 'comics', '', '', 3),
(3, 'viatges', '', '', 10),
(4, 'esports', '', '', 3),
(5, 'Quina és la teva Formació?', 'Java Script', 'Html 5', 7),
(6, 'Escull una película', 'Incendis', 'La vida es bella', 3),
(7, 'Quin és el teu actor preferit?', 'Brat Pit', 'Antonio Banderas', 7),
(8, 'Quin es el teu transport preferit?', 'Tren', 'Bicicleta', 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `missatges`
--

CREATE TABLE `missatges` (
  `id` tinyint(4) NOT NULL,
  `id_usuari` int(11) NOT NULL,
  `Missatge` varchar(250) NOT NULL,
  `Data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `missatges`
--

INSERT INTO `missatges` (`id`, `id_usuari`, `Missatge`, `Data`) VALUES
(1, 1, 'Hola, proba envia missatge!', '0000-00-00'),
(2, 1, 'Bon dia! Segon missatge', '0000-00-00'),
(3, 3, 'Prova missatge: surt id usuari i data???', '0000-00-00'),
(4, 4, 'Prova si surt data auto Números', '2024-05-31'),
(5, 3, 'Usuari 3 envia un nou missatge', '2024-05-31'),
(7, 3, 'Prova desde input type text', '2024-05-31'),
(8, 3, 'Text Area Escriu aquí els teus comentaris...', '2024-05-31'),
(10, 3, 'Prova Missatge 12/6/ Elsa', '2024-06-12'),
(12, 3, 'Un altre Missatge, des de formulari_missatge.php Elsa', '2024-06-13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `opcionsenquesta`
--

CREATE TABLE `opcionsenquesta` (
  `id` int(11) NOT NULL,
  `nom` varchar(50) NOT NULL,
  `idEnquesta` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `opcionsenquesta`
--

INSERT INTO `opcionsenquesta` (`id`, `nom`, `idEnquesta`) VALUES
(1, 'Pizza', 1),
(2, 'París', 3),
(3, 'Verdura', 1),
(4, 'Mortadelo', 2),
(5, 'Filemón', 2),
(6, 'Professor Bacteri', 2),
(7, 'Calamars', 1),
(8, 'Volei platja', 4),
(9, 'Tofu', 1),
(10, 'Futbol', 4),
(11, 'Carn', 1),
(12, 'Roma', 3),
(13, 'Amsterdam', 3),
(15, 'Barrufet rondinaire', 2),
(16, 'pop a la gallega', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `resultatsenquesta`
--

CREATE TABLE `resultatsenquesta` (
  `idUsuari` int(11) NOT NULL,
  `idOpcioEnquesta` int(11) NOT NULL,
  `data` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `resultatsenquesta`
--

INSERT INTO `resultatsenquesta` (`idUsuari`, `idOpcioEnquesta`, `data`) VALUES
(1, 1, '2024-06-01'),
(1, 2, '2024-06-04'),
(3, 5, '0000-00-00'),
(7, 1, '2024-06-04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuaris`
--

CREATE TABLE `usuaris` (
  `id` int(11) NOT NULL,
  `Nom` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuaris`
--

INSERT INTO `usuaris` (`id`, `Nom`, `Email`, `Password`) VALUES
(1, 'Lola', 'lola@mail.com', 'lola'),
(2, 'Carles', 'carles@mail.com', 'carles'),
(3, 'Elsa', 'elsa@mail.com', 'elsa'),
(4, 'Eva', 'eva@mail.com', 'eva'),
(5, 'Ricard', 'ricard@mail.com', 'ricard'),
(6, 'Toni', 'toni@mail.com', 'toni'),
(7, 'Anna', 'anna@mail.com', 'anna'),
(8, 'Eric', 'eric@mail.com', 'eric'),
(9, 'Mark', 'mark@mail.com', 'mark'),
(10, 'Antonia', 'antonia@mail.com', 'antonia');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `enquesta`
--
ALTER TABLE `enquesta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idUsuari` (`idUsuari`);

--
-- Indices de la tabla `missatges`
--
ALTER TABLE `missatges`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_usuari` (`id_usuari`);

--
-- Indices de la tabla `opcionsenquesta`
--
ALTER TABLE `opcionsenquesta`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idEnquesta` (`idEnquesta`);

--
-- Indices de la tabla `resultatsenquesta`
--
ALTER TABLE `resultatsenquesta`
  ADD PRIMARY KEY (`idUsuari`,`idOpcioEnquesta`),
  ADD KEY `idUsuari` (`idUsuari`,`idOpcioEnquesta`),
  ADD KEY `idOpcioEnquesta` (`idOpcioEnquesta`);

--
-- Indices de la tabla `usuaris`
--
ALTER TABLE `usuaris`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `enquesta`
--
ALTER TABLE `enquesta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT de la tabla `missatges`
--
ALTER TABLE `missatges`
  MODIFY `id` tinyint(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `opcionsenquesta`
--
ALTER TABLE `opcionsenquesta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT de la tabla `usuaris`
--
ALTER TABLE `usuaris`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `enquesta`
--
ALTER TABLE `enquesta`
  ADD CONSTRAINT `enquesta_ibfk_1` FOREIGN KEY (`idUsuari`) REFERENCES `usuaris` (`id`);

--
-- Filtros para la tabla `missatges`
--
ALTER TABLE `missatges`
  ADD CONSTRAINT `missatges_ibfk_1` FOREIGN KEY (`id_usuari`) REFERENCES `usuaris` (`id`);

--
-- Filtros para la tabla `opcionsenquesta`
--
ALTER TABLE `opcionsenquesta`
  ADD CONSTRAINT `opcionsenquesta_ibfk_1` FOREIGN KEY (`idEnquesta`) REFERENCES `enquesta` (`id`);

--
-- Filtros para la tabla `resultatsenquesta`
--
ALTER TABLE `resultatsenquesta`
  ADD CONSTRAINT `resultatsenquesta_ibfk_1` FOREIGN KEY (`idUsuari`) REFERENCES `usuaris` (`id`),
  ADD CONSTRAINT `resultatsenquesta_ibfk_2` FOREIGN KEY (`idOpcioEnquesta`) REFERENCES `opcionsenquesta` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
