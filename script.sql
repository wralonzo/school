-- MySQL dump 10.13  Distrib 8.0.19, for Win64 (x86_64)
--
-- Host: 192.168.25.130    Database: clinica
-- ------------------------------------------------------
-- Server version	8.0.32

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `campo_valor`
--

DROP TABLE IF EXISTS `campo_valor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `campo_valor` (
  `id_campo_valor` int NOT NULL AUTO_INCREMENT,
  `id_campo` int NOT NULL,
  `valor` varchar(100) DEFAULT NULL,
  `id_paciente` int DEFAULT NULL,
  PRIMARY KEY (`id_campo_valor`),
  KEY `campo_valor_paciente_FK` (`id_paciente`),
  KEY `campo_valor_campos_FK` (`id_campo`),
  CONSTRAINT `campo_valor_campos_FK` FOREIGN KEY (`id_campo`) REFERENCES `campos` (`id_campo`),
  CONSTRAINT `campo_valor_paciente_FK` FOREIGN KEY (`id_paciente`) REFERENCES `paciente` (`id_paciente`)
);
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `campo_valor`
--

LOCK TABLES `campo_valor` WRITE;
/*!40000 ALTER TABLE `campo_valor` DISABLE KEYS */;
INSERT INTO `campo_valor` VALUES (1,1,'checked',1),(2,6,'checked',1),(3,20,'checked',1),(4,24,'Test',1),(5,27,'checked',1),(6,28,'checked',1),(7,49,'checked',1),(8,44,'Test',1),(9,51,'checked',1),(10,54,'checked',1),(11,55,'checked',1),(12,56,'checked',1),(13,57,'checked',1),(14,58,'checked',1),(15,59,'checked',1),(16,60,'checked',1),(17,65,'checked',1),(18,66,'checked',1),(19,73,'checked',1),(20,74,'checked',1);
/*!40000 ALTER TABLE `campo_valor` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `campos`
--

DROP TABLE IF EXISTS `campos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `campos` (
  `id_campo` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `tipo` enum('input','checkbox') DEFAULT NULL,
  `seccion` varchar(100) DEFAULT NULL,
  `order` int DEFAULT NULL,
  PRIMARY KEY (`id_campo`)
);
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `campos`
--

LOCK TABLES `campos` WRITE;
/*!40000 ALTER TABLE `campos` DISABLE KEYS */;
INSERT INTO `campos` VALUES (1,'peinado','checkbox','apariencia',1),(2,'despeinado','checkbox','apariencia',2),(3,'limpio','checkbox','apariencia',3),(4,'sucio','checkbox','apariencia',4),(5,'vestimenta adecuada','checkbox','apariencia',5),(6,'vestimenta adecuada','checkbox','apariencia',6),(7,'delgada','checkbox','apariencia',7),(8,'gorda','checkbox','apariencia',8),(9,'obesa','checkbox','apariencia',9),(10,'acne','checkbox','apariencia',10),(11,'manchas','checkbox','apariencia',11),(12,'discapacidad','checkbox','apariencia',12),(13,'indiferente','checkbox','conducta',1),(14,'confiable','checkbox','conducta',2),(15,'agresiva','checkbox','conducta',3),(16,'hostil','checkbox','conducta',4),(17,'evasiva','checkbox','conducta',5),(18,'defensiva','checkbox','conducta',6),(19,'sugestiva','checkbox','conducta',7),(20,'impulsiva','checkbox','conducta',8),(21,'demandante','checkbox','conducta',9),(22,'insegura','checkbox','conducta',10),(23,'normal','checkbox','conducta',11),(24,'otros','input','conducta',12),(25,'hiperactividad','checkbox','motora',1),(26,'hipo actividad','checkbox','motora',2),(27,'impulsividad','checkbox','motora',3),(28,'agresividad','checkbox','motora',4),(29,'llanto','checkbox','motora',5),(30,'intranquilidad','checkbox','motora',6),(31,'tranquilidad','checkbox','motora',7),(32,'agitacion','checkbox','motora',8),(33,'nevioso','checkbox','motora',9),(34,'normal','checkbox','motora',10),(35,'relajada','checkbox','motora',11),(36,'encogida','checkbox','motora',12),(37,'erecta','checkbox','motora',13),(38,'rigida','checkbox','motora',14),(39,'provocadora','checkbox','motora',15),(40,'seductora','checkbox','motora',16),(41,'flexible','checkbox','motora',17),(42,'seria','checkbox','motora',18),(43,'despreocupada','checkbox','motora',19),(44,'tics','input','motora',100),(45,'Mirada fija','checkbox','motora',21),(46,'mirada indirecta','checkbox','motora',22),(47,'mirada dura','checkbox','motora',23),(48,'mirada suave','checkbox','motora',24),(49,'mirada baja','checkbox','motora',25),(50,'mirada asustadiza','checkbox','motora',26),(51,'confusion','checkbox','conciencia',1),(52,'delirio','checkbox','conciencia',2),(53,'consciente','checkbox','conciencia',3),(54,'inconsciente','checkbox','conciencia',4),(55,'balanceado','checkbox','animo',1),(56,'euforico','checkbox','animo',2),(57,'deprimido','checkbox','animo',3),(58,'irritable','checkbox','animo',4),(59,'angustiado','checkbox','animo',5),(60,'tensionado','checkbox','animo',6),(61,'panico','checkbox','animo',7),(62,'afecto inapropiado','checkbox','animo',8),(63,'tranquilo','checkbox','animo',9),(64,'normal','checkbox','animo',10),(65,'culpa','checkbox','animo',11),(66,'tristeza','checkbox','animo',12),(67,'ansiedad','checkbox','animo',13),(68,'Fuga de ideas','checkbox','pensamiento',1),(69,'bloqueo','checkbox','pensamiento',2),(70,'incoherente','checkbox','pensamiento',3),(71,'normal','checkbox','contenido',1),(72,'delirios de grandeza','checkbox','contenido',1),(73,'persecucion','checkbox','contenido',1),(74,'autoacusacion','checkbox','contenido',1),(75,'minusvalia','checkbox','contenido',1),(76,'hipocondria','checkbox','contenido',1),(77,'fobias','checkbox','contenido',1),(78,'normal','checkbox','memoria',2),(79,'atencion bien dirigida','checkbox','memoria',3),(80,'atencion mal dirigida','checkbox','memoria',4);
/*!40000 ALTER TABLE `campos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `citas`
--

DROP TABLE IF EXISTS `citas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `citas` (
  `id_cita` int NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `estudiante` int NOT NULL,
  `jornada` enum('Matutina','Vespertina') NOT NULL,
  `estado_cita` enum('Reservada','Cancelada') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `estado` tinyint NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `paciente` int NOT NULL,
  PRIMARY KEY (`id_cita`),
  KEY `id_paciente_fk_cita` (`paciente`),
  KEY `citas_FK` (`estudiante`),
  CONSTRAINT `citas_FK` FOREIGN KEY (`estudiante`) REFERENCES `estudiante` (`id_estudiante`),
  CONSTRAINT `id_paciente_fk_cita` FOREIGN KEY (`paciente`) REFERENCES `paciente` (`id_paciente`)
);
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `citas`
--

LOCK TABLES `citas` WRITE;
/*!40000 ALTER TABLE `citas` DISABLE KEYS */;
/*!40000 ALTER TABLE `citas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `conyugue`
--

DROP TABLE IF EXISTS `conyugue`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `conyugue` (
  `id_conyugue` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `ocupacion` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `observacion` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `escolaridad` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `edad` int DEFAULT NULL,
  `lugar_familia` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `direccion` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `telefono` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `paciente` int DEFAULT NULL,
  `estado` enum('Activo','Inactivo') CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  PRIMARY KEY (`id_conyugue`),
  KEY `id_paciente_fk_conyugue` (`paciente`),
  CONSTRAINT `id_paciente_fk_conyugue` FOREIGN KEY (`paciente`) REFERENCES `paciente` (`id_paciente`)
) ;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `conyugue`
--

LOCK TABLES `conyugue` WRITE;
/*!40000 ALTER TABLE `conyugue` DISABLE KEYS */;
INSERT INTO `conyugue` VALUES (1,'Nombre del conyugue','Agricultor','Persona de rasgos extrangeros','Bach',78,'Puerto barrios','1ra ave, zona 1','45754551',1,NULL);
/*!40000 ALTER TABLE `conyugue` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dsm`
--

DROP TABLE IF EXISTS `dsm`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `dsm` (
  `id_dsm` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `hallazgo` varchar(100) DEFAULT NULL,
  `id_paciente` int NOT NULL,
  PRIMARY KEY (`id_dsm`),
  KEY `dsm_paciente_FK` (`id_paciente`),
  CONSTRAINT `dsm_paciente_FK` FOREIGN KEY (`id_paciente`) REFERENCES `paciente` (`id_paciente`)
);
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dsm`
--

LOCK TABLES `dsm` WRITE;
/*!40000 ALTER TABLE `dsm` DISABLE KEYS */;
INSERT INTO `dsm` VALUES (1,'Escala 1','No se encontro hallazgo',1),(2,'Escala 2','No controlado',1);
/*!40000 ALTER TABLE `dsm` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estudiante`
--

DROP TABLE IF EXISTS `estudiante`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `estudiante` (
  `id_estudiante` int NOT NULL AUTO_INCREMENT,
  `carnet` varchar(50) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `apellido` varchar(100) NOT NULL,
  `semestre` varchar(100) NOT NULL,
  `edad` int NOT NULL,
  `lugar` varchar(100) NOT NULL,
  `genero` enum('Mujer','Hombre') NOT NULL,
  `estado` enum('Activo','Inactivo') NOT NULL DEFAULT 'Activo',
  `id_usuario` int NOT NULL,
  PRIMARY KEY (`id_estudiante`),
  KEY `id_field_value_fk_usuario_estudiante` (`id_usuario`),
  CONSTRAINT `id_field_value_fk_usuario_estudiante` FOREIGN KEY (`id_usuario`) REFERENCES `usuario` (`id`)
);
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estudiante`
--

LOCK TABLES `estudiante` WRITE;
/*!40000 ALTER TABLE `estudiante` DISABLE KEYS */;
INSERT INTO `estudiante` VALUES (1,'1390-24-8941','Estudiante 1','Apellido estudiante','6to',22,'Guatemala','Hombre','Activo',24);
/*!40000 ALTER TABLE `estudiante` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ficha_clinica`
--

DROP TABLE IF EXISTS `ficha_clinica`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ficha_clinica` (
  `id_ficha_clinica` int NOT NULL AUTO_INCREMENT,
  `datos_generales` text NOT NULL,
  `situacion_familiar` text NOT NULL,
  `motivo_consulta` varchar(100) NOT NULL,
  `historia_problema` text NOT NULL,
  `historia_patologica` text NOT NULL,
  `situacion_ambiente` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `historia_personal` text NOT NULL,
  `situacion_laboral` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `examen_mental` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `apariencia_personal` text NOT NULL,
  `actitud_conducta` text NOT NULL,
  `actitud_motora` text NOT NULL,
  `conciencia` text NOT NULL,
  `animo` text NOT NULL,
  `pensamiento` text NOT NULL,
  `pruebas_auxiliares` text NOT NULL,
  `criterios_diagnostico` text NOT NULL,
  `evaluacion_dsm` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `plan_terapeutico` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `metas_alcanzadas` text NOT NULL,
  `estado` enum('Activo','Inactivo') NOT NULL DEFAULT 'Activo',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NOT NULL,
  `paciente` int NOT NULL,
  `nombre` varchar(100) NOT NULL,
  PRIMARY KEY (`id_ficha_clinica`),
  KEY `id_paciente_fk_fichaclinica` (`paciente`),
  CONSTRAINT `id_paciente_fk_fichaclinica` FOREIGN KEY (`paciente`) REFERENCES `paciente` (`id_paciente`)
);
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ficha_clinica`
--

LOCK TABLES `ficha_clinica` WRITE;
/*!40000 ALTER TABLE `ficha_clinica` DISABLE KEYS */;
INSERT INTO `ficha_clinica` VALUES (1,'Datos principales','moderada','Violencia familiar','No existen antecedentes','No se sabe ',NULL,'Historia no comentada','Sin acceso a empleo',NULL,'Buenas personas','Normal','No lo se','Media','Excelente','No critico','Excelentes','No existen criterios',NULL,NULL,'Todas ok','Activo','2024-03-28 17:57:51','0000-00-00 00:00:00',1,'');
/*!40000 ALTER TABLE `ficha_clinica` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `paciente`
--

DROP TABLE IF EXISTS `paciente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `paciente` (
  `id_paciente` int NOT NULL AUTO_INCREMENT,
  `lugar` varchar(100) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `edad` int NOT NULL,
  `sexo` enum('Hombre','Mujer') NOT NULL,
  `lugar_familia` varchar(100) NOT NULL,
  `ocupacion` varchar(100) NOT NULL,
  `observaciones` text NOT NULL,
  `escolaridad` varchar(100) NOT NULL,
  `estado_civil` varchar(50) NOT NULL,
  `estudiante` int NOT NULL,
  `estado` enum('Activo','Inactivo') NOT NULL DEFAULT 'Activo',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `nombre` varchar(200) NOT NULL,
  PRIMARY KEY (`id_paciente`),
  KEY `paciente_FK` (`estudiante`),
  CONSTRAINT `paciente_FK` FOREIGN KEY (`estudiante`) REFERENCES `estudiante` (`id_estudiante`)
);
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `paciente`
--

LOCK TABLES `paciente` WRITE;
/*!40000 ALTER TABLE `paciente` DISABLE KEYS */;
INSERT INTO `paciente` VALUES (1,'lugar paciente','2024-03-03',23,'Mujer','Guatemala','Ama de casa','Es una persona agradable','Primaria','Casada',1,'Activo','2024-03-28 17:57:51','Paciente de prueba');
/*!40000 ALTER TABLE `paciente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `plan_terapeutico`
--

DROP TABLE IF EXISTS `plan_terapeutico`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `plan_terapeutico` (
  `id_plan` int NOT NULL AUTO_INCREMENT,
  `fecha` date DEFAULT NULL,
  `actividad` varchar(100) DEFAULT NULL,
  `detalle` text,
  `id_paciente` int DEFAULT NULL,
  PRIMARY KEY (`id_plan`),
  KEY `plan_terapeutico_paciente_FK` (`id_paciente`),
  CONSTRAINT `plan_terapeutico_paciente_FK` FOREIGN KEY (`id_paciente`) REFERENCES `paciente` (`id_paciente`)
);
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `plan_terapeutico`
--

LOCK TABLES `plan_terapeutico` WRITE;
/*!40000 ALTER TABLE `plan_terapeutico` DISABLE KEYS */;
INSERT INTO `plan_terapeutico` VALUES (1,'2024-04-02','Pruebas locales','33 de avance',1),(2,'2024-03-28','segunda prueba','90 de avence',1);
/*!40000 ALTER TABLE `plan_terapeutico` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `situacion_familiar`
--

DROP TABLE IF EXISTS `situacion_familiar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `situacion_familiar` (
  `id_situacion` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `sexo` varchar(100) DEFAULT NULL,
  `estado_civil` varchar(100) DEFAULT NULL,
  `escolaridad` varchar(100) DEFAULT NULL,
  `observacion` varchar(100) DEFAULT NULL,
  `id_paciente` int DEFAULT NULL,
  `edad` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id_situacion`),
  KEY `situacion_familiar_paciente_FK` (`id_paciente`),
  CONSTRAINT `situacion_familiar_paciente_FK` FOREIGN KEY (`id_paciente`) REFERENCES `paciente` (`id_paciente`)
);
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `situacion_familiar`
--

LOCK TABLES `situacion_familiar` WRITE;
/*!40000 ALTER TABLE `situacion_familiar` DISABLE KEYS */;
INSERT INTO `situacion_familiar` VALUES (1,'Sit 1','Hombre',NULL,'No controlada','no existe observacion',1,'90'),(2,'sit 2','Mujer',NULL,'No controlada','Buena conducta',1,'84'),(3,'sit 3','Hombre',NULL,'Excelente','Mi conducta',1,'78');
/*!40000 ALTER TABLE `situacion_familiar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `test`
--

DROP TABLE IF EXISTS `test`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `test` (
  `id_test` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  PRIMARY KEY (`id_test`)
);
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `test`
--

LOCK TABLES `test` WRITE;
/*!40000 ALTER TABLE `test` DISABLE KEYS */;
INSERT INTO `test` VALUES (2,'Test de validacion mental');
/*!40000 ALTER TABLE `test` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `test_paciente`
--

DROP TABLE IF EXISTS `test_paciente`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `test_paciente` (
  `id_test_paciente` int NOT NULL AUTO_INCREMENT,
  `test` int NOT NULL,
  `paciente` int NOT NULL,
  `observaciones` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `estado` enum('Activo','Inactivo') NOT NULL,
  `image` varchar(200) NOT NULL,
  PRIMARY KEY (`id_test_paciente`),
  KEY `id_paciente_fk_test` (`paciente`),
  KEY `test_fk_test` (`test`),
  CONSTRAINT `id_paciente_fk_test` FOREIGN KEY (`paciente`) REFERENCES `paciente` (`id_paciente`),
  CONSTRAINT `test_fk_test` FOREIGN KEY (`test`) REFERENCES `test` (`id_test`)
);
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `test_paciente`
--

LOCK TABLES `test_paciente` WRITE;
/*!40000 ALTER TABLE `test_paciente` DISABLE KEYS */;
INSERT INTO `test_paciente` VALUES (1,2,1,'Test ok','2024-03-28 18:11:20','Activo','');
/*!40000 ALTER TABLE `test_paciente` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `usuario`
--

DROP TABLE IF EXISTS `usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `usuario` (
  `id` int NOT NULL AUTO_INCREMENT,
  `correo` varchar(100) NOT NULL,
  `clave` varchar(200) NOT NULL,
  `role` enum('admin','estudiante','paciente') DEFAULT 'admin',
  `nombres` varchar(100) NOT NULL,
  `apellidos` varchar(100) NOT NULL,
  `contacto` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `estado` int NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
);
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `usuario`
--

LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (4,'soporte@informatica.com.gt','$2y$12$SEgKJofkDe0V0Iaf2lcF0umrvZdV8xtUhiIJsrrk5qjy5.TrFfkEe','admin','juan','julios@ga','4123213','2024-03-09 17:21:28',1),(24,'estu@miumg.edu.gt','$2y$10$H.8KBrQoSHL96iAxpsYI0OyMCnZkcpimUvHvSryGa7UChntdDVy7e','admin','Estudiante 1','Apellido estudiante','Guatemala','2024-03-28 17:51:28',1);
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'clinica'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-03-28 12:17:02