-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-07-2020 a las 15:30:14
-- Versión del servidor: 10.1.19-MariaDB
-- Versión de PHP: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `academico`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `identificador`
--

CREATE TABLE `identificador` (
  `Ci` int(11) NOT NULL,
  `Nombre` varchar(30) NOT NULL,
  `ApellidoP` varchar(30) NOT NULL,
  `ApellidoM` varchar(30) NOT NULL,
  `FNacimiento` date NOT NULL,
  `LResidencia` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `identificador`
--

INSERT INTO `identificador` (`Ci`, `Nombre`, `ApellidoP`, `ApellidoM`, `FNacimiento`, `LResidencia`) VALUES
(1234, 'Jose', 'Maria', 'Lopez', '1998-07-21', '02'),
(3312, 'Julia', 'Gutierrez', 'Alanoca', '1996-08-22', '05'),
(3773, 'Jhon', 'Quispe', 'Mamani', '1990-03-02', '03'),
(4112, 'Ramiro', 'Quispe', 'Quispe', '1998-08-24', '05'),
(5312, 'Gery', 'Gutierrez', 'Falga', '1995-04-02', '01'),
(5421, 'Diana', 'Luque', 'Flores', '1996-05-18', '02'),
(6531, 'Juana', 'Miranda', 'Rodriguez', '1988-06-27', '03'),
(9314, 'Ruben', 'Tapia', 'Mamani', '1980-01-11', '01'),
(33112, 'Ruben', 'Fernandez', 'Tapia', '1999-01-04', '04'),
(33552, 'Orlando', 'Maidana', 'Ticona', '1994-10-25', '07'),
(36632, 'Yerson', 'Mamani', 'Mamani', '1994-08-06', '07'),
(123166, 'Ruben', 'Chiri', 'Quispe', '1995-11-03', '05'),
(311242, 'Juaquin', 'Herrera', 'Marques', '1993-12-07', '07'),
(11060722, 'Vladimir', 'Maidana', 'Acarapi', '1996-01-08', '02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notas`
--

CREATE TABLE `notas` (
  `Ci` int(11) NOT NULL,
  `Materia` varchar(30) NOT NULL,
  `Nota` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `notas`
--

INSERT INTO `notas` (`Ci`, `Materia`, `Nota`) VALUES
(1234, 'INF-317', 51),
(3312, 'INF-324', 40),
(3773, 'INF-121', 41),
(4112, 'INF-111', 67),
(5312, 'INF-281', 80),
(5421, 'INF-131', 38),
(6531, 'INF-111', 80),
(9314, 'INF-151', 56),
(33112, 'INF-121', 58),
(33552, 'MAT-114', 31),
(36632, 'MAT-115', 59),
(123166, 'INF-111', 85),
(311242, 'INF-331', 70),
(11060722, 'INF-324', 60);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `Ci` varchar(10) NOT NULL,
  `Clave` varchar(30) NOT NULL,
  `color` varchar(20) DEFAULT NULL,
  `img` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`Ci`, `Clave`, `color`, `img`) VALUES
('11060722', 'vladimir', 'red', 'img/usu1.jpg'),
('123166', '818', '#0000ff', 'img/usu8.jpg'),
('1234', '12', 'red', 'img/usu6.jpg'),
('311242', '727', '#0000ff', 'img/usu9.jpg'),
('33112', '454', '#0000ff', 'img/usu10.jpg'),
('3312', '181', 'pink', 'img/usu7.jpg'),
('33552', '545', '#0000ff', 'img/usu11.jpg'),
('36632', '636', '#0000ff', 'img/usu12.jpg'),
('3773', '123456', '#0000ff', 'img/usu5.jpg'),
('4112', '272', 'red', 'img/usu13.jpg'),
('5312', '363', '#0000ff', 'img/usu14.jpg'),
('5421', '1234', '#0000ff', 'img/usu2.jpg'),
('6531', '12345', '#0000ff', 'img/usu3.jpg'),
('9314', '123', '#0000ff', 'img/usu4.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `identificador`
--
ALTER TABLE `identificador`
  ADD PRIMARY KEY (`Ci`);

--
-- Indices de la tabla `notas`
--
ALTER TABLE `notas`
  ADD PRIMARY KEY (`Ci`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`Ci`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
