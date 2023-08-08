-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-08-2023 a las 03:58:55
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_desarolloweb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bd_mensaje`
--

CREATE TABLE `bd_mensaje` (
  `id_mesaje` int(11) NOT NULL,
  `Nombre` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `motivo` varchar(50) NOT NULL,
  `Mensaje` varchar(1200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `bd_mensaje`
--

INSERT INTO `bd_mensaje` (`id_mesaje`, `Nombre`, `email`, `motivo`, `Mensaje`) VALUES
(1, 'asdf', 'andressantostkd@gmail.com', 'asdf', 'asdfasdf'),
(2, 'asdf', 'andressantostkd@gmail.com', 'asdf', 'asdfasdf');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bd_mensaje`
--
ALTER TABLE `bd_mensaje`
  ADD PRIMARY KEY (`id_mesaje`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bd_mensaje`
--
ALTER TABLE `bd_mensaje`
  MODIFY `id_mesaje` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
