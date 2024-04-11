-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-03-2024 a las 18:05:08
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `autoeva`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cicles`
--

CREATE TABLE `cicles` (
  `id` int(11) NOT NULL,
  `sigles` varchar(45) NOT NULL,
  `nom` varchar(45) NOT NULL,
  `descripcio` varchar(255) DEFAULT NULL,
  `actiu` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `cicles`
--

INSERT INTO `cicles` (`id`, `sigles`, `nom`, `descripcio`, `actiu`) VALUES
(1, 'DAW', 'Desenvolupament Aplicacions Web', 'Cicle de Grau Superior de Desenvolupament d\'Aplicacions Web', 1),
(2, 'DAM', 'Desenvolupament Aplicacions Multiplataforma', 'Cicle de Grau Superior de Desenvolupament d\'Aplicacions Multiplataforma', 1),
(3, 'MARP', 'Màrqueting i Publicitat', 'Cicle de Grau Superior de Màrqueting i Publicitat', 1),
(5, 'AVIE', 'Agencia de Viatges i Esdeveniments', 'Cicle de Grau Superior d\'Agencia de Viatges i Esdeveniments', 0),
(6, 'ADIR', 'Assistència a la Direcció', 'Cicle de Grau Superior de Màrqueting i Publicitat', 0),
(7, 'GAD', 'Gestió Administrativa', 'Cicle de Grau Mitjà de Gestió Administrativa', 1),
(8, 'ACOM', 'Activitats Comercials', 'Cicle de Grau Mitjà d\'Activitats Comercials', 1),
(9, 'CINT', 'Comerç Internacional', 'Cicle de Grau Superior de Comerç Internacional', 1),
(10, 'SMIX', 'Sistemes Micorinformàtics i Xarxes', 'Cicle de Grau Mitjà de Sistemes Microinformàtics i Xarxes', 1),
(16, 'q', 'q', 'q', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `competencies_detall`
--

CREATE TABLE `competencies_detall` (
  `id` int(11) NOT NULL,
  `codi` varchar(45) NOT NULL,
  `nom` varchar(45) NOT NULL,
  `competetencies_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `competetencies`
--

CREATE TABLE `competetencies` (
  `id` int(11) NOT NULL,
  `codi` varchar(45) NOT NULL,
  `nom` varchar(45) NOT NULL,
  `descripcio` varchar(45) DEFAULT NULL,
  `moduls_id` int(11) NOT NULL,
  `actiu` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos`
--

CREATE TABLE `cursos` (
  `id` int(11) NOT NULL,
  `sigles` varchar(45) NOT NULL,
  `nom` varchar(45) DEFAULT NULL,
  `cicles_id` int(11) NOT NULL,
  `actiu` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `cursos`
--

INSERT INTO `cursos` (`id`, `sigles`, `nom`, `cicles_id`, `actiu`) VALUES
(1, 'DAW1A', '1er DAWA del matí.', 1, 1),
(2, 'DAW2A', '2on DAWA del matí.', 1, 1),
(3, 'DAW2B', '2on DAWB del matí.', 1, 1),
(4, 'DAM1A', '1er DAMA del matí.', 2, 1),
(5, 'DAM2A', '2on DAMA del matí.', 2, 1),
(6, 'DAM2B', '2on DAMB del matí.', 2, 1),
(7, 'DAW1T', '1er DAW de la tarda.', 1, 0),
(8, 'DAW2T', '2on DAW de la tarda.', 1, 0),
(9, 'DAM1T', '1er DAM de la tarda.', 2, 0),
(10, 'DAM2T', '2on DAM de la tarda.', 2, 0),
(11, 'SMIX1A', 'Primer de SMIXA del matí.', 10, 1),
(12, 'SMIX2A', 'Segon de SMIXA del matí.', 10, 0),
(13, 'SMIX1B', 'Primer de SMIXB del matí.', 10, 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cursos_has_cicles`
--

CREATE TABLE `cursos_has_cicles` (
  `cursos_id` int(11) NOT NULL,
  `cicles_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `moduls`
--

CREATE TABLE `moduls` (
  `id` int(11) NOT NULL,
  `codi` varchar(45) NOT NULL,
  `nom` varchar(45) NOT NULL,
  `hores` int(11) NOT NULL,
  `cicles_id` int(11) NOT NULL,
  `actiu` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `moduls`
--

INSERT INTO `moduls` (`id`, `codi`, `nom`, `hores`, `cicles_id`, `actiu`) VALUES
(1, 'M01', 'Sistemes Informàtics', 4, 1, 1),
(2, 'M02', 'Base de dades', 5, 1, 1),
(3, 'M03', 'Programació', 7, 1, 1),
(4, 'M04', 'Llenguatge de Marques', 3, 1, 1),
(5, 'M05', 'Entorns de Desenvolupament', 2, 1, 1),
(6, 'M06', 'Desenvolupament Web Entorn Client', 5, 1, 1),
(7, 'M07', 'Desenvolupament Web Entorn Servidor', 5, 1, 1),
(8, 'M08', 'Despelgament Aplicacions Web', 3, 1, 1),
(9, 'M09', 'Disseny Interfícies Web', 3, 1, 1),
(10, 'M10', 'Formació i Orientació Laboral', 3, 1, 1),
(11, 'M11', 'Empresa i Iniciativa Emprenedora', 2, 1, 1),
(12, 'M12', 'Projecte', 3, 1, 1),
(13, 'M01', 'Sistemes Informàtics', 4, 2, 1),
(14, 'M02', 'Base de dades', 5, 2, 1),
(15, 'M03', 'Programació', 7, 2, 1),
(16, 'M04', 'Llenguatge de Marques', 3, 2, 1),
(17, 'M05', 'Entorns de Desenvolupament', 2, 2, 1),
(18, 'M06', 'Accés a Dades', 4, 2, 1),
(19, 'M07', 'Disseny Interfícies', 3, 2, 1),
(20, 'M08', 'Promació multimèdia i Dispositius Mòbils', 3, 2, 1),
(21, 'M09', 'Programació Serveis i Processos', 3, 2, 1),
(22, 'M10', 'Sistemes Gestors Empresarials', 3, 2, 1),
(23, 'M11', 'Formació i Orientació Laboral', 3, 2, 1),
(24, 'M12', 'Empresa i Iniciativa Emprenedora', 2, 2, 1),
(25, 'M13', 'Projecte', 3, 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `moduls_has_cursos`
--

CREATE TABLE `moduls_has_cursos` (
  `moduls_id` int(11) NOT NULL,
  `cursos_id` int(11) NOT NULL,
  `curs_academic_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `moduls_has_cursos`
--

INSERT INTO `moduls_has_cursos` (`moduls_id`, `cursos_id`, `curs_academic_id`) VALUES
(1, 1, 2020),
(2, 1, 2020),
(3, 1, 2020),
(4, 1, 2020),
(5, 1, 2020),
(6, 2, 2020),
(6, 3, 2020),
(7, 2, 2020),
(7, 3, 2020),
(8, 2, 2020),
(8, 3, 2020),
(9, 2, 2020),
(9, 3, 2020),
(10, 1, 2020),
(11, 1, 2020),
(12, 2, 2020),
(12, 3, 2020);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `moduls_has_professors`
--

CREATE TABLE `moduls_has_professors` (
  `moduls_id` int(11) NOT NULL,
  `usuaris_id` int(11) NOT NULL,
  `curs_academic_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rols`
--

CREATE TABLE `rols` (
  `id` int(11) NOT NULL,
  `nom` varchar(45) NOT NULL,
  `actiu` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Volcado de datos para la tabla `rols`
--

INSERT INTO `rols` (`id`, `nom`, `actiu`) VALUES
(1, 'Administrador', 0),
(2, 'Professor', 0),
(3, 'Alumne', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rubriques`
--

CREATE TABLE `rubriques` (
  `id` int(11) NOT NULL,
  `descripcio` varchar(45) NOT NULL,
  `actiu` tinyint(4) NOT NULL,
  `nivell` int(11) NOT NULL,
  `competencies_detall_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuaris`
--

CREATE TABLE `usuaris` (
  `id` int(11) NOT NULL,
  `correu` varchar(45) NOT NULL,
  `nom` varchar(45) NOT NULL,
  `cognoms` varchar(45) NOT NULL,
  `contrasenya` varchar(256) NOT NULL,
  `actiu` tinyint(4) NOT NULL,
  `rols_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuaris_has_competencies_detall`
--

CREATE TABLE `usuaris_has_competencies_detall` (
  `usuaris_id` int(11) NOT NULL,
  `competencies_detall_id` int(11) NOT NULL,
  `curs_academic_id` int(11) NOT NULL,
  `nivell` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cicles`
--
ALTER TABLE `cicles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sigles_UNIQUE` (`sigles`),
  ADD UNIQUE KEY `nom_UNIQUE` (`nom`);

--
-- Indices de la tabla `competencies_detall`
--
ALTER TABLE `competencies_detall`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_competencies_detall_competetencies1_idx` (`competetencies_id`);

--
-- Indices de la tabla `competetencies`
--
ALTER TABLE `competetencies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_competetencies_moduls1_idx` (`moduls_id`);

--
-- Indices de la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `sigles_UNIQUE` (`sigles`),
  ADD KEY `fk_cursos_cicles1_idx` (`cicles_id`);

--
-- Indices de la tabla `cursos_has_cicles`
--
ALTER TABLE `cursos_has_cicles`
  ADD PRIMARY KEY (`cursos_id`,`cicles_id`),
  ADD KEY `fk_cursos_has_cicles_cicles1_idx` (`cicles_id`),
  ADD KEY `fk_cursos_has_cicles_cursos_idx` (`cursos_id`);

--
-- Indices de la tabla `moduls`
--
ALTER TABLE `moduls`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_moduls_cicles1_idx` (`cicles_id`);

--
-- Indices de la tabla `moduls_has_cursos`
--
ALTER TABLE `moduls_has_cursos`
  ADD PRIMARY KEY (`moduls_id`,`cursos_id`,`curs_academic_id`),
  ADD KEY `fk_moduls_has_cursos_cursos1_idx` (`cursos_id`),
  ADD KEY `fk_moduls_has_cursos_moduls1_idx` (`moduls_id`);

--
-- Indices de la tabla `moduls_has_professors`
--
ALTER TABLE `moduls_has_professors`
  ADD PRIMARY KEY (`moduls_id`,`usuaris_id`,`curs_academic_id`),
  ADD KEY `fk_moduls_has_usuaris_usuaris1_idx` (`usuaris_id`),
  ADD KEY `fk_moduls_has_usuaris_moduls1_idx` (`moduls_id`);

--
-- Indices de la tabla `rols`
--
ALTER TABLE `rols`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `rubriques`
--
ALTER TABLE `rubriques`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_rubriques_competencies_detall1_idx` (`competencies_detall_id`);

--
-- Indices de la tabla `usuaris`
--
ALTER TABLE `usuaris`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `correu_UNIQUE` (`correu`),
  ADD KEY `fk_usuaris_rols1_idx` (`rols_id`);

--
-- Indices de la tabla `usuaris_has_competencies_detall`
--
ALTER TABLE `usuaris_has_competencies_detall`
  ADD PRIMARY KEY (`usuaris_id`,`competencies_detall_id`,`curs_academic_id`),
  ADD KEY `fk_usuaris_has_competencies_detall_competencies_detall1_idx` (`competencies_detall_id`),
  ADD KEY `fk_usuaris_has_competencies_detall_usuaris1_idx` (`usuaris_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cicles`
--
ALTER TABLE `cicles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `competencies_detall`
--
ALTER TABLE `competencies_detall`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `competetencies`
--
ALTER TABLE `competetencies`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cursos`
--
ALTER TABLE `cursos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT de la tabla `moduls`
--
ALTER TABLE `moduls`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `rols`
--
ALTER TABLE `rols`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `rubriques`
--
ALTER TABLE `rubriques`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuaris`
--
ALTER TABLE `usuaris`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `competencies_detall`
--
ALTER TABLE `competencies_detall`
  ADD CONSTRAINT `fk_competencies_detall_competetencies1` FOREIGN KEY (`competetencies_id`) REFERENCES `competetencies` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `competetencies`
--
ALTER TABLE `competetencies`
  ADD CONSTRAINT `fk_competetencies_moduls1` FOREIGN KEY (`moduls_id`) REFERENCES `moduls` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cursos`
--
ALTER TABLE `cursos`
  ADD CONSTRAINT `fk_cursos_cicles1` FOREIGN KEY (`cicles_id`) REFERENCES `cicles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `cursos_has_cicles`
--
ALTER TABLE `cursos_has_cicles`
  ADD CONSTRAINT `fk_cursos_has_cicles_cicles1` FOREIGN KEY (`cicles_id`) REFERENCES `cicles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_cursos_has_cicles_cursos` FOREIGN KEY (`cursos_id`) REFERENCES `cursos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `moduls`
--
ALTER TABLE `moduls`
  ADD CONSTRAINT `fk_moduls_cicles1` FOREIGN KEY (`cicles_id`) REFERENCES `cicles` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `moduls_has_cursos`
--
ALTER TABLE `moduls_has_cursos`
  ADD CONSTRAINT `fk_moduls_has_cursos_cursos1` FOREIGN KEY (`cursos_id`) REFERENCES `cursos` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_moduls_has_cursos_moduls1` FOREIGN KEY (`moduls_id`) REFERENCES `moduls` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `moduls_has_professors`
--
ALTER TABLE `moduls_has_professors`
  ADD CONSTRAINT `fk_moduls_has_usuaris_moduls1` FOREIGN KEY (`moduls_id`) REFERENCES `moduls` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_moduls_has_usuaris_usuaris1` FOREIGN KEY (`usuaris_id`) REFERENCES `usuaris` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `rubriques`
--
ALTER TABLE `rubriques`
  ADD CONSTRAINT `fk_rubriques_competencies_detall1` FOREIGN KEY (`competencies_detall_id`) REFERENCES `competencies_detall` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuaris`
--
ALTER TABLE `usuaris`
  ADD CONSTRAINT `fk_usuaris_rols1` FOREIGN KEY (`rols_id`) REFERENCES `rols` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `usuaris_has_competencies_detall`
--
ALTER TABLE `usuaris_has_competencies_detall`
  ADD CONSTRAINT `fk_usuaris_has_competencies_detall_competencies_detall1` FOREIGN KEY (`competencies_detall_id`) REFERENCES `competencies_detall` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_usuaris_has_competencies_detall_usuaris1` FOREIGN KEY (`usuaris_id`) REFERENCES `usuaris` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
