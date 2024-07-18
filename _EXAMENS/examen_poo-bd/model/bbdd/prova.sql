-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-07-2024 a las 13:31:27
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

--
-- Base de datos: `agencia`
--
CREATE DATABASE IF NOT EXISTS prova;
USE prova;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pisos`
--

CREATE TABLE `pisos` (
  `id` int(11) NOT NULL,
  `tipus` varchar(100) NOT NULL,
  `numhabitacions` varchar(1000) NOT NULL,
  `numlavabos` varchar(1000) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `users_id` int(11) NOT NULL,
  `users_uid` varchar(50) NOT NULL,
  `users_pwd` varchar(50) NOT NULL,
  `users_email` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `pisos`
--
ALTER TABLE `pisos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user` (`id_user`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`users_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `pisos`
--
ALTER TABLE `pisos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `users_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pisos`
--
ALTER TABLE `pisos`
  ADD CONSTRAINT `user` FOREIGN KEY (`id_user`) REFERENCES `users` (`users_id`);

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`users_id`, `users_uid`, `users_pwd`, `users_email`) VALUES
(0, 'admin', '1234', 'laura@gmail.com'),
(1, 'profe', '1234', 'laura@gmail.com'),
(2, '002', '1234', 'elsa@gmail.com'),
(3, '003', '1234', 'cris@gmail.com'),
(4, '004', '1234', 'jaume@gmail.com'),
(5, '005', '1234', 'paula@gmail.com');

--
-- Volcado de datos para la tabla `pisos`
--

INSERT INTO `pisos` (`id`, `tipus`, `numhabitacions`, `numlavabos`, `id_user`) VALUES
(1, 'VENDA', '3', '1', '4'),
(2, 'LLOGUER', '5', '2', '1'),
(3, 'LLOGUER', '4', '2', '1');
-- --------------------------------------------------------
