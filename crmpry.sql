-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-11-2020 a las 06:42:16
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `crmpry`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `leads`
--

CREATE TABLE `leads` (
  `id` int(10) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido` varchar(50) NOT NULL,
  `compañia` varchar(50) NOT NULL,
  `telefono` int(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `direccion` varchar(60) NOT NULL,
  `pais` varchar(20) NOT NULL,
  `ciudad` varchar(30) NOT NULL,
  `estado` varchar(20) NOT NULL,
  `asignado` varchar(30) NOT NULL,
  `comentario` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `leads`
--

INSERT INTO `leads` (`id`, `nombre`, `apellido`, `compañia`, `telefono`, `email`, `direccion`, `pais`, `ciudad`, `estado`, `asignado`, `comentario`) VALUES
(1, 'Sebastian', 'Calderon', 'UUU', 1351813, 'jsrincon@j.com', 'calle falsa 123', 'Colombia', 'Barranquilla', 'En pruebas', 'Andres', 'Prueba'),
(4, 'Juan', 'Rincon ', 'UDEC', 12345, 'juanrinconaxl926@gmail.com', 'carrera 123', 'Colombia', 'madrid', 'en proceso', 'Pedro', 'sdasdasd'),
(6, 'Eder Armando', 'Rincon Calderon', 'COLGE', 32585475, 'ederinc14@gmail.com', 'Carrera 5 # 10-50', 'Colombia', 'madrid', 'probando ultimo ', 'Juan Sebastian', 'Prueba final con los cambios subidos a github'),
(8, 'Prueba botones lead', 'boton', 'Botones', 32131, 'boton@boton', 'carrera 123', 'Georgia del Sur y la', 'madrid', 'en proceso', 'Juan Sebastian', 'Prueba funcionalidad que si se agregan los botones para el crud\r\n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `nombre` varchar(80) COLLATE utf8_spanish_ci NOT NULL,
  `tipo_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `password`, `nombre`, `tipo_usuario`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'Administrador', 1),
(2, 'usuario', 'b665e217b51994789b02b1838e730d6b93baa30f', 'Cliente', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `leads`
--
ALTER TABLE `leads`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `leads`
--
ALTER TABLE `leads`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
