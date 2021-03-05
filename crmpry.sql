-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 04-03-2021 a las 05:33:48
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
-- Estructura de tabla para la tabla `detalle_factura`
--

CREATE TABLE `detalle_factura` (
  `id_deta_fact` int(11) NOT NULL,
  `requerimiento_deta_fact` int(11) NOT NULL,
  `factura_deta_fact` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estados`
--

CREATE TABLE `estados` (
  `id_estado` int(11) NOT NULL,
  `estado` varchar(20) NOT NULL,
  `tabla_estado` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `estados`
--

INSERT INTO `estados` (`id_estado`, `estado`, `tabla_estado`) VALUES
(0, 'lead', '0'),
(1, 'cliente', '1'),
(2, 'proyecto_activo', '2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facturas`
--

CREATE TABLE `facturas` (
  `cod_factura` int(11) NOT NULL,
  `proyecto_factura` int(11) NOT NULL,
  `fecha_factura` date NOT NULL,
  `fecha_pago_factura` date DEFAULT NULL,
  `estado_factura` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `leads`
--

CREATE TABLE `leads` (
  `id_lead` int(10) NOT NULL,
  `nombre_lead` varchar(50) NOT NULL,
  `segundo_nombre_lead` varchar(50) NOT NULL,
  `primer_apellido_lead` varchar(50) NOT NULL,
  `segundo_apellido_lead` varchar(50) NOT NULL,
  `tipodocumento_lead` varchar(100) NOT NULL,
  `documento_lead` int(20) NOT NULL,
  `telefono_lead` bigint(100) NOT NULL,
  `email_lead` varchar(50) NOT NULL,
  `departamento_lead` varchar(100) NOT NULL,
  `ciudad_lead` varchar(30) NOT NULL,
  `direccion_lead` varchar(100) NOT NULL,
  `estado_lead` int(20) NOT NULL,
  `compañia_lead` varchar(100) NOT NULL,
  `asignado_lead` varchar(30) NOT NULL,
  `comentario_lead` text NOT NULL,
  `recurso_lead` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `leads`
--

INSERT INTO `leads` (`id_lead`, `nombre_lead`, `segundo_nombre_lead`, `primer_apellido_lead`, `segundo_apellido_lead`, `tipodocumento_lead`, `documento_lead`, `telefono_lead`, `email_lead`, `departamento_lead`, `ciudad_lead`, `direccion_lead`, `estado_lead`, `compañia_lead`, `asignado_lead`, `comentario_lead`, `recurso_lead`) VALUES
(1, '', '', '', '', '', 0, 0, '', '', '', '', 1, '', '', '', ''),
(51, 'Juan', 'Sebastian', 'Rincon', 'Calderón', 'CC', 1073172471, 3124672351, 'juanrinconaxl926@gmail.com', 'Bogota D.C.', 'Madrid', 'Carrera 5 No 10-50', 1, 'Universidad de Cundinamarca Chia', 'Area Comercial', 'Prueba para los registros en telefonos', 'Facebook'),
(52, 'Nubia', '', 'Calderon', 'Zaque', 'CC', 39770883, 3202475043, 'nucalz71@hotmail.com', 'Cundinamarca', 'Madrid', 'Carrera 5 No 10-50', 1, 'Hogares ltda', 'Area Marketing', 'Prueba Telefonos', 'Twitter'),
(53, 'Eder', '', 'Rincon ', 'Vallejo', 'CC', 80429057, 3144138615, 'edrinva28@hotmail.com', 'Cundinamarca', 'Madrid', 'Carrera 5 No 10-50', 1, 'Corona', 'Area Comercial', 'Prueba Telefonos', 'Facebook'),
(56, 'Alejandra', '', 'Hernandez', 'Quintero', 'CC', 101679663, 3196099239, 'alejaluna1012@hotmail.com', 'Bogota D.C.', 'BOGOTA DC', 'La Finca MZ05', 1, 'Independiente', 'Area Comercial', 'Prueba', 'Anuncio'),
(58, 'Antontio', 'Jose', 'Perez', 'Lopez', 'CC', 78520552, 32463215, 'antoma@hotmail.com', 'Caqueta', 'ciudad city', 'city 123456', 1, 'telefono s.a', 'Area Comercial', 'prueba total', 'Anuncio');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos`
--

CREATE TABLE `proyectos` (
  `id_proyecto` int(11) NOT NULL,
  `codigo_proyecto` varchar(50) NOT NULL,
  `cliente_proyecto` varchar(50) NOT NULL,
  `fecha_ini_proyecto` date NOT NULL,
  `fecha_fin_proyecto` date DEFAULT NULL,
  `estado_proyecto` int(11) NOT NULL,
  `tema_proyecto` varchar(100) DEFAULT NULL,
  `descripcion_proyecto` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `proyectos`
--

INSERT INTO `proyectos` (`id_proyecto`, `codigo_proyecto`, `cliente_proyecto`, `fecha_ini_proyecto`, `fecha_fin_proyecto`, `estado_proyecto`, `tema_proyecto`, `descripcion_proyecto`) VALUES
(14, 'NCZPR001', 'Nubia  Calderon Zaque', '2021-02-12', '2021-03-06', 2, 'Proyecto Gestion de Muñecos Navideños', 'Proyecto gestion de ventas muñecos navideños'),
(15, 'AHQPR001', 'Alejandra  Hernandez Quintero', '2021-02-11', '2021-03-25', 2, 'Proyecto Conjunto Residencial La Finca', 'Proyecto Conjunto Residencial La Finca'),
(16, 'NCZPR002', 'Nubia  Calderon Zaque', '2021-02-25', '2021-02-25', 2, 'Proyecto Prueba', 'Descripcion para prueba proyecto'),
(17, 'AJPLP001', 'Antontio Jose Perez Lopez', '2021-03-25', '2021-03-26', 2, 'Proyecto de Don Antonio Perez', 'Pruba proyecto de don antonio');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `requerimientos_proyectos`
--

CREATE TABLE `requerimientos_proyectos` (
  `id_requerimiento` int(11) NOT NULL,
  `proyecto_requerimiento` varchar(50) NOT NULL,
  `nombre_requerimiento` varchar(120) DEFAULT NULL,
  `descripcion_requerimiento` text DEFAULT NULL,
  `costo_requerimiento` int(11) NOT NULL,
  `tiempo_requerimiento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `requerimientos_proyectos`
--

INSERT INTO `requerimientos_proyectos` (`id_requerimiento`, `proyecto_requerimiento`, `nombre_requerimiento`, `descripcion_requerimiento`, `costo_requerimiento`, `tiempo_requerimiento`) VALUES
(77, 'Proyecto Gestion de Muñecos Navideños', 'Adicion formulario registro clientes', 'Formulario', 50000, 1),
(78, 'Proyecto Gestion de Muñecos Navideños', 'Adicion formulario registro clientes', 'Formulario', 50000, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reuniones`
--

CREATE TABLE `reuniones` (
  `id_reunion` int(11) NOT NULL,
  `nombre_reunion` varchar(100) NOT NULL,
  `fecha_reunion` date NOT NULL,
  `hora_reunion` time NOT NULL,
  `asignado_reunion` varchar(100) NOT NULL,
  `descripcion_reunion` text NOT NULL,
  `estado_reunion` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `reuniones`
--

INSERT INTO `reuniones` (`id_reunion`, `nombre_reunion`, `fecha_reunion`, `hora_reunion`, `asignado_reunion`, `descripcion_reunion`, `estado_reunion`) VALUES
(27, 'Reunion para la asignacion de requerimientos', '2021-03-04', '15:30:00', 'Area Comercial', 'Reunion para realizar la asignacion de los requerimientos y generar los costos del proyecto', 0),
(28, 'Reunion Para proyecto de sistema de gestion comercial emprendimiento muñecos', '2021-02-17', '13:20:00', 'Area Marketing', 'Reunion para determinar el proyecto de gestion de mueñecos ', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `telefonos`
--

CREATE TABLE `telefonos` (
  `id_telefono` int(11) NOT NULL,
  `lead_telefono` varchar(20) NOT NULL,
  `telefono_telefono` varchar(100) NOT NULL,
  `tipo_telefono` varchar(50) DEFAULT NULL,
  `priorida_telefono` int(11) DEFAULT NULL,
  `vigencia_telefono` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `telefonos`
--

INSERT INTO `telefonos` (`id_telefono`, `lead_telefono`, `telefono_telefono`, `tipo_telefono`, `priorida_telefono`, `vigencia_telefono`) VALUES
(2, 'Juan Sebastian Rinco', '3124672351', 'TM', 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `usuario` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `tipo_usuario` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `usuario`, `password`, `tipo_usuario`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 1),
(2, 'usuario', 'b665e217b51994789b02b1838e730d6b93baa30f', 2),
(21, 'alejaluna1012@hotmail.com', 'f6f4d6c611686d1cbe9202a76d6b2d5f065f5489', 2),
(22, 'juanrinconaxl926@gmail.com', '8cb2237d0679ca88db6464eac60da96345513964', 2),
(23, 'nucalz71@hotmail.com', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 2),
(24, 'eder123', '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 2);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `detalle_factura`
--
ALTER TABLE `detalle_factura`
  ADD PRIMARY KEY (`id_deta_fact`);

--
-- Indices de la tabla `estados`
--
ALTER TABLE `estados`
  ADD PRIMARY KEY (`id_estado`);

--
-- Indices de la tabla `facturas`
--
ALTER TABLE `facturas`
  ADD PRIMARY KEY (`cod_factura`);

--
-- Indices de la tabla `leads`
--
ALTER TABLE `leads`
  ADD PRIMARY KEY (`id_lead`),
  ADD KEY `FK_leads_estados` (`estado_lead`);

--
-- Indices de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD PRIMARY KEY (`id_proyecto`);

--
-- Indices de la tabla `requerimientos_proyectos`
--
ALTER TABLE `requerimientos_proyectos`
  ADD PRIMARY KEY (`id_requerimiento`);

--
-- Indices de la tabla `reuniones`
--
ALTER TABLE `reuniones`
  ADD PRIMARY KEY (`id_reunion`);

--
-- Indices de la tabla `telefonos`
--
ALTER TABLE `telefonos`
  ADD PRIMARY KEY (`id_telefono`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `detalle_factura`
--
ALTER TABLE `detalle_factura`
  MODIFY `id_deta_fact` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `estados`
--
ALTER TABLE `estados`
  MODIFY `id_estado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `facturas`
--
ALTER TABLE `facturas`
  MODIFY `cod_factura` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `leads`
--
ALTER TABLE `leads`
  MODIFY `id_lead` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  MODIFY `id_proyecto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `requerimientos_proyectos`
--
ALTER TABLE `requerimientos_proyectos`
  MODIFY `id_requerimiento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT de la tabla `reuniones`
--
ALTER TABLE `reuniones`
  MODIFY `id_reunion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `telefonos`
--
ALTER TABLE `telefonos`
  MODIFY `id_telefono` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `detalle_factura`
--
ALTER TABLE `detalle_factura`
  ADD CONSTRAINT `FK_detalle_factura_facturas` FOREIGN KEY (`factura_deta_fact`) REFERENCES `facturas` (`cod_factura`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `facturas`
--
ALTER TABLE `facturas`
  ADD CONSTRAINT `FK_facturas_proyectos` FOREIGN KEY (`proyecto_factura`) REFERENCES `proyectos` (`id_proyecto`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `leads`
--
ALTER TABLE `leads`
  ADD CONSTRAINT `FK_leads_estados` FOREIGN KEY (`estado_lead`) REFERENCES `estados` (`id_estado`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD CONSTRAINT `FK_proyectos_estados` FOREIGN KEY (`estado_proyecto`) REFERENCES `estados` (`id_estado`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
