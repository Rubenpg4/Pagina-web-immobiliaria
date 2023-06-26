-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 18-05-2023 a las 16:33:03
-- Versión del servidor: 10.4.27-MariaDB
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `webappproyecto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `transaccion`
--

CREATE TABLE `transaccion` (
  `id` int(10) UNSIGNED NOT NULL,
  `cliente` int(10) UNSIGNED NOT NULL,
  `vivienda` int(10) UNSIGNED NOT NULL,
  `fecha` date NOT NULL,
  `tipo` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `nombre` varchar(20) NOT NULL,
  `email` varchar(80) NOT NULL,
  `password` varchar(255) NOT NULL,
  `rol` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `nombre`, `email`, `password`, `rol`) VALUES
(1, 'rpg00035', 'rpg00035@red.ujaen.es', '$2y$10$kd0k9E.Gz6JBMyzMJROhNuzN01Yezg.Bg1XkpamVRDKE4eOkc4gdS', 2),
(4, 'rpgPrueba', 'rpgPrueba@gmail.com', '$2y$10$K/FGbAo45v79ePhBM2gkrehaL3WtlQFw4n8JRRdGaUiMm3.z5wEe6', 1),
(5, 'jaam0024', 'ASsD@GMAIL.COM', '$2y$10$CDarv92E98RL1eUoCB/b/e5P3EFnMG/WD1qNNSVHS4B1ZXYcla32W', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vivienda`
--

CREATE TABLE `vivienda` (
  `id` int(10) UNSIGNED NOT NULL,
  `propietario` int(10) UNSIGNED DEFAULT NULL,
  `zona` int(5) UNSIGNED DEFAULT NULL,
  `disponible` tinyint(1) NOT NULL DEFAULT 1,
  `imagen` varchar(100) NOT NULL,
  `direccion` varchar(255) NOT NULL,
  `fecha` date NOT NULL,
  `metros_cuadrados` int(5) NOT NULL,
  `num_habitaciones` int(3) NOT NULL,
  `num_baños` int(3) NOT NULL,
  `num_garajes` int(2) NOT NULL,
  `precio_venta` float DEFAULT NULL,
  `precio_alquiler` float DEFAULT NULL,
  `telefono` int(9) NOT NULL,
  `certificado_energetico` varchar(1) NOT NULL,
  `novedades` tinyint(1) NOT NULL DEFAULT 1,
  `ofertas` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `vivienda`
--

INSERT INTO `vivienda` (`id`, `propietario`, `zona`, `disponible`, `imagen`, `direccion`, `fecha`, `metros_cuadrados`, `num_habitaciones`, `num_baños`, `num_garajes`, `precio_venta`, `precio_alquiler`, `telefono`, `certificado_energetico`, `novedades`, `ofertas`) VALUES
(1, 1, 7, 1, 'casa1.png', 'Calle Ave del paraíso, N7', '2023-03-25', 100, 3, 2, 1, 100000, 1000, 674850642, 'A', 1, 0),
(2, 1, 11, 1, 'casa2.png', 'C/Juan Pedro Gutiérrez Higueras', '2023-03-24', 120, 4, 2, 1, 58000, 0, 536235876, 'C', 1, 0),
(3, 1, 12, 1, 'casa3.png', 'C/Sedeño', '2023-03-19', 45, 2, 1, 0, 0, 500, 862649264, 'B', 1, 1),
(22, 5, 8, 1, '1684332582_44c69268bba3c00ff5d2.png', 'Calle Ávila', '2023-05-17', 96, 5, 2, 1, 220000, 0, 680346512, 'C', 1, 0),
(24, 5, 14, 1, '1684332912_3aa81d6263260276fb82.png', 'Zona Jabalcuz', '2023-05-17', 244, 3, 2, 2, 279000, 1500, 679347612, 'A', 1, 0),
(25, 5, 7, 1, '1684332988_fcb635f24b45c720e988.png', 'Calle del Obispo Estúñiga', '2023-05-17', 147, 4, 2, 0, 250000, 950, 564897609, 'D', 1, 0),
(26, 5, 7, 1, '1684333050_18bb8fa7e654e2cd5f4d.png', 'Paseo de la Estación', '2023-05-17', 95, 3, 1, 1, 132900, 1010, 453878054, 'E', 1, 0),
(27, 5, 5, 1, '1684333111_4016186befb91a0a0835.png', 'Calle Castilla-la Mancha', '2023-05-17', 190, 3, 2, 2, 355000, 1200, 534789844, 'C', 1, 0),
(28, 5, 3, 1, '1684333176_14ab2bde4e7389bd42ce.png', 'Fase 1ª', '2023-05-17', 94, 3, 2, 2, 190000, 0, 534234876, 'B', 1, 0),
(29, 5, 10, 1, '1684333269_ecbe80ba2c9d1f5042cf.png', 'Calle Hurtado', '2023-05-17', 155, 4, 2, 0, 180000, 900, 389087956, 'E', 1, 0),
(30, 5, 11, 1, '1684333330_8015edf12b1cba6e37ac.png', 'Calle Santo Tomás', '2023-05-17', 90, 3, 1, 2, 95000, 1000, 456823093, 'D', 1, 0),
(31, 5, 2, 1, '1684333406_91193b06808001fcb603.png', 'Avda Madrid 54', '2023-05-17', 148, 5, 3, 2, 260000, 1300, 986093476, 'D', 1, 0),
(32, 5, 6, 1, '1684333456_b4b9a8203ced02a03d0d.png', 'Calle Fuente del Pinillo', '2023-05-17', 70, 2, 1, 0, 135000, 900, 234871265, 'E', 1, 0),
(33, 5, 10, 1, '1684333524_c32b6a56ad4216319863.png', 'Plaza de la Constitución', '2023-05-17', 160, 4, 3, 0, 306000, 1030, 234985678, 'D', 1, 0),
(34, 5, 16, 1, '1684333663_b624500e317b94804b88.png', 'Ctra.Circunvalación', '2023-05-17', 91, 3, 1, 0, 85000, 0, 873974643, 'D', 1, 0),
(35, 5, 9, 1, '1684333735_6065f637493b6087ecb5.png', 'Calle San Clemente', '2023-05-17', 70, 4, 1, 0, 74000, 0, 345123765, 'D', 1, 0),
(36, 5, 13, 1, '1684333898_f9b54157929acad65e64.png', 'Avda. Andalucía 58', '2023-05-17', 130, 4, 2, 2, 260000, 1060, 389326509, 'C', 1, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `zona`
--

CREATE TABLE `zona` (
  `id` int(5) UNSIGNED NOT NULL,
  `zona` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `zona`
--

INSERT INTO `zona` (`id`, `zona`) VALUES
(1, 'Alcantarilla'),
(2, 'Avda. Madrid'),
(3, 'Bulevar'),
(4, 'Catedral'),
(5, 'Estacion'),
(6, 'Fuentezuelas'),
(7, 'Hospital'),
(8, 'Peñamefecit'),
(9, 'San Bartolome'),
(10, 'San Ildefonso'),
(11, 'San Roque'),
(12, 'Universidad'),
(13, 'Avda.Andalucía'),
(14, 'Jabalcuz'),
(15, 'Puente Jontoya'),
(16, 'La Magdalena');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `transaccion`
--
ALTER TABLE `transaccion`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cliente` (`cliente`),
  ADD KEY `vivienda` (`vivienda`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `vivienda`
--
ALTER TABLE `vivienda`
  ADD PRIMARY KEY (`id`),
  ADD KEY `propietario` (`propietario`),
  ADD KEY `zona` (`zona`);

--
-- Indices de la tabla `zona`
--
ALTER TABLE `zona`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `transaccion`
--
ALTER TABLE `transaccion`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `vivienda`
--
ALTER TABLE `vivienda`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de la tabla `zona`
--
ALTER TABLE `zona`
  MODIFY `id` int(5) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `transaccion`
--
ALTER TABLE `transaccion`
  ADD CONSTRAINT `transaccion_ibfk_1` FOREIGN KEY (`cliente`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `transaccion_ibfk_2` FOREIGN KEY (`vivienda`) REFERENCES `vivienda` (`id`);

--
-- Filtros para la tabla `vivienda`
--
ALTER TABLE `vivienda`
  ADD CONSTRAINT `vivienda_ibfk_1` FOREIGN KEY (`propietario`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `vivienda_ibfk_2` FOREIGN KEY (`zona`) REFERENCES `zona` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
