-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 08-09-2022 a las 07:58:40
-- Versión del servidor: 8.0.27
-- Versión de PHP: 7.4.26

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

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `idAdmin` varchar(255) NOT NULL,
  `nombreAdmin` varchar(255) NOT NULL,
  `apellidoAdmin` varchar(255) NOT NULL,
  `correoAdmin` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `telefonoAdmin` varchar(255) NOT NULL,
  PRIMARY KEY (`idAdmin`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

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

DROP TABLE IF EXISTS `anuncios`;
CREATE TABLE IF NOT EXISTS `anuncios` (
  `id` int NOT NULL AUTO_INCREMENT,
  `idUsuario` varchar(255) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `contenidoAnuncio` varchar(255) NOT NULL,
  `fechaPublicacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `idUsuario` (`idUsuario`),
  KEY `idUsuario_2` (`idUsuario`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citas`
--

DROP TABLE IF EXISTS `citas`;
CREATE TABLE IF NOT EXISTS `citas` (
  `idCita` int NOT NULL AUTO_INCREMENT,
  `idPaciente` varchar(255) NOT NULL,
  `peso` varchar(255) NOT NULL,
  `altura` varchar(255) NOT NULL,
  `fechaNacimiento` date NOT NULL,
  `fechaCreacion` date NOT NULL,
  `especialidadM` varchar(255) NOT NULL,
  `doctor` varchar(255) NOT NULL,
  `fechaCita` date NOT NULL,
  `horaCita` time NOT NULL,
  `enfermedades` text,
  `razonCita` text NOT NULL,
  PRIMARY KEY (`idCita`),
  KEY `idEspecialidad` (`especialidadM`),
  KEY `idDoctor` (`doctor`),
  KEY `idPaciente` (`idPaciente`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `citasfamiliares`
--

DROP TABLE IF EXISTS `citasfamiliares`;
CREATE TABLE IF NOT EXISTS `citasfamiliares` (
  `idCitaFamiliar` int NOT NULL AUTO_INCREMENT,
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
  `enfermedades` text,
  `razonCita` text NOT NULL,
  PRIMARY KEY (`idCitaFamiliar`),
  KEY `idPerfil` (`idPerfil`),
  KEY `idPaciente` (`idPaciente`),
  KEY `idEspecialidad` (`especialidadM`),
  KEY `idDoctor` (`doctor`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `doctores`
--

DROP TABLE IF EXISTS `doctores`;
CREATE TABLE IF NOT EXISTS `doctores` (
  `idDoctor` varchar(255) NOT NULL,
  `nombreDoctor` varchar(255) NOT NULL,
  `apellidoDoctor` varchar(255) NOT NULL,
  `fechaNacDoctor` date NOT NULL,
  `genero` varchar(255) NOT NULL,
  `especialidadM` varchar(255) NOT NULL,
  `correo` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `telefono` varchar(255) NOT NULL,
  `DUI` varchar(255) NOT NULL,
  PRIMARY KEY (`idDoctor`),
  KEY `idEspecialidad` (`especialidadM`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `doctores`
--

INSERT INTO `doctores` (`idDoctor`, `nombreDoctor`, `apellidoDoctor`, `fechaNacDoctor`, `genero`, `especialidadM`, `correo`, `pass`, `telefono`, `DUI`) VALUES
('D-00001', 'Alexandra', 'Sandoval', '1985-10-20', 'femenino', 'C-001', 'alexandra.sandoval@gmail.com', 'sandoval1', '7865-4321', '45178978-5'),
('D-00002', 'Omar', 'Jimenez', '1985-08-02', 'masculino', 'C-001', 'omar.jimenez@gmail.com', 'jimenez2', '6785-4321', '57914603-8'),
('D-00003', 'Megan', 'Alvarez', '1990-05-31', 'femenino', 'C-001', 'megan.alvarez@gmail.com', 'alvarez3', '8765-4321', '91431575-4'),
('D-00004', 'Luis', 'Cruz', '1980-01-11', 'masculino', 'C-001', 'luis.cruz@gmail.com', 'luis4', '7685-4321', '11636473-9'),
('D-00005', 'Jasper', 'Contreras', '1982-12-20', 'masculino', 'MG-002', 'jasper.contreras@gmail.com', 'jasper5', '7658-2143', '62004816-9'),
('D-00006', 'Victoria', 'Maldonado', '1978-08-18', 'femenino', 'MG-002', 'victoria.maldonado@gmail.com', 'victoria6', '7586-4321', '35337153-2'),
('D-00007', 'Eva', 'Dominguez', '1981-03-23', 'femenino', 'MG-002', 'eva.dominguez@gmail.com', 'dominguez8', '7486-5321', '13340925-6'),
('D-00008', 'Jael', 'Perez', '1988-06-03', 'femenino', 'MG-002', 'jael.perez@gmail.com', 'perez7', '7386-5421', '26803228-7'),
('D-00009', 'Ivan', 'Serrano', '1975-02-09', 'masculino', 'N-003', 'ivan.serrano@gmail.com', 'serrano9', '7286-5431', '59529013-6'),
('D-00010', 'Caleb', 'Muñoz', '1986-09-19', 'masculino', 'N-003', 'caleb.muñoz@gmail.com', 'Muñoz10', '7186-5432', '16631447-4'),
('D-00011', 'Abel', 'Aguirre', '1991-04-17', 'masculino', 'N-003', 'abel.aguirre@gmail.com', 'aguirre11', '6478-5321', '32549404-0'),
('D-00012', 'Kevin', 'Reyes', '1989-07-26', 'masculino', 'N-003', 'kevin.reyes@gmail.com', 'reyes12', '6378-5421', '98854371-4'),
('D-00013', 'Belén', 'Rivas', '1993-11-03', 'femenino', 'P-004', 'belen.rivas@gmail.com', 'BELEN13', '6278-5431', '70417853-3'),
('D-00014', 'Abigail', 'Guzman', '1979-12-30', 'femenino', 'P-004', 'abigail.guzman@gmail.com', 'guzman14', '6178-5432', '70417853-3'),
('D-00015', 'Katherine', 'Rodriguez', '1987-03-29', 'femenino', 'P-004', 'katherine.rodriguez@gmail.com', 'bishop15', '7658-4321', '46475813-0'),
('D-00016', 'Cristiano', 'Ronaldo', '1985-02-05', 'masculino', 'P-004', 'cristiano.ronaldo@gmail.com', 'elBichoSIUU7', '7786-4321', '64925206-6');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especialidades`
--

DROP TABLE IF EXISTS `especialidades`;
CREATE TABLE IF NOT EXISTS `especialidades` (
  `idEspecialidad` varchar(255) NOT NULL,
  `nombreEsp` varchar(255) NOT NULL,
  `descripcionEsp` text NOT NULL,
  PRIMARY KEY (`idEspecialidad`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

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
  `enfermedades` varchar(255) NOT NULL,
  PRIMARY KEY (`idPerfil`),
  KEY `idPaciente` (`idPaciente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `familiar`
--

INSERT INTO `familiar` (`idPerfil`, `idPaciente`, `nombres`, `apellidos`, `peso`, `altura`, `fechaNac`, `genero`, `municipio`, `enfermedades`) VALUES
('P-00001-1', 'P-00001', 'Damaris Belén', 'Granadino Rivas', '130', '170', '2003-11-17', 'femenino', 'Soyapango', '');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pacientes`
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
  `telefono` varchar(255) NOT NULL,
  `DUI` varchar(255) NOT NULL,
  PRIMARY KEY (`idPaciente`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Volcado de datos para la tabla `pacientes`
--

INSERT INTO `pacientes` (`idPaciente`, `nombre`, `apellido`, `peso`, `altura`, `fechaNacimiento`, `fechaIngreso`, `genero`, `municipio`, `correo`, `pass`, `telefono`, `DUI`) VALUES
('P-00001', 'José Guillermo', 'Granadino Rivas', '120', '173', '2003-11-17', '2021-09-02', 'masculino', 'Soyapango', 'guillermogr211@gmail.com', '123guille', '7062-0796', '29702238-9'),
('P-00002', 'Jefferson Alexis', 'Castro Castro', '210', '180', '2004-07-03', '2022-09-06', 'masculino', 'Soyapango', 'elnegrofc@uncorreo.com', 'cheffeljeff', '6677-1890', '45678321-0'),
('P-00003', 'Ulises Adonay', 'Flores Martínez', '130', '168', '2004-03-10', '2021-09-08', 'masculino', 'San Salvador', 'ulisesflow@gmail.com', '123Uli', '7865-3412', '54434621-1'),
('P-00004', 'Carlos Leandro', 'Walker Bellerín', '150', '175', '2004-03-26', '2022-09-06', 'masculino', 'San Salvador', 'walker@crack.com', '123walker', '7893-0851', '98765432-1'),
('P-00005', 'Ludwig Ernesto', 'Estrada Parada', '200', '165', '2003-09-11', '2022-09-06', 'masculino', 'San Salvador', 'messi@barca.com', 'messicrack', '1234-5678', '12345678-9'),
('P-00006', 'Samuel Ernesto', 'Bonilla Arias', '235', '178', '2004-03-01', '2022-09-08', 'masculino', 'Aguilares', 'nuevo@corre.com', 'samuel312', '6677-1890', '66789256-9');

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
