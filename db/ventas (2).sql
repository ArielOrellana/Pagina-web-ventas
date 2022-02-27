-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 22-04-2019 a las 20:45:58
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
-- Base de datos: `ventas`
--
CREATE DATABASE IF NOT EXISTS `ventas` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `ventas`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carts`
--

DROP TABLE IF EXISTS `carts`;
CREATE TABLE `carts` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `session_id` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `product_id` int(11) NOT NULL DEFAULT '0',
  `price` double(8,2) NOT NULL DEFAULT '0.00',
  `qty` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

DROP TABLE IF EXISTS `categoria`;
CREATE TABLE `categoria` (
  `id` int(11) NOT NULL,
  `nombre` varchar(150) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `codigo` int(11) DEFAULT '0',
  `status` tinyint(4) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `categoria`
--

INSERT INTO `categoria` (`id`, `nombre`, `created_at`, `updated_at`, `codigo`, `status`) VALUES
(1, 'auto', '2019-04-22 07:59:29', '2019-04-22 10:57:38', 0, 1),
(3, 'ropa', '2019-04-22 07:59:50', '2019-04-22 10:57:45', 0, 1),
(5, 'electronica', '2019-04-18 04:52:57', '2019-04-15 21:36:11', 0, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `imagen`
--

DROP TABLE IF EXISTS `imagen`;
CREATE TABLE `imagen` (
  `id` int(11) NOT NULL,
  `image` varchar(191) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `producto_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `imagen`
--

INSERT INTO `imagen` (`id`, `image`, `created_at`, `updated_at`, `producto_id`) VALUES
(4, '6293581555439051.jpg', '2019-04-16 21:24:11', '2019-04-16 21:24:11', 23),
(5, '8130701555439051.jpg', '2019-04-16 21:24:11', '2019-04-16 21:24:11', 23),
(6, '184481555439051.jpg', '2019-04-16 21:24:12', '2019-04-16 21:24:12', 23),
(7, '7073141555441044.jpg', '2019-04-16 21:57:24', '2019-04-16 21:57:24', 24),
(8, '2268291555441044.jpg', '2019-04-16 21:57:24', '2019-04-16 21:57:24', 24),
(9, '4530501555441044.jpg', '2019-04-16 21:57:25', '2019-04-16 21:57:25', 24),
(10, '7959681555476292.jpg', '2019-04-17 07:44:52', '2019-04-17 07:44:52', 26),
(11, '4505951555476293.jpg', '2019-04-17 07:44:53', '2019-04-17 07:44:53', 26),
(12, '8922611555530120.jpg', '2019-04-17 22:42:00', '2019-04-17 22:42:00', 26),
(13, '6274581555621553.jpg', '2019-04-19 00:05:53', '2019-04-19 00:05:53', 28),
(14, '1440781555621553.jpg', '2019-04-19 00:05:53', '2019-04-19 00:05:53', 28);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(16, '2014_10_12_000000_create_users_table', 1),
(17, '2014_10_12_100000_create_password_resets_table', 1),
(18, '2019_04_09_043618_create_productos_table', 1),
(19, '2019_04_14_013251_create_roles_table', 1),
(20, '2019_04_14_013557_create_role_user_table', 1),
(21, '2019_04_21_080212_create_cart_table', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

DROP TABLE IF EXISTS `productos`;
CREATE TABLE `productos` (
  `id` int(10) UNSIGNED NOT NULL,
  `modelo` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `codigo` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `stock` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `precio` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categoria_id` int(11) NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `modelo`, `codigo`, `nombre`, `descripcion`, `stock`, `created_at`, `updated_at`, `precio`, `categoria_id`, `image`) VALUES
(24, '12', '1', 'pc gamer', 'corre todos los juegos hasta el minecraft', '10', '2019-04-16 21:47:59', '2019-04-17 07:43:25', '45', 5, '5944161555440479-pc-gamer.jpg'),
(25, '13', '2', 'parlantes', 'soobwofer', '10', '2019-04-17 06:31:10', '2019-04-17 07:43:13', '25', 5, '4511241555471870-parlantes.jpg'),
(26, '12', '3', 'pc gamer', 'corre todos los juegos hasta el minecraft', '10', '2019-04-17 06:45:38', '2019-04-17 06:45:38', '45', 5, '3631541555472738-pc-gamer.jpg'),
(28, '2012', '4', 'toyota hilux', 'todo terreno 4x4', '5', '2019-04-19 00:05:23', '2019-04-19 00:05:23', '2000', 1, '5974081555621522-toyota-hilux.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Administrator', '2019-04-14 07:49:54', '2019-04-14 07:49:54'),
(2, 'user', 'User', '2019-04-14 07:49:54', '2019-04-14 07:49:54');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_user`
--

DROP TABLE IF EXISTS `role_user`;
CREATE TABLE `role_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `role_user`
--

INSERT INTO `role_user` (`id`, `role_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 2, 1, '2019-04-14 07:49:54', '2019-04-14 07:49:54'),
(2, 1, 2, '2019-04-14 07:49:54', '2019-04-14 07:49:54'),
(3, 1, 3, '2019-04-14 07:50:11', '2019-04-14 07:50:11'),
(4, 2, 4, '2019-04-14 07:56:19', '2019-04-14 07:56:19'),
(5, 1, 5, '2019-04-16 08:28:28', '2019-04-16 08:28:28');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'User', 'user@example.com', NULL, '$2y$10$OuEsVA88P4Tt5XZ6z2il5uierz2WV.JZIp56KOFfsTUOJZVI8r/aa', NULL, '2019-04-14 07:49:54', '2019-04-14 07:49:54'),
(2, 'Admin', 'admin@example.com', NULL, '$2y$10$U7rpozawK8FDnr1CEdCeteZdA5hLWGk84gCUpBf9YAgaTSTWbq8C6', NULL, '2019-04-14 07:49:54', '2019-04-14 07:49:54'),
(3, 'ariel orellana', 'ariel@gmail.com', NULL, '$2y$10$IoSgTjfpBe24OLEJHXZLYubC3vyfzsuLzBTY.8EkeGF4ZRbwWt/By', NULL, '2019-04-14 07:50:11', '2019-04-14 07:50:11'),
(4, 'nueva cuenta', 'skere@skere.com', NULL, '$2y$10$BanAzgWN3V.cVv3tv9t6BuE2BdzKQ5rGVJiXR6xh9Kj1f/wtE9DHK', NULL, '2019-04-14 07:56:19', '2019-04-14 07:56:19'),
(5, 'ever', 'ever@gmail.com', NULL, '$2y$10$34VCsL2xBshb3kOh1rltxe.34L0j7x85pLCff/U9o2qdKDsOPf8V2', NULL, '2019-04-16 08:28:28', '2019-04-16 08:28:28');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `imagen`
--
ALTER TABLE `imagen`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_categoria_productos` (`categoria_id`) USING BTREE;

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `carts`
--
ALTER TABLE `carts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `imagen`
--
ALTER TABLE `imagen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
