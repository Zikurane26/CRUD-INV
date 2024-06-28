-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 14-12-2023 a las 05:25:41
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
-- Base de datos: `dashboard`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `datos_usuarios`
--

CREATE TABLE `datos_usuarios` (
  `id` int(100) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `email` varchar(80) NOT NULL,
  `usuario` varchar(80) NOT NULL,
  `password` varchar(50) NOT NULL,
  `telefono` varchar(11) NOT NULL,
  `pais` varchar(100) NOT NULL,
  `rol` int(5) NOT NULL,
  `estado` int(5) NOT NULL,
  `contador` int(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `datos_usuarios`
--

INSERT INTO `datos_usuarios` (`id`, `nombre`, `apellido`, `email`, `usuario`, `password`, `telefono`, `pais`, `rol`, `estado`, `contador`) VALUES
(1, 'Brayan', 'Avila', 'Brasti-0826@hotmail.com', 'Zikurane1', 'sasasa', '3132455231', 'Colombia', 1, 1, 44),
(2, 'Brayan2', 'Hueso2', 'Brasti00@gmail.com', 'Zikurane2', 'sasasa', '3124278480', 'Colombia', 2, 1, 14),
(3, 'Kevin', 'Avila', 'Kevinda@hotmail.com', 'Zikurane3', 'sasasa', '3323232', 'Colombia', 2, 0, 65),
(4, 'Brayan', 'Avila', 'Brasti-0929@prueba.com', 'Huesito', 'sasasa', '3124288888', 'Colombia', 1, 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `id` int(11) NOT NULL,
  `type` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `price` int(11) NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `type`, `name`, `price`, `stock`) VALUES
(1, 'Cerveza', 'Poker', 2800, 60),
(2, 'Cerveza', 'Aguila', 3200, 72),
(3, 'Whisky', 'Old John', 52000, 6),
(5, 'Vino', 'Gato Negro', 250000, 4);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos_usuarios`
--
ALTER TABLE `datos_usuarios`
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
