-- phpMyAdmin SQL Dump
-- version 4.0.6deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 08-01-2014 a las 13:50:27
-- Versión del servidor: 5.5.34-0ubuntu0.13.10.1
-- Versión de PHP: 5.5.3-1ubuntu2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Volcado de datos para la tabla `compra`
--

INSERT INTO `compra` (`id`, `fecha`, `rif_proveedor`, `n_control`, `total`) VALUES
(1, '2014-02-11', '0123456789', 1, 233),
(2, '2014-03-25', '0123456789', 2, 100),
(3, '2014-01-07', '0123456789', 3, 9000),
(4, '2014-01-07', '0123456789', 4, 12000);

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Volcado de datos para la tabla `compradetalle`
--

INSERT INTO `compradetalle` (`id`, `id_compra`, `id_producto`, `precio`, `cant`) VALUES
(9, 1, 1, 1500, 1),
(15, 2, 1, 1500, 5),
(16, 3, 1, 250, 12),
(17, 3, 1, 250, 12),
(18, 3, 1, 250, 12),
(19, 4, 1, 1000, 12);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalle_ingreso`
--

CREATE TABLE IF NOT EXISTS `detalle_ingreso` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_producto` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `op` int(11) NOT NULL,
  `cantidad` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `detalle_ingreso`
--

INSERT INTO `detalle_ingreso` (`id`, `id_producto`, `fecha`, `op`, `cantidad`) VALUES
(1, 2, '2014-01-08', 1, 4),
(2, 1, '2014-01-08', 2, 14),
(3, 1, '2014-01-08', 2, 14);

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
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`rifc`, `razon_social`, `direccion`, `tlf`, `correo`, `tipo_persona`) VALUES
('16477751', 'gisbel pena', 'barinas', '04245196793', 'gpg841@gmail.com', '2'),
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `proveedor`, `disponibilidad`, `cantidad`, `descripcion`, `id_proveedor`, `precio`) VALUES
(1, 'QUINTERO MENDEZ JOSE', '2', 126, '  HARINAS DE TRES KILOS', '0123456789', 1000),
(2, 'QUINTERO MENDEZ JOSE', '1', 23, ' PASTELES VERDES', '0123456789', 25.36),
(3, 'gisbel pena', '1', 30, 'PASTELES DE QUESO', '16477751', 100);

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
-- Volcado de datos para la tabla `proveedores`
--

INSERT INTO `proveedores` (`rif`, `razon_social`, `telefono`, `contacto`, `nom_proveedor`) VALUES
('0123456789', 'QUINTERO MENDEZ JOSE', '0412-9699500', 'DUGLASOSWALDO@GMAIL.COM', 'QUINTERO MENDEZ JOSE'),
('16477751', 'gisbel pena', '042452557201', 'gpg841@gmail.com', 'juan');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `rif`, `nivel`, `usuario`, `clave`) VALUES
(2, '11111111', '1', 'admin', 'e10adc3949ba59abbe56e057f20f883e'),
(5, '18288565', '2', '18288565', '202cb962ac59075b964b07152d234b70'),
(6, '16477751', '2', '16477751', '202cb962ac59075b964b07152d234b70');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id`, `fecha`, `cliente`, `n_control`, `status`, `total`, `mes`) VALUES
(1, '2014-01-06', '18288565', '1', '2', 235.6, '03'),
(2, '2014-01-06', '18288565', '2', '2', 786.16, '02'),
(3, '2014-01-06', '18288565', '3', '1', 101.44, '02'),
(4, '2014-01-07', '18288565', '4', '1', 253.6, '03'),
(5, '2014-01-07', '18288565', '5', '1', 557.92, '04'),
(6, '2014-01-07', '18288565', '6', '1', 253.6, '03'),
(7, '2014-01-07', '18288565', '7', '1', 177.52, '02'),
(8, '2014-01-07', '18288565', '8', '1', 304.32, '04'),
(9, '2014-01-07', '18288565', '9', '1', 525.36, '01'),
(10, '2014-01-07', '18288565', '10', '1', 3176.08, '01'),
(11, '2014-01-08', '18288565', '11', '1', 1268, '03'),
(12, '2014-01-08', '18288565', '12', '1', 1000, '01');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=26 ;

--
-- Volcado de datos para la tabla `ventasdetalle`
--

INSERT INTO `ventasdetalle` (`id`, `id_venta`, `id_productos`, `precio`, `cant`) VALUES
(3, 1, 2, 25.36, 10),
(5, 2, 2, 25.36, 26),
(6, 2, 2, 25.36, 5),
(7, 3, 2, 25.36, 4),
(9, 4, 2, 25.36, 7),
(14, 5, 2, 25.36, 4),
(15, 7, 2, 25.36, 7),
(16, 8, 2, 25.36, 12),
(20, 11, 2, 25.36, 50),
(21, 12, 3, 100, 10),
(22, 6, 2, 25.36, 5),
(23, 9, 2, 25.36, 1),
(24, 9, 3, 100, 5),
(25, 10, 3, 100, 5);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
