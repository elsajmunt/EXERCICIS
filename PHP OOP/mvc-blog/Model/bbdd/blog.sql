-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-07-2024 a las 13:31:27
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

--
-- Base de datos: `blog`
--
CREATE DATABASE IF NOT EXISTS blog;
USE blog;
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `posts`
--

CREATE TABLE `posts` (
  `id_post` int(11) NOT NULL,
  `titol` varchar(100) NOT NULL,
  `descripcio` varchar(500) NOT NULL,
  `img_url` varchar(1000) NOT NULL,
  `data` date NOT NULL DEFAULT current_timestamp(),
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
  `image_user` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id_post`),
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
-- AUTO_INCREMENT de la tabla `posts`
--
ALTER TABLE `posts`
  MODIFY `id_post` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `user` FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);


--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `image_user`) VALUES
(1, 'Kino', '1234', 'kino@gmail.com', 'assets\\images\\users\\user-1.jpg'),
(2, 'Elsa', '1234', 'elsa@gmail.com', 'assets\\images\\users\\user-2.jpg'),
(3, 'Cris', '1234', 'cris@gmail.com', 'assets\\images\\users\\user-3.jpg'),
(4, 'Jaume', '1234', 'jaume@gmail.com', 'assets\\images\\users\\user-4.jpg'),
(5, 'Mario', '1234', 'mario@gmail.com', 'assets\\images\\users\\user-5.jpg');

--
-- Volcado de datos para la tabla `posts`
--

INSERT INTO `posts` (`id_post`, `titol`, `descripcio`, `img_url`, `data`, `id_user`) VALUES
(1, 'Sed ut perspiciatis unde omnis', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ornare justo in odio faucibus vestibulum. Vestibulum mollis urna vel vestibulum mollis.', 'assets\\images\\posts\\bear-8845470_1280.jpg', '2024-07-08', 1),
(2, 'Pellentesque habitant morbi', 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc convallis porta hendrerit. Praesent metus elit, tincidunt ac semper eget, elementum non tellus.', 'assets\\images\\posts\\desert-7970677_1280.jpg', '2024-07-08', 2),
(3, 'In commodo cursus leo vitae rutrum', 'In commodo cursus leo vitae rutrum. Duis id tincidunt dui, a venenatis dui. Quisque id dui quam. Fusce tempor, eros a commodo egestas, risus lectus pulvinar purus, ac mattis augue sem ac arcu.', 'assets\\images\\posts\\dog-8513202_1280.jpg', '2024-07-08', 3),
(4, 'Fusce varius vulputate ultrices', 'Fusce varius vulputate ultrices. Sed interdum mi et iaculis ultrices. Pellentesque tristique porta tellus vitae suscipit. Aenean quis ex suscipit nulla interdum maximus.', 'assets\\images\\posts\\elephant-8663016_1280.jpg', '2024-07-08', 4),
(5, 'Sed mi orci, sodales vel efficitur eu', 'Sed mi orci, sodales vel efficitur eu, vestibulum vel nunc. Praesent viverra malesuada malesuada. Sed non erat eu ante mollis molestie. Morbi imperdiet orci ut blandit varius.', 'assets\\images\\posts\\hamburg-8807295_1280.jpg', '2024-07-08', 5),
(6, 'Lorem ipsum dolor sit amet', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus ornare justo in odio faucibus vestibulum. Vestibulum mollis urna vel vestibulum mollis.', 'assets\\images\\posts\\hamburg-8807295_1280.jpg', '2024-07-08', 1),
(7, 'Pellentesque habitant morbi tristique senectus', 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nunc convallis porta hendrerit. Praesent metus elit, tincidunt ac semper eget.', 'assets\\images\\posts\\kingfisher-8705377_1280.jpg', '2024-07-08', 1),
(8, 'Phasellus a sagittis ante', 'Phasellus a sagittis ante. Donec venenatis eleifend neque, vitae convallis est porta non. Suspendisse facilisis, ex ut tincidunt volutpat, augue libero luctus nunc, id consequat lacus ligula sit amet lectus.', 'assets\\images\\posts\\mallow-8106680_1280.jpg', '2024-07-08', 1),
(9, 'Phasellus mattis id metus eget porttitor', 'Phasellus mattis id metus eget porttitor. Vivamus sapien justo, consequat vitae lacus eget, ullamcorper ullamcorper odio.', 'assets\\images\\posts\\muffins-8693748_1280.jpg', '2024-07-08', 1),
(10, 'Pellentesque tristique porta tellus vitae suscipit', 'Pellentesque tristique porta tellus vitae suscipit. Aenean quis ex suscipit nulla interdum maximus.', 'assets\\images\\posts\\pineapple-8134236_1280.jpg', '2024-07-08', 1),
(11, 'Praesent viverra malesuada malesuada', 'Praesent viverra malesuada malesuada. Sed non erat eu ante mollis molestie. Morbi imperdiet orci ut blandit varius. In fermentum turpis et lacus molestie condimentum.', 'assets\\images\\posts\\road-8844555_1280.jpg', '2024-07-08', 2);

-- --------------------------------------------------------
