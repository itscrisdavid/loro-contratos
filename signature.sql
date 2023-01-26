-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-04-2021 a las 02:30:33
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `signature`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `id_empleado` int(11) NOT NULL,
  `empresa` int(11) NOT NULL,
  `nombre_empleado` varchar(50) NOT NULL,
  `cargo_empleado` varchar(50) DEFAULT NULL,
  `correo_empleado` varchar(100) DEFAULT NULL,
  `estado_empleado` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id_empleado`, `empresa`, `nombre_empleado`, `cargo_empleado`, `correo_empleado`, `estado_empleado`) VALUES
(1, 2, 'jhon', 'dsds', 'sdsd', 1),
(2, 3, 'cualquier persona', 'coordinador eventos', 'sdsdss@gmai.com', 1),
(3, 8, 'frank produccion', 'jefe produccion', 'sdsdsd@gmail.com', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas`
--

CREATE TABLE `empresas` (
  `id_empresa` int(11) NOT NULL,
  `nombre_empresa` varchar(200) NOT NULL,
  `nit_empresa` varchar(50) NOT NULL,
  `estado_empresa` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `empresas`
--

INSERT INTO `empresas` (`id_empresa`, `nombre_empresa`, `nit_empresa`, `estado_empresa`) VALUES
(1, 'ACCESO VIRTUAL AULAS AMIGAS S.A.S', '900.292.680-5', 1),
(2, 'ACCESORIOS Y VÁLVULAS APOLO S.A.S.', '900.941.680-0', 1),
(3, 'ANDESCOL', '900.199.473-1', 1),
(4, 'ANDICOL SAS', '800.202.080-9', 1),
(5, 'ARRENDAMIENTOS FUTURAMA', '811.042.142-1', 1),
(6, 'ASENTA INVERSIONES SAS', '901.143.835-5', 1),
(7, 'BANANERAS ARISTIZABAL SAS', ' 890.920.468-1 ', 1),
(8, 'BIG SAS', '890.920.168-5', 1),
(9, 'CARNES VITAL SAS', '900.860.359-2', 1),
(10, 'CI BODEGAS ALICANTE', '890.938.492-6', 1),
(11, 'COBRAL SAS', '890.906.145-8', 1),
(12, 'COMERCIALIZADORA DE HIELOS IGLU S.A. S', '890.908.822-5', 1),
(13, 'COMERCIALIZADORA INTERNACIONAL GUTIMILKO S.A.S.', '811.032.038-9', 1),
(14, 'COOPERATIVA DE TRANSPORTES DE MEDELLÍN C.T.M COOTRANSMEDE', '890.909.254-6', 1),
(15, 'DEMETALICOS', '890.936.560-1', 1),
(16, 'ECOLIMPIADORES SAS', '900.410.852-2', 1),
(17, 'ELECTRONICA INDUSTRIAL COLOMBIANA GROUP SAS', '890.316.586-0', 1),
(18, 'ELEINCO SAS', '811.015.018-1', 1),
(19, 'EMPRESTUR', '811.030.670-5', 1),
(20, 'ESCALA LA SAS', ' 900.647.732-5 ', 1),
(21, 'ESS - SYSTEMATIZED SHEET METAL ENGINERRING  S.A.S  ', '900.223.651-7', 1),
(22, 'ESTRUCTURAS Y DISEÑOS S.A.S', '900.205.979-0', 1),
(23, 'FECON S.A.S', '890.931.459-0', 1),
(24, 'FORMA EQUIPOS PARA GIMNASIO', '811.002.052-4', 1),
(25, 'FUNDACION COLOMBIA UNA NACION CIVICA FUNDACION CONCIVICA', '801.004.709-7', 1),
(26, 'GRUPO ORAL HOME S.A.S', '900.219.487-1', 1),
(27, 'GUADALUPANA AGROPECUARIA S.A.S. GUADALUSA', '900.113.446-1', 1),
(28, 'HJA S.A', '900.087.767-9', 1),
(29, 'INCODI', '890.904.980-2', 1),
(30, 'INDUSTRIAS HUMBERT S A', '811.044.170-5', 1),
(31, 'INMUNIZADORA SERYE S.A.', '890.940.970-1', 1),
(32, 'INVERSIONES JAISAL SAS', '900.353.298-7', 1),
(33, 'INVERSIONES PAKITA S.A.S', '900.578.301-8', 1),
(34, 'INVERSIONES SUPER VAQUITA LA 33 S.A.S  ', '900.522.508-4', 1),
(35, 'INVERSIONES VAQUITA EXPRESS S.A.S - ENVIGADO', '900.642.557-1', 1),
(36, 'IPROCOM', '', 1),
(37, 'IT COLABORACION SAS', '900.711.321-5', 1),
(38, 'JOHN ANDRES PANIAGUA-BELATRIZ', '8.357.497-9', 1),
(39, 'JOSE BENJAMIN GOMEZ ARIAS ( COMPAÑÍA DE HILAZAS SUCRE)', '71.362.632-6', 1),
(40, 'JOTAVEL SAS', '800.026.833-3', 1),
(41, 'KHEMIK S.A.S.', '900.468.591-5', 1),
(42, 'KLAR SOLUCIONES INTEGRALES SAS', '9006607623-1', 1),
(43, 'LA VAQUITA S.A - BELEN', '900.149.879-2', 1),
(44, 'LAFE SIERRA SAS', '811-018057-0', 1),
(45, 'LOGISTICA INTEGRAL ALTAIR', '900.944.898-2', 1),
(46, 'NEDIAR SAS', '900.986.999-8', 1),
(47, 'NOVAQUA', ' 901.148.211-2 ', 1),
(48, 'NOVAQUIMICA COLOMBIA S.A', '900.187.140-0', 1),
(49, 'ORION LOGISTICA S.A.S', '900.774.916-7', 1),
(50, 'OSCAR DAVID SANTAMARIA PUERTA', '1.037.388.974-1', 1),
(51, 'EL PUNTO CADENA S.A.S', '800.004.711-9', 1),
(52, 'PETPACK S.A.S.', '811.022.408-8', 1),
(53, 'QUERFURT SAS', '901.037.725-1', 1),
(54, 'QUIMICA KAIROS S.A.S.', '811.029.152-1', 1),
(55, 'QUIMICA ORION S A S', '830.506.179-3', 1),
(56, 'ROGER GIRALDO GARCES', '11.787.038-7', 1),
(57, 'RYCAR S.A.', '800.115.550-6', 1),
(58, 'SERVICIO DE ALQUILER DE EQUIPOS PARA LA CONSTRUCCION SAS', '811.038.648-9', 1),
(59, 'SAN FERMIN TALABARTERIA SAS', ' 900.350.381-7 ', 1),
(60, 'SELLOS Y PRECINTOS DE SEGURIDAD (SECSEL)', '811.031.468-8', 1),
(61, 'SERVICIOS INTEGRALES DE SOSTENIMIENTO Y ASEO SAS', '900.513.843-9', 1),
(62, 'SINDICATO NACIONAL DE TRAUMATOLOGIA Y ORTOPEDIA T.O.A.', '900.463.012-1', 1),
(63, 'STEEL CUTTING PROFESSIONAL S.A.S', '900.660.593-1', 1),
(64, 'SUPERMERCADO LA VAQUITA NO 2', '900.320.701-2', 1),
(65, 'SUPERMERCADO LA VAQUITA SAN CRISTOBAL', '', 1),
(66, 'TINTORERIA INDUSTRIAL COLOMBIA SAS TINCOLSAS', '890.918.159-2', 1),
(67, 'TRANSPORTES EN AUTOS DE LUJO S A S', '900.251.813-2', 1),
(68, 'TRANSPORTES ENVIGADO S.A', '890.912.702-5', 1),
(69, 'TRASNPORTES LAFE SAS', '830.510.959-7', 1),
(70, 'URBANIZACION LINARES EN LA SIERRA', '811.021.701-7', 1),
(71, 'VISION LEGAL S.A.S', '900.603.237-1', 1),
(72, 'Z COMUNICACIONES S.A.', '800.203.168-2', 1),
(73, 'AR FER', '890.936.713-1', 1),
(74, 'EQUIPOS A.M.C S.A', '890.932.739-2', 1),
(75, 'MERK-DURACION SAS', '900.084.181-1', 1),
(76, 'COLVAC EMPAQUES DE BARRERA S.A.S', '900.446.897-9', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entregas`
--

CREATE TABLE `entregas` (
  `id_entrega` int(11) NOT NULL,
  `empresa` int(11) NOT NULL,
  `empleado` int(11) NOT NULL,
  `usuario` int(11) NOT NULL,
  `observaciones` text DEFAULT NULL,
  `estado_entrega` int(11) DEFAULT NULL,
  `fecha_ingreso` datetime NOT NULL DEFAULT current_timestamp(),
  `firma_empleado` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `entregas`
--

INSERT INTO `entregas` (`id_entrega`, `empresa`, `empleado`, `usuario`, `observaciones`, `estado_entrega`, `fecha_ingreso`, `firma_empleado`) VALUES
(1, 2, 1, 2, '', 3, '2021-04-03 11:18:45', '<?xml version=\"1.0\" encoding=\"UTF-8\" standalone=\"no\"?><!DOCTYPE svg PUBLIC \"-//W3C//DTD SVG 1.1//EN\" \"http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd\"><svg xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" width=\"215\" height=\"45\"><path fill=\"none\" stroke=\"#000000\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M 2 13 c -0.02 0.42 -1.25 17.28 -1 24 c 0.04 1.01 1.31 3.11 2 3 c 2.3 -0.35 9.27 -2.29 11 -5 c 5.28 -8.24 12.06 -31.31 14 -34 c 0.52 -0.72 2.92 5.93 4 9 c 0.91 2.57 1.74 5.35 2 8 c 0.39 3.85 -0.38 10.74 0 12 c 0.11 0.38 2.55 -1.1 3 -2 c 1.85 -3.71 2.84 -10.26 5 -14 c 1.14 -1.96 3.91 -4.3 6 -5 c 3.22 -1.07 9.07 -2.07 12 -1 c 3.28 1.19 7.21 5.82 10 9 c 1.67 1.91 2.97 4.56 4 7 c 1.61 3.82 2.95 10.49 4 12 c 0.3 0.43 2.4 -1.14 3 -2 c 1.5 -2.14 2.47 -5.51 4 -8 c 1.1 -1.78 2.57 -3.57 4 -5 c 0.8 -0.8 2.2 -2.16 3 -2 c 1.79 0.36 5.42 2.29 7 4 c 2.02 2.19 2.94 6.52 5 9 c 2.7 3.24 6.55 6.7 10 9 c 2.19 1.46 5.43 2.77 8 3 c 4.22 0.38 10.23 0.13 14 -1 c 2.1 -0.63 4.34 -3.1 6 -5 c 2.89 -3.3 6.11 -9.45 8 -11 c 0.5 -0.41 1.96 1.65 3 2 c 1.75 0.58 4.48 1.62 6 1 c 4.7 -1.92 10.78 -8.85 16 -10 c 6.92 -1.52 17.18 -0.2 25 1 l 14 5\"/></svg>'),
(2, 3, 2, 2, '', 3, '2021-04-03 12:20:25', '<?xml version=\"1.0\" encoding=\"UTF-8\" standalone=\"no\"?><!DOCTYPE svg PUBLIC \"-//W3C//DTD SVG 1.1//EN\" \"http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd\"><svg xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" width=\"198\" height=\"41\"><path fill=\"none\" stroke=\"#000000\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M 40 14 c 0.04 0.05 1.13 2.35 2 3 c 2.81 2.1 6.76 5.03 10 6 c 2.78 0.83 6.78 0.23 10 0 c 1.33 -0.09 2.81 -0.47 4 -1 c 1.69 -0.75 3.7 -2.84 5 -3 c 0.8 -0.1 2.46 1.2 3 2 c 0.61 0.92 0.69 4.22 1 4 c 0.82 -0.58 3.73 -6.27 6 -9 c 2.67 -3.21 5.67 -7.45 9 -9 c 5.64 -2.63 13.96 -3.94 21 -5 c 6.21 -0.93 14.16 -1.63 19 -1 c 1.44 0.19 3.62 2.57 4 4 c 0.74 2.79 0 10.81 0 11 c 0 0.14 -0.99 -6.38 0 -8 c 1.17 -1.91 5.34 -3.67 8 -5 c 1.16 -0.58 2.98 -1.3 4 -1 c 1.78 0.53 5.05 2.32 6 4 c 1.62 2.89 2.46 8.04 3 12 c 0.44 3.2 0.34 6.76 0 10 c -0.31 2.99 -1.1 6.3 -2 9 c -0.35 1.06 -1.77 3.28 -2 3 c -0.62 -0.74 -2.82 -6.37 -3 -9 c -0.12 -1.76 0.93 -4.53 2 -6 c 1.32 -1.82 3.99 -3.79 6 -5 c 1.06 -0.64 3.15 -1.46 4 -1 c 2.04 1.11 5.94 4.87 7 7 c 0.55 1.1 -1.51 5.14 -1 5 c 2.54 -0.69 15.3 -7.77 23 -11 c 2.49 -1.04 8.22 -1.78 8 -2 c -0.29 -0.29 -7.46 -0.24 -11 -1 c -5.69 -1.22 -11.23 -3.7 -17 -5 c -4.61 -1.04 -9.28 -1.72 -14 -2 c -6.67 -0.39 -13.21 0.38 -20 0 c -11.59 -0.64 -22.41 -2.33 -34 -3 c -6.11 -0.35 -12.01 0.52 -18 0 c -9.42 -0.82 -18.49 -3.27 -28 -4 c -12.44 -0.96 -24.45 -1 -37 -1 c -4.76 0 -9.96 0.29 -14 1 c -1.04 0.18 -2.88 1.38 -3 2 c -0.12 0.62 1.1 2.71 2 3 c 5.1 1.62 13.28 3.57 20 4 c 19.43 1.23 40.19 -0.81 59 1 c 7.97 0.77 15.92 5.27 24 7 c 5.86 1.25 11.89 1.72 18 2 c 8.43 0.39 17.04 0.5 25 0 l 7 -2\"/></svg>'),
(3, 8, 3, 5, '<p>sdkodkosdkcokds sdmskmcoskmcos</p>', 3, '2021-04-03 12:28:31', '<?xml version=\"1.0\" encoding=\"UTF-8\" standalone=\"no\"?><!DOCTYPE svg PUBLIC \"-//W3C//DTD SVG 1.1//EN\" \"http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd\"><svg xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" width=\"319\" height=\"59\"><path fill=\"none\" stroke=\"#000000\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M 46 1 c 0.04 0.58 0.96 22.06 2 33 c 0.29 3.05 0.79 6.37 2 9 c 2.29 5 7.62 13.62 9 15 c 0.35 0.35 1.66 -2.6 2 -4 c 2.56 -10.54 5.94 -32.04 7 -33 c 0.73 -0.67 2.4 15.54 4 23 c 0.37 1.72 1.84 5.36 2 5 c 0.78 -1.72 4.27 -17.3 7 -25 c 0.76 -2.14 2.62 -5.23 4 -6 c 0.97 -0.54 4.4 0.06 5 1 c 1.2 1.88 1.72 6.67 2 10 c 0.38 4.58 -0.02 14.24 0 14 c 0.03 -0.49 0.09 -21.21 1 -28 c 0.12 -0.87 2.3 -2.32 3 -2 c 2.89 1.35 9.12 5.43 12 9 c 4.91 6.09 9.39 20.61 13 22 c 2.5 0.96 8.4 -8.64 13 -12 c 3.84 -2.8 8.53 -5.03 13 -7 c 3.83 -1.69 9.59 -4 12 -4 c 0.85 0 1.86 2.77 2 4 c 0.16 1.4 -0.58 5 -1 5 c -0.48 0 -2.6 -5.2 -3 -5 c -0.48 0.24 -1 4.77 -1 7 c 0 1.92 0.14 4.85 1 6 c 0.76 1.02 3.76 1.03 5 2 c 1.48 1.15 2.55 3.73 4 5 c 1.02 0.89 3.06 2.36 4 2 c 2.39 -0.92 7.02 -4.63 9 -7 c 0.88 -1.06 0.23 -4.36 1 -5 c 0.76 -0.63 3.39 0.29 5 0 c 9.2 -1.67 22.64 -6 28 -6 c 1.18 0 2.26 4.45 2 6 c -0.29 1.77 -4.35 5.29 -4 6 c 0.34 0.69 4.86 0.55 7 0 c 8.98 -2.31 20.95 -5.94 28 -9 c 1.07 -0.46 2.23 -3.09 2 -4 c -0.29 -1.16 -2.52 -3.14 -4 -4 c -2.23 -1.3 -5.38 -2.63 -8 -3 c -3.99 -0.57 -8.6 0.27 -13 0 c -6.8 -0.41 -13.19 -1.77 -20 -2 c -13.21 -0.45 -25.7 0.58 -39 0 c -17.79 -0.78 -34.2 -3.46 -52 -4 c -27.64 -0.83 -52.94 0.25 -81 0 c -10.74 -0.1 -27.71 -2.92 -31 -1 c -1.76 1.02 3.49 13.34 7 15 c 6.6 3.13 20.44 2.66 31 3 c 20.68 0.67 39.99 0.42 61 0 c 13.79 -0.27 26.08 -1.16 40 -2 c 26.48 -1.6 49.67 -3.52 76 -5 c 10.72 -0.6 20.32 -0.38 31 -1 c 13.12 -0.76 24.9 -1.71 38 -3 l 33 -4\"/></svg>'),
(4, 8, 3, 5, '', 1, '2021-04-03 12:32:30', '<?xml version=\"1.0\" encoding=\"UTF-8\" standalone=\"no\"?><!DOCTYPE svg PUBLIC \"-//W3C//DTD SVG 1.1//EN\" \"http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd\"><svg xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" width=\"163\" height=\"61\"><path fill=\"none\" stroke=\"#000000\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M 1 8 c 0.18 0.91 9.76 50.9 10 52 c 0.03 0.12 0 -6 0 -6\"/><path fill=\"none\" stroke=\"#000000\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M 2 10 c 0.33 -0.16 16.41 -8.46 19 -9 c 0.62 -0.13 0.3 3.49 0 5 c -0.32 1.62 -2 5 -2 5\"/><path fill=\"none\" stroke=\"#000000\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M 10 32 l 10 -7\"/><path fill=\"none\" stroke=\"#000000\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M 35 28 c 0.11 0.32 5 17.34 6 18 c 0.65 0.43 1.67 -8.67 3 -12 c 0.46 -1.14 3 -3 3 -3\"/><path fill=\"none\" stroke=\"#000000\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M 60 29 c 0.12 0.09 4.77 4.07 7 5 c 1.3 0.54 4.48 0.52 5 0 c 0.43 -0.43 -0.23 -3.16 -1 -4 c -2.12 -2.33 -6.78 -6.08 -9 -7 c -0.7 -0.29 -2.91 1.16 -3 2 c -0.42 3.96 -0.33 13.01 1 17 c 0.56 1.69 4.03 3.69 6 4 c 3.55 0.56 10.64 0.18 13 -1 c 1.1 -0.55 1 -4.08 1 -6 c 0 -2.23 -0.03 -5.89 -1 -7 l -6 -1\"/><path fill=\"none\" stroke=\"#000000\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M 78 31 c 0.05 0.16 2.45 6.07 3 9 c 0.41 2.16 -0.52 4.94 0 7 c 0.72 2.9 3.33 9.11 4 9 c 0.69 -0.11 0.97 -6.9 2 -10 c 0.91 -2.72 4 -8 4 -8\"/><path fill=\"none\" stroke=\"#000000\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M 95 25 c 0.02 0.28 0.27 11.38 1 16 c 0.16 1.04 1.67 3.29 2 3 c 0.95 -0.82 3.72 -6.01 5 -9 c 0.63 -1.48 0.18 -3.94 1 -5 c 1.16 -1.49 3.98 -3.16 6 -4 c 1.7 -0.71 5.09 -1.91 6 -1 c 2.54 2.54 6 10.1 8 15 c 0.83 2.04 0.41 4.74 1 7 c 1.06 4.04 3.1 10.98 4 12 c 0.35 0.4 1.78 -3.06 3 -4 c 2.84 -2.18 10 -6 10 -6\"/><path fill=\"none\" stroke=\"#000000\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M 147 2 l 0 47\"/><path fill=\"none\" stroke=\"#000000\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M 155 27 c -0.07 0.03 -3.75 1.26 -4 2 c -0.25 0.74 1.13 3.27 2 4 c 0.8 0.67 2.81 0.47 4 1 c 1.69 0.75 5 3 5 3\"/></svg>'),
(5, 3, 2, 2, '', 3, '2021-04-03 20:46:40', 'iVBORw0KGgoAAAANSUhEUgAAA8YAAADyCAYAAACPktznAAAgAElEQVR4Xu3debhkZX0n8G/dbhbBIO4boxgzRjGT0TioMTFqXMBlXMbI4xZHxhjzoBCh69wOoqaNC/Y9BRhc0ExQjEuSMaMZHVTMuCSj0RF1RjNxJ2oyImpExDTaNNwzz6Hqdlfvde+tW1233k/9A9x7zvu+v8/vfWi+1Fk68SFAgAABAgQIECBAgAABAgULdAquXekECBAgQIAAAQIECBAgQCCCsU1AgAABAgQIECBAgAABAkULCMZFt1/xBAgQIECAAAECBAgQICAY2wMECBAgQIAAAQIECBAgULSAYFx0+xVPgAABAgQIECBAgAABAoKxPUCAAAECBAgQIECAAAECRQsIxkW3X/EECBAgQIAAAQIECBAgIBjbAwQIECBAgAABAgQIECBQtIBgXHT7FU+AAAECBAgQIECAAAECgrE9QIAAAQIECBAgQIAAAQJFCwjGRbdf8QQIECBAgAABAgQIECAgGNsDBAgQIECAAAECBAgQIFC0gGBcdPsVT4AAAQIECBAgQIAAAQKCsT1AgAABAgQIECBAgAABAkULCMZFt1/xBAgQIECAAAECBAgQICAY2wMECBAgQIAAAQIECBAgULSAYFx0+xVPgAABAgQIECBAgAABAoKxPUCAAAECBAgQIECAAAECRQsIxkW3X/EECBAgQIAAAQIECBAgIBjbAwQIECBAgAABAgQIECBQtIBgXHT7FU+AAAECBAgQIECAAAECgrE9QIAAAQIECBAgQIAAAQJFCwjGRbdf8QQIECBAgAABAgQIECAgGNsDBAgQIECAAAECBAgQIFC0gGBcdPsVT4AAAQIECBAgQIAAAQKCsT1AgAABAgQIECBAgAABAkULCMZFt1/xBAgQIECAAAECBAgQICAY2wMECBAgQIAAAQIECBAgULSAYFx0+xVPgAABAgQIECBAgAABAoKxPUCAAAECBAgQIECAAAECRQsIxkW3X/EECBAgQIAAAQIECBAgIBjbAwQIECBAgAABAgQIECBQtIBgXHT7FU+AAAECBAgQIECAAAECgrE9QIAAAQIECBAgQIAAAQJFCwjGRbdf8QQIECBAgAABAgQIECAgGNsDBAgQIECAAAECBAgQIFC0gGBcdPsVT4AAAQIECBAgQIAAAQKCsT1AgAABAgQIECBAgAABAkULCMZFt1/xBAgQIECAAAECBAgQICAY2wMECBAgQIAAAQIECBAgULSAYFx0+xVPgAABAgQIECBAgAABAoKxPUCAAAECBAgQIECAAAECRQsIxkW3X/EECBAgQIAAAQIECBAgIBjbAwQIECBAgAABAgQIECBQtIBgXHT7FU+AAAECBAgQIECAAAECgrE9QIAAAQIECBAgQIAAAQJFCwjGRbdf8QQIECBAgAABAgQIECAgGNsDBAgQIECAAAECBAgQIFC0gGBcdPsVT4AAAQIECBAgQIAAAQKCsT1AgAABAgQIECBAgAABAkULCMZFt1/xBAgQIECAAAECBAgQICAY2wMECBAgQIAAAQIECBAgULSAYFx0+xVPgAABAgQIECBAgAABAoKxPUCAAAECBAgQIECAAAECRQsIxkW3X/EECBAgQIAAAQIECBAgIBjbAwQIECBAgAABAgQIECBQtIBgXHT7FU+AAAECBAgQIECAAAECgrE9QIAAAQIECBAgQIAAAQJFCwjGRbdf8QQIECBAgAABAgQIECAgGNsDBAgQIECAAAECBAgQIFC0gGBcdPsVT4AAAQIECBAgQIAAAQKCsT1AgAABAgQIECBAgAABAkULCMZFt1/xBAgQIECAAAECBAgQICAY2wMECBAgQIAAAQIECBAgULSAYFx0+xVPgAABAgQIECBAgAABAoKxPUCAAAECBAgQIECAAAECRQsIxkW3X/EECBAgQIAAAQIECBAgIBjbAwQIECBAgAABAgQIECBQtIBgXHT7FU+AAAECBAgQIECAAAECgrE9QIAAAQIECBAgQIAAAQJFCwjGRbdf8QQIECBAgAABAgQIECAgGNsDBAgQIECAAAECBAgQIFC0gGBcdPsVT4AAAQIECBAgQIAAAQKCsT1AgAABAgSmQmDhycnhX0te+IWpWI5FECBAgACBggQE44KarVQCBAgQ2JfAefdNdvx8suGq3X9bfWxyXvXtklyZdOaSxZOT+Q9Nbm4zESBAgAABAoKxPUCAAAECBQn07posPiTp3DfJfZK0f73FfgA+k+TS5IZLkrO/ubZI9Q1JNuyao3PvpPvFtZ3T6AQIECBAgMCSgGBsLxAgQIBAAQILj0o6pyTN05LOUSMU/OMkPzM47vokJyVr9Q1yfVmSR+2xpquTzoOF4xE65RACBAgQIDAG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ayRAgAABAgQOnYBgfOjszUyAAIEJCQjGE4I2DQECBAgQILBOBQTjddo4yyZAgMDoAoLx6FaOJECAAAECBEoUEIxL7LqaCRAoTEAwLqzhyiVAgAABAgSWKSAYLxPM4QQIEFh/AoLx+uuZFRMgQIAAAQKTFBCMJ6ltLgIECBwSAcH4kLCblAABAgQIEFg3AoLxummVhRIgQGClAjuD8TVJdcuVjuI8AgQIECBAgMCsCgjGs9pZdREgQGCnwFIwrvw7364gQIAAAQIECOxDwH8k2RYECBAgQIAAAQIECBAgULSAYFx0+xVPgAABAgQIECBAgAABAoKxPUCAAAECBAgQIECAAAECRQsIxkW3X/EECBAgQIAAAQIECBAgIBjbAwQIECBAgAABAgQIECBQtIBgXHT7FU+AAAECBAgQIECAAAECgrE9QIAAAQIECBAgQIAAAQJFCwjGRbdf8QQIECBAgAABAgQIECAgGNsDBAgQIECAAAECBAgQIFC0gGBcdPsVT4AAAQIECBAgQIAAAQKCsT1AgAABAgQIECBAgAABAkULCMZFt1/xBAgQIECAAAECBAgQICAY2wMECBAgQIAAAQIECBAgULSAYFx0+xVPgAABAgQIECBAgAABAoKxPUCAAAECBAgQIECAAAECRQsIxkW3X/EECBAgQIAAAQIECBAgIBjbAwQIECBAgAABAgQIECBQtIBgXHT7FU+AAAECBAgQIECAAAECgrE9QIAAAQIECBAgQIAAAQJFCwjGRbdf8QQIECBAgAABAgQIECAgGNsDBAgQIECAAAECBAgQIFC0gGBcdPsVT4AAAQIECBAgQIAAAQKCsT1AgAABAgQIECBAgAABAkULCMZFt1/xBAgQIECAAAECBAgQICAY2wMECBAgQIAAAQIECBAgULSAYFx0+xVPgAABAgQIECBAgAABAoKxPUCAAAECBAgQIECAAAECRQsIxkW3X/EECBAgQIAAAQIECBAgIBjbAwQIECBAgAABAgQIECBQtIBgXHT7FU+AAAECBAgQIECAAAECgrE9QIAAAQIECBAgQIAAAQJFCwjGRbdf8QQIECBAgAABAgQIECAgGNsDBAgQIECAAAECBAgQIFC0gGBcdPsVT4AAAQIECBAgQIAAAQKCsT1AgAABAgQIECBAgAABAkULCMZFt1/xBAgQIECAAAECBAgQICAY2wMECBAgQIAAAQIECBAgULSAYFx0+xVPgAABAgQIECBAgAABAoKxPUCAAAECBAgQIECAAAECRQsIxkW3X/EECBAgQIAAAQIECBAgIBjbAwQIECBAgAABAgQIECBQtIBgfID2X3zxxZ9OcmLRO0TxBAgQIECAAAECBAjMgsDlz3nOc+4/CyueAt0AAAQjSURBVIWsRQ2CsWC8FvvKmAQIECBAgAABAgQITJeAYHyAfgjG07VZrYYAAQIECBAgQIAAAQIEJiwgGE8Y3HQECBAgQIAAAQIECBAgMF0CgvF09cNqCBAgQIAAAQIECBAgQGDCAoLxhMFNR4AAAQIECBAgQIAAAQLTJSAYT1c/rIYAAQIECBAgQIAAAQIEJiwgGE8Y3HQECBAgQIAAAQIECBAgMF0CgvF09cNqCBAgQIAAAQIECBAgQGDCAoLxhMFNR4AAAQIECBAgQIAAAQLTJSAYT1c/rIYAAQIECBAgQIAAAQIEJiwgGE8Y3HQECBAgQIAAAQIECBAgMF0CgvF09cNqCBAgQIAAAQIECBAgQGDCAoLxhMFNR4AAAQIECBAgQIAAAQLTJSAYT1c/rIYAAQIECBAgQIAAAQIEJiwgGE8Y3HQECBAgQIAAAQIECBAgMF0CgvF09cNqCBAgQIAAAQIECBAgQGDCAoLxhMFNR4AAAQIECBAgQIAAAQLTJSAYT1c/rIYAAQIECBAgQIAAAQIEJiwgGE8Y3HQECBAgQIAAAQIECBAgMF0CgvF09cNqCBAgQIAAAQIECBAgQGDCAoLxhMFNR4AAAQIECBAgQIAAAQLTJSAYT1c/rIYAAQIECBAgQIAAAQIEJiwgGE8Y3HQECBAgQIAAAQIECBAgMF0CgvF09cNqCBAgQIAAAQIECBAgQGDCAoLxhMFNR4AAAQIECBAgQIAAAQLTJSAYT1c/rIYAAQIECBAgQIAAAQIEJiwgGE8Y3HQECBAgQIAAAQIECBAgMF0CgvF09cNqCBAgQIAAAQIECBAgQGDCAoLxhMFNR4AAAQIECBAgQIAAAQLTJSAYT1c/rIYAAQIECBAgQIAAAQIEJiwgGE8Y3HQECBAgQIAAAQIECBAgMF0CgvF09cNqCBAgQIAAAQIECBAgQGDCAoLxhMFNR4AAAQIECBAgQIAAAQLTJSAYT1c/rIYAAQIECBAgQIAAAQIEJiwgGE8Y3HQECBAgQIAAAQIECBAgMF0CgvF09cNqCBAgQIAAAQIECBAgQGDCAoLxhMFNR4AAAQIECBAgQIAAAQLTJSAYT1c/rIYAAQIECBAgQIAAAQIEJiwgGE8Y3HQECBAgQIAAAQIECBAgMF0CgvF09cNqCBAgQIAAAQIECBAgQGDCAoLxhMFNR4AAAQIECBAgQIAAAQLTJSAYT1c/rIYAAQIECBAgQIAAAQIEJiwgGE8Y3HQECBAgQIAAAQIECBAgMF0CgvF09cNqCBAgQIAAAQIECBAgQGDCAoLxhMFNR4AAAQIECBAgQIAAAQLTJSAYT1c/rIYAAQIECBAgQIAAAQIEJiwgGE8Y3HQECBAgQIAAAQIECBAgMF0CgvF09cNqCBAgQIAAAQIECBAgQGDCAv8fHy5PL5wZjMcAAAAASUVORK5CYII='),
(6, 3, 2, 2, '<p>ddf</p>', 3, '2021-04-03 21:38:11', '<?xml version=\"1.0\" encoding=\"UTF-8\" standalone=\"no\"?><!DOCTYPE svg PUBLIC \"-//W3C//DTD SVG 1.1//EN\" \"http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd\"><svg xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" width=\"162\" height=\"41\"><path fill=\"none\" stroke=\"#000000\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M 1 40 c 0.16 -0.26 5.6 -10.31 9 -15 c 3.58 -4.95 7.56 -10.78 12 -14 c 4.43 -3.21 11.24 -5.2 17 -7 c 4.8 -1.5 10.78 -2.78 15 -3 c 1.23 -0.06 3.22 1.09 4 2 c 0.94 1.1 1.54 3.31 2 5 c 0.52 1.91 1 4.06 1 6 c 0 2.89 -1.43 7.85 -1 9 c 0.2 0.52 2.84 -0.42 4 -1 c 2.66 -1.33 5.33 -4.06 8 -5 c 2.56 -0.9 5.96 -1 9 -1 c 19.14 0 41.42 -0.48 57 1 c 2.13 0.2 3.85 3.66 6 5 c 3.07 1.92 6.6 3.6 10 5 c 2.22 0.91 6.62 1.36 7 2 l -4 3\"/></svg>'),
(7, 3, 2, 2, '', 2, '2021-04-03 21:39:13', '<?xml version=\"1.0\" encoding=\"UTF-8\" standalone=\"no\"?><!DOCTYPE svg PUBLIC \"-//W3C//DTD SVG 1.1//EN\" \"http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd\"><svg xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" width=\"170\" height=\"30\"><path fill=\"none\" stroke=\"#000000\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M 1 14 c 0.09 -0.07 3.21 -2.98 5 -4 c 2.75 -1.57 5.9 -2.92 9 -4 c 3.58 -1.25 7.2 -2.1 11 -3 c 3.4 -0.81 6.66 -1.82 10 -2 c 8.84 -0.48 19.95 -0.71 27 0 c 1.11 0.11 2.89 2.04 3 3 c 0.16 1.42 -2.56 5.84 -2 6 c 0.88 0.25 5.94 -3.03 9 -4 c 3.16 -1 6.68 -1.63 10 -2 c 2.61 -0.29 5.56 -0.51 8 0 c 3.56 0.75 8.12 2.45 11 4 c 0.89 0.48 1.2 2.2 2 3 c 1.1 1.1 2.66 2.95 4 3 c 5.92 0.23 15.65 -3.16 22 -2 c 6.95 1.26 14.92 8.18 22 10 c 4.98 1.28 15.55 -0.31 17 0 c 0.36 0.08 -1.93 2.39 -3 3 c -1.04 0.59 -2.87 0.44 -4 1 l -4 3\"/></svg>'),
(8, 3, 2, 2, '', 3, '2021-04-03 21:40:12', '<?xml version=\"1.0\" encoding=\"UTF-8\" standalone=\"no\"?><!DOCTYPE svg PUBLIC \"-//W3C//DTD SVG 1.1//EN\" \"http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd\"><svg xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" width=\"138\" height=\"49\"><path fill=\"none\" stroke=\"#000000\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M 1 48 c 0.12 -0.16 4.29 -6.5 7 -9 c 5.75 -5.31 12.2 -10.94 19 -15 c 11.94 -7.12 25.32 -13.79 38 -19 c 5.5 -2.26 12.02 -3.5 18 -4 c 9.74 -0.81 24.42 -2.71 30 0 c 3.3 1.6 3.08 11.47 5 17 c 0.73 2.09 1.77 4.42 3 6 c 0.92 1.18 2.68 2.56 4 3 c 1.32 0.44 3.49 -0.3 5 0 c 1.62 0.32 3.9 1.06 5 2 c 0.91 0.78 1.71 2.7 2 4 c 0.32 1.46 0.34 3.62 0 5 c -0.25 1 -1.09 2.65 -2 3 c -4.94 1.88 -12.82 3.71 -19 5 l -5 0\"/></svg>'),
(9, 2, 1, 2, '<p>vbcvbc</p>', 2, '2021-04-11 11:14:40', '<?xml version=\"1.0\" encoding=\"UTF-8\" standalone=\"no\"?><!DOCTYPE svg PUBLIC \"-//W3C//DTD SVG 1.1//EN\" \"http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd\"><svg xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" width=\"187\" height=\"58\"><path fill=\"none\" stroke=\"#000000\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M 2 1 c -0.02 0.18 -0.9 6.6 -1 10 c -0.24 8.47 -0.48 16.87 0 25 c 0.18 3 0.66 7.93 2 9 c 1.17 0.93 6.27 0.28 8 -1 c 3.66 -2.7 8.21 -8.47 11 -13 c 2.28 -3.71 4.47 -12.3 5 -13 c 0.19 -0.26 0.92 3.33 1 5 c 0.25 5.24 -0.42 10.81 0 16 c 0.24 2.99 1.09 6.1 2 9 c 0.75 2.39 1.73 5.37 3 7 c 0.75 0.96 2.86 2 4 2 c 1.38 0 3.77 -0.97 5 -2 c 2.43 -2.02 5.13 -5.07 7 -8 c 5.03 -7.9 9.68 -16.62 14 -25 c 0.95 -1.85 1.21 -5.61 2 -6 c 0.62 -0.31 3.58 1.74 4 3 c 1.53 4.59 1.95 18.68 3 18 c 1.85 -1.2 14 -29 14 -29\"/><path fill=\"none\" stroke=\"#000000\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M 109 38 c 0.1 0 4.49 0.63 6 0 c 1.97 -0.82 3.8 -3.78 6 -5 c 6.55 -3.64 13.95 -7.45 21 -10 c 4.64 -1.68 9.91 -2.32 15 -3 c 5 -0.67 11.45 -1.59 15 -1 c 1.18 0.2 2.3 2.6 3 4 c 0.89 1.78 1.6 3.98 2 6 c 0.58 2.9 0.05 8.79 1 9 c 1.11 0.25 8 -7 8 -7\"/></svg>'),
(10, 2, 1, 2, '<p>jkfgghj dyjd</p>', 3, '2021-04-11 11:18:41', NULL),
(11, 2, 1, 2, '<p>sdsdsd</p>', 2, '2021-04-11 16:56:40', '<?xml version=\"1.0\" encoding=\"UTF-8\" standalone=\"no\"?><!DOCTYPE svg PUBLIC \"-//W3C//DTD SVG 1.1//EN\" \"http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd\"><svg xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" width=\"202\" height=\"30\"><path fill=\"none\" stroke=\"#000000\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M 1 1 c 0.11 0.38 3.59 15.25 6 22 c 0.76 2.13 3.03 6.46 4 6 c 2.57 -1.21 8.59 -10.05 13 -14 c 1.55 -1.39 4.73 -3 6 -3 c 0.68 0 1.69 1.96 2 3 c 0.61 2.03 0.11 6.8 1 7 c 1.18 0.26 5.2 -3.78 8 -5 c 4.69 -2.04 10.75 -4.36 15 -5 c 1.45 -0.22 4.41 0.91 5 2 c 1 1.83 0.68 8.37 1 9 c 0.13 0.25 1.1 -2.5 2 -3 c 3.79 -2.13 9.28 -4.94 14 -6 c 8.11 -1.83 17.21 -2.18 26 -3 c 2.01 -0.19 4.33 -0.37 6 0 c 1 0.22 2.66 1.2 3 2 c 0.47 1.11 -0.78 4.48 0 5 c 1.41 0.94 5.95 0.85 9 1 c 3.71 0.19 7.54 0.55 11 0 c 4.59 -0.73 9.27 -3.21 14 -4 c 7.17 -1.2 14.5 -1.67 22 -2 c 8.15 -0.35 17.76 -0.89 24 0 c 1.47 0.21 2.61 3.13 4 4 l 4 1\"/></svg>'),
(12, 2, 1, 2, '<p>dfddf</p>', 2, '2021-04-11 16:57:14', '<?xml version=\"1.0\" encoding=\"UTF-8\" standalone=\"no\"?><!DOCTYPE svg PUBLIC \"-//W3C//DTD SVG 1.1//EN\" \"http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd\"><svg xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" width=\"354\" height=\"75\"><path fill=\"none\" stroke=\"#000000\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M 43 22 c 0.04 0.19 1.09 7.35 2 11 c 1.11 4.44 2.19 9.04 4 13 c 1.74 3.79 4.87 11.26 7 11 c 3.72 -0.45 12.52 -8.82 18 -14 c 6.8 -6.43 14.87 -17.77 19 -21 c 0.73 -0.57 3.38 1.71 4 3 c 2.89 6.03 6.05 20.44 8 22 c 1.02 0.82 4.37 -7.2 7 -10 c 2.15 -2.3 5.2 -4.35 8 -6 c 2.76 -1.62 5.94 -2.98 9 -4 c 2.87 -0.96 6.02 -1.63 9 -2 c 2.26 -0.28 5.09 -0.64 7 0 c 2.58 0.86 5.75 3 8 5 c 3.55 3.15 7.75 7.03 10 11 c 3.07 5.41 6.6 18.31 7 19 c 0.14 0.24 -0.59 -5 0 -7 c 0.94 -3.2 3.13 -7.51 5 -10 c 0.75 -1 2.9 -2 4 -2 c 1.1 0 3.81 0.98 4 2 c 1.05 5.69 -2.16 21.97 1 25 c 3.03 2.91 16.49 0.19 24 -1 c 4.65 -0.73 9.4 -3.03 14 -5 c 4.84 -2.08 10.82 -7.15 14 -7 c 2.16 0.1 4.38 5.93 7 8 c 3.42 2.7 7.97 5.27 12 7 c 2.67 1.15 5.93 1.62 9 2 c 7.68 0.96 15.38 1.78 23 2 c 3.65 0.11 8.83 -0.1 11 -1 c 0.81 -0.34 0.85 -2.68 1 -4 c 0.18 -1.6 0.47 -3.58 0 -5 c -1.05 -3.16 -3.04 -6.97 -5 -10 c -1.62 -2.5 -4.31 -4.55 -6 -7 c -1.23 -1.78 -1.74 -4.42 -3 -6 c -1.21 -1.51 -3.25 -3.12 -5 -4 c -1.99 -1 -4.75 -1.1 -7 -2 c -4.42 -1.77 -8.5 -4.84 -13 -6 c -17.02 -4.38 -34.97 -6.68 -53 -11 c -14.87 -3.56 -28.46 -9.28 -43 -12 c -15.71 -2.94 -31.69 -4.2 -48 -5 c -18.25 -0.89 -36.13 -1.06 -54 0 c -10.07 0.6 -19.76 2.99 -30 5 c -8.98 1.76 -21.54 1.97 -26 6 c -3.77 3.41 -6.66 18.4 -5 22 c 1.29 2.79 11.27 2.36 17 4 c 8.61 2.46 16.47 6.25 25 8 c 15.76 3.24 31.59 5.83 48 7 c 50.12 3.58 96.94 5.64 148 7 c 39.29 1.05 114 0 114 0\"/></svg>');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `entregas_productos`
--

CREATE TABLE `entregas_productos` (
  `id_producto` int(11) NOT NULL,
  `entrega` int(11) NOT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `descripcion` varchar(100) DEFAULT NULL,
  `marca` varchar(100) DEFAULT NULL,
  `serial` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `entregas_productos`
--

INSERT INTO `entregas_productos` (`id_producto`, `entrega`, `cantidad`, `descripcion`, `marca`, `serial`) VALUES
(1, 1, 121, 'sdsd', '', ''),
(2, 2, 1, 'sdsd', '', ''),
(3, 3, 1, 'se entrega portatil noods', '', ''),
(4, 4, 1, 'mouse', '', ''),
(5, 4, 3, 'teclados', '', ''),
(6, 4, 10, 'router wifi', '', ''),
(7, 5, 12, 'dsds', '', ''),
(8, 6, 12, '12', '', ''),
(9, 7, 12, '12', '', ''),
(10, 8, 213, '2323', '', ''),
(11, 9, 12, 'wewe', '', ''),
(12, 10, 23, 'dfdf', '', ''),
(13, 11, 12, 'fddf', '', ''),
(14, 12, 1, 'dfdfdfdf', '', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `id_estado` int(11) NOT NULL,
  `nombre_estado` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`id_estado`, `nombre_estado`) VALUES
(1, 'Activo'),
(2, 'Inactivo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado_entrega`
--

CREATE TABLE `estado_entrega` (
  `id_estado` int(11) NOT NULL,
  `nombre_estado` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `estado_entrega`
--

INSERT INTO `estado_entrega` (`id_estado`, `nombre_estado`) VALUES
(1, 'Pendiente Aprobación'),
(2, 'Aprobado'),
(3, 'Finalizado'),
(4, 'Cancelado');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id_rol` int(11) NOT NULL,
  `nombre_rol` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id_rol`, `nombre_rol`) VALUES
(1, 'Administrador'),
(2, 'Soporte'),
(3, 'Cableado '),
(4, 'Ingenieria');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nombre_usuario` varchar(200) NOT NULL,
  `cargo_usuario` varchar(100) DEFAULT NULL,
  `rol` int(11) NOT NULL,
  `usuario_sesion` varchar(20) NOT NULL,
  `clave` varchar(20) NOT NULL,
  `correo_usuario` varchar(50) NOT NULL,
  `firma_usuario` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `nombre_usuario`, `cargo_usuario`, `rol`, `usuario_sesion`, `clave`, `correo_usuario`, `firma_usuario`) VALUES
(1, 'Administrador', 'Administrador', 1, 'admin', '1234', 'dfdfd', NULL),
(2, 'William Reyes Miranda', 'Técnico En Cableado Estructuradoss', 2, 'william', '1234', 'willyremi1990@gmail.com', '<?xml version=\"1.0\" encoding=\"UTF-8\" standalone=\"no\"?><!DOCTYPE svg PUBLIC \"-//W3C//DTD SVG 1.1//EN\" \"http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd\"><svg xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" width=\"249\" height=\"53\"><path fill=\"none\" stroke=\"#000000\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M 11 1 c -0.1 0.21 -4.4 7.9 -6 12 c -1.36 3.48 -2.36 7.3 -3 11 c -0.68 3.91 -1.19 8.23 -1 12 c 0.13 2.58 1.01 5.82 2 8 c 0.51 1.12 2.07 2.88 3 3 c 1.18 0.15 3.63 -1.09 5 -2 c 1.44 -0.96 3.07 -2.53 4 -4 c 1.26 -1.98 2.34 -4.62 3 -7 c 0.97 -3.5 2.07 -10.56 2 -11 c -0.04 -0.23 -2.52 3.31 -3 5 c -0.75 2.63 -1 6.11 -1 9 c 0 1.94 0.45 4.15 1 6 c 0.41 1.36 1.13 3.27 2 4 c 0.8 0.67 3.31 1.55 4 1 c 1.8 -1.44 4.45 -5.9 6 -9 c 1.36 -2.72 2.33 -5.9 3 -9 c 2.01 -9.28 5 -28 5 -28\"/><path fill=\"none\" stroke=\"#000000\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M 47 30 l -3 18\"/><path fill=\"none\" stroke=\"#000000\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M 65 7 c -0.07 0.24 -2.91 9.17 -4 14 c -1.98 8.79 -5 26 -5 26\"/><path fill=\"none\" stroke=\"#000000\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M 79 5 c -0.09 0.33 -3.88 12.54 -5 19 c -1.55 8.93 -3 27 -3 27\"/><path fill=\"none\" stroke=\"#000000\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M 88 26 l -3 23\"/><path fill=\"none\" stroke=\"#000000\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M 104 24 c -0.09 0.12 -3.85 4.56 -5 7 c -1.39 2.96 -2.61 6.9 -3 10 c -0.23 1.81 0.42 4.25 1 6 c 0.35 1.04 1.24 2.78 2 3 c 1.07 0.31 3.85 -0.2 5 -1 c 1.76 -1.23 3.99 -3.86 5 -6 c 1.47 -3.12 2.8 -7.94 3 -11 c 0.08 -1.2 -1.13 -3.93 -2 -4 c -2.02 -0.17 -7.2 1.71 -10 3 l -3 3\"/><path fill=\"none\" stroke=\"#000000\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M 114 27 c -0.05 0.09 -2.28 3.27 -3 5 c -0.9 2.16 -1.65 4.64 -2 7 c -0.63 4.22 -1 13 -1 13\"/><path fill=\"none\" stroke=\"#000000\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M 126 31 c -0.05 0.25 -3.26 14.21 -3 14 c 0.35 -0.28 6.56 -16.17 8 -18 c 0.37 -0.47 2.82 2.67 3 4 c 0.39 2.94 -1.47 11.16 -1 11 c 0.63 -0.21 4.52 -9.02 7 -13 c 0.71 -1.14 2.19 -3 3 -3 c 0.95 0 3.84 1.81 4 3 c 0.62 4.54 -1 19 -1 19\"/><path fill=\"none\" stroke=\"#000000\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M 172 48 c 0.04 -0.32 0.77 -12.15 2 -18 c 1.42 -6.74 3.68 -13.49 6 -20 c 1 -2.79 3.42 -7.77 4 -8 c 0.4 -0.16 1.44 4.33 1 6 c -1.03 3.92 -3.78 8.79 -6 13 c -1.12 2.12 -4.13 5.22 -4 6 c 0.09 0.54 3.39 -0.23 5 0 c 2.97 0.42 7.84 0.22 9 2 c 2.75 4.21 6 21 6 21\"/><path fill=\"none\" stroke=\"#000000\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M 210 46 l 1 1\"/><path fill=\"none\" stroke=\"#000000\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M 224 49 c 0.02 -0.38 0.15 -14.69 1 -22 c 0.82 -7.09 3.24 -21.11 4 -21 c 0.79 0.11 1.84 21.19 3 22 c 0.86 0.61 4.44 -10.12 7 -15 c 1.11 -2.13 2.55 -4.34 4 -6 c 0.73 -0.83 2.59 -2.33 3 -2 c 0.72 0.57 1.96 4.03 2 6 c 0.27 12.77 -1 41 -1 41\"/><path fill=\"none\" stroke=\"#000000\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M 88 18 l 1 1\"/><path fill=\"none\" stroke=\"#000000\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M 54 23 l 1 1\"/></svg>'),
(3, 'Andres Arroyave', 'Técnico En Cableado Estructuradoss', 3, 'arroyave', '1234', 'ejemplo@gmail.com', NULL),
(4, 'Gabriel', 'Tecnico', 3, 'soporteti5', '1234', 'soporteti5@expertos.com', NULL),
(5, 'alexa', 'cualquiera', 4, 'alexa', '1234', 'ejemplo@gmail.com', '<?xml version=\"1.0\" encoding=\"UTF-8\" standalone=\"no\"?><!DOCTYPE svg PUBLIC \"-//W3C//DTD SVG 1.1//EN\" \"http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd\"><svg xmlns=\"http://www.w3.org/2000/svg\" version=\"1.1\" width=\"127\" height=\"44\"><path fill=\"none\" stroke=\"#000000\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M 1 38 l 1 1\"/><path fill=\"none\" stroke=\"#000000\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M 1 37 c 0.28 0.09 10.76 4.18 16 5 c 5 0.78 10.85 0.43 16 0 c 2.65 -0.22 6.74 -0.62 8 -2 c 1.41 -1.55 2.33 -6.35 2 -9 c -0.57 -4.55 -3 -11 -5 -15 c -0.63 -1.26 -2.64 -2.73 -4 -3 c -3 -0.6 -7.9 0.44 -11 0 c -1.02 -0.15 -3.05 -2.03 -3 -2 c 0.4 0.24 15.55 9.86 23 14 c 1.14 0.63 4.14 0.78 4 1 c -0.22 0.33 -3.99 1.75 -6 2 c -5.73 0.72 -18.22 0.78 -18 1 c 0.25 0.25 20 1 20 1\"/><path fill=\"none\" stroke=\"#000000\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M 46 30 l 1 1\"/><path fill=\"none\" stroke=\"#000000\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M 41 10 c 0.21 -0.05 8.03 -2.54 12 -3 c 4.49 -0.52 12.43 -2.07 14 0 c 2.37 3.11 2 21 2 21\"/><path fill=\"none\" stroke=\"#000000\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M 49 26 c 0.23 -0.14 8.59 -6.2 13 -8 c 4.14 -1.69 9.36 -2.42 14 -3 c 3.24 -0.4 7.44 -0.59 10 0 c 1.09 0.25 2.83 1.9 3 3 c 0.66 4.41 0 17 0 17\"/><path fill=\"none\" stroke=\"#000000\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M 76 18 c 0.14 -0.12 5.12 -5 8 -7 c 4.74 -3.3 10.09 -6.42 15 -9 c 1.16 -0.61 2.67 -0.91 4 -1 c 3.22 -0.23 8.88 -1.34 10 0 c 1.34 1.61 0.62 8.91 0 12 c -0.22 1.09 -2.31 1.9 -3 3 c -0.87 1.39 -2 3.57 -2 5 c 0 1.43 0.94 3.84 2 5 c 2.24 2.45 6.35 4.59 9 7 c 0.84 0.76 1.22 2.22 2 3 c 0.78 0.78 2.33 1.19 3 2 l 2 4\"/><path fill=\"none\" stroke=\"#000000\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" d=\"M 78 43 c 0.49 -0.02 19.12 -0.22 28 -1 c 2 -0.18 6.23 -1.99 6 -2 c -3.26 -0.08 -91 0 -91 0\"/></svg>');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id_empleado`),
  ADD KEY `empresa` (`empresa`),
  ADD KEY `estado_empleado` (`estado_empleado`);

--
-- Indices de la tabla `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`id_empresa`),
  ADD KEY `estado_empresa` (`estado_empresa`);

--
-- Indices de la tabla `entregas`
--
ALTER TABLE `entregas`
  ADD PRIMARY KEY (`id_entrega`),
  ADD KEY `empresa` (`empresa`),
  ADD KEY `empleado` (`empleado`),
  ADD KEY `usuario` (`usuario`),
  ADD KEY `estado_entrega` (`estado_entrega`);

--
-- Indices de la tabla `entregas_productos`
--
ALTER TABLE `entregas_productos`
  ADD PRIMARY KEY (`id_producto`),
  ADD KEY `entrega` (`entrega`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`id_estado`);

--
-- Indices de la tabla `estado_entrega`
--
ALTER TABLE `estado_entrega`
  ADD PRIMARY KEY (`id_estado`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `rol` (`rol`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id_empleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `empresas`
--
ALTER TABLE `empresas`
  MODIFY `id_empresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT de la tabla `entregas`
--
ALTER TABLE `entregas`
  MODIFY `id_entrega` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `entregas_productos`
--
ALTER TABLE `entregas_productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `id_estado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `estado_entrega`
--
ALTER TABLE `estado_entrega`
  MODIFY `id_estado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id_rol` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD CONSTRAINT `empleados_ibfk_1` FOREIGN KEY (`empresa`) REFERENCES `empresas` (`id_empresa`),
  ADD CONSTRAINT `empleados_ibfk_2` FOREIGN KEY (`estado_empleado`) REFERENCES `estado` (`id_estado`);

--
-- Filtros para la tabla `empresas`
--
ALTER TABLE `empresas`
  ADD CONSTRAINT `empresas_ibfk_1` FOREIGN KEY (`estado_empresa`) REFERENCES `estado` (`id_estado`);

--
-- Filtros para la tabla `entregas`
--
ALTER TABLE `entregas`
  ADD CONSTRAINT `entregas_ibfk_1` FOREIGN KEY (`estado_entrega`) REFERENCES `estado_entrega` (`id_estado`),
  ADD CONSTRAINT `entregas_ibfk_2` FOREIGN KEY (`usuario`) REFERENCES `usuario` (`id_usuario`),
  ADD CONSTRAINT `entregas_ibfk_3` FOREIGN KEY (`empresa`) REFERENCES `empresas` (`id_empresa`),
  ADD CONSTRAINT `entregas_ibfk_4` FOREIGN KEY (`empleado`) REFERENCES `empleados` (`id_empleado`);

--
-- Filtros para la tabla `entregas_productos`
--
ALTER TABLE `entregas_productos`
  ADD CONSTRAINT `entregas_productos_ibfk_1` FOREIGN KEY (`entrega`) REFERENCES `entregas` (`id_entrega`);

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`rol`) REFERENCES `rol` (`id_rol`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
