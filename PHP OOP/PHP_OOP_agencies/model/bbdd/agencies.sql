-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-07-2024 a las 13:31:27
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

--
-- Base de datos: `agencies`
--
CREATE DATABASE IF NOT EXISTS agencies;
USE agencies;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pisos`
--

CREATE TABLE `pisos` (
  `id` int(11) NOT NULL,
  `nompis` varchar(100) NOT NULL,
  `imatge` varchar(1000) NOT NULL,
  `ubicacio` varchar(500) NOT NULL,
  `descripcio` varchar(500) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(200) NOT NULL,
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
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `pisos`
--
ALTER TABLE `pisos`
  ADD CONSTRAINT `user` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES
(1, 'Laura', '1234', 'laura@gmail.com'),
(2, 'Elsa', '1234', 'elsa@gmail.com'),
(3, 'Cris', '1234', 'cris@gmail.com'),
(4, 'Jaume', '1234', 'jaume@gmail.com'),
(5, 'Paula', '1234', 'paula@gmail.com');

--
-- Volcado de datos para la tabla `pisos`
--

INSERT INTO `pisos` (`id`, `nompis`, `imatge`, `ubicacio`, `descripcio`, `id_user`) VALUES
(1, 'Tenerife', 'url imatge1', 'Carrer Tenerife, 8, 4-2, Bcn', 'Lorem Ipsum bla bla bla', 2),
(2, 'Flor de Te', 'url imatge2', 'Carrer Flor de Te, 24, Gavà', 'Lorem Ipsum bla bla bla', 4),
(3, 'Roma', 'url imatge3', 'Avinguda de Roma, 17, 9-2, Bcn', 'Lorem Ipsum bla bla bla', 1),
(4, 'Camèlies', 'url imatge', 'Carrer Camèlies, 6, 8-3, Bcn', 'Lorem Ipsum bla bla bla', 4),
-- --------------------------------------------------------
