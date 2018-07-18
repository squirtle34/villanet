-- phpMyAdmin SQL Dump
-- version 3.3.7deb7
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 07-01-2014 a las 09:29:30
-- Versión del servidor: 5.5.33
-- Versión de PHP: 5.3.3-7+squeeze14

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `villanet`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE IF NOT EXISTS `compra` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `rif_proveedor` varchar(15) NOT NULL,
  `n_control` int(4) NOT NULL,
  `total` double NOT NULL,
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcar la base de datos para la tabla `compra`
--

INSERT INTO `compra` (`id`, `fecha`, `rif_proveedor`, `n_control`, `total`) VALUES
(1, '2014-01-06', '0123456789', 1, 0),
(2, '2014-01-06', '0123456789', 2, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compradetalle`
--

CREATE TABLE IF NOT EXISTS `compradetalle` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_compra` int(11) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `precio` double NOT NULL,
  `cant` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Volcar la base de datos para la tabla `compradetalle`
--

INSERT INTO `compradetalle` (`id`, `id_compra`, `id_producto`, `precio`, `cant`) VALUES
(9, 1, 1, 1500, 1),
(15, 2, 1, 1500, 5);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE IF NOT EXISTS `persona` (
  `rifc` varchar(15) NOT NULL,
  `razon_social` text NOT NULL,
  `direccion` text NOT NULL,
  `tlf` varchar(15) NOT NULL,
  `correo` varchar(30) NOT NULL,
  `tipo_persona` char(2) NOT NULL,
  UNIQUE KEY `rifc` (`rifc`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcar la base de datos para la tabla `persona`
--

INSERT INTO `persona` (`rifc`, `razon_social`, `direccion`, `tlf`, `correo`, `tipo_persona`) VALUES
('18288565', 'DUGLAS OSWALDO MORENO MENDOZA', 'BARINAS', '123456', 'DUGLAOSWALDO@GMAIL.COM', '2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `proveedor` varchar(100) NOT NULL,
  `disponibilidad` varchar(10) NOT NULL,
  `cantidad` double NOT NULL,
  `descripcion` text NOT NULL,
  `id_proveedor` varchar(25) NOT NULL,
  `precio` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Volcar la base de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `proveedor`, `disponibilidad`, `cantidad`, `descripcion`, `id_proveedor`, `precio`) VALUES
(1, 'QUINTERO MENDEZ JOSE', '2', 20, ' HARINAS DE TRES KILOS', '0123456789', 250),
(2, 'QUINTERO MENDEZ JOSE', '1', 0, 'PASTELES VERDES', '0123456789', 25.36);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE IF NOT EXISTS `proveedores` (
  `rif` varchar(15) NOT NULL,
  `razon_social` text NOT NULL,
  `telefono` varchar(15) NOT NULL,
  `contacto` text NOT NULL,
  `nom_proveedor` varchar(100) NOT NULL,
  UNIQUE KEY `rif` (`rif`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcar la base de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`rif`, `razon_social`, `telefono`, `contacto`, `nom_proveedor`) VALUES
('0123456789', 'QUINTERO MENDEZ JOSE', '0412-9699500', 'DUGLASOSWALDO@GMAIL.COM', 'QUINTERO MENDEZ JOSE');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rif` varchar(15) NOT NULL,
  `nivel` char(2) NOT NULL,
  `usuario` varchar(20) NOT NULL,
  `clave` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `rif` (`rif`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Volcar la base de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `rif`, `nivel`, `usuario`, `clave`) VALUES
(2, '11111111', '1', 'admin', '202cb962ac59075b964b07152d234b70'),
(5, '18288565', '2', '18288565', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE IF NOT EXISTS `ventas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `cliente` varchar(15) NOT NULL,
  `n_control` varchar(100) NOT NULL,
  `status` varchar(25) NOT NULL,
  `total` double NOT NULL,
  `mes` varchar(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Volcar la base de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id`, `fecha`, `cliente`, `n_control`, `status`, `total`, `mes`) VALUES
(1, '2014-01-06', '18288565', '1', '2', 235.6, '01'),
(2, '2014-01-06', '18288565', '2', '1', 786.16, '02'),
(3, '2014-01-06', '18288565', '3', '1', 101.44, '01'),
(4, '2014-01-07', '18288565', '4', '1', 253.6, '01'),
(5, '2014-01-07', '18288565', '5', '0', 557.92, '01'),
(6, '2014-01-07', '18288565', '6', '0', 126.8, '01'),
(7, '2014-01-07', '18288565', '7', '0', 177.52, '01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventasdetalle`
--

CREATE TABLE IF NOT EXISTS `ventasdetalle` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_venta` int(11) NOT NULL,
  `id_productos` int(11) NOT NULL,
  `precio` double NOT NULL,
  `cant` int(11) NOT NULL,
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=16 ;

--
-- Volcar la base de datos para la tabla `ventasdetalle`
--

INSERT INTO `ventasdetalle` (`id`, `id_venta`, `id_productos`, `precio`, `cant`) VALUES
(3, 1, 2, 25.36, 10),
(5, 2, 2, 25.36, 26),
(6, 2, 2, 25.36, 5),
(7, 3, 2, 25.36, 4),
(9, 4, 2, 25.36, 7),
(12, 6, 2, 25.36, 5),
(14, 5, 2, 25.36, 4),
(15, 7, 2, 25.36, 7);
