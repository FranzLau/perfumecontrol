-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-04-2019 a las 22:52:06
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `naturaventas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id_cli` int(100) NOT NULL,
  `nom_cli` varchar(20) NOT NULL,
  `ape_cli` varchar(40) NOT NULL,
  `doc_cli` varchar(20) NOT NULL,
  `num_cli` varchar(11) NOT NULL,
  `dir_cli` varchar(100) NOT NULL,
  `telf_cli` varchar(10) NOT NULL,
  `email_cli` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_cli`, `nom_cli`, `ape_cli`, `doc_cli`, `num_cli`, `dir_cli`, `telf_cli`, `email_cli`) VALUES
(1, 'karla', 'cruz ucharico', 'DNI', '70209625', 'calle jose olaya 377-A', '957868654', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleado`
--

CREATE TABLE `empleado` (
  `id_emp` int(100) NOT NULL,
  `nom_emp` varchar(20) NOT NULL,
  `ape_emp` varchar(40) NOT NULL,
  `sexo_emp` varchar(1) NOT NULL,
  `fechnac_emp` date NOT NULL,
  `doc_emp` varchar(8) NOT NULL,
  `dir_emp` varchar(100) NOT NULL,
  `telf_emp` varchar(10) NOT NULL,
  `email_emp` varchar(50) NOT NULL,
  `cargo_emp` varchar(50) NOT NULL,
  `estado_emp` varchar(20) NOT NULL,
  `acceso_emp` varchar(20) NOT NULL,
  `pass_emp` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `empleado`
--

INSERT INTO `empleado` (`id_emp`, `nom_emp`, `ape_emp`, `sexo_emp`, `fechnac_emp`, `doc_emp`, `dir_emp`, `telf_emp`, `email_emp`, `cargo_emp`, `estado_emp`, `acceso_emp`, `pass_emp`) VALUES
(2, 'Franz Lee', 'Cruz Ucharico', 'M', '1992-12-09', '70209626', 'P.  J. Miguel Grau calle Federico Barreto 321', '962248668', 'fcruzlau@gmail.com', 'Soporte TÃ©cnico', 'Activo', 'Administrador', 'admin'),
(3, 'milagros rosa', 'roque aceres', 'F', '1995-10-10', '70208585', 'av leguia 159', '', '', 'Recepcionista de Llamadas', 'Inactivo', 'Usuario', '1234'),
(4, 'alejandra', 'manrique reset', 'F', '1998-03-10', '70201212', 'cono sur 159', '', '', 'Ventas', 'Inactivo', 'Ninguno', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gasto`
--

CREATE TABLE `gasto` (
  `id_gasto` int(100) NOT NULL,
  `precio_gasto` decimal(60,2) NOT NULL,
  `fecha_gasto` date NOT NULL,
  `tipo_gasto` varchar(256) NOT NULL,
  `id_emp` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `gasto`
--

INSERT INTO `gasto` (`id_gasto`, `precio_gasto`, `fecha_gasto`, `tipo_gasto`, `id_emp`) VALUES
(3, '250.00', '2019-04-18', 'Combustible', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ingreso`
--

CREATE TABLE `ingreso` (
  `id_ingreso` int(100) NOT NULL,
  `id_prod` int(100) NOT NULL,
  `id_emp` int(100) NOT NULL,
  `id_prov` int(100) NOT NULL,
  `fecha_ingreso` date NOT NULL,
  `cant_ingreso` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `ingreso`
--

INSERT INTO `ingreso` (`id_ingreso`, `id_prod`, `id_emp`, `id_prov`, `fecha_ingreso`, `cant_ingreso`) VALUES
(1, 3, 2, 2, '2019-04-23', 8),
(2, 4, 2, 2, '2019-04-23', 1),
(3, 5, 2, 2, '2019-04-23', 6),
(4, 4, 2, 2, '2019-04-23', 10);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id_prod` int(100) NOT NULL,
  `cod_prod` varchar(100) NOT NULL,
  `nom_prod` varchar(50) NOT NULL,
  `precio_prod` decimal(60,2) NOT NULL,
  `stock_prod` int(100) NOT NULL,
  `marca_prod` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id_prod`, `cod_prod`, `nom_prod`, `precio_prod`, `stock_prod`, `marca_prod`) VALUES
(2, '2020202020', 'Tomatox', '45.00', 70, 'tony moly'),
(3, '20202020-A', 'zapatilla addidas', '250.00', 50, 'addidas'),
(4, '105', 'caramelo frutilla', '2.00', 60, 'bombo'),
(5, '106', 'chocolate jir', '4.00', 60, 'bomba');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `id_prov` int(100) NOT NULL,
  `razon_social` varchar(150) NOT NULL,
  `sector_comercial` varchar(50) NOT NULL,
  `doc_prov` varchar(20) NOT NULL,
  `num_prov` varchar(11) NOT NULL,
  `dir_prov` varchar(100) NOT NULL,
  `telf_prov` varchar(50) NOT NULL,
  `email_prov` varchar(50) NOT NULL,
  `url_prov` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`id_prov`, `razon_social`, `sector_comercial`, `doc_prov`, `num_prov`, `dir_prov`, `telf_prov`, `email_prov`, `url_prov`) VALUES
(2, 'bahia', 'Tecnologia', 'RUC', '54545454545', 'av 21 de mayo ', '215487', 'natura@gmail.com', 'asdsadsadsa');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `id_venta` int(100) NOT NULL,
  `id_prod` int(100) NOT NULL,
  `id_cli` int(100) NOT NULL,
  `id_emp` int(100) NOT NULL,
  `fecha_venta` date NOT NULL,
  `cant_venta` int(100) NOT NULL,
  `descto_venta` decimal(60,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `venta`
--

INSERT INTO `venta` (`id_venta`, `id_prod`, `id_cli`, `id_emp`, `fecha_venta`, `cant_venta`, `descto_venta`) VALUES
(1, 2, 0, 2, '2019-04-23', 1, '0.00'),
(2, 2, 0, 2, '2019-04-23', 1, '0.00'),
(2, 3, 0, 2, '2019-04-23', 1, '0.00'),
(3, 4, 1, 2, '2019-04-23', 1, '0.00'),
(3, 5, 1, 2, '2019-04-23', 1, '0.00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cli`);

--
-- Indices de la tabla `empleado`
--
ALTER TABLE `empleado`
  ADD PRIMARY KEY (`id_emp`);

--
-- Indices de la tabla `gasto`
--
ALTER TABLE `gasto`
  ADD PRIMARY KEY (`id_gasto`),
  ADD KEY `id_emp` (`id_emp`);

--
-- Indices de la tabla `ingreso`
--
ALTER TABLE `ingreso`
  ADD PRIMARY KEY (`id_ingreso`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id_prod`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`id_prov`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cli` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `empleado`
--
ALTER TABLE `empleado`
  MODIFY `id_emp` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `gasto`
--
ALTER TABLE `gasto`
  MODIFY `id_gasto` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `ingreso`
--
ALTER TABLE `ingreso`
  MODIFY `id_ingreso` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_prod` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `id_prov` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
