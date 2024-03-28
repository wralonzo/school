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

CREATE TABLE `test` (
  `id_test` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) NOT NULL,
  PRIMARY KEY (`id_test`)
);

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

CREATE TABLE `ficha_clinica` (
  `id_ficha_clinica` int NOT NULL AUTO_INCREMENT,
  `datos_generales` text NOT NULL,
  `situacion_familiar` text NOT NULL,
  `motivo_consulta` varchar(100) NOT NULL,
  `historia_problema` text NOT NULL,
  `historia_patologica` text NOT NULL,
  `situacion_ambiente` text  ,
  `historia_personal` text NOT NULL,
  `situacion_laboral` text  ,
  `examen_mental` text  ,
  `apariencia_personal` text NOT NULL,
  `actitud_conducta` text NOT NULL,
  `actitud_motora` text NOT NULL,
  `conciencia` text NOT NULL,
  `animo` text NOT NULL,
  `pensamiento` text NOT NULL,
  `pruebas_auxiliares` text NOT NULL,
  `criterios_diagnostico` text NOT NULL,
  `evaluacion_dsm` text  ,
  `plan_terapeutico` text  ,
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

CREATE TABLE `dsm` (
  `id_dsm` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `hallazgo` varchar(100) DEFAULT NULL,
  `id_paciente` int NOT NULL,
  PRIMARY KEY (`id_dsm`),
  KEY `dsm_paciente_FK` (`id_paciente`),
  CONSTRAINT `dsm_paciente_FK` FOREIGN KEY (`id_paciente`) REFERENCES `paciente` (`id_paciente`)
);

CREATE TABLE `conyugue` (
  `id_conyugue` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100)   DEFAULT NULL,
  `ocupacion` varchar(100)   DEFAULT NULL,
  `observacion` text  ,
  `escolaridad` varchar(100)   DEFAULT NULL,
  `edad` int DEFAULT NULL,
  `lugar_familia` varchar(100)   DEFAULT NULL,
  `direccion` varchar(100)   DEFAULT NULL,
  `telefono` varchar(100)   DEFAULT NULL,
  `paciente` int DEFAULT NULL,
  `estado` enum('Activo','Inactivo')   DEFAULT NULL,
  PRIMARY KEY (`id_conyugue`),
  KEY `id_paciente_fk_conyugue` (`paciente`),
  CONSTRAINT `id_paciente_fk_conyugue` FOREIGN KEY (`paciente`) REFERENCES `paciente` (`id_paciente`)
) ;

CREATE TABLE `citas` (
  `id_cita` int NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `hora` time NOT NULL,
  `estudiante` int NOT NULL,
  `jornada` enum('Matutina','Vespertina') NOT NULL,
  `estado_cita` enum('Reservada','Cancelada')   NOT NULL,
  `estado` tinyint NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `paciente` int NOT NULL,
  PRIMARY KEY (`id_cita`),
  KEY `id_paciente_fk_cita` (`paciente`),
  KEY `citas_FK` (`estudiante`),
  CONSTRAINT `citas_FK` FOREIGN KEY (`estudiante`) REFERENCES `estudiante` (`id_estudiante`),
  CONSTRAINT `id_paciente_fk_cita` FOREIGN KEY (`paciente`) REFERENCES `paciente` (`id_paciente`)
);

CREATE TABLE `campos` (
  `id_campo` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(100) DEFAULT NULL,
  `tipo` enum('input','checkbox') DEFAULT NULL,
  `seccion` varchar(100) DEFAULT NULL,
  `order` int DEFAULT NULL,
  PRIMARY KEY (`id_campo`)
);

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


LOCK TABLES `usuario` WRITE;
/*!40000 ALTER TABLE `usuario` DISABLE KEYS */;
INSERT INTO `usuario` VALUES (4,'soporte@informatica.com.gt','$2y$12$SEgKJofkDe0V0Iaf2lcF0umrvZdV8xtUhiIJsrrk5qjy5.TrFfkEe','admin','juan','julios@ga','4123213','2024-03-09 17:21:28',1);
/*!40000 ALTER TABLE `usuario` ENABLE KEYS */;
UNLOCK TABLES;

LOCK TABLES `campos` WRITE;
/*!40000 ALTER TABLE `campos` DISABLE KEYS */;
INSERT INTO `campos` VALUES (1,'peinado','checkbox','apariencia',1),(2,'despeinado','checkbox','apariencia',2),(3,'limpio','checkbox','apariencia',3),(4,'sucio','checkbox','apariencia',4),(5,'vestimenta adecuada','checkbox','apariencia',5),(6,'vestimenta adecuada','checkbox','apariencia',6),(7,'delgada','checkbox','apariencia',7),(8,'gorda','checkbox','apariencia',8),(9,'obesa','checkbox','apariencia',9),(10,'acne','checkbox','apariencia',10),(11,'manchas','checkbox','apariencia',11),(12,'discapacidad','checkbox','apariencia',12),(13,'indiferente','checkbox','conducta',1),(14,'confiable','checkbox','conducta',2),(15,'agresiva','checkbox','conducta',3),(16,'hostil','checkbox','conducta',4),(17,'evasiva','checkbox','conducta',5),(18,'defensiva','checkbox','conducta',6),(19,'sugestiva','checkbox','conducta',7),(20,'impulsiva','checkbox','conducta',8),(21,'demandante','checkbox','conducta',9),(22,'insegura','checkbox','conducta',10),(23,'normal','checkbox','conducta',11),(24,'otros','input','conducta',12),(25,'hiperactividad','checkbox','motora',1),(26,'hipo actividad','checkbox','motora',2),(27,'impulsividad','checkbox','motora',3),(28,'agresividad','checkbox','motora',4),(29,'llanto','checkbox','motora',5),(30,'intranquilidad','checkbox','motora',6),(31,'tranquilidad','checkbox','motora',7),(32,'agitacion','checkbox','motora',8),(33,'nevioso','checkbox','motora',9),(34,'normal','checkbox','motora',10),(35,'relajada','checkbox','motora',11),(36,'encogida','checkbox','motora',12),(37,'erecta','checkbox','motora',13),(38,'rigida','checkbox','motora',14),(39,'provocadora','checkbox','motora',15),(40,'seductora','checkbox','motora',16),(41,'flexible','checkbox','motora',17),(42,'seria','checkbox','motora',18),(43,'despreocupada','checkbox','motora',19),(44,'tics','input','motora',100),(45,'Mirada fija','checkbox','motora',21),(46,'mirada indirecta','checkbox','motora',22),(47,'mirada dura','checkbox','motora',23),(48,'mirada suave','checkbox','motora',24),(49,'mirada baja','checkbox','motora',25),(50,'mirada asustadiza','checkbox','motora',26),(51,'confusion','checkbox','conciencia',1),(52,'delirio','checkbox','conciencia',2),(53,'consciente','checkbox','conciencia',3),(54,'inconsciente','checkbox','conciencia',4),(55,'balanceado','checkbox','animo',1),(56,'euforico','checkbox','animo',2),(57,'deprimido','checkbox','animo',3),(58,'irritable','checkbox','animo',4),(59,'angustiado','checkbox','animo',5),(60,'tensionado','checkbox','animo',6),(61,'panico','checkbox','animo',7),(62,'afecto inapropiado','checkbox','animo',8),(63,'tranquilo','checkbox','animo',9),(64,'normal','checkbox','animo',10),(65,'culpa','checkbox','animo',11),(66,'tristeza','checkbox','animo',12),(67,'ansiedad','checkbox','animo',13),(68,'Fuga de ideas','checkbox','pensamiento',1),(69,'bloqueo','checkbox','pensamiento',2),(70,'incoherente','checkbox','pensamiento',3),(71,'normal','checkbox','contenido',1),(72,'delirios de grandeza','checkbox','contenido',1),(73,'persecucion','checkbox','contenido',1),(74,'autoacusacion','checkbox','contenido',1),(75,'minusvalia','checkbox','contenido',1),(76,'hipocondria','checkbox','contenido',1),(77,'fobias','checkbox','contenido',1),(78,'normal','checkbox','memoria',2),(79,'atencion bien dirigida','checkbox','memoria',3),(80,'atencion mal dirigida','checkbox','memoria',4);
/*!40000 ALTER TABLE `campos` ENABLE KEYS */;
UNLOCK TABLES;
