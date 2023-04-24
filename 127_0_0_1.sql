-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-04-2023 a las 00:56:00
-- Versión del servidor: 10.4.22-MariaDB
-- Versión de PHP: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `escuela`
--
CREATE DATABASE IF NOT EXISTS `escuela` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `escuela`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumnos`
--

CREATE TABLE `alumnos` (
  `Codigo` int(5) NOT NULL,
  `Nombre` varchar(100) NOT NULL,
  `Apellido` varchar(100) NOT NULL,
  `DNI` int(8) NOT NULL,
  `Edad` int(5) NOT NULL,
  `Genero` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `alumnos`
--

INSERT INTO `alumnos` (`Codigo`, `Nombre`, `Apellido`, `DNI`, `Edad`, `Genero`) VALUES
(1004, 'Luisa', 'Prost', 41448333, 21, 'Mujer'),
(1020, 'Laura', 'Amarilla', 46092338, 17, 'Mujer'),
(1038, 'Eduardo', 'Messi', 44012849, 20, 'Hombre'),
(1045, 'Micaela', 'Paez', 42041839, 18, 'Mujer'),
(1092, 'Ezequiel', 'Avila', 45032914, 20, 'Hombre'),
(1110, 'Andres', 'Ibarguen', 43777394, 23, 'Hombre'),
(1134, 'Rafaela', 'Carra', 43009272, 21, 'Mujer'),
(1194, 'Luz', 'Ramirez', 45012934, 19, 'Mujer'),
(1203, 'Camilo', 'Mayada', 44009765, 19, 'Hombre');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumnos`
--
ALTER TABLE `alumnos`
  ADD PRIMARY KEY (`Codigo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
