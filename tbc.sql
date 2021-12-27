-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 24-12-2021 a las 02:21:46
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tbc`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tm_aspecto`
--

CREATE TABLE `tm_aspecto` (
  `asp_id` int(11) NOT NULL,
  `asp_nom` varchar(30) COLLATE utf8_spanish2_ci NOT NULL,
  `est` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tm_aspecto`
--

INSERT INTO `tm_aspecto` (`asp_id`, `asp_nom`, `est`) VALUES
(1, 'Prueba', 1),
(2, 'Prueba 2', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tm_categoria`
--

CREATE TABLE `tm_categoria` (
  `cat_id` int(11) NOT NULL,
  `cat_nom` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `est` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tm_categoria`
--

INSERT INTO `tm_categoria` (`cat_id`, `cat_nom`, `est`) VALUES
(1, 'fvvvv', 1),
(2, 'ffff', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tm_departamento`
--

CREATE TABLE `tm_departamento` (
  `depa_id` int(11) NOT NULL,
  `depa_nom` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `est` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tm_departamento`
--

INSERT INTO `tm_departamento` (`depa_id`, `depa_nom`, `est`) VALUES
(1, 'sdagsdgw', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tm_distrito`
--

CREATE TABLE `tm_distrito` (
  `dist_id` int(11) NOT NULL,
  `dist_nom` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `est` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tm_distrito`
--

INSERT INTO `tm_distrito` (`dist_id`, `dist_nom`, `est`) VALUES
(1, 'dddddddd', 1),
(2, 'sasdg', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tm_especialista`
--

CREATE TABLE `tm_especialista` (
  `esp_id` int(11) NOT NULL,
  `us_id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `esp_especialista` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `esp_apellido` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `esp_doc` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `esp_telefono` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `esp_email` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `esp_direccion` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `esp_descrip` varchar(150) COLLATE utf8_spanish2_ci NOT NULL,
  `esp_estado` varchar(15) COLLATE utf8_spanish2_ci NOT NULL,
  `fech_crea` datetime NOT NULL,
  `fech_mod` datetime NOT NULL,
  `est` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tm_especialista`
--

INSERT INTO `tm_especialista` (`esp_id`, `us_id`, `cat_id`, `esp_especialista`, `esp_apellido`, `esp_doc`, `esp_telefono`, `esp_email`, `esp_direccion`, `esp_descrip`, `esp_estado`, `fech_crea`, `fech_mod`, `est`) VALUES
(1, 1, 1, 'JOSE', 'GUERRERO LOPEZ', '48491468', '960946369', '20159238si@gmail.com', 'WRERHTEHTEJH', '<p>DFHRTEJY</p>', 'Activo', '2021-08-25 03:39:40', '0000-00-00 00:00:00', 1),
(2, 1, 1, 'Jose', 'Vazquez', '21159302', '653386195', 'jrvazquezantelo@gmail.com', 'Alcala la Real', '<p>Prueba</p>', 'Activo', '2021-09-09 15:18:48', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tm_establecimiento`
--

CREATE TABLE `tm_establecimiento` (
  `estb_id` int(11) NOT NULL,
  `estb_nom` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `est` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tm_establecimiento`
--

INSERT INTO `tm_establecimiento` (`estb_id`, `estb_nom`, `est`) VALUES
(1, 'Santa Rosa', 1),
(2, 'Jose Olaya', 1),
(3, 'Diresa - Callao ', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tm_nacionalidad`
--

CREATE TABLE `tm_nacionalidad` (
  `nacion_id` int(11) NOT NULL,
  `nacion_nom` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `est` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tm_nacionalidad`
--

INSERT INTO `tm_nacionalidad` (`nacion_id`, `nacion_nom`, `est`) VALUES
(1, 'PERU', 1),
(2, 'ARGENTINA', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tm_provincia`
--

CREATE TABLE `tm_provincia` (
  `provin_id` int(11) NOT NULL,
  `provin_nom` varchar(100) COLLATE utf8_spanish2_ci NOT NULL,
  `est` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tm_provincia`
--

INSERT INTO `tm_provincia` (`provin_id`, `provin_nom`, `est`) VALUES
(1, 'LIMA', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tm_registro`
--

CREATE TABLE `tm_registro` (
  `reg_id` int(11) NOT NULL,
  `us_id` int(11) NOT NULL,
  `reg_cod` varchar(150) COLLATE utf8_spanish2_ci NOT NULL,
  `reg_fech` varchar(150) COLLATE utf8_spanish2_ci NOT NULL,
  `estb_id` int(11) NOT NULL,
  `reg_ape` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `reg_nom` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `reg_telefono` varchar(50) COLLATE utf8_spanish2_ci NOT NULL,
  `reg_doc` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `reg_edad` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `reg_peso` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `reg_talla` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `gen` int(11) NOT NULL,
  `depa_id` int(11) NOT NULL,
  `provin_id` int(11) NOT NULL,
  `dist_id` int(11) NOT NULL,
  `nacion_id` int(11) NOT NULL,
  `reg_direccion` varchar(150) COLLATE utf8_spanish2_ci NOT NULL,
  `reg_descrip` varchar(150) COLLATE utf8_spanish2_ci NOT NULL,
  `reg_estado` varchar(150) COLLATE utf8_spanish2_ci NOT NULL,
  `fech_crea` datetime NOT NULL,
  `fech_mod` datetime NOT NULL,
  `est` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tm_registro`
--

INSERT INTO `tm_registro` (`reg_id`, `us_id`, `reg_cod`, `reg_fech`, `estb_id`, `reg_ape`, `reg_nom`, `reg_telefono`, `reg_doc`, `reg_edad`, `reg_peso`, `reg_talla`, `gen`, `depa_id`, `provin_id`, `dist_id`, `nacion_id`, `reg_direccion`, `reg_descrip`, `reg_estado`, `fech_crea`, `fech_mod`, `est`) VALUES
(1, 1, '01', '654515', 1, 'vasquez grcia', 'jose', '960946369', '48491468', '16', '160', '160', 1, 1, 1, 1, 1, 'gehrthrth', 'WRERHTEHTEJH', 'Activo', '2021-08-25 03:43:20', '0000-00-00 00:00:00', 1),
(2, 1, '02', '1468', 1, '0', '48491468', 'masculino', '1', '1', '1', '', 1, 1, 0, 0, 0, '', 'mz q lt 7 heroes del cenepa', 'Activo', '2021-08-29 21:37:24', '0000-00-00 00:00:00', 1),
(3, 1, '03', '654515', 2, '1', '48491468', 'masculino', '1', '1', '1', 'WRERHTEHTEJH', 1, 1, 0, 1, 2021, '', '<p>gb</p>', 'Activo', '2021-09-02 21:55:07', '0000-00-00 00:00:00', 1),
(4, 1, '04', '6666', 3, '1', '48491468', 'masculino', '1', '1', '1', 'jkonjhjhij', 1, 1, 0, 1, 2021, '', '<p>yftcytgfvuh</p>', 'Activo', '2021-09-02 21:56:52', '0000-00-00 00:00:00', 1),
(11, 1, '4848', '2021-12-20', 1, 'vasquez garcia', 'Yandira', '3265', '654564', '454', '36', '132132', 0, 1, 1, 1, 2, 'mz q lt 7 heroes del cenepa ventanilla callao ', '<p>ykyu</p>', 'Activo', '2021-12-20 21:54:27', '0000-00-00 00:00:00', 1),
(12, 1, 'di001', '2021-12-21', 3, 'ramirez herrera', 'julio david', '975447514', '25809210', '59', '71', '164', 0, 1, 1, 2, 1, 'mz q lt 7 heroes del cenepa ventanilla callao ', 'nD', 'Activo', '2021-12-21 09:00:05', '0000-00-00 00:00:00', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tm_usuario`
--

CREATE TABLE `tm_usuario` (
  `us_id` int(11) NOT NULL,
  `us_nom` varchar(150) COLLATE utf8_spanish2_ci NOT NULL,
  `us_ap` varchar(150) COLLATE utf8_spanish2_ci NOT NULL,
  `us_correo` varchar(150) COLLATE utf8_spanish2_ci NOT NULL,
  `us_pass` varchar(150) COLLATE utf8_spanish2_ci NOT NULL,
  `rol_id` int(11) NOT NULL,
  `fech_crea` datetime NOT NULL,
  `fech_mod` datetime NOT NULL,
  `fech_elim` datetime NOT NULL,
  `est` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tm_usuario`
--

INSERT INTO `tm_usuario` (`us_id`, `us_nom`, `us_ap`, `us_correo`, `us_pass`, `rol_id`, `fech_crea`, `fech_mod`, `fech_elim`, `est`) VALUES
(1, 'jorjino ', 'garcia vasquez', 'jorjino', '123456', 1, '2021-08-25 02:06:11', '2021-08-25 02:06:11', '2021-08-25 02:06:11', 1),
(2, 'JOSE', 'RAMIREZ FIGUEROA', 'RAMIREZ', '123456', 2, '2021-08-25 02:32:34', '2021-08-25 02:32:34', '2021-08-25 02:32:34', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tm_volumen`
--

CREATE TABLE `tm_volumen` (
  `volu_id` int(11) NOT NULL,
  `volu_nom` varchar(20) COLLATE utf8_spanish2_ci NOT NULL,
  `est` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tm_volumen`
--

INSERT INTO `tm_volumen` (`volu_id`, `volu_nom`, `est`) VALUES
(1, 'Volumen Prueba', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tm_aspecto`
--
ALTER TABLE `tm_aspecto`
  ADD PRIMARY KEY (`asp_id`);

--
-- Indices de la tabla `tm_categoria`
--
ALTER TABLE `tm_categoria`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indices de la tabla `tm_departamento`
--
ALTER TABLE `tm_departamento`
  ADD PRIMARY KEY (`depa_id`);

--
-- Indices de la tabla `tm_distrito`
--
ALTER TABLE `tm_distrito`
  ADD PRIMARY KEY (`dist_id`);

--
-- Indices de la tabla `tm_especialista`
--
ALTER TABLE `tm_especialista`
  ADD PRIMARY KEY (`esp_id`);

--
-- Indices de la tabla `tm_establecimiento`
--
ALTER TABLE `tm_establecimiento`
  ADD PRIMARY KEY (`estb_id`);

--
-- Indices de la tabla `tm_nacionalidad`
--
ALTER TABLE `tm_nacionalidad`
  ADD PRIMARY KEY (`nacion_id`);

--
-- Indices de la tabla `tm_provincia`
--
ALTER TABLE `tm_provincia`
  ADD PRIMARY KEY (`provin_id`);

--
-- Indices de la tabla `tm_registro`
--
ALTER TABLE `tm_registro`
  ADD PRIMARY KEY (`reg_id`),
  ADD KEY `reg_lab` (`reg_fech`),
  ADD KEY `lab_id` (`depa_id`),
  ADD KEY `estb_id` (`gen`);

--
-- Indices de la tabla `tm_usuario`
--
ALTER TABLE `tm_usuario`
  ADD PRIMARY KEY (`us_id`);

--
-- Indices de la tabla `tm_volumen`
--
ALTER TABLE `tm_volumen`
  ADD PRIMARY KEY (`volu_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tm_aspecto`
--
ALTER TABLE `tm_aspecto`
  MODIFY `asp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tm_categoria`
--
ALTER TABLE `tm_categoria`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tm_departamento`
--
ALTER TABLE `tm_departamento`
  MODIFY `depa_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tm_distrito`
--
ALTER TABLE `tm_distrito`
  MODIFY `dist_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tm_especialista`
--
ALTER TABLE `tm_especialista`
  MODIFY `esp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tm_establecimiento`
--
ALTER TABLE `tm_establecimiento`
  MODIFY `estb_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tm_nacionalidad`
--
ALTER TABLE `tm_nacionalidad`
  MODIFY `nacion_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tm_provincia`
--
ALTER TABLE `tm_provincia`
  MODIFY `provin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `tm_registro`
--
ALTER TABLE `tm_registro`
  MODIFY `reg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `tm_usuario`
--
ALTER TABLE `tm_usuario`
  MODIFY `us_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `tm_volumen`
--
ALTER TABLE `tm_volumen`
  MODIFY `volu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
