-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-03-2019 a las 19:32:34
-- Versión del servidor: 10.1.37-MariaDB
-- Versión de PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `aw`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `id` int(11) UNSIGNED NOT NULL,
  `idUsuario` int(11) UNSIGNED NOT NULL,
  `idObjeto` int(11) UNSIGNED NOT NULL,
  `numObjetos` int(11) UNSIGNED NOT NULL,
  `comprado` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `enemigo`
--

CREATE TABLE `enemigo` (
  `id` int(11) UNSIGNED NOT NULL,
  `nombre` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `fuerza` int(11) UNSIGNED NOT NULL,
  `habilidad` int(11) UNSIGNED NOT NULL,
  `vida` int(11) UNSIGNED NOT NULL,
  `precio` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `enemigomazmorra`
--

CREATE TABLE `enemigomazmorra` (
  `idMazmorra` int(11) UNSIGNED NOT NULL,
  `idEnemigo` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventario`
--

CREATE TABLE `inventario` (
  `id` int(11) UNSIGNED NOT NULL,
  `tamaño` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventariocontiene`
--

CREATE TABLE `inventariocontiene` (
  `idInventario` int(11) UNSIGNED NOT NULL,
  `idObjeto` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `juegamapa`
--

CREATE TABLE `juegamapa` (
  `idUsuario` int(11) UNSIGNED NOT NULL,
  `idMapa` int(11) NOT NULL,
  `idPersonaje` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mapacontiene`
--

CREATE TABLE `mapacontiene` (
  `idMapa` int(11) NOT NULL,
  `idMazmorra` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mapas`
--

CREATE TABLE `mapas` (
  `idMapa` int(11) NOT NULL,
  `nombre` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `dificultad` int(11) NOT NULL,
  `precio` int(11) UNSIGNED NOT NULL,
  `numMazmorras` int(11) NOT NULL DEFAULT '0',
  `recompensa` int(11) NOT NULL DEFAULT '0',
  `mazmorrasSuperadas` set('mazmorra1','mazmorra2','mazmorra3','mazmorra4','mazmorra5') COLLATE utf8mb4_spanish_ci NOT NULL,
  `propietario` int(11) UNSIGNED NOT NULL,
  `valoracion` float NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mazmorras`
--

CREATE TABLE `mazmorras` (
  `id` int(11) UNSIGNED NOT NULL,
  `nombre` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `numSalidas` int(11) UNSIGNED NOT NULL,
  `numEnemigos` int(11) UNSIGNED NOT NULL,
  `recompensa` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mazmorrassuperadas`
--

CREATE TABLE `mazmorrassuperadas` (
  `idMapa` int(11) NOT NULL,
  `idMazmorra` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensajes`
--

CREATE TABLE `mensajes` (
  `id` int(11) NOT NULL,
  `usuario` int(11) UNSIGNED NOT NULL,
  `mensaje` varchar(140) COLLATE utf8mb4_spanish_ci NOT NULL,
  `idMensajePadre` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `objetos`
--

CREATE TABLE `objetos` (
  `id` int(11) UNSIGNED NOT NULL,
  `nombre` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `categoria` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `fuerza` int(11) UNSIGNED NOT NULL,
  `habilidad` int(11) UNSIGNED NOT NULL,
  `vida` int(11) UNSIGNED NOT NULL,
  `precio` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personaje`
--

CREATE TABLE `personaje` (
  `id` int(11) UNSIGNED NOT NULL,
  `nombre` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `fuerza` int(11) UNSIGNED NOT NULL,
  `habilidad` int(11) UNSIGNED NOT NULL,
  `vida` int(11) UNSIGNED NOT NULL,
  `precio` int(11) UNSIGNED NOT NULL,
  `idInventario` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `nombre` varchar(15) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `nombre`) VALUES
(1, 'user'),
(2, 'admin');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rolesusuario`
--

CREATE TABLE `rolesusuario` (
  `usuario` int(11) UNSIGNED NOT NULL,
  `rol` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `rolesusuario`
--

INSERT INTO `rolesusuario` (`usuario`, `rol`) VALUES
(1, 1),
(2, 1),
(2, 2),
(3, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) UNSIGNED NOT NULL,
  `nombre` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `correo` varchar(30) COLLATE utf8mb4_spanish_ci NOT NULL,
  `contraseña` varchar(70) COLLATE utf8mb4_spanish_ci NOT NULL,
  `monedas` int(11) NOT NULL DEFAULT '100',
  `puntos` int(11) NOT NULL DEFAULT '0',
  `foto` binary(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `correo`, `contraseña`, `monedas`, `puntos`, `foto`) VALUES
(1, 'user', 'user@example.org', '$2y$10$0eR.KhfTH5ybn/jlB86hwe/1nQeCKXk2RcLEjBscJbpUaF504kSOi', 100, 0, 0x000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000),
(2, 'admin', 'admin@example.org', '$2y$10$0eR.KhfTH5ybn/jlB86hwe/1nQeCKXk2RcLEjBscJbpUaF504kSOi', 100, 0, 0x000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000),
(3, 'prueba', 'prueba@example.org', '$2y$10$0eR.KhfTH5ybn/jlB86hwe/1nQeCKXk2RcLEjBscJbpUaF504kSOi', 100, 0, 0x000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000),
(4, '1234', '1234@example.org', '$2y$10$crE/87D6eqLr6A6/Vmt4zuDS7/igGThgX6t.ZWwvtyatT4E5gDqgm', 100, 0, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario` (`idUsuario`),
  ADD KEY `idObjeto` (`idObjeto`);

--
-- Indices de la tabla `enemigo`
--
ALTER TABLE `enemigo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `enemigomazmorra`
--
ALTER TABLE `enemigomazmorra`
  ADD PRIMARY KEY (`idMazmorra`,`idEnemigo`),
  ADD KEY `enemigo` (`idEnemigo`);

--
-- Indices de la tabla `inventario`
--
ALTER TABLE `inventario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `inventariocontiene`
--
ALTER TABLE `inventariocontiene`
  ADD PRIMARY KEY (`idInventario`,`idObjeto`),
  ADD KEY `objetos` (`idObjeto`);

--
-- Indices de la tabla `juegamapa`
--
ALTER TABLE `juegamapa`
  ADD PRIMARY KEY (`idUsuario`,`idMapa`),
  ADD KEY `idPersonaje` (`idPersonaje`),
  ADD KEY `idMapa` (`idMapa`);

--
-- Indices de la tabla `mapacontiene`
--
ALTER TABLE `mapacontiene`
  ADD PRIMARY KEY (`idMapa`,`idMazmorra`),
  ADD KEY `idMazmorra` (`idMazmorra`),
  ADD KEY `idMapa` (`idMapa`);

--
-- Indices de la tabla `mapas`
--
ALTER TABLE `mapas`
  ADD PRIMARY KEY (`idMapa`),
  ADD KEY `propietario` (`propietario`);
ALTER TABLE `mapas` ADD FULLTEXT KEY `nombre` (`nombre`);

--
-- Indices de la tabla `mazmorras`
--
ALTER TABLE `mazmorras`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `mazmorrassuperadas`
--
ALTER TABLE `mazmorrassuperadas`
  ADD PRIMARY KEY (`idMapa`,`idMazmorra`),
  ADD KEY `idenMazmorras` (`idMazmorra`);

--
-- Indices de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `usuario` (`usuario`),
  ADD KEY `idMensajePadre` (`idMensajePadre`);

--
-- Indices de la tabla `objetos`
--
ALTER TABLE `objetos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nombre` (`nombre`,`categoria`);

--
-- Indices de la tabla `personaje`
--
ALTER TABLE `personaje`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idInventario` (`idInventario`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Indices de la tabla `rolesusuario`
--
ALTER TABLE `rolesusuario`
  ADD KEY `rol` (`rol`),
  ADD KEY `usuario` (`usuario`,`rol`) USING BTREE,
  ADD KEY `usuario_2` (`usuario`),
  ADD KEY `usuario_3` (`usuario`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`) USING BTREE,
  ADD KEY `nombre` (`nombre`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carrito`
--
ALTER TABLE `carrito`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `enemigo`
--
ALTER TABLE `enemigo`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `inventario`
--
ALTER TABLE `inventario`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `mapas`
--
ALTER TABLE `mapas`
  MODIFY `idMapa` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `mazmorras`
--
ALTER TABLE `mazmorras`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `objetos`
--
ALTER TABLE `objetos`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD CONSTRAINT `idObjeto` FOREIGN KEY (`idObjeto`) REFERENCES `objetos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `usuario` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `enemigomazmorra`
--
ALTER TABLE `enemigomazmorra`
  ADD CONSTRAINT `enemigo` FOREIGN KEY (`idEnemigo`) REFERENCES `enemigo` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mazmorra` FOREIGN KEY (`idMazmorra`) REFERENCES `mazmorras` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `inventariocontiene`
--
ALTER TABLE `inventariocontiene`
  ADD CONSTRAINT `inventario` FOREIGN KEY (`idInventario`) REFERENCES `inventario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `objetos` FOREIGN KEY (`idObjeto`) REFERENCES `objetos` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `juegamapa`
--
ALTER TABLE `juegamapa`
  ADD CONSTRAINT `idMapa` FOREIGN KEY (`idMapa`) REFERENCES `mapas` (`idMapa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `idPersonaje` FOREIGN KEY (`idPersonaje`) REFERENCES `personaje` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `idUsuario` FOREIGN KEY (`idUsuario`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `mapacontiene`
--
ALTER TABLE `mapacontiene`
  ADD CONSTRAINT `idMazmorra` FOREIGN KEY (`idMazmorra`) REFERENCES `mazmorras` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `mapa` FOREIGN KEY (`idMapa`) REFERENCES `mapas` (`idMapa`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `mapas`
--
ALTER TABLE `mapas`
  ADD CONSTRAINT `propietario` FOREIGN KEY (`propietario`) REFERENCES `usuarios` (`id`);

--
-- Filtros para la tabla `mazmorrassuperadas`
--
ALTER TABLE `mazmorrassuperadas`
  ADD CONSTRAINT `idenMapa` FOREIGN KEY (`idMapa`) REFERENCES `mapas` (`idMapa`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `idenMazmorras` FOREIGN KEY (`idMazmorra`) REFERENCES `mazmorras` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `mensajes`
--
ALTER TABLE `mensajes`
  ADD CONSTRAINT `Mensajes_mensaje` FOREIGN KEY (`idMensajePadre`) REFERENCES `mensajes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Mensajes_usuario` FOREIGN KEY (`usuario`) REFERENCES `usuarios` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `personaje`
--
ALTER TABLE `personaje`
  ADD CONSTRAINT `idInventario` FOREIGN KEY (`idInventario`) REFERENCES `inventario` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `rolesusuario`
--
ALTER TABLE `rolesusuario`
  ADD CONSTRAINT `rolesusuario_ibfk_1` FOREIGN KEY (`usuario`) REFERENCES `usuarios` (`id`),
  ADD CONSTRAINT `rolesusuario_ibfk_2` FOREIGN KEY (`rol`) REFERENCES `roles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
