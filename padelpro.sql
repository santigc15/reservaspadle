-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-03-2023 a las 20:25:01
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `padelpro`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `agenda`
--

CREATE TABLE `agenda` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(150) DEFAULT NULL,
  `body` text NOT NULL,
  `url` varchar(150) NOT NULL,
  `class` varchar(45) NOT NULL DEFAULT 'event-important',
  `start` varchar(15) NOT NULL,
  `end` varchar(15) NOT NULL,
  `inicio_normal` varchar(50) NOT NULL,
  `final_normal` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pista`
--

CREATE TABLE `pista` (
  `id` int(11) NOT NULL,
  `nombre` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `pista`
--

INSERT INTO `pista` (`id`, `nombre`) VALUES
(1, 'azul'),
(2, 'roja'),
(3, 'verde'),
(4, 'pro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reservas`
--

CREATE TABLE `reservas` (
  `id` int(11) NOT NULL,
  `id_pista` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `turno` varchar(255) NOT NULL,
  `jugador1` varchar(50) NOT NULL,
  `jugador2` varchar(50) NOT NULL,
  `jugador3` varchar(50) NOT NULL,
  `jugador4` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `reservas`
--

INSERT INTO `reservas` (`id`, `id_pista`, `id_usuario`, `fecha`, `turno`, `jugador1`, `jugador2`, `jugador3`, `jugador4`) VALUES
(1, 1, 2, '2023-03-19', '3', 'marta', 'carmen', 'lucia', 'pedro'),
(2, 1, 3, '2023-03-19', '2', 'alberto', 'gabriel', 'itziar', ''),
(3, 1, 5, '2023-03-19', '6', 'Pablo', 'Luis', '', ''),
(4, 1, 4, '2023-03-20', '1', 'Mark', 'Harold', 'Gregorio', 'Anne'),
(5, 1, 3, '2023-03-21', '5', 'alberto', 'Luis', '', ''),
(6, 1, 2, '2023-03-19', '4', 'pablo', 'carlos', 'carmen', 'luis'),
(7, 1, 4, '2023-03-19', '1', 'pablo', 'luis', 'marta', 'adriana'),
(8, 2, 4, '2023-03-20', '2', 'maria', 'gabriela', 'lorena', 'alma');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `turnos`
--

CREATE TABLE `turnos` (
  `id` int(11) NOT NULL,
  `horario` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `turnos`
--

INSERT INTO `turnos` (`id`, `horario`) VALUES
(1, '9:00 - 11:00'),
(2, '11:00 - 13:00'),
(3, '13:00 - 15:00'),
(4, '15:00 - 17:00'),
(5, '17:00 - 19:00'),
(6, '19:00 - 21:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `email` varchar(150) NOT NULL,
  `telefono` varchar(150) NOT NULL,
  `contrasena` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `email`, `telefono`, `contrasena`) VALUES
(2, 'Alberto', 'alberto@gmail.com', '986542896', '$2y$10$WxKNG1k9wGWvrO512wXVde4PkcCWnqi...dgqe5.ZE75hw7difGty'),
(3, 'Maria', 'maria@gmail.com', '986542136', '$2y$10$mXJ0BsuA9c2klnyKeIwXguxccJxWcGltBIhcwA093.XQCoqvI3oKm'),
(4, 'Carlos', 'carlos@gmail.com', '986542896', '$2y$10$XomkysURlhfZrl52TCM25e46uPVbW/SAFN1/WRD8glNkGlbR5WWTm'),
(5, 'Carlota', 'carlota@gmail.com', '625896356', '$2y$10$yR78UsaWJCEhgbeA.kijreYFaSlUMnPp.gwyYjALv.TwC/pahfHyW'),
(6, 'Rodrigo', 'rodrigo@gmail.com', '616528554', '$2y$10$WUVqTNl8p9KftzEb47/D9O3unJTOjzdoVFnM8iMVIWka/xQfSnIUG'),
(7, 'Lucia', 'lucia@gmail.com', '988236358', '$2y$10$BRCXVwExwXpMfjQ6j65d5eFN0lh6QfXSO6KXKYMlGGLwzzbRhewMi');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `inicio_normal` (`inicio_normal`),
  ADD UNIQUE KEY `final_normal` (`final_normal`);

--
-- Indices de la tabla `pista`
--
ALTER TABLE `pista`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `reservas`
--
ALTER TABLE `reservas`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `turnos`
--
ALTER TABLE `turnos`
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
-- AUTO_INCREMENT de la tabla `agenda`
--
ALTER TABLE `agenda`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT de la tabla `pista`
--
ALTER TABLE `pista`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `reservas`
--
ALTER TABLE `reservas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `turnos`
--
ALTER TABLE `turnos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
