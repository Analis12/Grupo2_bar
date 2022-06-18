-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-06-2022 a las 23:53:40
-- Versión del servidor: 10.1.32-MariaDB
-- Versión de PHP: 5.6.36

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `datostienda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `bar`
--

CREATE TABLE `bar` (
  `cam_id` int(11) NOT NULL,
  `bar_id` int(11) NOT NULL,
  `bar_nombre` varchar(50) NOT NULL,
  `bar_abierto` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `bar`
--

INSERT INTO `bar` (`cam_id`, `bar_id`, `bar_nombre`, `bar_abierto`) VALUES
(1, 1, 'Bar Espe', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `buzon`
--

CREATE TABLE `buzon` (
  `bar_id` int(11) NOT NULL,
  `buz_id` int(11) NOT NULL,
  `buz_fecha` date NOT NULL,
  `buz_descripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `campus`
--

CREATE TABLE `campus` (
  `cam_id` int(11) NOT NULL,
  `cam_nombre` varchar(50) NOT NULL,
  `cam_direccion` varchar(80) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `campus`
--

INSERT INTO `campus` (`cam_id`, `cam_nombre`, `cam_direccion`) VALUES
(1, 'Belisario Quevedo', 'Latacunga');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `menu`
--

CREATE TABLE `menu` (
  `bar_id` int(11) NOT NULL,
  `men_id` int(11) NOT NULL,
  `men_nombre` varchar(50) NOT NULL,
  `men_precio` float(8,2) NOT NULL,
  `men_disponible` tinyint(1) NOT NULL,
  `men_descripcion` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COMMENT='Se pretende que cada dia se acrualice los estados de DISPONI';

--
-- Volcado de datos para la tabla `menu`
--

INSERT INTO `menu` (`bar_id`, `men_id`, `men_nombre`, `men_precio`, `men_disponible`, `men_descripcion`) VALUES
(1, 1, 'Menú de la mañana', 3.50, 13, 'ninguna'),
(1, 2, 'Menú de la tarde', 3.00, 12, 'ninguna'),
(1, 3, 'Menú de la noche', 2.50, 12, 'ninguna');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `preferencias`
--

CREATE TABLE `preferencias` (
  `men_id` int(11) NOT NULL,
  `pre_id` int(11) NOT NULL,
  `pre_fecha` date NOT NULL,
  `pre_observacion` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `preferencias`
--

INSERT INTO `preferencias` (`men_id`, `pre_id`, `pre_fecha`, `pre_observacion`) VALUES
(1, 1, '2022-05-12', 'ninguna'),
(2, 2, '2022-05-13', 'ninguna'),
(3, 3, '2022-05-14', 'ninguna');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `snack`
--

CREATE TABLE `snack` (
  `bar_id` int(11) NOT NULL,
  `sna_id` int(11) NOT NULL,
  `sna_nombre` varchar(50) NOT NULL,
  `sna_precio` float(8,2) NOT NULL,
  `sna_disponible` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `snack`
--

INSERT INTO `snack` (`bar_id`, `sna_id`, `sna_nombre`, `sna_precio`, `sna_disponible`) VALUES
(1, 4, 'Rufles', 0.50, 50),
(1, 5, 'Doritos', 0.50, 25),
(1, 6, 'Chetos', 0.50, 29),
(1, 7, 'Cachitos', 0.30, 50);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `usu_name` varchar(50) NOT NULL,
  `usu_password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usu_name`, `usu_password`) VALUES
('brandon', 'bra1234'),
('brayan', 'bra1234');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `bar`
--
ALTER TABLE `bar`
  ADD PRIMARY KEY (`bar_id`),
  ADD KEY `fk_campus_bar` (`cam_id`);

--
-- Indices de la tabla `buzon`
--
ALTER TABLE `buzon`
  ADD PRIMARY KEY (`buz_id`),
  ADD KEY `fk_bar_buzon` (`bar_id`);

--
-- Indices de la tabla `campus`
--
ALTER TABLE `campus`
  ADD PRIMARY KEY (`cam_id`);

--
-- Indices de la tabla `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`men_id`),
  ADD KEY `fk_bar_menu` (`bar_id`);

--
-- Indices de la tabla `preferencias`
--
ALTER TABLE `preferencias`
  ADD PRIMARY KEY (`pre_id`),
  ADD KEY `fk_menu_preferencias` (`men_id`);

--
-- Indices de la tabla `snack`
--
ALTER TABLE `snack`
  ADD PRIMARY KEY (`sna_id`),
  ADD KEY `fk_bar_nack` (`bar_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `bar`
--
ALTER TABLE `bar`
  MODIFY `bar_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `buzon`
--
ALTER TABLE `buzon`
  MODIFY `buz_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `campus`
--
ALTER TABLE `campus`
  MODIFY `cam_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `menu`
--
ALTER TABLE `menu`
  MODIFY `men_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `preferencias`
--
ALTER TABLE `preferencias`
  MODIFY `pre_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `snack`
--
ALTER TABLE `snack`
  MODIFY `sna_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `bar`
--
ALTER TABLE `bar`
  ADD CONSTRAINT `fk_campus_bar` FOREIGN KEY (`cam_id`) REFERENCES `campus` (`cam_id`);

--
-- Filtros para la tabla `buzon`
--
ALTER TABLE `buzon`
  ADD CONSTRAINT `fk_bar_buzon` FOREIGN KEY (`bar_id`) REFERENCES `bar` (`bar_id`);

--
-- Filtros para la tabla `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `fk_bar_menu` FOREIGN KEY (`bar_id`) REFERENCES `bar` (`bar_id`);

--
-- Filtros para la tabla `preferencias`
--
ALTER TABLE `preferencias`
  ADD CONSTRAINT `fk_menu_preferencias` FOREIGN KEY (`men_id`) REFERENCES `menu` (`men_id`);

--
-- Filtros para la tabla `snack`
--
ALTER TABLE `snack`
  ADD CONSTRAINT `fk_bar_nack` FOREIGN KEY (`bar_id`) REFERENCES `bar` (`bar_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
