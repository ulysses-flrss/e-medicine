-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 29, 2022 at 02:13 AM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-medicine`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `idAdmin` varchar(255) NOT NULL,
  `nombreAdmin` varchar(255) NOT NULL,
  `apellidoAdmin` varchar(255) NOT NULL,
  `correoAdmin` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `telefonoAdmin` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`idAdmin`, `nombreAdmin`, `apellidoAdmin`, `correoAdmin`, `pass`, `telefonoAdmin`) VALUES
('A-001', 'Guillermo', 'Granadino', 'guillermogr211@gmail.com', 'Guille31', '7062-0796'),
('A-002', 'Ulises', 'Flores', 'ulisesf3136@gmail.com ', 'ulises2', '7865-0867'),
('A-003', 'Jefferson', 'Castro', 'castroalexis213@gmail.com', 'jefferson3', '7684-2459'),
('A-004', 'David', 'Pacas', 'davidpacas1@outlook.com', 'pacas4', '6773-4703');

-- --------------------------------------------------------

--
-- Table structure for table `anuncios`
--

DROP TABLE IF EXISTS `anuncios`;
CREATE TABLE IF NOT EXISTS `anuncios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idUsuario` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `nombre` varchar(255) COLLATE utf8_spanish2_ci NOT NULL,
  `contenidoAnuncio` char(255) COLLATE utf8_spanish2_ci NOT NULL,
  `fechaPublicacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Dumping data for table `anuncios`
--

INSERT INTO `anuncios` (`id`, `idUsuario`, `nombre`, `contenidoAnuncio`, `fechaPublicacion`) VALUES
(2, 'D-00001', 'Alexandra Sandoval', 'anuncio numero 1', '2022-08-29 00:59:40'),
(3, 'D-00001', 'Alexandra Sandoval', 'anuncio numero 2', '2022-08-29 00:59:45'),
(4, 'D-00001', 'Alexandra Sandoval', 'anuncio numero 3', '2022-08-29 00:59:53'),
(5, 'D-00001', 'Alexandra Sandoval', 'anuncio numero 4', '2022-08-29 01:00:07'),
(6, 'D-00001', 'Alexandra Sandoval', 'anuncio numero 5', '2022-08-29 01:00:23'),
(7, 'D-00001', 'Alexandra Sandoval', 'anuncio numero 6', '2022-08-29 01:01:01');

-- --------------------------------------------------------

--
-- Table structure for table `citas`
--

DROP TABLE IF EXISTS `citas`;
CREATE TABLE IF NOT EXISTS `citas` (
  `idCita` int(11) NOT NULL,
  `paciente` varchar(255) NOT NULL,
  `peso` varchar(255) NOT NULL,
  `altura` varchar(255) NOT NULL,
  `fechaNacimiento` date NOT NULL,
  `fechaCreacion` date NOT NULL,
  `especialidadM` varchar(255) NOT NULL,
  `doctor` varchar(255) NOT NULL,
  `fechaCita` date NOT NULL,
  `horaCita` time NOT NULL,
  `enfermedades` text,
  `razonCita` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `citas`
--

INSERT INTO `citas` (`idCita`, `paciente`, `peso`, `altura`, `fechaNacimiento`, `fechaCreacion`, `especialidadM`, `doctor`, `fechaCita`, `horaCita`, `enfermedades`, `razonCita`) VALUES
(3, 'P-00001', '120', '173', '2003-11-17', '2022-08-19', 'N-003', 'D-00010', '2022-08-30', '07:00:00', 'dsf', 'sdf'),
(4, 'P-00001', '120', '173', '2003-11-17', '2022-08-19', 'MG-002', 'D-00005', '2022-08-29', '13:30:00', '', 'aaa'),
(5, 'P-00001', '120', '173', '2003-11-17', '2022-08-19', 'MG-002', 'D-00005', '2022-08-29', '14:00:00', '', 'aaa');

-- --------------------------------------------------------

--
-- Table structure for table `citasfamiliares`
--

DROP TABLE IF EXISTS `citasfamiliares`;
CREATE TABLE IF NOT EXISTS `citasfamiliares` (
  `idCitaFamiliar` int(11) NOT NULL,
  `idPerfil` varchar(255) NOT NULL,
  `idPaciente` varchar(255) NOT NULL,
  `peso` varchar(255) NOT NULL,
  `altura` varchar(255) NOT NULL,
  `fechaNacimiento` date NOT NULL,
  `fechaCreacion` date NOT NULL,
  `especialidadM` varchar(255) NOT NULL,
  `doctor` varchar(255) NOT NULL,
  `fechaCita` varchar(255) NOT NULL,
  `horaCita` varchar(255) NOT NULL,
  `enfermedades` text,
  `razonCita` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `comentarios`
--

DROP TABLE IF EXISTS `comentarios`;
CREATE TABLE IF NOT EXISTS `comentarios` (
  `idComentario` int(11) NOT NULL,
  `idPaciente` varchar(255) NOT NULL,
  `mensaje` text,
  `fechaComentario` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `comentariosdoctor`
--

DROP TABLE IF EXISTS `comentariosdoctor`;
CREATE TABLE IF NOT EXISTS `comentariosdoctor` (
  `idComentarioDoctor` int(11) NOT NULL,
  `idDoctor` varchar(255) NOT NULL,
  `comentario` text,
  `fechaPublicacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comentariosdoctor`
--

INSERT INTO `comentariosdoctor` (`idComentarioDoctor`, `idDoctor`, `comentario`, `fechaPublicacion`) VALUES
(2, 'D-00013', 'Prueba doble tabla', '2021-09-22 01:59:22');

-- --------------------------------------------------------

--
-- Table structure for table `doctores`
--

DROP TABLE IF EXISTS `doctores`;
CREATE TABLE IF NOT EXISTS `doctores` (
  `idDoctor` varchar(255) NOT NULL,
  `nombreDoctor` varchar(255) NOT NULL,
  `apellidoDoctor` varchar(255) NOT NULL,
  `genero` varchar(255) NOT NULL,
  `especialidadM` varchar(255) NOT NULL,
  `diasLaborales` varchar(255) NOT NULL,
  `horario` varchar(255) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `pass` varchar(21) NOT NULL,
  `telefono` varchar(9) NOT NULL,
  `vacaciones` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctores`
--

INSERT INTO `doctores` (`idDoctor`, `nombreDoctor`, `apellidoDoctor`, `genero`, `especialidadM`, `diasLaborales`, `horario`, `correo`, `pass`, `telefono`, `vacaciones`) VALUES
('D-00001', 'Alexandra', 'Sandoval', 'femenino', 'C-001', 'Lunes-Viernes', '7:00 am - 6:00 pm', 'alexandra.sandoval@gmail.com', 'sandoval1', '7865-4321', 0),
('D-00002', 'Omar', 'Jimenez', 'masculino', 'C-001', 'Lunes-Viernes', '7:00 am - 6:00 pm', 'omar.jimenez@gmail.com', 'jimenez2', '6785-4321', 0),
('D-00003', 'Megan', 'Alvarez', 'femenino', 'C-001', 'Lunes-Viernes', '7:00 am - 6:00 pm', 'megan.alvarez@gmail.com', 'alvarez3', '8765-4321', 0),
('D-00004', 'Luis', 'Cruz', 'masculino', 'C-001', 'Lunes-Viernes', '7:00 am - 6:00 pm', 'luis.cruz@gmail.com', 'luis4', '7685-4321', 0),
('D-00005', 'Jasper', 'Contreras', 'masculino', 'MG-002', 'Lunes-Viernes', '7:00 am - 6:00 pm', 'jasper.contreras@gmail.com', 'jasper5', '7658-2143', 0),
('D-00006', 'Victoria', 'Maldonado', 'femenino', 'MG-002', 'Lunes-Viernes', '7:00 am - 6:00 pm', 'victoria.maldonado@gmail.com', 'victoria6', '7586-4321', 0),
('D-00007', 'Eva', 'Dominguez', 'femenino', 'MG-002', 'Lunes-Viernes', '7:00 am - 6:00 pm', 'eva.dominguez@gmail.com', 'dominguez8', '7486-5321', 0),
('D-00008', 'Jael', 'Perez', 'femenino', 'MG-002', 'Lunes-Viernes', '7:00 am - 6:00 pm', 'jael.perez@gmail.com', 'perez7', '7386-5421', 0),
('D-00009', 'Ivan', 'Serrano', 'masculino', 'N-003', 'Lunes-Viernes', '7:00 am - 6:00 pm', 'ivan.serrano@gmail.com', 'serrano9', '7286-5431', 0),
('D-00010', 'Caleb', 'Muñoz', 'masculino', 'N-003', 'Lunes-Viernes', '7:00 am - 6:00 pm', 'caleb.muñoz@gmail.com', 'Muñoz10', '7186-5432', 0),
('D-00011', 'Abel', 'Aguirre', 'masculino', 'N-003', 'Lunes-Viernes', '7:00 am - 6:00 pm', 'abel.aguirre@gmail.com', 'aguirre11', '6478-5321', 0),
('D-00012', 'Kevin', 'Reyes', 'masculino', 'N-003', 'Lunes-Viernes', '7:00 am - 6:00 pm', 'kevin.reyes@gmail.com', 'reyes12', '6378-5421', 0),
('D-00013', 'Belén', 'Rivas', 'femenino', 'P-004', 'Lunes-Viernes', '7:00 am - 6:00 pm', 'belen.rivas@gmail.com', 'BELEN13', '6278-5431', 0),
('D-00014', 'Abigail', 'Guzman', 'femenino', 'P-004', 'Lunes-Viernes', '7:00 am - 6:00 pm', 'abigail.guzman@gmail.com', 'guzman14', '6178-5432', 0),
('D-00015', 'Katherine', 'Rodriguez', 'femenino', 'P-004', 'Lunes-Viernes', '7:00 am - 6:00 pm', 'katherine.rodriguez@gmail.com', 'bishop15', '7658-4321', 0),
('D-00016', 'Cristiano', 'Ronaldo', 'masculino', 'P-004', 'Lunes-Viernes', '7:00 am - 6:00 pm', 'cristiano.ronaldo@gmail.com', 'elBichoSIUU7', '7786-4321', 0);

-- --------------------------------------------------------

--
-- Table structure for table `especialidades`
--

DROP TABLE IF EXISTS `especialidades`;
CREATE TABLE IF NOT EXISTS `especialidades` (
  `idEspecialidad` varchar(255) NOT NULL,
  `nombreEsp` varchar(255) NOT NULL,
  `descripcionEsp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `especialidades`
--

INSERT INTO `especialidades` (`idEspecialidad`, `nombreEsp`, `descripcionEsp`) VALUES
('C-001', 'Cardiología', 'La cardiología es la rama de la medicina que se encarga del estudio, diagnóstico y tratamiento de las enfermedades del corazón y del sistema circulatorio. Es médica, pero no quirúrgica; los especialistas en el abordaje quirúrgico del corazón son el cirujano cardiaco o el cirujano cardiovascular.'),
('MG-002', 'Medicina General', 'La medicina general constituye el primer nivel de atención médica y es imprescindible para la prevención, detección, tratamiento y seguimiento de las enfermedades crónicas estabilizadas, responsabilizándose del paciente en su conjunto, para decidir su derivación a los especialistas cuando alguna patología se descompense.'),
('N-003', 'Neurología', 'La neurología es la especialidad médica que trata los trastornos del sistema nervioso.​ Específicamente se ocupa de la prevención, diagnóstico, tratamiento y rehabilitación de todas las enfermedades que involucran al sistema nervioso central, sistema nervioso periférico y el sistema nervioso autónomo.'),
('P-004', 'Pediatría', 'La pediatría es la especialidad médica que estudia al niño y sus enfermedades. El término procede del griego paidos e iatrea,   pero su contenido es mucho mayor que la curación de las enfermedades de los niños, ya que la pediatría estudia tanto al niño sano como al enfermo.');

-- --------------------------------------------------------

--
-- Table structure for table `familiar`
--

DROP TABLE IF EXISTS `familiar`;
CREATE TABLE IF NOT EXISTS `familiar` (
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `familiar`
--

INSERT INTO `familiar` (`idPerfil`, `idPaciente`, `nombres`, `apellidos`, `peso`, `altura`, `fechaNac`, `genero`, `municipio`, `enfermedades`) VALUES
('P-00001-1', 'P-00001', 'Ulises', 'Flores', '178', '180', '2004-02-01', 'Masculino', 'Ilopango', '');

-- --------------------------------------------------------

--
-- Table structure for table `pacientes`
--

DROP TABLE IF EXISTS `pacientes`;
CREATE TABLE IF NOT EXISTS `pacientes` (
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
  `telefono` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pacientes`
--

INSERT INTO `pacientes` (`idPaciente`, `nombre`, `apellido`, `peso`, `altura`, `fechaNacimiento`, `fechaIngreso`, `genero`, `municipio`, `correo`, `pass`, `telefono`) VALUES
('P-00001', 'José Guillermo', 'Granadino Rivas', '120', '173', '2003-11-17', '2021-09-02', 'masculino', 'Soyapango', 'guillermogr211@gmail.com', '123guille', '7062-0796'),
('P-00002', 'Erika Alejandra', 'Sánchez Molina', '120', '168', '2003-10-03', '2021-09-08', 'femenino', 'Soyapango', 'erika.sanchez@gmail.com', '123Erika', '1234-5678'),
('P-00003', 'Ulises Adonay', 'Flores Martínez', '130', '168', '2004-03-10', '2021-09-08', 'masculino', 'San Salvador', 'ulisesflow@gmail.com', '123Uli', '7865-3412');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
