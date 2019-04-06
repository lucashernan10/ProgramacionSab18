-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 06-04-2019 a las 21:07:00
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `programacionsabado18`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE IF NOT EXISTS `cursos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) NOT NULL,
  `descripcion_corta` mediumtext NOT NULL,
  `descripcion_detallada` longtext NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `precio` varchar(80) NOT NULL,
  `duracion` varchar(80) NOT NULL,
  `dias` varchar(80) NOT NULL,
  `fecha_add` datetime NOT NULL,
  `fecha_update` datetime NOT NULL,
  `activo` varchar(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`id`, `nombre`, `descripcion_corta`, `descripcion_detallada`, `imagen`, `precio`, `duracion`, `dias`, `fecha_add`, `fecha_update`, `activo`) VALUES
(2, 'programacion', '              hbbdhdb', '              hbdhbdhbsd', 'imagen_1552764193.jpg', '500.000', '4m', '84', '2019-02-16 16:34:14', '2019-03-16 16:23:26', '1'),
(3, 'Programacion', '              as', '              sas', 'imagen_1552763265.jpg', '500.000', '4m', 'ASS', '2019-03-16 16:08:18', '0000-00-00 00:00:00', '1'),
(4, 'dskmds', '              sdd', 'Curso de programacion de paginas web desde cero. Aprende a crear paginas dinamicas desde cero incluyendo su panel administrativo', 'imagen_1552763367.jpg', '500000', 'dsllcm', 'mvnid', '2019-03-16 16:09:31', '2019-04-06 16:50:42', '0');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensajes`
--

CREATE TABLE IF NOT EXISTS `mensajes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(80) NOT NULL,
  `email` varchar(80) NOT NULL,
  `asunto` varchar(80) NOT NULL,
  `telefono` varchar(80) NOT NULL,
  `mensaje` mediumtext NOT NULL,
  `fecha_add` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Volcado de datos para la tabla `mensajes`
--

INSERT INTO `mensajes` (`id`, `nombre`, `email`, `asunto`, `telefono`, `mensaje`, `fecha_add`) VALUES
(1, 'richard', 'dfd@dsds', 'fgfg', 'dfd', 'gh', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `parametros`
--

CREATE TABLE IF NOT EXISTS `parametros` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `empresa` varchar(80) NOT NULL,
  `logo` varchar(80) NOT NULL,
  `favicon` varchar(80) NOT NULL,
  `telefono` varchar(80) NOT NULL,
  `whatsApp` varchar(80) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `email` varchar(80) NOT NULL,
  `twitter` varchar(80) NOT NULL,
  `youtube` varchar(80) NOT NULL,
  `google_maps` mediumtext NOT NULL,
  `descripcion` mediumtext NOT NULL,
  `fecha_update` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcado de datos para la tabla `parametros`
--

INSERT INTO `parametros` (`id`, `empresa`, `logo`, `favicon`, `telefono`, `whatsApp`, `direccion`, `email`, `twitter`, `youtube`, `google_maps`, `descripcion`, `fecha_update`) VALUES
(1, 'em[resa', 'logo_1554584233.png', 'fav', 'tel', 'wats', 'direccq', 'email', 'twitte', 'youtube', 'map', 'descri', '2019-04-06 16:57:19'),
(2, 'jfjffkn', 'kgkgkdkm', 'enfjnnfkrngkr', 'ekdkhrtnrk', 'mmmwww', 'majsghdd', 'dkdkmee', 'assdfffg', ',dmdkndke', 'kshjdbnddsc', 'sbabldjjd', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(60) NOT NULL,
  `email` varchar(60) NOT NULL,
  `password` varchar(80) NOT NULL,
  `avatar` varchar(80) DEFAULT NULL,
  `activo` varchar(5) NOT NULL,
  `fecha_add` datetime NOT NULL,
  `fecha_update` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `email`, `password`, `avatar`, `activo`, `fecha_add`, `fecha_update`) VALUES
(1, 'Lucas m', 'lucas@hotmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'avat4ar.jpg', '1', '2019-03-26 01:05:10', '2019-02-23 16:43:03'),
(3, 'nombre', 'richardcabrera92@hotmail.com', 'b8323eb44cf1ec3bb8bb7d3bb9a32c13', 'avatar_1553362779.jpg', '0', '2019-02-16 15:44:42', '2019-03-23 14:39:43'),
(4, 'carlos', 'ca@dsds', '7363a0d0604902af7b70b271a0b96480', 'jkjkj', '1', '2019-02-23 16:43:47', '2019-03-16 16:39:32');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
