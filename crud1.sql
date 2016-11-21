-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-11-2016 a las 01:58:57
-- Versión del servidor: 10.1.13-MariaDB
-- Versión de PHP: 7.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `crud1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `discos`
--

CREATE TABLE `discos` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `album` varchar(500) NOT NULL,
  `year` varchar(100) NOT NULL,
  `categoria` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `discos`
--

INSERT INTO `discos` (`id`, `name`, `album`, `year`, `categoria`, `created_at`) VALUES
(5, 'Guns n roses', 'Welcome to the Jungle', '1989', 'Rock', '2016-11-17 16:56:17'),
(6, 'X- Japan', 'Jelousy', '1989', 'Blues', '2016-11-17 17:42:52'),
(7, 'Joe Arroyo', 'Salsa', '2000', 'Salsa', '2016-11-17 18:35:25'),
(8, 'After forever', 'Alone', '2002', 'Metal', '2016-11-17 19:32:26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `fullname` varchar(500) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `fullname`, `username`, `email`, `password`, `created_at`) VALUES
(1, 'Jenny Aguilera', 'katherine', 'katherinaguileram@hotmail.com', '123456', '2016-11-17 13:14:45'),
(2, 'Laura Garcia', 'laura', 'laura@hotmial.com', '123456789', '2016-11-17 13:37:56'),
(9, 'Luis', 'admin', 'luis@gmail.com', '123456', '2016-11-17 18:31:48'),
(10, 'Andres Mejia', 'Andres', 'andres@yahoo.es', '789456', '2016-11-17 19:51:18'),
(11, 'Fabian J', 'fanbian', 'fabian@l.com', '456123', '2016-11-17 19:53:39');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `discos`
--
ALTER TABLE `discos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `discos`
--
ALTER TABLE `discos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
