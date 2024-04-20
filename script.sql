-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 18-04-2024 a las 04:57:23
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `school`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `attendance_class`
--

CREATE TABLE `attendance_class` (
  `id_attendance_class` int(11) NOT NULL,
  `class` int(11) NOT NULL,
  `children` int(11) NOT NULL,
  `createdat` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `attendance_event`
--

CREATE TABLE `attendance_event` (
  `id_att_event` int(11) NOT NULL,
  `children` int(11) NOT NULL,
  `event` int(11) NOT NULL,
  `createdat` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `children`
--

CREATE TABLE `children` (
  `id_children` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `father` int(11) NOT NULL,
  `user` int(11) NOT NULL,
  `alert_cook` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `class`
--

CREATE TABLE `class` (
  `id_class` int(11) NOT NULL,
  `name` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cook`
--

CREATE TABLE `cook` (
  `id_cook` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `descripction` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cook_children`
--

CREATE TABLE `cook_children` (
  `id_children_cook` int(11) NOT NULL,
  `cook` int(11) NOT NULL,
  `children` int(11) NOT NULL,
  `datecreated` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `event`
--

CREATE TABLE `event` (
  `id_event` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `date` date NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `father`
--

CREATE TABLE `father` (
  `id_father` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `mobile` varchar(250) NOT NULL,
  `user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `teacher`
--

CREATE TABLE `teacher` (
  `id_teacher` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `mobile` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `user` varchar(100) NOT NULL,
  `password` varchar(250) NOT NULL,
  `createdat` timestamp NOT NULL DEFAULT current_timestamp(),
  `estado` int(11) NOT NULL DEFAULT 1,
  `role` varchar(100) NOT NULL DEFAULT 'Administrador',
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `attendance_class`
--
ALTER TABLE `attendance_class`
  ADD PRIMARY KEY (`id_attendance_class`),
  ADD KEY `id_class_fk` (`class`),
  ADD KEY `id_childre_fk` (`children`);

--
-- Indices de la tabla `attendance_event`
--
ALTER TABLE `attendance_event`
  ADD KEY `id_children_fk_id` (`children`),
  ADD KEY `id_event_fk` (`event`);

--
-- Indices de la tabla `children`
--
ALTER TABLE `children`
  ADD PRIMARY KEY (`id_children`),
  ADD KEY `id_user_fk_chi` (`user`),
  ADD KEY `id_father_fk` (`father`);

--
-- Indices de la tabla `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`id_class`);

--
-- Indices de la tabla `cook`
--
ALTER TABLE `cook`
  ADD PRIMARY KEY (`id_cook`);

--
-- Indices de la tabla `cook_children`
--
ALTER TABLE `cook_children`
  ADD PRIMARY KEY (`id_children_cook`),
  ADD KEY `id_cook_fk_children` (`cook`),
  ADD KEY `id_cook_children` (`children`);

--
-- Indices de la tabla `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id_event`);

--
-- Indices de la tabla `father`
--
ALTER TABLE `father`
  ADD PRIMARY KEY (`id_father`),
  ADD KEY `id_user_father_fk` (`user`);

--
-- Indices de la tabla `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`id_teacher`),
  ADD KEY `id_user_teacher_fk` (`user`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `attendance_class`
--
ALTER TABLE `attendance_class`
  MODIFY `id_attendance_class` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `children`
--
ALTER TABLE `children`
  MODIFY `id_children` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `class`
--
ALTER TABLE `class`
  MODIFY `id_class` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cook`
--
ALTER TABLE `cook`
  MODIFY `id_cook` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cook_children`
--
ALTER TABLE `cook_children`
  MODIFY `id_children_cook` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `father`
--
ALTER TABLE `father`
  MODIFY `id_father` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `teacher`
--
ALTER TABLE `teacher`
  MODIFY `id_teacher` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `attendance_class`
--
ALTER TABLE `attendance_class`
  ADD CONSTRAINT `id_childre_fk` FOREIGN KEY (`children`) REFERENCES `children` (`id_children`),
  ADD CONSTRAINT `id_class_fk` FOREIGN KEY (`class`) REFERENCES `class` (`id_class`);

--
-- Filtros para la tabla `attendance_event`
--
ALTER TABLE `attendance_event`
  ADD CONSTRAINT `id_children_fk_id` FOREIGN KEY (`children`) REFERENCES `children` (`id_children`),
  ADD CONSTRAINT `id_event_fk` FOREIGN KEY (`event`) REFERENCES `event` (`id_event`);

--
-- Filtros para la tabla `children`
--
ALTER TABLE `children`
  ADD CONSTRAINT `id_father_fk` FOREIGN KEY (`father`) REFERENCES `father` (`id_father`),
  ADD CONSTRAINT `id_user_fk_chi` FOREIGN KEY (`user`) REFERENCES `user` (`id_user`);

--
-- Filtros para la tabla `cook_children`
--
ALTER TABLE `cook_children`
  ADD CONSTRAINT `id_cook_children` FOREIGN KEY (`children`) REFERENCES `children` (`id_children`),
  ADD CONSTRAINT `id_cook_fk_children` FOREIGN KEY (`cook`) REFERENCES `cook` (`id_cook`);

--
-- Filtros para la tabla `father`
--
ALTER TABLE `father`
  ADD CONSTRAINT `id_user_father_fk` FOREIGN KEY (`user`) REFERENCES `user` (`id_user`);

--
-- Filtros para la tabla `teacher`
--
ALTER TABLE `teacher`
  ADD CONSTRAINT `id_user_teacher_fk` FOREIGN KEY (`user`) REFERENCES `user` (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;