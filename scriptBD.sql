-- MySQL dump 10.13  Distrib 8.0.33, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: planillas
-- ------------------------------------------------------
-- Server version	8.3.0

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `Empleado`
--

DROP TABLE IF EXISTS `Empleado`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Empleado` (
  `idEmpleado` int NOT NULL,
  `primernombre` char(45) DEFAULT NULL,
  `tercernombre` char(45) DEFAULT NULL,
  `primerapellido` char(45) DEFAULT NULL,
  `segundoapellido` char(45) DEFAULT NULL,
  `apellidocasada` char(45) DEFAULT NULL,
  `dpi` int DEFAULT NULL,
  `fechanacimiento` date DEFAULT NULL,
  `lugarnacimiento` varchar(100) DEFAULT NULL,
  `telefono` int DEFAULT NULL,
  `celular` int DEFAULT NULL,
  `nit` varchar(45) DEFAULT NULL,
  `estadocivil` varchar(45) DEFAULT NULL,
  `sexo` varchar(45) DEFAULT NULL,
  `hijos` varchar(45) DEFAULT NULL,
  `direccion` varchar(100) DEFAULT NULL,
  `lugardereferencia` varchar(100) DEFAULT NULL,
  `municipio` varchar(45) DEFAULT NULL,
  `departamento` varchar(45) DEFAULT NULL,
  `profesion` varchar(45) DEFAULT NULL,
  `estudiosactuales` varchar(45) DEFAULT NULL,
  `trabajoanterior` varchar(45) DEFAULT NULL,
  `puestoanterior` varchar(45) DEFAULT NULL,
  `foto` varchar(400) DEFAULT NULL,
  PRIMARY KEY (`idEmpleado`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Empleado`
--

LOCK TABLES `Empleado` WRITE;
/*!40000 ALTER TABLE `Empleado` DISABLE KEYS */;
/*!40000 ALTER TABLE `Empleado` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Local`
--

DROP TABLE IF EXISTS `Local`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Local` (
  `idLocal` int NOT NULL,
  `nombrelocal` varchar(100) DEFAULT NULL,
  `direccionlocal` varchar(100) DEFAULT NULL,
  `telefono` int DEFAULT NULL,
  `telefono2` int DEFAULT NULL,
  `logo` varchar(400) DEFAULT NULL,
  PRIMARY KEY (`idLocal`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Local`
--

LOCK TABLES `Local` WRITE;
/*!40000 ALTER TABLE `Local` DISABLE KEYS */;
INSERT INTO `Local` VALUES (1,'monte','zona5',45697896,12345678,'jgjk'),(2,'cambote','zona 11',65432178,32658741,'jajaja');
/*!40000 ALTER TABLE `Local` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Puestos`
--

DROP TABLE IF EXISTS `Puestos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Puestos` (
  `idPuestos` int NOT NULL,
  `nombrepuesto` varchar(45) DEFAULT NULL,
  `descripcionpuesto` varchar(400) DEFAULT NULL,
  PRIMARY KEY (`idPuestos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Puestos`
--

LOCK TABLES `Puestos` WRITE;
/*!40000 ALTER TABLE `Puestos` DISABLE KEYS */;
/*!40000 ALTER TABLE `Puestos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Turnos`
--

DROP TABLE IF EXISTS `Turnos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Turnos` (
  `idTurnos` int NOT NULL,
  `nombreturno` varchar(45) DEFAULT NULL,
  `descripcionturno` varchar(400) DEFAULT NULL,
  PRIMARY KEY (`idTurnos`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Turnos`
--

LOCK TABLES `Turnos` WRITE;
/*!40000 ALTER TABLE `Turnos` DISABLE KEYS */;
/*!40000 ALTER TABLE `Turnos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Usuario`
--

DROP TABLE IF EXISTS `Usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Usuario` (
  `idUsuario` int NOT NULL,
  `Nombre` varchar(60) DEFAULT NULL,
  `username` varchar(45) DEFAULT NULL,
  `pass` varchar(45) DEFAULT NULL,
  `correo` varchar(45) DEFAULT NULL,
  `id_Local` int DEFAULT NULL,
  `tipodeusuario` varchar(45) DEFAULT NULL,
  `estado` enum('ACTIVO','INACTIVO') DEFAULT NULL,
  PRIMARY KEY (`idUsuario`),
  KEY `idLocal_idx` (`id_Local`),
  CONSTRAINT `idLocal` FOREIGN KEY (`id_Local`) REFERENCES `Local` (`idLocal`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Usuario`
--

LOCK TABLES `Usuario` WRITE;
/*!40000 ALTER TABLE `Usuario` DISABLE KEYS */;
INSERT INTO `Usuario` VALUES (1,'Osman','osman','1234','osman@.com',1,'admin','ACTIVO'),(2,'adler','adler','1234','adler@.com',2,'admin','ACTIVO');
/*!40000 ALTER TABLE `Usuario` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-06-18 17:14:56
