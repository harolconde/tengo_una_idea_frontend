-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-03-2019 a las 00:23:52
-- Versión del servidor: 10.1.36-MariaDB
-- Versión de PHP: 5.6.38

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
  `id_user` int(11) NOT NULL,
  `titulo` varchar(40) COLLATE utf8_spanish_ci NOT NULL,
  `argumento` varchar(500) CHARACTER SET armscii8 NOT NULL,
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

INSERT INTO `ideas` (`id_Idea`, `id_user`, `titulo`, `argumento`, `estado`, `f_creacion`, `f_aprobacion`, `f_muerte`, `votos`, `formulario`, `memorias`, `id`) VALUES
(1, 2, '', 'propongo idea 1 Es un hecho establecido hace demasiado tiempo que un lector se distraer? con el contenido del texto de un sitio mientras que mira su dise?o. El punto de usar Lorem Ipsum es que tiene una distribuci?n m?s o menos normal de las letras, al contrario de usar textos como por ejemplo \"Contenido aqu?, contenido aqu?\". Estos textos hacen parecerlo un espa?ol que se puede leer. Muchos paquetes de autoedici?n y editores de p?ginas web usan el Lorem Ipsum como su texto por defecto, y al hac', 'propuesta', '2019-03-18 17:00:58', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 3, '', '', 0),
(2, 4, '', 'propongo idea 2 Es un hecho establecido hace demasiado tiempo que un lector se distraer? con el contenido del texto de un sitio mientras que mira su dise?o. El punto de usar Lorem Ipsum es que tiene una distribuci?n m?s o menos normal de las letras, al contrario de usar textos como por ejemplo \"Contenido aqu?, contenido aqu?\". Estos textos hacen parecerlo un espa?ol que se puede leer. Muchos paquetes de autoedici?n y editores de p?ginas web usan el Lorem Ipsum como su texto por defecto, y al hac', 'propuesta', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 5, '', '', 0),
(3, 6, '', 'propongo idea 3 Es un hecho establecido hace demasiado tiempo que un lector se distraer? con el contenido del texto de un sitio mientras que mira su dise?o. El punto de usar Lorem Ipsum es que tiene una distribuci?n m?s o menos normal de las letras, al contrario de usar textos como por ejemplo \"Contenido aqu?, contenido aqu?\". Estos textos hacen parecerlo un espa?ol que se puede leer. Muchos paquetes de autoedici?n y editores de p?ginas web usan el Lorem Ipsum como su texto por defecto, y al hac', 'propuesta', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 6, '', '', 0),
(4, 8, '', 'propongo idea 4 Es un hecho establecido hace demasiado tiempo que un lector se distraer? con el contenido del texto de un sitio mientras que mira su dise?o. El punto de usar Lorem Ipsum es que tiene una distribuci?n m?s o menos normal de las letras, al contrario de usar textos como por ejemplo \"Contenido aqu?, contenido aqu?\". Estos textos hacen parecerlo un espa?ol que se puede leer. Muchos paquetes de autoedici?n y editores de p?ginas web usan el Lorem Ipsum como su texto por defecto, y al hac', 'propuesta', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2, '', '', 0),
(5, 10, '', 'propongo idea 5 Es un hecho establecido hace demasiado tiempo que un lector se distraer? con el contenido del texto de un sitio mientras que mira su dise?o. El punto de usar Lorem Ipsum es que tiene una distribuci?n m?s o menos normal de las letras, al contrario de usar textos como por ejemplo \"Contenido aqu?, contenido aqu?\". Estos textos hacen parecerlo un espa?ol que se puede leer. Muchos paquetes de autoedici?n y editores de p?ginas web usan el Lorem Ipsum como su texto por defecto, y al hac', 'propuesta', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 5, '', '', 0),
(6, 12, '', 'propongo idea 6 Es un hecho establecido hace demasiado tiempo que un lector se distraer? con el contenido del texto de un sitio mientras que mira su dise?o. El punto de usar Lorem Ipsum es que tiene una distribuci?n m?s o menos normal de las letras, al contrario de usar textos como por ejemplo \"Contenido aqu?, contenido aqu?\". Estos textos hacen parecerlo un espa?ol que se puede leer. Muchos paquetes de autoedici?n y editores de p?ginas web usan el Lorem Ipsum como su texto por defecto, y al hac', 'propuesta', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 9, '', '', 0),
(7, 14, '', 'propongo idea 7 Es un hecho establecido hace demasiado tiempo que un lector se distraer? con el contenido del texto de un sitio mientras que mira su dise?o. El punto de usar Lorem Ipsum es que tiene una distribuci?n m?s o menos normal de las letras, al contrario de usar textos como por ejemplo \"Contenido aqu?, contenido aqu?\". Estos textos hacen parecerlo un espa?ol que se puede leer. Muchos paquetes de autoedici?n y editores de p?ginas web usan el Lorem Ipsum como su texto por defecto, y al hac', 'propuesta', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 8, '', '', 0),
(8, 16, '', 'propongo idea 8 Es un hecho establecido hace demasiado tiempo que un lector se distraer? con el contenido del texto de un sitio mientras que mira su dise?o. El punto de usar Lorem Ipsum es que tiene una distribuci?n m?s o menos normal de las letras, al contrario de usar textos como por ejemplo \"Contenido aqu?, contenido aqu?\". Estos textos hacen parecerlo un espa?ol que se puede leer. Muchos paquetes de autoedici?n y editores de p?ginas web usan el Lorem Ipsum como su texto por defecto, y al hac', 'propuesta', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 5, '', '', 0),
(9, 18, '', 'propongo idea 9 Es un hecho establecido hace demasiado tiempo que un lector se distraer? con el contenido del texto de un sitio mientras que mira su dise?o. El punto de usar Lorem Ipsum es que tiene una distribuci?n m?s o menos normal de las letras, al contrario de usar textos como por ejemplo \"Contenido aqu?, contenido aqu?\". Estos textos hacen parecerlo un espa?ol que se puede leer. Muchos paquetes de autoedici?n y editores de p?ginas web usan el Lorem Ipsum como su texto por defecto, y al hac', 'propuesta', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2, '', '', 0),
(10, 20, '', 'propongo idea 10 Es un hecho establecido hace demasiado tiempo que un lector se distraer? con el contenido del texto de un sitio mientras que mira su dise?o. El punto de usar Lorem Ipsum es que tiene una distribuci?n m?s o menos normal de las letras, al contrario de usar textos como por ejemplo \"Contenido aqu?, contenido aqu?\". Estos textos hacen parecerlo un espa?ol que se puede leer. Muchos paquetes de autoedici?n y editores de p?ginas web usan el Lorem Ipsum como su texto por defecto, y al ha', 'propuesta', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2, '', '', 0),
(11, 22, '', 'propongo idea 11 Es un hecho establecido hace demasiado tiempo que un lector se distraer? con el contenido del texto de un sitio mientras que mira su dise?o. El punto de usar Lorem Ipsum es que tiene una distribuci?n m?s o menos normal de las letras, al contrario de usar textos como por ejemplo \"Contenido aqu?, contenido aqu?\". Estos textos hacen parecerlo un espa?ol que se puede leer. Muchos paquetes de autoedici?n y editores de p?ginas web usan el Lorem Ipsum como su texto por defecto, y al ha', 'propuesta', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 10, '', '', 0),
(12, 24, '', 'propongo idea 12 Es un hecho establecido hace demasiado tiempo que un lector se distraer? con el contenido del texto de un sitio mientras que mira su dise?o. El punto de usar Lorem Ipsum es que tiene una distribuci?n m?s o menos normal de las letras, al contrario de usar textos como por ejemplo \"Contenido aqu?, contenido aqu?\". Estos textos hacen parecerlo un espa?ol que se puede leer. Muchos paquetes de autoedici?n y editores de p?ginas web usan el Lorem Ipsum como su texto por defecto, y al ha', 'propuesta', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 2, '', '', 0),
(13, 26, '', 'propongo idea 13 Es un hecho establecido hace demasiado tiempo que un lector se distraer? con el contenido del texto de un sitio mientras que mira su dise?o. El punto de usar Lorem Ipsum es que tiene una distribuci?n m?s o menos normal de las letras, al contrario de usar textos como por ejemplo \"Contenido aqu?, contenido aqu?\". Estos textos hacen parecerlo un espa?ol que se puede leer. Muchos paquetes de autoedici?n y editores de p?ginas web usan el Lorem Ipsum como su texto por defecto, y al ha', 'propuesta', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '', '', 0),
(14, 28, '', 'propongo idea 14 Es un hecho establecido hace demasiado tiempo que un lector se distraer? con el contenido del texto de un sitio mientras que mira su dise?o. El punto de usar Lorem Ipsum es que tiene una distribuci?n m?s o menos normal de las letras, al contrario de usar textos como por ejemplo \"Contenido aqu?, contenido aqu?\". Estos textos hacen parecerlo un espa?ol que se puede leer. Muchos paquetes de autoedici?n y editores de p?ginas web usan el Lorem Ipsum como su texto por defecto, y al ha', 'propuesta', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 3, '', '', 0),
(15, 30, '', 'propongo idea 15 Es un hecho establecido hace demasiado tiempo que un lector se distraer? con el contenido del texto de un sitio mientras que mira su dise?o. El punto de usar Lorem Ipsum es que tiene una distribuci?n m?s o menos normal de las letras, al contrario de usar textos como por ejemplo \"Contenido aqu?, contenido aqu?\". Estos textos hacen parecerlo un espa?ol que se puede leer. Muchos paquetes de autoedici?n y editores de p?ginas web usan el Lorem Ipsum como su texto por defecto, y al ha', 'propuesta', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 6, '', '', 0),
(16, 32, '', 'propongo idea 16 Es un hecho establecido hace demasiado tiempo que un lector se distraer? con el contenido del texto de un sitio mientras que mira su dise?o. El punto de usar Lorem Ipsum es que tiene una distribuci?n m?s o menos normal de las letras, al contrario de usar textos como por ejemplo \"Contenido aqu?, contenido aqu?\". Estos textos hacen parecerlo un espa?ol que se puede leer. Muchos paquetes de autoedici?n y editores de p?ginas web usan el Lorem Ipsum como su texto por defecto, y al ha', 'propuesta', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 5, '', '', 0),
(17, 34, '', 'propongo idea 17 Es un hecho establecido hace demasiado tiempo que un lector se distraer? con el contenido del texto de un sitio mientras que mira su dise?o. El punto de usar Lorem Ipsum es que tiene una distribuci?n m?s o menos normal de las letras, al contrario de usar textos como por ejemplo \"Contenido aqu?, contenido aqu?\". Estos textos hacen parecerlo un espa?ol que se puede leer. Muchos paquetes de autoedici?n y editores de p?ginas web usan el Lorem Ipsum como su texto por defecto, y al ha', 'propuesta', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 4, '', '', 0),
(18, 36, '', 'propongo idea 18 Es un hecho establecido hace demasiado tiempo que un lector se distraer? con el contenido del texto de un sitio mientras que mira su dise?o. El punto de usar Lorem Ipsum es que tiene una distribuci?n m?s o menos normal de las letras, al contrario de usar textos como por ejemplo \"Contenido aqu?, contenido aqu?\". Estos textos hacen parecerlo un espa?ol que se puede leer. Muchos paquetes de autoedici?n y editores de p?ginas web usan el Lorem Ipsum como su texto por defecto, y al ha', 'propuesta', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 3, '', '', 0),
(19, 38, '', 'propongo idea 19 Es un hecho establecido hace demasiado tiempo que un lector se distraer? con el contenido del texto de un sitio mientras que mira su dise?o. El punto de usar Lorem Ipsum es que tiene una distribuci?n m?s o menos normal de las letras, al contrario de usar textos como por ejemplo \"Contenido aqu?, contenido aqu?\". Estos textos hacen parecerlo un espa?ol que se puede leer. Muchos paquetes de autoedici?n y editores de p?ginas web usan el Lorem Ipsum como su texto por defecto, y al ha', 'propuesta', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, '', '', 0),
(20, 40, '', 'propongo idea 20 Es un hecho establecido hace demasiado tiempo que un lector se distraer? con el contenido del texto de un sitio mientras que mira su dise?o. El punto de usar Lorem Ipsum es que tiene una distribuci?n m?s o menos normal de las letras, al contrario de usar textos como por ejemplo \"Contenido aqu?, contenido aqu?\". Estos textos hacen parecerlo un espa?ol que se puede leer. Muchos paquetes de autoedici?n y editores de p?ginas web usan el Lorem Ipsum como su texto por defecto, y al ha', 'propuesta', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 5, '', '', 0),
(21, 42, '', 'propongo idea 21 Es un hecho establecido hace demasiado tiempo que un lector se distraer? con el contenido del texto de un sitio mientras que mira su dise?o. El punto de usar Lorem Ipsum es que tiene una distribuci?n m?s o menos normal de las letras, al contrario de usar textos como por ejemplo \"Contenido aqu?, contenido aqu?\". Estos textos hacen parecerlo un espa?ol que se puede leer. Muchos paquetes de autoedici?n y editores de p?ginas web usan el Lorem Ipsum como su texto por defecto, y al ha', 'aprobada', '2019-03-01 05:00:00', '2019-03-12 05:00:00', '0000-00-00 00:00:00', 12, '', '', 0),
(22, 44, '', 'propongo idea 22 Es un hecho establecido hace demasiado tiempo que un lector se distraer? con el contenido del texto de un sitio mientras que mira su dise?o. El punto de usar Lorem Ipsum es que tiene una distribuci?n m?s o menos normal de las letras, al contrario de usar textos como por ejemplo \"Contenido aqu?, contenido aqu?\". Estos textos hacen parecerlo un espa?ol que se puede leer. Muchos paquetes de autoedici?n y editores de p?ginas web usan el Lorem Ipsum como su texto por defecto, y al ha', 'propuesta', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 11, '', '', 0),
(23, 46, '', 'propongo idea 23 Es un hecho establecido hace demasiado tiempo que un lector se distraer? con el contenido del texto de un sitio mientras que mira su dise?o. El punto de usar Lorem Ipsum es que tiene una distribuci?n m?s o menos normal de las letras, al contrario de usar textos como por ejemplo \"Contenido aqu?, contenido aqu?\". Estos textos hacen parecerlo un espa?ol que se puede leer. Muchos paquetes de autoedici?n y editores de p?ginas web usan el Lorem Ipsum como su texto por defecto, y al ha', 'aprobada', '2019-03-12 20:29:13', '2019-03-12 05:00:00', '0000-00-00 00:00:00', 12, '', '', 0),
(24, 48, '', 'propongo idea 24 Es un hecho establecido hace demasiado tiempo que un lector se distraer? con el contenido del texto de un sitio mientras que mira su dise?o. El punto de usar Lorem Ipsum es que tiene una distribuci?n m?s o menos normal de las letras, al contrario de usar textos como por ejemplo \"Contenido aqu?, contenido aqu?\". Estos textos hacen parecerlo un espa?ol que se puede leer. Muchos paquetes de autoedici?n y editores de p?ginas web usan el Lorem Ipsum como su texto por defecto, y al ha', 'propuesta', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 8, '', '', 0),
(25, 50, '', 'propongo idea 25 Es un hecho establecido hace demasiado tiempo que un lector se distraer? con el contenido del texto de un sitio mientras que mira su dise?o. El punto de usar Lorem Ipsum es que tiene una distribuci?n m?s o menos normal de las letras, al contrario de usar textos como por ejemplo \"Contenido aqu?, contenido aqu?\". Estos textos hacen parecerlo un espa?ol que se puede leer. Muchos paquetes de autoedici?n y editores de p?ginas web usan el Lorem Ipsum como su texto por defecto, y al ha', 'aprobada', '2019-03-01 05:00:00', '2019-03-12 05:00:00', '0000-00-00 00:00:00', 12, '', '', 0),
(26, 52, '', 'propongo idea 26 Es un hecho establecido hace demasiado tiempo que un lector se distraer? con el contenido del texto de un sitio mientras que mira su dise?o. El punto de usar Lorem Ipsum es que tiene una distribuci?n m?s o menos normal de las letras, al contrario de usar textos como por ejemplo \"Contenido aqu?, contenido aqu?\". Estos textos hacen parecerlo un espa?ol que se puede leer. Muchos paquetes de autoedici?n y editores de p?ginas web usan el Lorem Ipsum como su texto por defecto, y al ha', 'propuesta', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 8, '', '', 0),
(27, 54, '', 'propongo idea 27 Es un hecho establecido hace demasiado tiempo que un lector se distraer? con el contenido del texto de un sitio mientras que mira su dise?o. El punto de usar Lorem Ipsum es que tiene una distribuci?n m?s o menos normal de las letras, al contrario de usar textos como por ejemplo \"Contenido aqu?, contenido aqu?\". Estos textos hacen parecerlo un espa?ol que se puede leer. Muchos paquetes de autoedici?n y editores de p?ginas web usan el Lorem Ipsum como su texto por defecto, y al ha', 'aprobada', '2019-03-01 05:00:00', '2019-03-12 05:00:00', '0000-00-00 00:00:00', 12, '', '', 0),
(28, 56, '', 'propongo idea 28 Es un hecho establecido hace demasiado tiempo que un lector se distraer? con el contenido del texto de un sitio mientras que mira su dise?o. El punto de usar Lorem Ipsum es que tiene una distribuci?n m?s o menos normal de las letras, al contrario de usar textos como por ejemplo \"Contenido aqu?, contenido aqu?\". Estos textos hacen parecerlo un espa?ol que se puede leer. Muchos paquetes de autoedici?n y editores de p?ginas web usan el Lorem Ipsum como su texto por defecto, y al ha', 'propuesta', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 6, '', '', 0),
(29, 58, '', 'propongo idea 29 Es un hecho establecido hace demasiado tiempo que un lector se distraer? con el contenido del texto de un sitio mientras que mira su dise?o. El punto de usar Lorem Ipsum es que tiene una distribuci?n m?s o menos normal de las letras, al contrario de usar textos como por ejemplo \"Contenido aqu?, contenido aqu?\". Estos textos hacen parecerlo un espa?ol que se puede leer. Muchos paquetes de autoedici?n y editores de p?ginas web usan el Lorem Ipsum como su texto por defecto, y al ha', 'aprobada', '2019-03-12 20:12:28', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 12, '', '', 0);

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
(1, '1PENELOPE@notatec.com.co', '1PENELOPE', 'basic', '123', 'PENELOPE', 'GUINESS', '0000-00-00 00:00:00'),
(2, '2NICK@notatec.com.co', '2NICK', 'basic', '123', 'NICK', 'WAHLBERG', '0000-00-00 00:00:00'),
(3, '3ED@notatec.com.co', '3ED', 'basic', '123', 'ED', 'CHASE', '0000-00-00 00:00:00'),
(4, '4JENNIFER@notatec.com.co', '4JENNIFER', 'basic', '123', 'JENNIFER', 'DAVIS', '0000-00-00 00:00:00'),
(5, '5JOHNNY@notatec.com.co', '5JOHNNY', 'basic', '123', 'JOHNNY', 'LOLLOBRIGIDA', '0000-00-00 00:00:00'),
(6, '6BETTE@notatec.com.co', '6BETTE', 'basic', '123', 'BETTE', 'NICHOLSON', '0000-00-00 00:00:00'),
(7, '7GRACE@notatec.com.co', '7GRACE', 'basic', '123', 'GRACE', 'MOSTEL', '0000-00-00 00:00:00'),
(8, '8MATTHEW@notatec.com.co', '8MATTHEW', 'basic', '123', 'MATTHEW', 'JOHANSSON', '0000-00-00 00:00:00'),
(9, '9JOE@notatec.com.co', '9JOE', 'basic', '123', 'JOE', 'SWANK', '0000-00-00 00:00:00'),
(10, '10CHRISTIAN@notatec.com.co', '10CHRISTIAN', 'basic', '123', 'CHRISTIAN', 'GABLE', '0000-00-00 00:00:00'),
(11, '11ZERO@notatec.com.co', '11ZERO', 'basic', '123', 'ZERO', 'CAGE', '0000-00-00 00:00:00'),
(12, '12KARL@notatec.com.co', '12KARL', 'basic', '123', 'KARL', 'BERRY', '0000-00-00 00:00:00'),
(13, '13UMA@notatec.com.co', '13UMA', 'basic', '123', 'UMA', 'WOOD', '0000-00-00 00:00:00'),
(14, '14VIVIEN@notatec.com.co', '14VIVIEN', 'basic', '123', 'VIVIEN', 'BERGEN', '0000-00-00 00:00:00'),
(15, '15CUBA@notatec.com.co', '15CUBA', 'basic', '123', 'CUBA', 'OLIVIER', '0000-00-00 00:00:00'),
(16, '16FRED@notatec.com.co', '16FRED', 'basic', '123', 'FRED', 'COSTNER', '0000-00-00 00:00:00'),
(17, '17HELEN@notatec.com.co', '17HELEN', 'basic', '123', 'HELEN', 'VOIGHT', '0000-00-00 00:00:00'),
(18, '18DAN@notatec.com.co', '18DAN', 'basic', '123', 'DAN', 'TORN', '0000-00-00 00:00:00'),
(19, '19BOB@notatec.com.co', '19BOB', 'basic', '123', 'BOB', 'FAWCETT', '0000-00-00 00:00:00'),
(20, '20LUCILLE@notatec.com.co', '20LUCILLE', 'basic', '123', 'LUCILLE', 'TRACY', '0000-00-00 00:00:00'),
(21, '21KIRSTEN@notatec.com.co', '21KIRSTEN', 'basic', '123', 'KIRSTEN', 'PALTROW', '0000-00-00 00:00:00'),
(22, '22ELVIS@notatec.com.co', '22ELVIS', 'basic', '123', 'ELVIS', 'MARX', '0000-00-00 00:00:00'),
(23, '23SANDRA@notatec.com.co', '23SANDRA', 'basic', '123', 'SANDRA', 'KILMER', '0000-00-00 00:00:00'),
(24, '24CAMERON@notatec.com.co', '24CAMERON', 'basic', '123', 'CAMERON', 'STREEP', '0000-00-00 00:00:00'),
(25, '25KEVIN@notatec.com.co', '25KEVIN', 'basic', '123', 'KEVIN', 'BLOOM', '0000-00-00 00:00:00'),
(26, '26RIP@notatec.com.co', '26RIP', 'basic', '123', 'RIP', 'CRAWFORD', '0000-00-00 00:00:00'),
(27, '27JULIA@notatec.com.co', '27JULIA', 'basic', '123', 'JULIA', 'MCQUEEN', '0000-00-00 00:00:00'),
(28, '28WOODY@notatec.com.co', '28WOODY', 'basic', '123', 'WOODY', 'HOFFMAN', '0000-00-00 00:00:00'),
(29, '29ALEC@notatec.com.co', '29ALEC', 'basic', '123', 'ALEC', 'WAYNE', '0000-00-00 00:00:00'),
(30, '30SANDRA@notatec.com.co', '30SANDRA', 'basic', '123', 'SANDRA', 'PECK', '0000-00-00 00:00:00'),
(31, '31SISSY@notatec.com.co', '31SISSY', 'basic', '123', 'SISSY', 'SOBIESKI', '0000-00-00 00:00:00'),
(32, '32TIM@notatec.com.co', '32TIM', 'basic', '123', 'TIM', 'HACKMAN', '0000-00-00 00:00:00'),
(33, '33MILLA@notatec.com.co', '33MILLA', 'basic', '123', 'MILLA', 'PECK', '0000-00-00 00:00:00'),
(34, '34AUDREY@notatec.com.co', '34AUDREY', 'basic', '123', 'AUDREY', 'OLIVIER', '0000-00-00 00:00:00'),
(35, '35JUDY@notatec.com.co', '35JUDY', 'basic', '123', 'JUDY', 'DEAN', '0000-00-00 00:00:00'),
(36, '36BURT@notatec.com.co', '36BURT', 'basic', '123', 'BURT', 'DUKAKIS', '0000-00-00 00:00:00'),
(37, '37VAL@notatec.com.co', '37VAL', 'basic', '123', 'VAL', 'BOLGER', '0000-00-00 00:00:00'),
(38, '38TOM@notatec.com.co', '38TOM', 'basic', '123', 'TOM', 'MCKELLEN', '0000-00-00 00:00:00'),
(39, '39GOLDIE@notatec.com.co', '39GOLDIE', 'basic', '123', 'GOLDIE', 'BRODY', '0000-00-00 00:00:00'),
(40, '40JOHNNY@notatec.com.co', '40JOHNNY', 'basic', '123', 'JOHNNY', 'CAGE', '0000-00-00 00:00:00'),
(41, '41JODIE@notatec.com.co', '41JODIE', 'basic', '123', 'JODIE', 'DEGENERES', '0000-00-00 00:00:00'),
(42, '42TOM@notatec.com.co', '42TOM', 'basic', '123', 'TOM', 'MIRANDA', '0000-00-00 00:00:00'),
(43, '43KIRK@notatec.com.co', '43KIRK', 'basic', '123', 'KIRK', 'JOVOVICH', '0000-00-00 00:00:00'),
(44, '44NICK@notatec.com.co', '44NICK', 'basic', '123', 'NICK', 'STALLONE', '0000-00-00 00:00:00'),
(45, '45REESE@notatec.com.co', '45REESE', 'basic', '123', 'REESE', 'KILMER', '0000-00-00 00:00:00'),
(46, '46PARKER@notatec.com.co', '46PARKER', 'basic', '123', 'PARKER', 'GOLDBERG', '0000-00-00 00:00:00'),
(47, '47JULIA@notatec.com.co', '47JULIA', 'basic', '123', 'JULIA', 'BARRYMORE', '0000-00-00 00:00:00'),
(48, '48FRANCES@notatec.com.co', '48FRANCES', 'basic', '123', 'FRANCES', 'DAY-LEWIS', '0000-00-00 00:00:00'),
(49, '49ANNE@notatec.com.co', '49ANNE', 'basic', '123', 'ANNE', 'CRONYN', '0000-00-00 00:00:00'),
(50, '50NATALIE@notatec.com.co', '50NATALIE', 'basic', '123', 'NATALIE', 'HOPKINS', '0000-00-00 00:00:00'),
(51, '51GARY@notatec.com.co', '51GARY', 'basic', '123', 'GARY', 'PHOENIX', '0000-00-00 00:00:00'),
(52, '52CARMEN@notatec.com.co', '52CARMEN', 'basic', '123', 'CARMEN', 'HUNT', '0000-00-00 00:00:00'),
(53, '53MENA@notatec.com.co', '53MENA', 'basic', '123', 'MENA', 'TEMPLE', '0000-00-00 00:00:00'),
(54, '54PENELOPE@notatec.com.co', '54PENELOPE', 'basic', '123', 'PENELOPE', 'PINKETT', '0000-00-00 00:00:00'),
(55, '55FAY@notatec.com.co', '55FAY', 'basic', '123', 'FAY', 'KILMER', '0000-00-00 00:00:00'),
(56, '56DAN@notatec.com.co', '56DAN', 'basic', '123', 'DAN', 'HARRIS', '0000-00-00 00:00:00'),
(57, '57JUDE@notatec.com.co', '57JUDE', 'basic', '123', 'JUDE', 'CRUISE', '0000-00-00 00:00:00'),
(58, '58CHRISTIAN@notatec.com.co', '58CHRISTIAN', 'basic', '123', 'CHRISTIAN', 'AKROYD', '0000-00-00 00:00:00'),
(59, '59DUSTIN@notatec.com.co', '59DUSTIN', 'basic', '123', 'DUSTIN', 'TAUTOU', '0000-00-00 00:00:00'),
(60, '60HENRY@notatec.com.co', '60HENRY', 'basic', '123', 'HENRY', 'BERRY', '0000-00-00 00:00:00'),
(61, '61CHRISTIAN@notatec.com.co', '61CHRISTIAN', 'basic', '123', 'CHRISTIAN', 'NEESON', '0000-00-00 00:00:00'),
(62, '62JAYNE@notatec.com.co', '62JAYNE', 'basic', '123', 'JAYNE', 'NEESON', '0000-00-00 00:00:00'),
(63, '63CAMERON@notatec.com.co', '63CAMERON', 'basic', '123', 'CAMERON', 'WRAY', '0000-00-00 00:00:00'),
(64, '64RAY@notatec.com.co', '64RAY', 'basic', '123', 'RAY', 'JOHANSSON', '0000-00-00 00:00:00'),
(65, '65ANGELA@notatec.com.co', '65ANGELA', 'basic', '123', 'ANGELA', 'HUDSON', '0000-00-00 00:00:00'),
(66, '66MARY@notatec.com.co', '66MARY', 'basic', '123', 'MARY', 'TANDY', '0000-00-00 00:00:00'),
(67, '67JESSICA@notatec.com.co', '67JESSICA', 'basic', '123', 'JESSICA', 'BAILEY', '0000-00-00 00:00:00'),
(68, '68RIP@notatec.com.co', '68RIP', 'basic', '123', 'RIP', 'WINSLET', '0000-00-00 00:00:00'),
(69, '69KENNETH@notatec.com.co', '69KENNETH', 'basic', '123', 'KENNETH', 'PALTROW', '0000-00-00 00:00:00'),
(70, '70MICHELLE@notatec.com.co', '70MICHELLE', 'basic', '123', 'MICHELLE', 'MCCONAUGHEY', '0000-00-00 00:00:00'),
(71, '71ADAM@notatec.com.co', '71ADAM', 'basic', '123', 'ADAM', 'GRANT', '0000-00-00 00:00:00'),
(72, '72SEAN@notatec.com.co', '72SEAN', 'basic', '123', 'SEAN', 'WILLIAMS', '0000-00-00 00:00:00'),
(73, '73GARY@notatec.com.co', '73GARY', 'basic', '123', 'GARY', 'PENN', '0000-00-00 00:00:00'),
(74, '74MILLA@notatec.com.co', '74MILLA', 'basic', '123', 'MILLA', 'KEITEL', '0000-00-00 00:00:00'),
(75, '75BURT@notatec.com.co', '75BURT', 'basic', '123', 'BURT', 'POSEY', '0000-00-00 00:00:00'),
(76, '76ANGELINA@notatec.com.co', '76ANGELINA', 'basic', '123', 'ANGELINA', 'ASTAIRE', '0000-00-00 00:00:00'),
(77, '77CARY@notatec.com.co', '77CARY', 'basic', '123', 'CARY', 'MCCONAUGHEY', '0000-00-00 00:00:00'),
(78, '78GROUCHO@notatec.com.co', '78GROUCHO', 'basic', '123', 'GROUCHO', 'SINATRA', '0000-00-00 00:00:00'),
(79, '79MAE@notatec.com.co', '79MAE', 'basic', '123', 'MAE', 'HOFFMAN', '0000-00-00 00:00:00'),
(80, '80RALPH@notatec.com.co', '80RALPH', 'basic', '123', 'RALPH', 'CRUZ', '0000-00-00 00:00:00'),
(81, '81SCARLETT@notatec.com.co', '81SCARLETT', 'basic', '123', 'SCARLETT', 'DAMON', '0000-00-00 00:00:00'),
(82, '82WOODY@notatec.com.co', '82WOODY', 'basic', '123', 'WOODY', 'JOLIE', '0000-00-00 00:00:00'),
(83, '83BEN@notatec.com.co', '83BEN', 'basic', '123', 'BEN', 'WILLIS', '0000-00-00 00:00:00'),
(84, '84JAMES@notatec.com.co', '84JAMES', 'basic', '123', 'JAMES', 'PITT', '0000-00-00 00:00:00'),
(85, '85MINNIE@notatec.com.co', '85MINNIE', 'basic', '123', 'MINNIE', 'ZELLWEGER', '0000-00-00 00:00:00'),
(86, '86GREG@notatec.com.co', '86GREG', 'basic', '123', 'GREG', 'CHAPLIN', '0000-00-00 00:00:00'),
(87, '87SPENCER@notatec.com.co', '87SPENCER', 'basic', '123', 'SPENCER', 'PECK', '0000-00-00 00:00:00'),
(88, '88KENNETH@notatec.com.co', '88KENNETH', 'basic', '123', 'KENNETH', 'PESCI', '0000-00-00 00:00:00'),
(89, '89CHARLIZE@notatec.com.co', '89CHARLIZE', 'basic', '123', 'CHARLIZE', 'DENCH', '0000-00-00 00:00:00'),
(90, '90SEAN@notatec.com.co', '90SEAN', 'basic', '123', 'SEAN', 'GUINESS', '0000-00-00 00:00:00'),
(91, '91CHRISTOPHER@notatec.com.co', '91CHRISTOPHER', 'basic', '123', 'CHRISTOPHER', 'BERRY', '0000-00-00 00:00:00'),
(92, '92KIRSTEN@notatec.com.co', '92KIRSTEN', 'basic', '123', 'KIRSTEN', 'AKROYD', '0000-00-00 00:00:00'),
(93, '93ELLEN@notatec.com.co', '93ELLEN', 'basic', '123', 'ELLEN', 'PRESLEY', '0000-00-00 00:00:00'),
(94, '94KENNETH@notatec.com.co', '94KENNETH', 'basic', '123', 'KENNETH', 'TORN', '0000-00-00 00:00:00'),
(95, '95DARYL@notatec.com.co', '95DARYL', 'basic', '123', 'DARYL', 'WAHLBERG', '0000-00-00 00:00:00'),
(96, '96GENE@notatec.com.co', '96GENE', 'basic', '123', 'GENE', 'WILLIS', '0000-00-00 00:00:00'),
(97, '97MEG@notatec.com.co', '97MEG', 'basic', '123', 'MEG', 'HAWKE', '0000-00-00 00:00:00'),
(98, '98CHRIS@notatec.com.co', '98CHRIS', 'basic', '123', 'CHRIS', 'BRIDGES', '0000-00-00 00:00:00'),
(99, '99JIM@notatec.com.co', '99JIM', 'basic', '123', 'JIM', 'MOSTEL', '0000-00-00 00:00:00'),
(100, '100SPENCER@notatec.com.co', '100SPENCER', 'basic', '123', 'SPENCER', 'DEPP', '0000-00-00 00:00:00');

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
  MODIFY `id_Idea` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT de la tabla `votacion`
--
ALTER TABLE `votacion`
  MODIFY `id_votacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=180;

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
