-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-09-2022 a las 16:31:17
-- Versión del servidor: 10.4.20-MariaDB
-- Versión de PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

-- Código que elimina la base de datos si existe
-- DROP DATABASE IF EXISTS dashboard;
-- Crear base de datos
-- CREATE DATABASE dashboard;
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
  `imagen` varchar(100) NOT NULL,
  `url_img` varchar(100) NOT NULL,
  `pais` varchar(100) NOT NULL,
  `nacimiento` date NOT NULL,
  `pokemon` int(3) NOT NULL,
  `cargo` varchar(50) NOT NULL,
  `rol` int(5) NOT NULL,
  `estado` int(5) NOT NULL,
  `contador` int(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `datos_usuarios`
--

INSERT INTO `datos_usuarios` (`id`, `nombre`, `apellido`, `email`, `usuario`, `password`, `telefono`, `imagen`, `url_img`, `pais`, `nacimiento`, `pokemon`, `cargo`, `rol`, `estado`, `contador`) VALUES
(1, 'Brayan', 'Avila', 'Brasti-0826@hotmail.com', 'Zikurane1', 'sasasa', '3132455231', 'images/images_users/891Foto_prueba.jpg', '', 'Colombia', '2022-08-29', 94, 'Gerente', 1, 1, 24),
(2, 'Brayan2', 'Hueso2', 'Brasti00@gmail.com', 'Zikurane2', 'sasasa', '3124278480', 'images/images_users/303Diana Battle Queen.jpg', '', 'Colombia', '2022-08-30', 105, 'Gerente', 2, 1, 10),
(3, 'Kevin', 'Avila', 'Kevinda@hotmail.com', 'Zikurane3', 'sasasa', '3323232', 'images/images_users/368Re Zero.png', '', 'Colombia', '2022-08-30', 4, 'Gerente', 2, 0, 4),
(5, 'Juan', 'Ramirez', 'sasasa@sasa.com', 'Slendermanz', '12345', '32132132', 'images/images_users/463sasasa.png', '', 'Coloom', '2001-12-20', 249, 'Gerente', 1, 1, 3);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `datos_usuarios`
--
ALTER TABLE `datos_usuarios`
  ADD UNIQUE KEY `id` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
