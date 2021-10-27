-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 26-10-2021 a las 21:55:37
-- Versión del servidor: 8.0.25
-- Versión de PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `aspa_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencia`
--

CREATE TABLE `asistencia` (
  `id_asistencia` int NOT NULL,
  `ausensia` varchar(20) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `asistencia_activo` tinyint DEFAULT '1',
  `FR_asistencia` datetime DEFAULT CURRENT_TIMESTAMP,
  `horario_id_horario` int DEFAULT NULL,
  `excusa_id_excusa` int DEFAULT NULL,
  `horario_id_horario1` int NOT NULL,
  `excusa_id_excusa1` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_excusa`
--

CREATE TABLE `estado_excusa` (
  `id_estado_excusa` int NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `estado_excusa_activo` tinyint DEFAULT '1',
  `FR_estado_excusa` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `excusa`
--

CREATE TABLE `excusa` (
  `id_excusa` int NOT NULL,
  `motivo` varchar(45) DEFAULT NULL,
  `descripcion` text,
  `imagen` blob,
  `revisado` varchar(45) DEFAULT NULL,
  `usuario_revisado` varchar(45) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `excusa_activo` tinyint DEFAULT '1',
  `FR_excusa` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `horario`
--

CREATE TABLE `horario` (
  `id_horario` int NOT NULL,
  `dia` varchar(20) DEFAULT NULL,
  `hora` int DEFAULT NULL,
  `horario_activo` tinyint DEFAULT '1',
  `FR_horario` datetime DEFAULT CURRENT_TIMESTAMP,
  `usuarios_id_usuarios` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jornada`
--

CREATE TABLE `jornada` (
  `id_jornada` int NOT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `jornada_activo` tinyint DEFAULT '1',
  `FR_jornada` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `rol_id` int NOT NULL,
  `rol_nombre` varchar(12) NOT NULL,
  `rol_fr` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `rol_activo` tinyint NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`rol_id`, `rol_nombre`, `rol_fr`, `rol_activo`) VALUES
(1, 'admin', '2021-10-20 20:14:30', 1),
(2, 'user', '2021-10-20 20:14:30', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuarios` int NOT NULL,
  `imagen_u` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `nombre` varchar(45) NOT NULL,
  `apellidos` varchar(45) NOT NULL,
  `genero` varchar(12) DEFAULT NULL,
  `email` varchar(45) NOT NULL,
  `telefono` varchar(14) DEFAULT NULL,
  `direccion` varchar(45) DEFAULT NULL,
  `nombre_acudiente` varchar(45) NOT NULL,
  `apellido_acudiente` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `telefono_acudiente` varchar(14) NOT NULL,
  `email_acudiente` varchar(45) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `username` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `password` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `activo_usuarios` tinyint DEFAULT '1',
  `FR_usuarios` datetime DEFAULT CURRENT_TIMESTAMP,
  `excusa_id_excusa` int DEFAULT NULL,
  `horario_id_horario` int DEFAULT NULL,
  `excusa_id_excusa1` int DEFAULT NULL,
  `roles_id` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuarios`, `imagen_u`, `nombre`, `apellidos`, `genero`, `email`, `telefono`, `direccion`, `nombre_acudiente`, `apellido_acudiente`, `telefono_acudiente`, `email_acudiente`, `username`, `password`, `activo_usuarios`, `FR_usuarios`, `excusa_id_excusa`, `horario_id_horario`, `excusa_id_excusa1`, `roles_id`) VALUES
(1, NULL, 'juanca', 'villada', 'masculino', 'ep0322937@gmail.com', '3176456439', '054040', 'juan', 'villada', '3176456439', 'juan@gmail.com', 'juan', 'd827f12e35eae370ba9c65b7f6026695', 1, '2021-10-20 20:20:52', NULL, NULL, NULL, 1),
(2, NULL, 'majo', 'Vallejo González', 'femenino', 'juancamilosanchezvillada@gmail.com', '3176456439', '054040', 'majo', 'villada', '3176456439', 'majo@gmail.com', 'majo', 'd827f12e35eae370ba9c65b7f6026695', 1, '2021-10-20 20:21:57', NULL, NULL, NULL, 2),
(14, NULL, 'juan', 'villada', 'masculino', 'cesarvillada15@hotmail.com', '3176456439', '054040', 'juan', 'villada', '3113276826', 'juan20@gmail.com', NULL, NULL, 1, '2021-10-21 21:02:05', NULL, NULL, NULL, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  ADD PRIMARY KEY (`id_asistencia`);

--
-- Indices de la tabla `estado_excusa`
--
ALTER TABLE `estado_excusa`
  ADD PRIMARY KEY (`id_estado_excusa`);

--
-- Indices de la tabla `excusa`
--
ALTER TABLE `excusa`
  ADD PRIMARY KEY (`id_excusa`);

--
-- Indices de la tabla `horario`
--
ALTER TABLE `horario`
  ADD PRIMARY KEY (`id_horario`);

--
-- Indices de la tabla `jornada`
--
ALTER TABLE `jornada`
  ADD PRIMARY KEY (`id_jornada`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`rol_id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuarios`),
  ADD KEY `roles` (`roles_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  MODIFY `id_asistencia` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `estado_excusa`
--
ALTER TABLE `estado_excusa`
  MODIFY `id_estado_excusa` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `excusa`
--
ALTER TABLE `excusa`
  MODIFY `id_excusa` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `horario`
--
ALTER TABLE `horario`
  MODIFY `id_horario` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `rol_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuarios` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `roles` FOREIGN KEY (`roles_id`) REFERENCES `roles` (`rol_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
