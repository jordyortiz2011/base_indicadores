-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-06-2017 a las 21:57:07
-- Versión del servidor: 5.6.25
-- Versión de PHP: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `indicadores`
--
CREATE DATABASE IF NOT EXISTS `indicadores` DEFAULT CHARACTER SET utf16 COLLATE utf16_spanish_ci;
USE `indicadores`;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acl`
--

CREATE TABLE IF NOT EXISTS `acl` (
  `ai` int(10) unsigned NOT NULL,
  `action_id` int(10) unsigned NOT NULL,
  `user_id` int(10) unsigned DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acl_actions`
--

CREATE TABLE IF NOT EXISTS `acl_actions` (
  `action_id` int(10) unsigned NOT NULL,
  `action_code` varchar(100) NOT NULL COMMENT 'No periods allowed!',
  `action_desc` varchar(100) NOT NULL COMMENT 'Human readable description',
  `category_id` int(10) unsigned NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `acl_categories`
--

CREATE TABLE IF NOT EXISTS `acl_categories` (
  `category_id` int(10) unsigned NOT NULL,
  `category_code` varchar(100) NOT NULL COMMENT 'No periods allowed!',
  `category_desc` varchar(100) NOT NULL COMMENT 'Human readable description'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auth_sessions`
--

CREATE TABLE IF NOT EXISTS `auth_sessions` (
  `id` varchar(128) NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `login_time` datetime DEFAULT NULL,
  `modified_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ip_address` varchar(45) NOT NULL,
  `user_agent` varchar(60) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `auth_sessions`
--

INSERT INTO `auth_sessions` (`id`, `user_id`, `login_time`, `modified_at`, `ip_address`, `user_agent`) VALUES
('f1r7m576jv9et845kslqm56nth7iuu7k', 2147484848, '2017-06-01 13:31:49', '2017-06-01 19:46:20', '::1', 'Firefox 52.0 on Windows 7');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `id` varchar(128) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `denied_access`
--

CREATE TABLE IF NOT EXISTS `denied_access` (
  `ai` int(10) unsigned NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `time` datetime NOT NULL,
  `reason_code` tinyint(1) unsigned DEFAULT '0'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ips_on_hold`
--

CREATE TABLE IF NOT EXISTS `ips_on_hold` (
  `ai` int(10) unsigned NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `login_errors`
--

CREATE TABLE IF NOT EXISTS `login_errors` (
  `ai` int(10) unsigned NOT NULL,
  `username_or_email` varchar(255) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=38 DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `login_errors`
--

INSERT INTO `login_errors` (`ai`, `username_or_email`, `ip_address`, `time`) VALUES
(37, 'jark', '::1', '2017-05-25 15:43:24'),
(36, 'jark', '::1', '2017-05-25 15:43:13'),
(35, 'jark', '::1', '2017-05-25 15:43:02');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `username_or_email_on_hold`
--

CREATE TABLE IF NOT EXISTS `username_or_email_on_hold` (
  `ai` int(10) unsigned NOT NULL,
  `username_or_email` varchar(255) NOT NULL,
  `time` datetime NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(10) unsigned NOT NULL,
  `username` varchar(12) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `auth_level` tinyint(3) unsigned NOT NULL,
  `banned` enum('0','1') NOT NULL DEFAULT '0',
  `passwd` varchar(60) NOT NULL,
  `passwd_recovery_code` varchar(60) DEFAULT NULL,
  `passwd_recovery_date` datetime DEFAULT NULL,
  `passwd_modified_at` datetime DEFAULT NULL,
  `last_login` datetime DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `modified_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `auth_level`, `banned`, `passwd`, `passwd_recovery_code`, `passwd_recovery_date`, `passwd_modified_at`, `last_login`, `created_at`, `modified_at`) VALUES
(1654816773, 'mapaxe', 'mapaxe@gmail.com', 9, '0', '$2y$11$eCP83za7lhSu2iUWxVEdQO1pGBDreZeuOMSPLAockQtuBZ/5eydke', NULL, NULL, NULL, NULL, '2017-06-01 14:46:31', '2017-06-01 19:46:31'),
(1870023735, 'manuel', 'manuel@gmail.com', 9, '0', '$2y$11$lRKNk95pA2EToXINRpsbn.7AvencWYrkY1ctanNEVphvQS62gVg0m', NULL, NULL, NULL, '2017-05-25 15:41:09', '2017-05-22 16:18:09', '2017-05-25 20:41:09'),
(2147484848, 'jark', 'jark@gmail.com', 9, '0', '$2y$11$Onn1SyZdhc1XRmkIlfH8EOJxXzGDTbWDR.p03zkT5abHCeoRnwKJi', NULL, NULL, NULL, '2017-06-01 13:31:49', '2017-05-17 07:47:24', '2017-06-01 18:31:49');

--
-- Disparadores `users`
--
DELIMITER $$
CREATE TRIGGER `ca_passwd_trigger` BEFORE UPDATE ON `users`
 FOR EACH ROW BEGIN
    IF ((NEW.passwd <=> OLD.passwd) = 0) THEN
        SET NEW.passwd_modified_at = NOW();
    END IF;
END
$$
DELIMITER ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `acl`
--
ALTER TABLE `acl`
  ADD PRIMARY KEY (`ai`),
  ADD KEY `action_id` (`action_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indices de la tabla `acl_actions`
--
ALTER TABLE `acl_actions`
  ADD PRIMARY KEY (`action_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indices de la tabla `acl_categories`
--
ALTER TABLE `acl_categories`
  ADD PRIMARY KEY (`category_id`),
  ADD UNIQUE KEY `category_code` (`category_code`),
  ADD UNIQUE KEY `category_desc` (`category_desc`);

--
-- Indices de la tabla `auth_sessions`
--
ALTER TABLE `auth_sessions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `ci_sessions`
--
ALTER TABLE `ci_sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ci_sessions_timestamp` (`timestamp`);

--
-- Indices de la tabla `denied_access`
--
ALTER TABLE `denied_access`
  ADD PRIMARY KEY (`ai`);

--
-- Indices de la tabla `ips_on_hold`
--
ALTER TABLE `ips_on_hold`
  ADD PRIMARY KEY (`ai`);

--
-- Indices de la tabla `login_errors`
--
ALTER TABLE `login_errors`
  ADD PRIMARY KEY (`ai`);

--
-- Indices de la tabla `username_or_email_on_hold`
--
ALTER TABLE `username_or_email_on_hold`
  ADD PRIMARY KEY (`ai`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `acl`
--
ALTER TABLE `acl`
  MODIFY `ai` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `acl_actions`
--
ALTER TABLE `acl_actions`
  MODIFY `action_id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `acl_categories`
--
ALTER TABLE `acl_categories`
  MODIFY `category_id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `denied_access`
--
ALTER TABLE `denied_access`
  MODIFY `ai` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `ips_on_hold`
--
ALTER TABLE `ips_on_hold`
  MODIFY `ai` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `login_errors`
--
ALTER TABLE `login_errors`
  MODIFY `ai` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT de la tabla `username_or_email_on_hold`
--
ALTER TABLE `username_or_email_on_hold`
  MODIFY `ai` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `acl`
--
ALTER TABLE `acl`
  ADD CONSTRAINT `acl_ibfk_1` FOREIGN KEY (`action_id`) REFERENCES `acl_actions` (`action_id`) ON DELETE CASCADE,
  ADD CONSTRAINT `acl_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `acl_actions`
--
ALTER TABLE `acl_actions`
  ADD CONSTRAINT `acl_actions_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `acl_categories` (`category_id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
