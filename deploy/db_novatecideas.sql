-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-04-2019 a las 22:39:54
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
-- Base de datos: `db_novatecideas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ideas`
--

CREATE TABLE `ideas` (
  `id_Idea` int(3) NOT NULL,
  `id_user` int(11) DEFAULT NULL,
  `argumento` varchar(200) CHARACTER SET armscii8 NOT NULL,
  `estado` enum('propuesta','comite','rechazada','moribunda','debate','muerta','aprobada') COLLATE utf8_spanish_ci NOT NULL,
  `f_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `f_aprobacion` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `f_muerte` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `votos` tinyint(4) NOT NULL,
  `formulario` text COLLATE utf8_spanish_ci NOT NULL,
  `memorias` text COLLATE utf8_spanish_ci NOT NULL,
  `id` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `ideas`
--

INSERT INTO `ideas` (`id_Idea`, `id_user`, `argumento`, `estado`, `f_creacion`, `f_aprobacion`, `f_muerte`, `votos`, `formulario`, `memorias`, `id`) VALUES
(1, 2, 'propongo idea 1 Es un hecho establecido hace demasiado tiempo que un lector se distraer? con el contenido del texto de un sitio mientras que mira su dise?o. El punto de usar Lorem Ipsum es que tiene u', 'muerta', '2019-03-29 15:22:49', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 4, '', '', 0),
(4, 8, 'propongo idea 4 Es un hecho establecido hace demasiado tiempo que un lector se distraer? con el contenido del texto de un sitio mientras que mira su dise?o. El punto de usar Lorem Ipsum es que tiene u', 'muerta', '2019-03-28 19:29:06', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2, '', '', 0),
(13, 26, 'propongo idea 13 Es un hecho establecido hace demasiado tiempo que un lector se distraer? con el contenido del texto de un sitio mientras que mira su dise?o. El punto de usar Lorem Ipsum es que tiene ', 'muerta', '2019-04-04 14:57:19', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 3, '', '', 0),
(21, 42, 'propongo idea 21 Es un hecho establecido hace demasiado tiempo que un lector se distraer? con el contenido del texto de un sitio mientras que mira su dise?o. El punto de usar Lorem Ipsum es que tiene ', 'aprobada', '2019-03-29 20:33:54', '2019-03-12 05:00:00', '0000-00-00 00:00:00', 13, '', '', 0),
(25, 50, 'propongo idea 25 Es un hecho establecido hace demasiado tiempo que un lector se distraer? con el contenido del texto de un sitio mientras que mira su dise?o. El punto de usar Lorem Ipsum es que tiene ', 'aprobada', '2019-03-29 20:33:03', '2019-03-12 05:00:00', '0000-00-00 00:00:00', 13, '', '', 0),
(26, 52, 'propongo idea 26 Es un hecho establecido hace demasiado tiempo que un lector se distraer? con el contenido del texto de un sitio mientras que mira su dise?o. El punto de usar Lorem Ipsum es que tiene ', 'aprobada', '2019-03-27 19:27:51', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 8, '', '', 0),
(27, 54, 'propongo idea 27 Es un hecho establecido hace demasiado tiempo que un lector se distraer? con el contenido del texto de un sitio mientras que mira su dise?o. El punto de usar Lorem Ipsum es que tiene ', 'aprobada', '2019-03-01 05:00:00', '2019-03-12 05:00:00', '0000-00-00 00:00:00', 12, '', '', 0),
(28, 56, 'propongo idea 28 Es un hecho establecido hace demasiado tiempo que un lector se distraer? con el contenido del texto de un sitio mientras que mira su dise?o. El punto de usar Lorem Ipsum es que tiene ', 'aprobada', '2019-03-27 19:27:43', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 6, '', '', 0),
(29, 58, 'propongo idea 29 Es un hecho establecido hace demasiado tiempo que un lector se distraer? con el contenido del texto de un sitio mientras que mira su dise?o. El punto de usar Lorem Ipsum es que tiene ', 'aprobada', '2019-03-29 20:33:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 13, '', '', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id_user` int(11) NOT NULL,
  `email` varchar(150) COLLATE utf8_spanish_ci NOT NULL,
  `username` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `type` enum('basic','admin','comite','') COLLATE utf8_spanish_ci NOT NULL,
  `password` varchar(10) COLLATE utf8_spanish_ci NOT NULL,
  `first_name` varchar(100) COLLATE utf8_spanish_ci NOT NULL,
  `last_name` varchar(50) CHARACTER SET armscii8 NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id_user`, `email`, `username`, `type`, `password`, `first_name`, `last_name`, `create_at`) VALUES
(2, '2NICK@notatec.com.co', '2NICK', 'basic', '123', 'NICK', 'WAHLBERG', '0000-00-00 00:00:00'),
(8, '8MATTHEW@notatec.com.co', '8MATTHEW', 'basic', '123', 'MATTHEW', 'JOHANSSON', '0000-00-00 00:00:00'),
(26, '26RIP@notatec.com.co', '26RIP', 'basic', '123', 'RIP', 'CRAWFORD', '0000-00-00 00:00:00'),
(42, '42TOM@notatec.com.co', '42TOM', 'basic', '123', 'TOM', 'MIRANDA', '0000-00-00 00:00:00'),
(50, '50NATALIE@notatec.com.co', '50NATALIE', 'basic', '123', 'NATALIE', 'HOPKINS', '0000-00-00 00:00:00'),
(52, '52CARMEN@notatec.com.co', '52CARMEN', 'basic', '123', 'CARMEN', 'HUNT', '0000-00-00 00:00:00'),
(54, '54PENELOPE@notatec.com.co', '54PENELOPE', 'basic', '123', 'PENELOPE', 'PINKETT', '0000-00-00 00:00:00'),
(56, '56DAN@notatec.com.co', '56DAN', 'basic', '123', 'DAN', 'HARRIS', '0000-00-00 00:00:00'),
(58, '58CHRISTIAN@notatec.com.co', '58CHRISTIAN', 'basic', '123', 'CHRISTIAN', 'AKROYD', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `votacion`
--

CREATE TABLE `votacion` (
  `id_votacion` int(11) NOT NULL,
  `id_idea` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `puntaje` int(11) NOT NULL,
  `votos` int(11) NOT NULL,
  `tipo` varchar(20) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `votacion`
--

INSERT INTO `votacion` (`id_votacion`, `id_idea`, `id_user`, `puntaje`, `votos`, `tipo`) VALUES
(1, 5, 2, 0, 0, ''),
(2, 14, 4, 0, 0, ''),
(3, 2, 6, 0, 0, ''),
(4, 17, 8, 0, 0, ''),
(5, 6, 10, 0, 0, ''),
(6, 20, 12, 0, 0, ''),
(7, 22, 14, 0, 0, ''),
(8, 8, 16, 0, 0, ''),
(9, 2, 18, 0, 0, ''),
(10, 14, 20, 0, 0, ''),
(11, 22, 22, 0, 0, ''),
(12, 6, 24, 0, 0, ''),
(13, 25, 26, 0, 0, ''),
(14, 1, 28, 0, 0, ''),
(15, 17, 30, 0, 0, ''),
(16, 14, 32, 0, 0, ''),
(17, 27, 34, 0, 0, ''),
(18, 15, 36, 0, 0, ''),
(19, 4, 38, 0, 0, ''),
(20, 7, 40, 0, 0, ''),
(21, 28, 42, 0, 0, ''),
(22, 25, 44, 0, 0, ''),
(23, 20, 46, 0, 0, ''),
(24, 27, 48, 0, 0, ''),
(25, 22, 50, 0, 0, ''),
(26, 27, 52, 0, 0, ''),
(27, 28, 54, 0, 0, ''),
(28, 8, 56, 0, 0, ''),
(29, 27, 58, 0, 0, ''),
(30, 27, 61, 0, 0, ''),
(31, 20, 63, 0, 0, ''),
(32, 27, 65, 0, 0, ''),
(33, 15, 67, 0, 0, ''),
(34, 4, 69, 0, 0, ''),
(35, 22, 71, 0, 0, ''),
(36, 25, 73, 0, 0, ''),
(37, 20, 75, 0, 0, ''),
(38, 29, 77, 0, 0, ''),
(39, 6, 79, 0, 0, ''),
(40, 29, 81, 0, 0, ''),
(41, 7, 83, 0, 0, ''),
(42, 29, 85, 0, 0, ''),
(43, 27, 87, 0, 0, ''),
(44, 22, 89, 0, 0, ''),
(45, 29, 91, 0, 0, ''),
(46, 8, 93, 0, 0, ''),
(47, 28, 95, 0, 0, ''),
(48, 6, 97, 0, 0, ''),
(49, 17, 99, 0, 0, ''),
(50, 15, 1, 0, 0, ''),
(51, 5, 2, 0, 0, ''),
(52, 20, 3, 0, 0, ''),
(53, 22, 4, 0, 0, ''),
(54, 2, 5, 0, 0, ''),
(55, 25, 6, 0, 0, ''),
(56, 23, 7, 0, 0, ''),
(57, 10, 8, 0, 0, ''),
(58, 27, 9, 0, 0, ''),
(59, 7, 10, 0, 0, ''),
(60, 29, 11, 0, 0, ''),
(61, 28, 12, 0, 0, ''),
(62, 22, 13, 0, 0, ''),
(63, 6, 14, 0, 0, ''),
(64, 8, 15, 0, 0, ''),
(65, 13, 16, 0, 0, ''),
(66, 15, 17, 0, 0, ''),
(67, 25, 18, 0, 0, ''),
(68, 3, 19, 0, 0, ''),
(69, 29, 20, 0, 0, ''),
(70, 27, 21, 0, 0, ''),
(71, 22, 22, 0, 0, ''),
(72, 29, 23, 0, 0, ''),
(73, 29, 24, 0, 0, ''),
(74, 23, 25, 0, 0, ''),
(75, 15, 26, 0, 0, ''),
(76, 26, 27, 0, 0, ''),
(77, 22, 28, 0, 0, ''),
(78, 2, 29, 0, 0, ''),
(79, 21, 30, 0, 0, ''),
(80, 7, 31, 0, 0, ''),
(81, 17, 32, 0, 0, ''),
(82, 8, 33, 0, 0, ''),
(83, 22, 34, 0, 0, ''),
(84, 24, 35, 0, 0, ''),
(85, 23, 36, 0, 0, ''),
(86, 10, 37, 0, 0, ''),
(87, 15, 38, 0, 0, ''),
(88, 25, 39, 0, 0, ''),
(89, 18, 40, 0, 0, ''),
(90, 6, 41, 0, 0, ''),
(91, 22, 42, 0, 0, ''),
(92, 3, 43, 0, 0, ''),
(93, 21, 44, 0, 0, ''),
(94, 27, 45, 0, 0, ''),
(95, 25, 46, 0, 0, ''),
(96, 9, 47, 0, 0, ''),
(97, 23, 48, 0, 0, ''),
(98, 26, 49, 0, 0, ''),
(99, 24, 50, 0, 0, ''),
(100, 11, 51, 0, 0, ''),
(101, 7, 52, 0, 0, ''),
(102, 5, 53, 0, 0, ''),
(103, 21, 54, 0, 0, ''),
(104, 18, 55, 0, 0, ''),
(105, 19, 56, 0, 0, ''),
(106, 11, 57, 0, 0, ''),
(107, 21, 58, 0, 0, ''),
(108, 23, 59, 0, 0, ''),
(109, 24, 60, 0, 0, ''),
(110, 3, 61, 0, 0, ''),
(111, 2, 62, 0, 0, ''),
(112, 25, 63, 0, 0, ''),
(113, 26, 64, 0, 0, ''),
(114, 21, 65, 0, 0, ''),
(115, 11, 66, 0, 0, ''),
(116, 18, 67, 0, 0, ''),
(117, 23, 68, 0, 0, ''),
(118, 24, 69, 0, 0, ''),
(119, 9, 70, 0, 0, ''),
(120, 28, 71, 0, 0, ''),
(121, 25, 72, 0, 0, ''),
(122, 27, 73, 0, 0, ''),
(123, 16, 74, 0, 0, ''),
(124, 11, 75, 0, 0, ''),
(125, 28, 76, 0, 0, ''),
(126, 23, 77, 0, 0, ''),
(127, 21, 78, 0, 0, ''),
(128, 26, 79, 0, 0, ''),
(129, 6, 80, 0, 0, ''),
(130, 25, 81, 0, 0, ''),
(131, 21, 82, 0, 0, ''),
(132, 24, 83, 0, 0, ''),
(133, 11, 84, 0, 0, ''),
(134, 3, 85, 0, 0, ''),
(135, 23, 86, 0, 0, ''),
(136, 27, 87, 0, 0, ''),
(137, 7, 88, 0, 0, ''),
(138, 25, 89, 0, 0, ''),
(139, 16, 90, 0, 0, ''),
(140, 26, 91, 0, 0, ''),
(141, 29, 92, 0, 0, ''),
(142, 21, 93, 0, 0, ''),
(143, 29, 94, 0, 0, ''),
(144, 23, 95, 0, 0, ''),
(145, 11, 96, 0, 0, ''),
(146, 24, 97, 0, 0, ''),
(147, 21, 98, 0, 0, ''),
(148, 12, 99, 0, 0, ''),
(149, 26, 2, 0, 0, ''),
(150, 5, 4, 0, 0, ''),
(151, 11, 6, 0, 0, ''),
(152, 25, 8, 0, 0, ''),
(153, 23, 10, 0, 0, ''),
(154, 16, 12, 0, 0, ''),
(155, 29, 14, 0, 0, ''),
(156, 6, 16, 0, 0, ''),
(157, 21, 18, 0, 0, ''),
(158, 7, 20, 0, 0, ''),
(159, 24, 22, 0, 0, ''),
(160, 11, 24, 0, 0, ''),
(161, 26, 26, 0, 0, ''),
(162, 29, 28, 0, 0, ''),
(163, 23, 30, 0, 0, ''),
(164, 3, 32, 0, 0, ''),
(165, 21, 34, 0, 0, ''),
(166, 26, 36, 0, 0, ''),
(167, 16, 38, 0, 0, ''),
(168, 24, 40, 0, 0, ''),
(169, 11, 42, 0, 0, ''),
(170, 23, 44, 0, 0, ''),
(171, 21, 46, 0, 0, ''),
(172, 16, 48, 0, 0, ''),
(173, 12, 50, 0, 0, ''),
(174, 5, 52, 0, 0, ''),
(175, 11, 54, 0, 0, ''),
(176, 7, 56, 0, 0, ''),
(177, 6, 58, 0, 0, ''),
(178, 3, 60, 0, 0, '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ideas`
--
ALTER TABLE `ideas`
  ADD PRIMARY KEY (`id_Idea`),
  ADD KEY `id_user` (`id_user`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- Indices de la tabla `votacion`
--
ALTER TABLE `votacion`
  ADD PRIMARY KEY (`id_votacion`),
  ADD KEY `id_idea` (`id_idea`),
  ADD KEY `id_user` (`id_user`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ideas`
--
ALTER TABLE `ideas`
  MODIFY `id_Idea` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT de la tabla `votacion`
--
ALTER TABLE `votacion`
  MODIFY `id_votacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=179;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `ideas`
--
ALTER TABLE `ideas`
  ADD CONSTRAINT `ideas_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);

--
-- Filtros para la tabla `votacion`
--
ALTER TABLE `votacion`
  ADD CONSTRAINT `votacion_ibfk_1` FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`),
  ADD CONSTRAINT `votacion_ibfk_2` FOREIGN KEY (`id_idea`) REFERENCES `ideas` (`id_Idea`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
