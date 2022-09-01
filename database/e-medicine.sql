-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-09-2022 a las 09:19:42
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `e-medicine`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admins`
--

CREATE TABLE `admins` (
  `idAdmin` varchar(255) NOT NULL,
  `nombreAdmin` varchar(255) NOT NULL,
  `apellidoAdmin` varchar(255) NOT NULL,
  `correoAdmin` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `telefonoAdmin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `admins`
--

INSERT INTO `admins` (`idAdmin`, `nombreAdmin`, `apellidoAdmin`, `correoAdmin`, `pass`, `telefonoAdmin`) VALUES
('A-001', 'Guillermo', 'Granadino', 'guillermogr211@gmail.com', 'Guille31', '7062-0796'),
('A-002', 'Ulises', 'Flores', 'ulisesf3136@gmail.com ', 'ulises2', '7865-0867'),
('A-003', 'Jefferson', 'Castro', 'castroalexis213@gmail.com', 'jefferson3', '7684-2459');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `anuncios`
--

CREATE TABLE `anuncios` (
  `id` int(11) NOT NULL,
  `idUsuario` varchar(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `contenidoAnuncio` varchar(255) NOT NULL,
  `fechaPublicacion` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `anuncios`
--

INSERT INTO `anuncios` (`id`, `idUsuario`, `nombre`, `contenidoAnuncio`, `fechaPublicacion`) VALUES
(1, 'D-00001', 'Alexandra Sandoval', 'adasdasdasdasda', '0000-00-00 00:00:00'),
(2, 'D-00001', 'Alexandra Sandoval', 'sadasdasdasdasd', '2022-09-01 05:00:31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

CREATE TABLE `citas` (
  `idCita` int(11) NOT NULL,
  `idPaciente` varchar(255) NOT NULL,
  `peso` varchar(255) NOT NULL,
  `altura` varchar(255) NOT NULL,
  `fechaNacimiento` date NOT NULL,
  `fechaCreacion` date NOT NULL,
  `especialidadM` varchar(255) NOT NULL,
  `doctor` varchar(255) NOT NULL,
  `fechaCita` date NOT NULL,
  `horaCita` time NOT NULL,
  `enfermedades` text DEFAULT NULL,
  `razonCita` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `citas`
--

INSERT INTO `citas` (`idCita`, `idPaciente`, `peso`, `altura`, `fechaNacimiento`, `fechaCreacion`, `especialidadM`, `doctor`, `fechaCita`, `horaCita`, `enfermedades`, `razonCita`) VALUES
(1, 'P-00001', '120', '173', '2003-11-17', '2022-09-01', 'N-003', 'D-00011', '2022-08-31', '10:30:00', '', 'dasdasdasdasd'),
(2, 'P-00001', '120', '173', '2003-11-17', '2022-09-01', 'MG-002', 'D-00006', '2022-09-15', '10:30:00', '', 'asdasdasd'),
(3, 'P-00001', '120', '173', '2003-11-17', '2022-09-01', 'C-001', 'D-00001', '2022-08-31', '10:30:00', '', 'asdasdadasd'),
(4, 'P-00001', '120', '173', '2003-11-17', '2022-09-01', 'N-003', 'D-00011', '2022-09-20', '08:30:00', '', 'sadsad'),
(5, 'P-00001', '120', '173', '2003-11-17', '2022-09-01', 'N-003', 'D-00011', '2022-09-14', '11:00:00', '', 'asdsada');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citasfamiliares`
--

CREATE TABLE `citasfamiliares` (
  `idCitaFamiliar` int(11) NOT NULL,
  `idPerfil` varchar(255) NOT NULL,
  `idPaciente` varchar(255) NOT NULL,
  `peso` varchar(255) NOT NULL,
  `altura` varchar(255) NOT NULL,
  `fechaNacimiento` date NOT NULL,
  `fechaCreacion` date NOT NULL,
  `especialidadM` varchar(255) NOT NULL,
  `doctor` varchar(255) NOT NULL,
  `fechaCita` date NOT NULL,
  `horaCita` time NOT NULL,
  `enfermedades` text DEFAULT NULL,
  `razonCita` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `citasfamiliares`
--

INSERT INTO `citasfamiliares` (`idCitaFamiliar`, `idPerfil`, `idPaciente`, `peso`, `altura`, `fechaNacimiento`, `fechaCreacion`, `especialidadM`, `doctor`, `fechaCita`, `horaCita`, `enfermedades`, `razonCita`) VALUES
(1, 'P-00001-2', 'P-00001', '123', '123', '2001-04-21', '2022-09-01', 'P-004', 'D-00016', '2022-09-21', '11:00:00', 'asdas', 'dasdasda'),
(2, 'P-00001-1', 'P-00001', '123', '123', '2004-10-10', '2022-09-01', 'MG-002', 'D-00007', '2022-09-14', '13:30:00', '', 'asdasda');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `doctores`
--

CREATE TABLE `doctores` (
  `idDoctor` varchar(255) NOT NULL,
  `nombreDoctor` varchar(255) NOT NULL,
  `apellidoDoctor` varchar(255) NOT NULL,
  `genero` varchar(255) NOT NULL,
  `especialidadM` varchar(255) NOT NULL,
  `diasLaborales` varchar(255) NOT NULL,
  `horario` varchar(255) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `telefono` varchar(255) NOT NULL,
  `DUI` varchar(255) NOT NULL,
  `vacaciones` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `doctores`
--

INSERT INTO `doctores` (`idDoctor`, `nombreDoctor`, `apellidoDoctor`, `genero`, `especialidadM`, `diasLaborales`, `horario`, `correo`, `pass`, `telefono`, `DUI`, `vacaciones`) VALUES
('D-00001', 'Alexandra', 'Sandoval', 'femenino', 'C-001', 'Lunes-Viernes', '7:00 am - 6:00 pm', 'alexandra.sandoval@gmail.com', 'sandoval1', '7865-4321', '45178978-5', 0),
('D-00002', 'Omar', 'Jimenez', 'masculino', 'C-001', 'Lunes-Viernes', '7:00 am - 6:00 pm', 'omar.jimenez@gmail.com', 'jimenez2', '6785-4321', '57914603-8', 0),
('D-00003', 'Megan', 'Alvarez', 'femenino', 'C-001', 'Lunes-Viernes', '7:00 am - 6:00 pm', 'megan.alvarez@gmail.com', 'alvarez3', '8765-4321', '91431575-4', 0),
('D-00004', 'Luis', 'Cruz', 'masculino', 'C-001', 'Lunes-Viernes', '7:00 am - 6:00 pm', 'luis.cruz@gmail.com', 'luis4', '7685-4321', '11636473-9', 0),
('D-00005', 'Jasper', 'Contreras', 'masculino', 'MG-002', 'Lunes-Viernes', '7:00 am - 6:00 pm', 'jasper.contreras@gmail.com', 'jasper5', '7658-2143', '62004816-9', 0),
('D-00006', 'Victoria', 'Maldonado', 'femenino', 'MG-002', 'Lunes-Viernes', '7:00 am - 6:00 pm', 'victoria.maldonado@gmail.com', 'victoria6', '7586-4321', '35337153-2', 0),
('D-00007', 'Eva', 'Dominguez', 'femenino', 'MG-002', 'Lunes-Viernes', '7:00 am - 6:00 pm', 'eva.dominguez@gmail.com', 'dominguez8', '7486-5321', '13340925-6', 0),
('D-00008', 'Jael', 'Perez', 'femenino', 'MG-002', 'Lunes-Viernes', '7:00 am - 6:00 pm', 'jael.perez@gmail.com', 'perez7', '7386-5421', '26803228-7', 0),
('D-00009', 'Ivan', 'Serrano', 'masculino', 'N-003', 'Lunes-Viernes', '7:00 am - 6:00 pm', 'ivan.serrano@gmail.com', 'serrano9', '7286-5431', '59529013-6', 0),
('D-00010', 'Caleb', 'Muñoz', 'masculino', 'N-003', 'Lunes-Viernes', '7:00 am - 6:00 pm', 'caleb.muñoz@gmail.com', 'Muñoz10', '7186-5432', '16631447-4', 0),
('D-00011', 'Abel', 'Aguirre', 'masculino', 'N-003', 'Lunes-Viernes', '7:00 am - 6:00 pm', 'abel.aguirre@gmail.com', 'aguirre11', '6478-5321', '32549404-0', 0),
('D-00012', 'Kevin', 'Reyes', 'masculino', 'N-003', 'Lunes-Viernes', '7:00 am - 6:00 pm', 'kevin.reyes@gmail.com', 'reyes12', '6378-5421', '98854371-4', 0),
('D-00013', 'Belén', 'Rivas', 'femenino', 'P-004', 'Lunes-Viernes', '7:00 am - 6:00 pm', 'belen.rivas@gmail.com', 'BELEN13', '6278-5431', '70417853-3', 0),
('D-00014', 'Abigail', 'Guzman', 'femenino', 'P-004', 'Lunes-Viernes', '7:00 am - 6:00 pm', 'abigail.guzman@gmail.com', 'guzman14', '6178-5432', '70417853-3', 0),
('D-00015', 'Katherine', 'Rodriguez', 'femenino', 'P-004', 'Lunes-Viernes', '7:00 am - 6:00 pm', 'katherine.rodriguez@gmail.com', 'bishop15', '7658-4321', '46475813-0', 0),
('D-00016', 'Cristiano', 'Ronaldo', 'masculino', 'P-004', 'Lunes-Viernes', '7:00 am - 6:00 pm', 'cristiano.ronaldo@gmail.com', 'elBichoSIUU7', '7786-4321', '64925206-6', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especialidades`
--

CREATE TABLE `especialidades` (
  `idEspecialidad` varchar(255) NOT NULL,
  `nombreEsp` varchar(255) NOT NULL,
  `descripcionEsp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `especialidades`
--

INSERT INTO `especialidades` (`idEspecialidad`, `nombreEsp`, `descripcionEsp`) VALUES
('C-001', 'Cardiología', 'La cardiología es la rama de la medicina que se encarga del estudio, diagnóstico y tratamiento de las enfermedades del corazón y del sistema circulatorio. Es médica, pero no quirúrgica; los especialistas en el abordaje quirúrgico del corazón son el cirujano cardiaco o el cirujano cardiovascular.'),
('MG-002', 'Medicina General', 'La medicina general constituye el primer nivel de atención médica y es imprescindible para la prevención, detección, tratamiento y seguimiento de las enfermedades crónicas estabilizadas, responsabilizándose del paciente en su conjunto, para decidir su derivación a los especialistas cuando alguna patología se descompense.'),
('N-003', 'Neurología', 'La neurología es la especialidad médica que trata los trastornos del sistema nervioso.​ Específicamente se ocupa de la prevención, diagnóstico, tratamiento y rehabilitación de todas las enfermedades que involucran al sistema nervioso central, sistema nervioso periférico y el sistema nervioso autónomo.'),
('P-004', 'Pediatría', 'La pediatría es la especialidad médica que estudia al niño y sus enfermedades. El término procede del griego paidos e iatrea,   pero su contenido es mucho mayor que la curación de las enfermedades de los niños, ya que la pediatría estudia tanto al niño sano como al enfermo.');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `familiar`
--

CREATE TABLE `familiar` (
  `idPerfil` varchar(255) NOT NULL,
  `idPaciente` varchar(255) NOT NULL,
  `nombres` varchar(255) NOT NULL,
  `apellidos` varchar(255) NOT NULL,
  `peso` varchar(255) NOT NULL,
  `altura` varchar(255) NOT NULL,
  `fechaNac` date NOT NULL,
  `genero` varchar(255) NOT NULL,
  `municipio` varchar(255) NOT NULL,
  `enfermedades` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `familiar`
--

INSERT INTO `familiar` (`idPerfil`, `idPaciente`, `nombres`, `apellidos`, `peso`, `altura`, `fechaNac`, `genero`, `municipio`, `enfermedades`) VALUES
('P-00001-1', 'P-00001', 'asdasa', 'asdas', '123', '123', '2004-10-10', 'Masculino', 'El Paisnal', ''),
('P-00001-2', 'P-00001', 'Clara', 'Diaz', '123', '123', '2001-04-21', 'Masculino', 'Guazapa', 'asdas');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pacientes`
--

CREATE TABLE `pacientes` (
  `idPaciente` varchar(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `apellido` varchar(255) NOT NULL,
  `peso` varchar(255) NOT NULL,
  `altura` varchar(255) NOT NULL,
  `fechaNacimiento` date NOT NULL,
  `fechaIngreso` date NOT NULL,
  `genero` varchar(255) NOT NULL,
  `municipio` varchar(255) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `telefono` varchar(255) NOT NULL,
  `DUI` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `pacientes`
--

INSERT INTO `pacientes` (`idPaciente`, `nombre`, `apellido`, `peso`, `altura`, `fechaNacimiento`, `fechaIngreso`, `genero`, `municipio`, `correo`, `pass`, `telefono`, `DUI`) VALUES
('P-00001', 'José Guillermo', 'Granadino Rivas', '120', '173', '2003-11-17', '2021-09-02', 'masculino', 'Soyapango', 'guillermogr211@gmail.com', '123guille', '7062-0796', '29702238-9'),
('P-00002', 'Erika Alejandra', 'Sánchez Molina', '120', '168', '2003-10-03', '2021-09-08', 'femenino', 'Soyapango', 'erika.sanchez@gmail.com', '123Erika', '1234-5678', '63622135-0'),
('P-00003', 'Ulises Adonay', 'Flores Martínez', '130', '168', '2004-03-10', '2021-09-08', 'masculino', 'San Salvador', 'ulisesflow@gmail.com', '123Uli', '7865-3412', '54434621-1');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`idAdmin`);

--
-- Indices de la tabla `anuncios`
--
ALTER TABLE `anuncios`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `citas`
--
ALTER TABLE `citas`
  ADD PRIMARY KEY (`idCita`),
  ADD KEY `idEspecialidad` (`especialidadM`),
  ADD KEY `idDoctor` (`doctor`),
  ADD KEY `idPaciente` (`idPaciente`);

--
-- Indices de la tabla `citasfamiliares`
--
ALTER TABLE `citasfamiliares`
  ADD PRIMARY KEY (`idCitaFamiliar`),
  ADD KEY `idPerfil` (`idPerfil`),
  ADD KEY `idPaciente` (`idPaciente`),
  ADD KEY `idEspecialidad` (`especialidadM`),
  ADD KEY `idDoctor` (`doctor`);

--
-- Indices de la tabla `doctores`
--
ALTER TABLE `doctores`
  ADD PRIMARY KEY (`idDoctor`),
  ADD KEY `idEspecialidad` (`especialidadM`);

--
-- Indices de la tabla `especialidades`
--
ALTER TABLE `especialidades`
  ADD PRIMARY KEY (`idEspecialidad`);

--
-- Indices de la tabla `familiar`
--
ALTER TABLE `familiar`
  ADD PRIMARY KEY (`idPerfil`),
  ADD KEY `idPaciente` (`idPaciente`);

--
-- Indices de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`idPaciente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `anuncios`
--
ALTER TABLE `anuncios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `citas`
--
ALTER TABLE `citas`
  MODIFY `idCita` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `citasfamiliares`
--
ALTER TABLE `citasfamiliares`
  MODIFY `idCitaFamiliar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `citas`
--
ALTER TABLE `citas`
  ADD CONSTRAINT `citas_ibfk_1` FOREIGN KEY (`especialidadM`) REFERENCES `especialidades` (`idEspecialidad`) ON UPDATE CASCADE,
  ADD CONSTRAINT `citas_ibfk_2` FOREIGN KEY (`idPaciente`) REFERENCES `pacientes` (`idPaciente`) ON UPDATE CASCADE,
  ADD CONSTRAINT `citas_ibfk_3` FOREIGN KEY (`doctor`) REFERENCES `doctores` (`idDoctor`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `citasfamiliares`
--
ALTER TABLE `citasfamiliares`
  ADD CONSTRAINT `citasfamiliares_ibfk_1` FOREIGN KEY (`idPaciente`) REFERENCES `pacientes` (`idPaciente`) ON UPDATE CASCADE,
  ADD CONSTRAINT `citasfamiliares_ibfk_2` FOREIGN KEY (`doctor`) REFERENCES `doctores` (`idDoctor`) ON UPDATE CASCADE,
  ADD CONSTRAINT `citasfamiliares_ibfk_3` FOREIGN KEY (`especialidadM`) REFERENCES `especialidades` (`idEspecialidad`) ON UPDATE CASCADE,
  ADD CONSTRAINT `citasfamiliares_ibfk_4` FOREIGN KEY (`idPerfil`) REFERENCES `familiar` (`idPerfil`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `doctores`
--
ALTER TABLE `doctores`
  ADD CONSTRAINT `doctores_ibfk_1` FOREIGN KEY (`especialidadM`) REFERENCES `especialidades` (`idEspecialidad`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `familiar`
--
ALTER TABLE `familiar`
  ADD CONSTRAINT `familiar_ibfk_1` FOREIGN KEY (`idPaciente`) REFERENCES `pacientes` (`idPaciente`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
