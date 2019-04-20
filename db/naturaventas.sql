-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 20-04-2019 a las 19:28:37
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
  `fecha-_venta` date NOT NULL,
  `cant_venta` int(100) NOT NULL,
  `descto_venta` decimal(60,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  ADD KEY `id_prod` (`id_prod`),
  ADD KEY `id_emp` (`id_emp`),
  ADD KEY `id_prov` (`id_prov`);

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
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD KEY `id_prod` (`id_prod`),
  ADD KEY `id_cli` (`id_cli`),
  ADD KEY `id_emp` (`id_emp`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cli` int(100) NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id_prod` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `id_prov` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `gasto`
--
ALTER TABLE `gasto`
  ADD CONSTRAINT `gasto_ibfk_1` FOREIGN KEY (`id_emp`) REFERENCES `empleado` (`id_emp`);

--
-- Filtros para la tabla `ingreso`
--
ALTER TABLE `ingreso`
  ADD CONSTRAINT `ingreso_ibfk_1` FOREIGN KEY (`id_prov`) REFERENCES `proveedor` (`id_prov`),
  ADD CONSTRAINT `ingreso_ibfk_2` FOREIGN KEY (`id_prod`) REFERENCES `producto` (`id_prod`),
  ADD CONSTRAINT `ingreso_ibfk_3` FOREIGN KEY (`id_emp`) REFERENCES `empleado` (`id_emp`);

--
-- Filtros para la tabla `venta`
--
ALTER TABLE `venta`
  ADD CONSTRAINT `venta_ibfk_1` FOREIGN KEY (`id_prod`) REFERENCES `producto` (`id_prod`),
  ADD CONSTRAINT `venta_ibfk_2` FOREIGN KEY (`id_emp`) REFERENCES `empleado` (`id_emp`),
  ADD CONSTRAINT `venta_ibfk_3` FOREIGN KEY (`id_cli`) REFERENCES `cliente` (`id_cli`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
