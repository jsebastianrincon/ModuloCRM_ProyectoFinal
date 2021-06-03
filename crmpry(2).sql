-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-06-2021 a las 02:03:47
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

--
-- Volcado de datos para la tabla `facturas`
--

INSERT INTO `facturas` (`cod_factura`, `proyecto_factura`, `fecha_factura`, `fecha_pago_factura`, `estado_factura`) VALUES
(5, 63, '2021-06-16', '2021-06-24', 1),
(6, 64, '2021-06-23', '2021-06-29', 1);

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
(63, 'Juan', 'Sebastian', 'Rincón', 'Calderón', 'CC', 1073172471, 3124672351, 'jsebastianrincon@ucundinamarca.edu.co', 'Cundinamarca', 'Madrid', 'Carrera 5 No 10-50', 1, 'ASSVIRT SAS', 'Area Comercial', 'Registro de nuevo lead', 'Twitter'),
(64, 'Nubia', '', 'Calderon', 'Zaque', 'CC', 397770883, 3202475043, 'nucalz71@hotmail.com', 'Bogota D.C.', 'Madrid', 'Carrera 5 No 10-50', 1, 'Independiente', 'Area Comercial', 'Nuevo Lead', 'Google'),
(65, 'Alejandra', '', 'Hernandez', 'Quintero', 'CC', 6515651, 3196099239, 'alejaluna1012@hotmail.com', 'Bogota D.C.', 'Madrid', 'La Finca MZ05', 0, 'Independiente', 'Area Marketing', 'Nuevo Lead', 'Twitter');

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
(63, 'JSRCPR001', '63', '2021-06-01', '2021-06-30', 2, 'Proyecto CRM Para Grado', 'Nuevo Proyecto'),
(64, 'NCZPR001', '64', '2021-06-01', '2021-06-23', 2, 'Proyecto Gestion de Muñecos Navideños', 'Proyecto Gestion de Muñecos Navideños');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `requerimientos_proyectos`
--

CREATE TABLE `requerimientos_proyectos` (
  `id_requerimiento` int(11) NOT NULL,
  `id_proyecto` int(11) NOT NULL,
  `proyecto_requerimiento` varchar(100) NOT NULL,
  `nombre_requerimiento` varchar(120) DEFAULT NULL,
  `descripcion_requerimiento` text DEFAULT NULL,
  `costo_requerimiento` int(11) NOT NULL,
  `tiempo_requerimiento` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `requerimientos_proyectos`
--

INSERT INTO `requerimientos_proyectos` (`id_requerimiento`, `id_proyecto`, `proyecto_requerimiento`, `nombre_requerimiento`, `descripcion_requerimiento`, `costo_requerimiento`, `tiempo_requerimiento`) VALUES
(1, 63, 'Proyecto CRM Para Grado', 'Adicion formulario registro clientes', 'Formulario', 50000, 2),
(2, 63, 'Proyecto CRM Para Grado', 'Adicion formulario registro', 'Formulario CRM', 45000, 2),
(3, 63, 'Proyecto CRM Para Grado', 'Adicion de personal', 'Formulario', 55000, 1),
(25, 64, 'Proyecto Gestion de Muñecos Navideños', 'Adicion formulario registro clientes', 'Formulario', 50000, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reuniones`
--

CREATE TABLE `reuniones` (
  `id_reunion` int(11) NOT NULL,
  `nombre_reunion` varchar(60) NOT NULL,
  `id_usuario` int(50) NOT NULL,
  `fecha_reunion` date NOT NULL,
  `hora_reunion` time NOT NULL,
  `asignado_reunion` varchar(50) NOT NULL,
  `descripcion_reunion` varchar(50) NOT NULL,
  `estado_reunion` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `reuniones`
--

INSERT INTO `reuniones` (`id_reunion`, `nombre_reunion`, `id_usuario`, `fecha_reunion`, `hora_reunion`, `asignado_reunion`, `descripcion_reunion`, `estado_reunion`) VALUES
(42, 'Reunion Nueva', 64, '2021-06-16', '15:30:00', 'Area Comercial', 'Nueva Reunion', 'Activa'),
(43, 'Reunion Nueva', 63, '2021-06-15', '16:30:00', 'Area Comercial', 'Nueva', 'Activa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `telefonos`
--

CREATE TABLE `telefonos` (
  `id_telefono` int(11) NOT NULL,
  `id_lead` int(50) NOT NULL,
  `lead_telefono` varchar(20) NOT NULL,
  `telefono_telefono` varchar(100) NOT NULL,
  `tipo_telefono` varchar(50) DEFAULT NULL,
  `priorida_telefono` int(11) DEFAULT NULL,
  `vigencia_telefono` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `telefonos`
--

INSERT INTO `telefonos` (`id_telefono`, `id_lead`, `lead_telefono`, `telefono_telefono`, `tipo_telefono`, `priorida_telefono`, `vigencia_telefono`) VALUES
(64, 63, 'Juan Sebastian Rinco', 'juanrinconaxl926@gmail.com', 'Email', 3, 1),
(65, 63, 'Juan Sebastian Rinco', '1234567', 'Telefono Fijo', 2, 1),
(66, 64, 'Nubia  Calderon ', 'nucalz71@gmail.com', 'Email', 3, 1);

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
(63, 'jsebas', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 2),
(64, 'nucalz', '2ee87a429d1a4c634d4371ec8f762661d19cf588', 2);

--
-- Índices para tablas volcadas
--

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
  ADD PRIMARY KEY (`id_lead`);

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
-- AUTO_INCREMENT de la tabla `estados`
--
ALTER TABLE `estados`
  MODIFY `id_estado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `facturas`
--
ALTER TABLE `facturas`
  MODIFY `cod_factura` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `leads`
--
ALTER TABLE `leads`
  MODIFY `id_lead` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  MODIFY `id_proyecto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT de la tabla `requerimientos_proyectos`
--
ALTER TABLE `requerimientos_proyectos`
  MODIFY `id_requerimiento` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `reuniones`
--
ALTER TABLE `reuniones`
  MODIFY `id_reunion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT de la tabla `telefonos`
--
ALTER TABLE `telefonos`
  MODIFY `id_telefono` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
