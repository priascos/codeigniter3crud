-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-08-2023 a las 05:44:14
-- Versión del servidor: 10.4.25-MariaDB
-- Versión de PHP: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `db_riascos_pablo_20230828`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `ID` int(11) NOT NULL,
  `FIRST_NAME` varchar(255) NOT NULL,
  `LAST_NAME` varchar(255) NOT NULL,
  `EMAIL` varchar(255) NOT NULL,
  `GENDER` varchar(255) NOT NULL,
  `TELEPHONE` varchar(255) DEFAULT NULL,
  `AGE` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`ID`, `FIRST_NAME`, `LAST_NAME`, `EMAIL`, `GENDER`, `TELEPHONE`, `AGE`) VALUES
(5, 'juan', 'Palacios', 'asd@sdf.com', 'Masculino', '36854394343943', '25'),
(6, 'Maria', 'Hernandez', 'lkjadsas@asd.com', 'Femenino', '3658434343', '69'),
(7, 'Mario', 'Andrade', 'aloisdj@kajusdn.com', 'Masculino', '685468468464', '18'),
(8, 'Liseth', 'buitrago', 'aksjud@kjhsdad.com', 'Femenino', '3564434', '75'),
(9, 'Carmen', 'Slalzar', 'akjsud@akjsd.com', 'Femenino', '68464', '65'),
(10, 'Carlos ', 'Vasquez', 'aosdnladn@alkjsdn.com', 'Masculino', '88554112544', '45'),
(11, 'Camilo ', 'Ecehverry', 'alkjsda@kajsubdka.com', 'Masculino', '68463846348', '29'),
(12, 'Kevin', 'Duarte', 'askjlda@akljusd.com', 'Masculino', '3843649', '23'),
(13, 'Melisa', 'Andrade', 'asdadas@asd.com', 'Femenino', '35843434397', '24'),
(14, 'Jose', 'Restrepo', 'alkjsda@akljudhsa.com', 'Masculino', '325434', '58');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
