-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 07-12-2023 a las 03:39:47
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `basetransito`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `logindata`
--

CREATE TABLE `logindata` (
  `cedula` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `logindata`
--

INSERT INTO `logindata` (`cedula`, `username`, `password`) VALUES
('1109188918', 'samuel', 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `cedula` varchar(40) NOT NULL,
  `nombre` varchar(40) NOT NULL,
  `placa` varchar(40) NOT NULL,
  `tipovehiculo` varchar(40) NOT NULL,
  `pagos` varchar(40) NOT NULL,
  `tecnomecanica` varchar(40) NOT NULL,
  `telefono` varchar(20) NOT NULL,
  `correo` varchar(40) NOT NULL,
  `multas` int(20) NOT NULL,
  `valormult` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`cedula`, `nombre`, `placa`, `tipovehiculo`, `pagos`, `tecnomecanica`, `telefono`, `correo`, `multas`, `valormult`) VALUES
('1109188918', 'SAMUEL MARTINEZ MESA', 'CML821', 'CHEVROLET', 'Moroso', 'Validada', '3146928859', 'samimesa2000@gmail.com', 10, 20000);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
