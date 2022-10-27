-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-09-2022 a las 06:57:16
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bodycar`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cli_nom` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `cli_ide` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `cli_dir` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `cli_ema` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `cli_tel` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `cli_ciu` varchar(255) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id`, `cli_nom`, `cli_ide`, `cli_dir`, `cli_ema`, `cli_tel`, `cli_ciu`) VALUES
(1, 'Miguel', '1053804427', 'Cll 14 # 23 - 45 ', 'migue@gmail.com', '3123142504', 'Medellin'),
(6, 'Leo Paredes', '1053804412', 'Poblado, Medellin cll 15', 'juan@gmail.com', '3002059478', 'Manizales'),
(7, 'Alexander Correa', '1054400051', 'calle 10', 'alex10@hotmail.com', '3125124000', 'Manizales'),
(8, 'Andrew Shevchenko', '100200400', 'Palermo medio', 'shev10@gmail.com', '3125468740', 'Manizales'),
(9, 'July', '1054804412', 'cll 14 # 14 - 23', 'parisjuly25@gmail.com', '3125124012', 'Manizales'),
(13, 'Zurich', '1052645847', 'calle 10', 'shev@gmail.com', '3125124000', 'Manizales'),
(14, 'Juliana Ramirez Serna', '1053768419', 'Calle 14 # 23 - 45', 'parisjuly25@gmail.com', '3125124012', 'Manizales'),
(15, 'Stiven Galvis', '1053804123', 'calle 10', 'alex@hotmail.com', '3125124012', 'Manizales'),
(16, 'Oliver', '1053804126', 'calle 15', 'oliver12@gmail.com', '3123142505', 'Man'),
(17, 'jorge mario', '123', 'cll 15 ', 'you', '3002059477', 'Manizales'),
(18, 'jorge mario 2', '123', 'cll 15 ', 'you', '3002059477', 'Manizales'),
(21, 'vivi', '123', 'cll 15 ', 'you', '3002059477', 'Manizales'),
(22, 'arturo', '', '', '', '312', ''),
(25, 'arturo beca', '123', 'cll 15 ', 'you', '3002059477', 'Manizales'),
(26, 'vivi beca', '123', 'cll 15 ', 'you', '3002059477', 'Manizales'),
(27, 'jorge mario', '123', 'cll 15 ', 'you', '3002059477', 'Manizales'),
(29, 'jorge mario', '123', 'cll 15 ', 'you', '3002059477', 'Manizales'),
(30, 'jorge mario', '', '', '', '3002059477', ''),
(32, 'Lucrecia', '123', 'cll 15 ', 'lua@gmail.com', '3002059477', 'Manizales');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orden`
--

CREATE TABLE `orden` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fec_ing` date NOT NULL,
  `fec_ent` date NOT NULL,
  `ord_est` int(1) NOT NULL,
  `ord_obs` varchar(500) COLLATE latin1_spanish_ci NOT NULL,
  `ord_veh` varchar(255) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `orden`
--

INSERT INTO `orden` (`id`, `fec_ing`, `fec_ent`, `ord_est`, `ord_obs`, `ord_veh`) VALUES
(2, '2022-05-01', '2022-05-31', 2, 'terminado 9', '9'),
(4, '2022-05-05', '2022-05-06', 2, 'ter', '12'),
(5, '2022-05-01', '2022-05-20', 2, 'ter', '10'),
(6, '2022-05-05', '2022-05-30', 3, 'otro', '10'),
(7, '2022-05-06', '2022-05-01', 3, 'sos', '12'),
(8, '2022-05-13', '2022-05-14', 1, 'obser', '10'),
(9, '2022-05-06', '2022-05-08', 1, 'observacion pintar', '12'),
(10, '2022-07-01', '2022-07-15', 3, 'bn', '9'),
(11, '2022-08-03', '2022-08-01', 2, 'proceso bn', '6');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tecnico`
--

CREATE TABLE `tecnico` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tec_nom` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `tec_ide` int(10) NOT NULL,
  `tec_dir` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `tec_ema` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `tec_tel` varchar(10) COLLATE latin1_spanish_ci NOT NULL,
  `tel_ciu` varchar(255) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `tecnico`
--

INSERT INTO `tecnico` (`id`, `tec_nom`, `tec_ide`, `tec_dir`, `tec_ema`, `tec_tel`, `tel_ciu`) VALUES
(1, 'Jhonatan', 1053814546, 'Carrera 30 # 93 - 45', 'jnvd@gmail.com', '3125236879', 'Manizales'),
(2, 'Fernando', 1053804521, 'Calle 65a # 45 - 96 ', 'fer@gmail.com', '3105498253', 'Medellin'),
(3, 'Fredy', 712000834, 'k6b # 34 - 14', 'fredy', '3002059477', 'Medellin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `trabajo`
--

CREATE TABLE `trabajo` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tra_tec` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `tra_fec` date NOT NULL,
  `tra_can` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `tra_val_uni` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `tra_val_tot` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `tra_ref` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `tra_ord` varchar(255) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `trabajo`
--

INSERT INTO `trabajo` (`id`, `tra_tec`, `tra_fec`, `tra_can`, `tra_val_uni`, `tra_val_tot`, `tra_ref`, `tra_ord`) VALUES
(1, '1', '2022-05-03', '1', '180000', '180000', 'roof', '2'),
(2, '1', '2022-05-03', '5', '15000', '75000', 'rines', '5'),
(3, '2', '2022-05-10', '9', '80000', '720000', 'doble pestaÃ±a', '2'),
(4, '2', '2022-05-11', '2', '40000', '80000', 'silla delanteras', '1'),
(5, '1', '2022-05-11', '2', '15000', '30000', 'silla traseras', '3'),
(6, '1', '2022-05-04', '4', '50000', '200000', 'llantas', '8'),
(7, '2', '2022-05-05', '9', '50000', '450000', 'LLantas', '8'),
(8, '2', '2022-05-05', '10', '54000', '540000', 'instalaciones', '2'),
(9, '1', '2022-05-07', '10', '15000', '150000', 'Luz ', '8'),
(10, '1', '2022-05-01', '7', '80000', '560000', 'pcs', '8'),
(11, '1', '2022-05-06', '8', '70000', '560000', 'Bompers', '8'),
(12, '2', '2022-07-04', '2', '80000', '160000', 'DescripciÃ³n del trabajo', '10'),
(13, '2', '2022-08-10', '2', '50.000', '100', 'Panasonic', '11');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vehiculo`
--

CREATE TABLE `vehiculo` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `veh_pla` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `veh_mar` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `veh_col` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `veh_km` varchar(255) COLLATE latin1_spanish_ci NOT NULL,
  `veh_inv` varchar(200) COLLATE latin1_spanish_ci NOT NULL,
  `veh_otr` varchar(10) COLLATE latin1_spanish_ci NOT NULL,
  `veh_obs` varchar(1000) COLLATE latin1_spanish_ci NOT NULL,
  `veh_cli` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Volcado de datos para la tabla `vehiculo`
--

INSERT INTO `vehiculo` (`id`, `veh_pla`, `veh_mar`, `veh_col`, `veh_km`, `veh_inv`, `veh_otr`, `veh_obs`, `veh_cli`) VALUES
(8, 'NQX21F', 'Nissan', 'amarillo', '100000', '', '', '', 6),
(9, 'JUL25X', 'TOYOTA', 'NEGRO', '20.000', '', '', '', 9),
(10, 'MKQ21R', 'Mazda', 'azul', '100.000', '', '', '', 9),
(12, 'MKQ21R', 'Nissan', 'amarillo', '100000', '', '', '', 14),
(13, 'NQX21F', 'Nissan', 'amarillo', '100000', '', '', '', 7),
(14, 'NQX21F', 'Nissan', 'amarillo', '20.000', '', '', '', 14),
(15, 'NQX21F', 'yamaha', 'blanco', '150', '', '', '', 15),
(16, 'MKQ21R', '', 'NEGRO', '20.000', '', '', '', 16),
(17, 'JUL25X', 'TOYOTA', 'amarillo', '150', '', '', '', 16),
(18, 'LNQX21F', '', 'NEGRO', '', 'Ar', 'ot', 'ok', 7),
(26, 'LNQX21F', 'VOLKSWAGEN', 'NEGRO', '20000', 'Radio~Llaves~Parlantes~Antena~Placas~Herramientas~Gato~Repuesto~Tapa gasolina~Llave pernos~Tapetes~Botiquin~Cruceta~14', 'otro', 'otro', 7);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `orden`
--
ALTER TABLE `orden`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `tecnico`
--
ALTER TABLE `tecnico`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `trabajo`
--
ALTER TABLE `trabajo`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT de la tabla `orden`
--
ALTER TABLE `orden`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `tecnico`
--
ALTER TABLE `tecnico`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `trabajo`
--
ALTER TABLE `trabajo`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `vehiculo`
--
ALTER TABLE `vehiculo`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
