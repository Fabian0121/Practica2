-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-02-2021 a las 06:15:16
-- Versión del servidor: 10.1.38-MariaDB
-- Versión de PHP: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `practica2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tareas`
--

CREATE TABLE `tareas` (
  `id_tarea` int(11) NOT NULL,
  `nombre_Usuario` text NOT NULL,
  `titulo` text NOT NULL,
  `materia` varchar(32) NOT NULL,
  `fecha_entrega` date NOT NULL,
  `instrucciones` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tareas`
--

INSERT INTO `tareas` (`id_tarea`, `nombre_Usuario`, `titulo`, `materia`, `fecha_entrega`, `instrucciones`) VALUES
(1, 'Daniel', 'Practica', 'Historia', '2021-02-02', 'Informe'),
(2, 'Rafa69', 'Ejercicios', 'Matematicas', '2021-02-21', 'Realiza los ejercicios que se dejaron en clase'),
(4, 'FABIAN', 'Practica2', 'Servidor Cliente', '2021-03-01', 'Subir video'),
(5, 'FABIAN', 'Documentacion', 'Arquitectura de software', '2021-02-28', 'Documentacion'),
(6, 'Clara', 'Documentacion', 'Arquitectura de software', '2021-02-28', 'Documentacion'),
(7, 'Tony', 'Ejercicios', 'Matematicas', '2021-03-10', 'Documentacion'),
(9, 'Daniel', 'Repaso', 'Ingles', '2021-02-27', 'Repaso de los temas vistos en clase, para reforzas temas'),
(10, 'FABIAN', 'Subir archivo a repositorio', 'Servidor Cliente', '2021-02-25', 'Subir las practicas a repositorio'),
(11, 'Tony', 'Ejercicios', 'Matematicas', '2021-02-26', 'Haz el caso de estudio de la materia'),
(12, 'Rafa69', 'Reporte', 'Español', '2021-02-28', 'Leer un libro para hacer un reporte');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tareas`
--
ALTER TABLE `tareas`
  ADD PRIMARY KEY (`id_tarea`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tareas`
--
ALTER TABLE `tareas`
  MODIFY `id_tarea` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
