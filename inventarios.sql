-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 10-04-2024 a las 13:28:27
-- Versión del servidor: 10.4.16-MariaDB
-- Versión de PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `inventarios`
--

DELIMITER $$
--
-- Procedimientos
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `personal_busqueda` (`perbus` VARCHAR(45))  SELECT empleados.nombreEmpleado, empleado.APPEmpleado, empleado.puestoEmpleado AS 'Busqueda del personal' FROM empleados$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `nombreCliente` varchar(80) DEFAULT NULL,
  `telCliente` varchar(11) DEFAULT NULL,
  `correoCliente` varchar(45) DEFAULT NULL,
  `Pedidos_idPedidos` int(11) NOT NULL,
  `EmpleadoAtentido_idEmpleados` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `idEmpleados` int(11) NOT NULL,
  `PassEmpleado` varchar(20) DEFAULT NULL,
  `NombreEmpleado` varchar(80) DEFAULT NULL,
  `APPEmpleado` varchar(80) DEFAULT NULL,
  `APMEmpleado` varchar(80) DEFAULT NULL,
  `telEmpleado` varchar(11) DEFAULT NULL,
  `correoEmpleado` varchar(45) DEFAULT NULL,
  `puestoEmpleado` varchar(45) DEFAULT NULL,
  `Gerente_idGerente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`idEmpleados`, `PassEmpleado`, `NombreEmpleado`, `APPEmpleado`, `APMEmpleado`, `telEmpleado`, `correoEmpleado`, `puestoEmpleado`, `Gerente_idGerente`) VALUES
(19, '12131', 'sadasa', 'asd', 'asa', '1234', 'qwerty', 'tacos', 153368),
(133, 'lol', 'sasd', 'asdas', NULL, NULL, NULL, NULL, 153368),
(1223, 'lol', 'dsaw', '', NULL, NULL, NULL, NULL, 153368),
(123123, 'asdasd', 'asddas', 'dsada', 'daa', 'asdada', 'sadd', '123134', 153368),
(181231, '', 'jesus', '', '', '', '', '', 153368);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gd`
--

CREATE TABLE `gd` (
  `idGD` int(11) NOT NULL,
  `gananciaObtenida` float DEFAULT NULL,
  `Pedidos_idPedidos` int(11) NOT NULL,
  `Gestiona_GestionaGerente` int(11) NOT NULL,
  `Gerente_idGerente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `gerente`
--

CREATE TABLE `gerente` (
  `idGerente` int(11) NOT NULL,
  `PassGerente` varchar(20) DEFAULT NULL,
  `nombreGerente` varchar(80) DEFAULT NULL,
  `telGerente` varchar(11) DEFAULT NULL,
  `correoGerente` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `gerente`
--

INSERT INTO `gerente` (`idGerente`, `PassGerente`, `nombreGerente`, `telGerente`, `correoGerente`) VALUES
(153368, 'lol', 'jesus alberto', '9992250966', 'jesus-america10-01@hotmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inv`
--

CREATE TABLE `inv` (
  `idINV` int(11) NOT NULL,
  `nombreProd` varchar(45) DEFAULT NULL,
  `stock` int(11) DEFAULT NULL,
  `fechaCompra` date DEFAULT NULL,
  `fechaVencimiento` date DEFAULT NULL,
  `Gestiona_GestionaGerente` int(11) NOT NULL,
  `Gerente_idGerente` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `inv`
--

INSERT INTO `inv` (`idINV`, `nombreProd`, `stock`, `fechaCompra`, `fechaVencimiento`, `Gestiona_GestionaGerente`, `Gerente_idGerente`) VALUES
(0, '', 0, '0000-00-00', '0000-00-00', 0, 153368),
(12, '10042024', 13, '0000-00-00', '0000-00-00', 10, 153368),
(123, 'TACOS', 12, '0000-00-00', '0000-00-00', 10, 153368),
(124456, 'DSAD', 12314, '2024-04-08', '0000-00-00', 10, 153368),
(181231, '10042024', 1312, '0000-00-00', '0000-00-00', 13, 153368);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `idPedidos` int(11) NOT NULL,
  `fechaPedidos` date DEFAULT NULL,
  `NombreCliente` varchar(80) DEFAULT NULL,
  `telCliente` int(11) DEFAULT NULL,
  `DetallesPedido` varchar(1024) DEFAULT NULL,
  `TotalPedido` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `personal`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `personal` (
`idEmpleados` int(11)
,`nombreEmpleado` varchar(80)
,`APPEmpleado` varchar(80)
,`APMEmpleado` varchar(80)
,`puestoEmpleado` varchar(45)
);

-- --------------------------------------------------------

--
-- Estructura para la vista `personal`
--
DROP TABLE IF EXISTS `personal`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `personal`  AS SELECT `empleados`.`idEmpleados` AS `idEmpleados`, `empleados`.`NombreEmpleado` AS `nombreEmpleado`, `empleados`.`APPEmpleado` AS `APPEmpleado`, `empleados`.`APMEmpleado` AS `APMEmpleado`, `empleados`.`puestoEmpleado` AS `puestoEmpleado` FROM `empleados` ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD KEY `fk_Clientes_Pedidos1_idx` (`Pedidos_idPedidos`),
  ADD KEY `fk_Clientes_Empleados1_idx` (`EmpleadoAtentido_idEmpleados`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`idEmpleados`),
  ADD KEY `fk_Empleados_Gerente1_idx` (`Gerente_idGerente`);

--
-- Indices de la tabla `gd`
--
ALTER TABLE `gd`
  ADD PRIMARY KEY (`idGD`),
  ADD KEY `fk_GD_Pedidos1_idx` (`Pedidos_idPedidos`),
  ADD KEY `fk_GD_Gerente1_idx` (`Gerente_idGerente`);

--
-- Indices de la tabla `gerente`
--
ALTER TABLE `gerente`
  ADD PRIMARY KEY (`idGerente`);

--
-- Indices de la tabla `inv`
--
ALTER TABLE `inv`
  ADD PRIMARY KEY (`idINV`),
  ADD KEY `fk_INV_Gerente1_idx` (`Gerente_idGerente`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`idPedidos`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `fk_Clientes_Empleados1` FOREIGN KEY (`EmpleadoAtentido_idEmpleados`) REFERENCES `empleados` (`idEmpleados`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Clientes_Pedidos1` FOREIGN KEY (`Pedidos_idPedidos`) REFERENCES `pedidos` (`idPedidos`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD CONSTRAINT `fk_Empleados_Gerente1` FOREIGN KEY (`Gerente_idGerente`) REFERENCES `gerente` (`idGerente`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `gd`
--
ALTER TABLE `gd`
  ADD CONSTRAINT `fk_GD_Gerente1` FOREIGN KEY (`Gerente_idGerente`) REFERENCES `gerente` (`idGerente`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_GD_Pedidos1` FOREIGN KEY (`Pedidos_idPedidos`) REFERENCES `pedidos` (`idPedidos`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `inv`
--
ALTER TABLE `inv`
  ADD CONSTRAINT `fk_INV_Gerente1` FOREIGN KEY (`Gerente_idGerente`) REFERENCES `gerente` (`idGerente`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
